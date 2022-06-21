<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Session;
use Validator;
use Config;


class NewOrdersController extends Controller
{
    public function newOrder(Request $request)
    {
        $brands=Http::post(Config::get('global.info_api').'/Order/GetBrands'
        )->json()['Result'];
        $days=Http::post(Config::get('global.info_api').'/Order/GetAppointments'
        )->json()['Result'];
        $colors=Http::post(Config::get('global.info_api').'/Order/GetColors'
        )->json()['Result'];
        $terms=Http::post(Config::get('global.info_api').'/Order/GetTerms'
        )->json()['Result'];
        $regions=Http::post(Config::get('global.info_api').'/Region/GetRegions'
        )->json()['Result'];
        $appointments=Http::post(Config::get('global.info_api').'/Order/GetAppointments'
        )->json()['Result'][0]['Appointments'];

        $title ='صفحة طلب جديد';
        $description='طلب جديد لعملية تصليح الجوالات المتنقل :  احجز الآن من مركز صيانة وإصلاح جوالات متنقلة معتمد خدمة سهلة وسريعة ضمان على الخدمة يجي الفني الى مكانك';
        return view('front-end.new-order',compact('description','title','appointments','brands','days','colors','terms','regions'
            ));
    }
//////////////////////////////////////////////   Device   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function getDeviceFromBrand(Request $request)
    {
        $BrandId=  $request->brand_id;
         $access_token = $request->session()->get('access_token');

        $device= Http::withHeaders([
            'Content-Type'=>'application/json',
                     'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Order/GetDeviceIssuesV2', [
                'Request' => [
                    "BrandId" => $BrandId,
                ]
            ])->json()['Result'];
            return $device;
    }

    public function checkOffer(Request $request)
    {
        $offer_code=  $request->offer_code;
        $access_token = $request->session()->get('access_token');

        $code= Http::withHeaders([
            'Content-Type'=>'application/json',
             'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Offer/CheckOffer', [
                'Request' => [
                    "Code" => $offer_code,
                ]
            ])->json();
            return $code;
    }
//////////////////////////////////////////////  Issues   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function getIssuesFromDevice(Request $request)
    {
        $BrandId=  $request->brand_id;
        $device_id=  $request->device_id;
        $access_token = $request->session()->get('access_token');

        $issues= Http::withHeaders([
            'Content-Type'=>'application/json',
                     'Authorization'=>'bearer '.$access_token,
        ])->post(Config::get('global.info_api').'/Order/GetDeviceIssuesV2', [
            'Request' => [
                "BrandId" => $BrandId,
            ]
        ])->json()['Result']['Devices'][$device_id]['Issues'];

        return $issues;
    }
    //
    ////////////////////////////////////////////   Price  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function getPrice(Request $request)
    {
        $BrandId=  $request->brand_id;
        $device_id=  $request->device_id;
        $issue_id = $request->issue_id;
        $access_token = $request->session()->get('access_token');

        $price=Http::withHeaders([
            'Content-Type'=>'application/json',
             'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Order/GetDeviceIssuesV2', [
            'Request' => [
                "BrandId" =>$BrandId,
            ]
        ])->json()['Result']['Devices'][$device_id]['Issues'][$issue_id]['Prices'][0]['MaxPrice'];
        return $price;
    }
//////////////////////////////////////////////  Appointments    \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function getAppointments(Request $request)
    {
        $day_id=$request->test;
        $appointments=Http::post(Config::get('global.info_api').'/Order/GetAppointments'
        )->json()['Result'][$day_id]['Appointments'];
        return $appointments;
    }
////////////////////////////////////////////   Day   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function getDays(Request $request)
    {
        $days=Http::post(Config::get('global.info_api').'/Order/GetAppointments'
        )->json()['Result'];
        return $days;
    }
    //
    ////////////////////////////////////////////   Region   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function getRegion(Request $request)
    {
        $lat=$request->lat;
        $lng=$request->lng;
        $access_token = $request->session()->get('access_token');

        $region=Http::withHeaders([
            'Content-Type'=>'application/json',
            'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Region/CheckRegion'
            , [
                'Request' => [
                    "longitude" =>$lng,
                    "latitude" => $lat,
                ]
            ])->json();
            return $region;
    }
    ////////////////////////////////////////////   send new Order   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function postOrder(Request $request){
        $access_token = $request->session()->get('access_token');
        $user_id = $request->session()->get('Id');
        $count=$request->orgCount;
        $accept=$request->accept;
        if(!empty($user_id)&&!empty($access_token)){
       if($count == $accept){
        $rules = [
            'device_id' => 'required',
            'issue_id' => 'required',
            'region_id' => 'required',
            'ColorTypeId' => 'required',
            'date_id' => 'required',
            'time_id' => 'required',
            'comment' => 'max:250',
            'OfferCode' => 'max:250',
        ];
        $messages = [
            'device_id.required' => 'حقل نوع الهاتف مطلوب',
            'issue_id.required' => 'حقل المشكلة التي تود مطلوب',
            'region_id.required' => 'تحديد العنوان مطلوب',
            'ColorTypeId.required' => 'حقل اللون مطلوب',
            'date_id.required' => 'تحديد اليوم مطلوب',
            'time_id.required' => 'تحديد الفترة مطلوب',
            'comment.max' => 'حقل الملاحظات تجاووزت الحد المسموح',
        ];
        $validator = Validator::make( $request->all(), $rules, $messages );
        if ( $validator->fails() )
        {
            return [
                'success' => 0,
                'Message' => $validator->errors()
            ];
        }
//        dd($access_token);$access_token

        $order= Http::withHeaders([
            'Content-Type'=>'application/json',
            'Authorization'=>'bearer '.$access_token,
        ])->post(Config::get('global.info_api').'/Order/CreateOrderV2', [
            'Request' => [
                "UserId" => $user_id,
                "DeviceId" => $request->device_id,
                "IssueId" => $request->issue_id,
                "Comment" => $request->comment,
                "Lat" => $request->lat,
                "Long" => $request->lng,
                "GoogleAddress" =>  $request->GoogleAddress,
                "ColorTypeId" => $request->ColorTypeId,
                "RegionId" => $request->region_id,
                "MaxPrice" => $request->price_id,
                "OfferCode" => $request->OfferCode,
                "AppointmentId" => $request->time_id,
                "AppointmentDate" => $request->date_id,
            ]
        ])->json();

        if($order['Message']) {
            return $order;
        }else{
            return [
                'success' => 1
            ];
        }
    }
    else{
        return [
            'Message' => ["يجب الموافقة على جميع الشروط "]
        ];
    }
}
        else
    {
    return ['popup' => 0];
}
    }


}
