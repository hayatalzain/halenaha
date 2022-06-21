<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Response;
use Auth;
use Session;
use Config;


class OrdersController extends Controller
{
    public function index(Request $request)
    {

        if ( !Session::has('Id')) {
        return redirect('login');
    }
        $access_token = $request->session()->get('access_token');
        $userId=  $request->session()->get('Id');

        $orders= Http::
        withHeaders([
            'Content-Type'=>'application/json',
            'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Order/GetOrdersOfUser', [
            'Request' => [
            "UserId" => $userId,
            ]
        ])->json()['Result'];

        $title ='صفحة عرض الطلبات ';
        return view('front-end.orders',compact('title','orders'));
    }

    public function successfullyOrder(Request $request)
    {    if ( !Session::has('Id')) {
        return redirect('login');
    }
        $access_token = $request->session()->get('access_token');
        $userId=  $request->session()->get('Id');
        $orders= Http::
        withHeaders([
            'Content-Type'=>'application/json',
            'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Order/GetOrdersOfUser', [
            'Request' => [
                "UserId" => $userId,
            ]
        ])->json()['Result'][0];
        $title ='صفحة تم تسجيل الطلب بنجاح';
        return view('front-end.successfully-order',compact('title','orders'));
    }


    public function orderDetails(Request $request,$id)
    {
        $access_token = $request->session()->get('access_token');

        if ( !Session::has('Id')) {
            return redirect('login');
        }
        $id =$request->id;//order
        $request->session()->put('OrderId',$id);
        $userId=  $request->session()->get('Id');

        $orders= Http::withHeaders([
            'Content-Type'=>'application/json',
            'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Order/GetOrderDetails', [
            'Request' => [
                "OrderId" => $id,
            ]
        ])->json()['Result'];
//dd($orders);

        $rejects= Http::
        withHeaders([
            'Content-Type'=>'application/json',
             'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Order/GetRejectReasons', [
            'Request' => [
                "UserTypeId" => 1,
            ]
        ])->json()['Result'];

        if ($orders['UserId']!==$userId){
            return redirect('orders')->with('error', 'حدث خطأ الرجاء الضغط على الطلب لرؤية تفاصيله' );
        }else{
            $title ='صفحة عرض الطلبات ';
            return view('front-end.detailes-new-order',compact('title','orders','rejects'));
        }
    }

    public function cancelOrder(Request $request)
    {
        $userId=  $request->session()->get('Id');
        $orderId=  $request->session()->get('OrderId');
        $access_token = $request->session()->get('access_token');

        $reasons= Http::
        withHeaders([
            'Content-Type'=>'application/json',
            'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Order/CancelOrder', [
            'Request' => [
                "ReasonId" =>  $request->ReasonId,
                "OtherReason" =>  $request->OtherReason,
                "OrderId" => $orderId,
                "UserId" => $userId,
            ]

        ])->json();
        if ($reasons['Result']== true) {
            return redirect('orders')->with('success', 'تم الغاء الطلب ');
        }else{
            return redirect('orders')->with('error', 'غير مسموح تنفيذ العملية ');
        }
    }

    public function createRating(Request $request){

       $access_token = $request->session()->get('access_token');

        $rating= Http::
        withHeaders([

            'Content-Type'=>'application/json',
            'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/Order/AddRating', [
            'Request' => [
                "Value" =>  $request->rating_id,
                "Comment" =>  $request->OtherReason,
                "UserId" => 24089,
                "TechnicalId" => 1,
                "Orderid" =>2 ,
            ]

        ])->json();
    }


}
