<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
class HomePageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $title ='إصلاح جوالات متنقلة';
        $description='حليناها صح تطبيق اصلاح جوالات متنقل لصيانة كسر الشاشة والبطاريات وزر الهوم والكاميرات الخلفية للجوال ونخدمك وانت فقط في مكانك';
        return view('front-end.index',compact('title','description'));
    }



        public function shareSocial()
    {
        $socialShare = \Share::page(
            'https://halenaha-sa.com/',
            'حليناها'
        )
            ->facebook()
            ->twitter()
            ->reddit()
            ->linkedin()
            ->whatsapp()
            ->telegram();

        return view('front-end.index', compact('socialShare'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
