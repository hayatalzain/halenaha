<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Config;


class FaqController extends Controller
{

    public function index()
    {

          $faqs=Http::post(Config::get('global.info_api').'/Common/GetFAQs'
               )->throw()->json()['Result'];
        $title ='صفحة مساعدة';
        return view('front-end.faq',compact('title','faqs'));
    }
}
