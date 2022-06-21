<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use Auth;
use Session;
use Config;

class AuthController extends Controller
{
    ////////////////////////////////////////////   login    \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function login()
    {
        $title = 'صفحة تسجيل الدخول ';
        return view('auth.login', compact('title'));
    }
    public function postlogin(Request $request)
    {
        Validator::make($request->all(), [
            'Email' => 'required|string|email',
            'Password' => 'required|string|min:8|',
        ])->validate();

        $login= Http::withHeaders([
            'Content-Type'=>'application/json; charset=utf-8',
            ])
            ->post(Config::get('global.info_api').'/User/Login', [
            'Request' => [
           "Email" => $request->Email,
           "Password" => $request->Password,
                ]
            ])->json();

        if(!empty($login['Message']))
        return redirect()->back()->with('error', $login['Message'] );
    else
      $request->session()->put('access_token',$login['Result']['access_token']);
      $request->session()->put('Id',$login['Result']['Id']);
      $request->session()->put('FullName',$login['Result']['FullName']);
      $request->session()->put('Mobile',$login['Result']['Mobile']);
      $request->session()->put('Email',$login['Result']['Email']);

      return redirect('new-order');

    }
    public function postloginAjax(Request $request)
    {
        $email=$request->email;
        $pass=$request->pass;
         $access_token = $request->session()->get('access_token');

        $login= Http::withHeaders([

            'Content-Type'=>'application/json; charset=utf-8',
                     'Authorization'=>'bearer '.$access_token,

        ])->post(Config::get('global.info_api').'/User/Login', [
                'Request' => [
                    "Email" => $email,
                    "Password" => $pass,
                ]
            ])->json();

        if($login['Message'])
            return [
//        'success' => 0,
                'Message' => $login['Message'],
            ];
        else {
//            return $login;
            $request->session()->put('access_token', $login['Result']['access_token']);
            $request->session()->put('Id', $login['Result']['Id']);
            $request->session()->put('FullName', $login['Result']['FullName']);
            $request->session()->put('Mobile', $login['Result']['Mobile']);
            $request->session()->put('Email', $login['Result']['Email']);
            $access_token1 = $request->session()->get('access_token');

            return [
                'access_token' => $access_token1,
                'success' => 1
            ];
        }

    }

    ////////////////////////////////////////////   Register    \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function showPage()
    {
        if ( Session::has('Id')) {
            return redirect('update/profile');
        }
        $title = 'صفحة انشاء حساب جديد ';
        return view('auth.sign-in', compact('title'));
    }

    public function postRegister(Request $request)
    {
        $Id = $request->session()->get('Id');
        $access_token = $request->session()->get('access_token');

        Validator::make($request->all(), [
        'Email' => 'required|string|email',
        'Password' => 'required|string|min:8|',
        'password_confirmation' => 'required|same:Password',
        'Mobile'                 => 'required|numeric|digits:10',
        'FullName'                 => 'required',
    ])->validate();

        $register= Http::withHeaders([
             'Authorization'=>'bearer '.$access_token,

            'Content-Type'=>'application/json; charset=utf-8'])
            ->post(Config::get('global.info_api').'/Customer/Register', [
             'Request' => [
           "Id" => "1",
           "Email" => $request->Email,
           "Password" => $request->Password,
           "password_confirmation" => $request->password_confirmation,
           "FullName" => $request->FullName,
           "Mobile" => $request->Mobile,
           "access_token" =>"1",
           "UserTypeId" => 1,
                    ]
            ])->json();
        $request->session()->put('access_token',$register['Result']['access_token']);
        $request->session()->put('Id',$register['Result']['Id']);
        $request->session()->put('FullName',$register['Result']['FullName']);
        $request->session()->put('Mobile',$register['Result']['Mobile']);
        $request->session()->put('Email',$register['Result']['Email']);
        if(!empty($register['Message']))
        return redirect()->back()->with('error', $register['Message'] );

    else
        return redirect('new-order');
    }
    public function postRegisterAjax(Request $request)
    {
        $email=$request->email;
        $pass=$request->password;
        $password_confirmation=$request->password_confirmation;
        $full_name=$request->full_name;
        $mobile=$request->mobile;

        $rules = [
            'email' => 'required|string|email',
            'password' => 'required|min:8|',
            'password_confirmation' => 'required|same:password',
            'mobile' => 'required|numeric|digits:10',
            'full_name' => 'required',

        ];
        $messages = [
            'email.required' => ' البريد الالكتروني مطلوب',
            'password.required' => 'كلمة المرور مطلوب،يجب أن يكون طول النص كلمة المرور على الأقل 8 حروفٍ/حرفًا',
            'password_confirmation.required' => 'تأكيد كلمة المرور مطلوب.',
            'mobile.required' => 'الجوال مطلوب',
            'full_name.required' => 'الاسم كاملا مطلوب',
        ];
        $validator = Validator::make( $request->all(), $rules, $messages );
        if ( $validator->fails() )
        {
            return [
                'success' => 0,
                'Message' => $validator->errors()
            ];
        }
        $Id = $request->session()->get('Id');
        $access_token = $request->session()->get('access_token');
        $register= Http::withHeaders([
            'Authorization'=>'bearer '.$access_token,
            'Content-Type'=>'application/json; charset=utf-8'])
            ->post(Config::get('global.info_api').'/Customer/Register', [
                'Request' => [
                    "Id" => "1",
                    "Email" => $email,
                    "Password" =>$pass,
                    "password_confirmation" => $password_confirmation,
                    "FullName" =>$full_name,
                    "Mobile" => $mobile,
                    "access_token" =>"1",
                    "UserTypeId" => 1,
                ]
            ])->json();
        if($register['Message']) {
            return [
                'success' => 0,
                'error' => 'api',
                'Message' => $register['Message']
            ];
        }else{
            $request->session()->put('access_token',$register['Result']['access_token']);
            $request->session()->put('Id',$register['Result']['Id']);
            $request->session()->put('FullName',$register['Result']['FullName']);
            $request->session()->put('Mobile',$register['Result']['Mobile']);
            $request->session()->put('Email',$register['Result']['Email']);
            $access_token1 = $request->session()->get('access_token');

            return [
                'access_token'=>$access_token1,
                'success' => 1
            ];
        }

//        if(!empty($register['Message']))
//            return [
//        'success' => 0,
//                'Message' => $register['Message'],
//            ];
//        else if(empty($register['Message'])){
//

//            return [
//                'success' => 1,
//            ];
//        }
//        return $register ;
    }
////////////////////////////////////////////   Forget Password     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function forgetPassword()
    {
        $title = 'صفحة نسيت كلمة المرور ';
        return view('auth.forget-pass', compact('title'));
    }
    public function postForgetPassword(Request $request)
    {
       $access_token = $request->session()->get('access_token');

        $pass= Http::withHeaders([
            'Content-Type'=>'application/json; charset=utf-8',
            'Authorization'=>'bearer '.$access_token,

        ])
            ->post(Config::get('global.info_api').'/User/ForgetPassword', [
                'Request' => [
                    "Email" => $request->Email,
                    ]
            ])->json();
        Validator::make($request->all(), [
            'Email' => 'required|string|email',
        ])->validate();
//dd($pass);
        if(!empty($pass['Message']) && $pass['Result']==false)
            return redirect()->back()->with('error', 'البريد الالكتروني غير مستخدم' );

        else
            return redirect()->back()->with('success', 'تم ارسال كلمة المرور بنجاح الى البريد المدخل ' );

        $title = 'صفحة نسيت كلمة المرور ';
        return view('auth.sign-in', compact('title'));
    }

////////////////////////////////////////////    Update Profile     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function updateProfile(Request $request)
    {
        if ( !Session::has('access_token')) {
            return redirect('login');
        }
        $access_token = $request->session()->get('access_token');

        $id=    $request->session()->get('Id');
        $name=    $request->session()->get('FullName');
        $mobile =  $request->session()->get('Mobile');
        $email =    $request->session()->get('Email');
//        dd($name);
        $title = 'صفحة تحديث بيانات المستخدم ';
        return view('auth.update-profile', compact('title','id','name','mobile','email','access_token'));
    }
    public function updateProfileStore(Request $request)
    {
        $access_token = $request->session()->get('access_token');

        Validator::make($request->all(), [
            'Email' => 'required|string|email',
            'Mobile'                 => 'required|numeric|digits:10',
            'FullName'                 => 'required',
        ])->validate();

        $pass= Http::withHeaders([
            'Content-Type'=>'application/json',
            'Authorization'=>'bearer '.$access_token,

        ])
            ->post(Config::get('global.info_api').'/Customer/UpdateProfile', [
                'Request' => [
                    "Email" => $request->Email,
                    "UserId"=> $request->UserId,
                    "FullName"=> $request->FullName,
                    "Mobile"=> $request->Mobile,
                ]
            ])->json();

        $request->session()->put('access_token',$pass['Result']['access_token']);
        $request->session()->put('Id',$pass['Result']['Id']);
        $request->session()->put('FullName',$pass['Result']['FullName']);
        $request->session()->put('Mobile',$pass['Result']['Mobile']);
        $request->session()->put('Email',$pass['Result']['Email']);

        $title = 'صفحة تحديث بيانات المستخدم ';
        return redirect()->back()->with('title')->with('success','تم تعديل البيانات بنجاح' );
    }

////////////////////////////////////////////   Logout   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function logout(Request $request){
        $title = 'صفحة تسجيل الدخول ';
        $request->session()->forget('Id');
        $request->session()->forget('FullName');
        $request->session()->forget('access_token');
        $request->session()->forget('Mobile');
        $request->session()->forget('Email');

        return view('auth.login',compact('title'));
    }

}
