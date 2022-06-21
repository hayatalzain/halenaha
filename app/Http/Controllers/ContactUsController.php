<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use GuzzleHttp\Psr7;
use App\Models\Setting;
use Config;


class ContactUsController extends Controller
{
    public function index()
    {
        $info=Http::post(Config::get('global.info_api').'/Common/GetSettings'
          )->throw()->json()['Result'];
        $title ='صفحة اتصل بنا';
        return view('front-end.contact-us',compact('title','info'));
    }
}
