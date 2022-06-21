<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function index(Request $request){

        if(auth()->attempt(['email'=>$request->input('email'),
            'password'=>$request->input('password')])){
            $user= auth()->user();
            $user->api_token=Str::random(60);
            $user->save();
            return $user;
        }

        return 'error';
    }

    public function logout(){
        if(auth()->user()){
            $user=auth()->user();
            $user->api_token=null;
            $user->save();
            return response()->json(['message'=>'شكرا تمخروجكمن الاتطبيق']);
        }


        return response()->json([
            'error'=>'مشكلة ما في الخروج ',
            'code' =>401,

        ],401);
    }

}
