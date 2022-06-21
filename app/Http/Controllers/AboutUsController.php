<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class AboutUsController extends Controller
{
    public function index()
    {

        $title ='صفحة عن حليناها';
        return view('front-end.about-us',compact('title'));
    }
}
