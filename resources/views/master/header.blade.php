<!DOCTYPE html>
<html lang="ar" class="no-js">

<head>

{{--    <title>حليناها - صفحة اتصل بنا </title>--}}
    <title>@yield('title') خدمة حليناها -</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="تصليح الجوالات المتنقل">
    <meta name="author" content="hayat-alzain">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8"/>
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    <meta name="theme-color" content="#ffd6d6">
    <!--website-favicon-->
    <link href="{{asset('images/favicon-green.png')}}" rel="icon">
    <!--plugin-css-->
    <link href="{{asset('css/bootstrap-rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-rtl-grid.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-rtl-reboot.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom-rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugin.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap4-toggle.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('ajax/libs/font-awesome/5.11.2/css/all.min.css')}}" rel="stylesheet">
{{--    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">--}}

    <!-- template-style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
@yield("script_ceo")
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MKNLJQK');</script>
    <!-- End Google Tag Manager -->

     <style>
        .dropdown-item, .navbar-light .navbar-nav .nav-link {
            color: #5ec0af;
            font-weight: 500;
            font-family: Myriad Arabic Regular;
        }
        .btn-main-header {
            font-size: 20px;
            font-weight: 400;
            font-family: Myriad Arabic Regular;
            padding: 0 68px;
            line-height: 33px;
            outline: 0;
            background-color: #5ec0af;
            border: none;
            color: white !important;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            display: inline-block;
            position: relative;
            -webkit-box-shadow: 0 10px 15px 0 rgba(64, 64, 111, 0.15);
            box-shadow: 0 10px 15px 0 rgba(64, 64, 111, .15);
            margin-left: 32%;
            margin-right: 32%;
        }
        .navbar-brand{
            font-family: Myriad-Arabic-Regular;
        }
    </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKNLJQK"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--Start Preloader -->
<div class="onloadpage" id="page_loader">
    <div class="pre-content">
        <div class="logo-pre"><img src="{{asset('images/favicon-green.png')}}" alt="Logo" class="img-responsive" style="width: 87%;
    padding-right: 10%;"/></div>
        <div class="pre-text-"><span>حليناها</span>لصيانة الجوالات بالمنزل </div>
    </div>
</div>
<!--End Preloader -->
<!--Start Header -->
<header class="top-header header-pr">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-right navbar-mobile fixed-top navfix">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"> <img src="{{asset('images/logo-green.svg')}}" alt="Logo" width="100" /></a>
            <button class="navbar-toggler mobile-none" type="button" data-toggle="collapse" data-target="#navbar4" aria-controls="navbar4" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse animate slideIn mobile-none" id="navbar4">
                <ul class="mr-auto"></ul>
                <ul class="navbar-nav d-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('index')}}"> الرئيسية </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('new.order')}}">طلب جديد </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('orders')}}">طلبـاتي  </a> </li>
<?php
                    if ( Session::has('Id')) {
                        echo '<li class="nav-item"> <a class="nav-link" href="" data-toggle="modal" data-target="#myModalLogout">تسجيل خروج  </a> </li>';
                    }else{
                        echo '<li class="nav-item" id="nav_login"> <a class="nav-link"  href="'.route('login').'" > تسجيل دخول</a></li>';
                    }
                    ?>
                    <li class="nav-item"> <a class="nav-link custom-btn lnk btn-main-header px-4" href="{{route('update.profile')}}">حسابي
                            <span class="circle"></span></a> </li>
                </ul>
            </div>
            <div class="mobile-menu">
                <ul class="mob-nav">
                    <li> <a class="custom-btn lnk btn-main mx-4 btn-main-header" href="{{route('update.profile')}}"> حسابي
                            </a></li>
                    <li class="ml8"><a class="toggle mobilemenu"><span></span></a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Mobile Menu-->
    <!--Mobile Menu-->
    <nav id="main-nav">
        <ul class="first-nav">
            <li><a href="{{route('index')}}">الرئيسية</a></li>
            <li><a href="{{route('new.order')}}">طلب جديد </a></li>
            <li><a href="{{route('orders')}}"> طلبـاتي</a></li>
            <li><a href="{{route('update.profile')}}"> حسابي </a></li>
        <?php
            if ( Session::has('Id')) {
                echo '<li><a href="#myModalLogout" data-toggle="modal" > تسجيل خروج </a></li>';
            }else{
                echo '<li> <a  href="'.route('login').'" >تسجيل دخول  </a> </li>';
            }
            ?>
        </ul>
    </nav>
</header>
<!--End Header -->

