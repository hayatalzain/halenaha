<!DOCTYPE html>
<html lang="ar" class="no-js">

<head>



    <title><?php echo $__env->yieldContent('title'); ?>  خدمة حليناها -</title>

    <?php echo $__env->yieldContent("script_ceo_main"); ?>
    <?php echo $__env->yieldContent("script_ceo_new_order"); ?>
    <?php echo $__env->yieldContent("script_ceo_successfully"); ?>
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="author" content="hayat-alzain">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#ffd6d6">
    <!--website-favicon-->
    <link href="<?php echo e(asset('images/favicon-green.png')); ?>" rel="icon">
    <!--plugin-css-->
    <link href="<?php echo e(asset('css/bootstrap-rtl.min.css')); ?>" rel="stylesheet">


    <link href="<?php echo e(asset('css/custom-rtl.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/plugin.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('ajax/libs/font-awesome/5.11.2/css/all.min.css')); ?>" rel="stylesheet">
    <!-- template-style-->

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MKNLJQK');</script>
    <!-- End Google Tag Manager -->
    <style>
        .fixed-top.scrolled{
            background-color: #fff !important;
            transition: background-color 200ms linear;
        }
        .navbar-light .navbar-nav .nav-link.scrolled{
            color: #ffffff;
        }
        .dropdown-item, .navbar-light .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: 500;
            font-family: Myriad Arabic Regular;
        }
        .btn-main-header {
            font-size: 20px;
            font-weight: 400;
            font-family: Myriad Arabic Regular;
            padding: 0 50px;
            line-height: 25px;
            outline: 0;
            background-color: #ffffff;
            border: none;
            color: #5ec0af;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            display: inline-block;
            position: relative;
            -webkit-box-shadow: 0 10px 15px 0 rgba(64, 64, 111, 0.15);
            box-shadow: 0 10px 15px 0 rgba(64, 64, 111, .15);
            margin-left: 30%;
            margin-right: 30%;
        }
        .navbar .mobilemenu {
            color: #40386F;
            top: 4px;
            position: relative;
        }
        .btn-main-header.scrolled{
            background-color: #5ec0af;
            color: #fff;
        }
        .fixed-top.scrolled{
            background-color: #fff !important;
            transition: background-color 200ms linear;
        }
        .navbar-light .navbar-nav .nav-link.scrolled{
            color: #40386f;
        }
        .btn-main-header.scrolled{
            background-color: #5ec0af;
            color: #fff;
        }
        a.nav-link.custom-btn.lnk.btn-main-header.px-4 {
            color: #5ec0af;
        }
        a.nav-link.custom-btn.lnk.btn-main-header.px-4.scrolled{
            color: #fff;
        }
        @media  only screen and (max-width: 991px){
            .cta-card, .footer-brands, .header-heading .title-, .mobile-app-, .review-ref, .service-desc-, .servie-key-points h4, .video-intro-pp {
                text-align: center;
                margin-right: 0px;
            }
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
        <div class="logo-pre"><img src="<?php echo e(asset('images/favicon-green.png')); ?>" alt="Logo" class="img-responsive" style="width: 87%;
    padding-right: 10%;"/></div>
        <div class="pre-text-"><span>حليناها</span>لصيانة الجوالات بالمنزل </div>
    </div>
</div>
<!--End Preloader -->
<!--Start Header -->
<header class="top-header header-pr">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-right navbar-mobile fixed-top navfix">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>"> <img class="id_logo" src="<?php echo e(asset('images/logo-white.svg')); ?>" alt="Logo" width="100" /></a>
            <button class="navbar-toggler mobile-none" type="button" data-toggle="collapse" data-target="#navbar4" aria-controls="navbar4" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse animate slideIn mobile-none" id="navbar4">
                <ul class="mr-auto"></ul>
                <ul class="navbar-nav d-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('index')); ?>"> الرئيسية </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('new.order')); ?>">طلب جديد </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('orders')); ?>">طلبـاتي  </a> </li>
                    <?php
                    if ( Session::has('access_token')) {
                        echo '<li class="nav-item"> <a class="nav-link"  href="" data-toggle="modal" data-target="#myModalLogout" >تسجيل خروج </a></li>';
                    }else{
                        echo '<li class="nav-item"> <a  class="nav-link" href="'.route('login').'" >تسجيل دخول  </a> </li>';
                    }
                    ?>
                    <li class="nav-item"> <a class="nav-link custom-btn lnk btn-main-header px-4" href="<?php echo e(route('login')); ?>">حسابي <span class="circle"></span></a> </li>
                </ul>
            </div>
            <div class="mobile-menu">
                <ul class="mob-nav">
                    <?php
                    if ( Session::has('access_token')) {
                        echo '<li> <a class="custom-btn lnk btn-main mx-4 btn-main-header"  href="'.route('update.profile.store').'" >حسابي  </a></li>';
                    }else{
                        echo '<li > <a  class="custom-btn lnk btn-main mx-4 btn-main-header" href="'.route('login').'" >حسابي  </a> </li>';
                    }
                    ?>
                    <li class="ml8"><a class="toggle mobilemenu" href="#"><span></span></a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Mobile Menu-->
    <!--Mobile Menu-->
    <nav id="main-nav">
        <ul class="first-nav">
            <li><a href="<?php echo e(route('index')); ?>">الرئيسية</a></li>
            <li><a href="<?php echo e(route('new.order')); ?>">طلب جديد </a></li>
            <li><a href="<?php echo e(route('orders')); ?>">طلبـاتي</a></li>
            <li><a href="<?php echo e(route('update.profile.store')); ?>">حسابي</a>
            </li>
            <?php
            if ( Session::has('Id')) {
                echo '<li><a href="#myModalLogout" data-toggle="modal">تسجيل خروج</a></li>';
            }else{
                echo '<li> <a  href="'.route('login').'" >تسجيل دخول  </a> </li>';
            }
            ?>
        </ul>
    </nav>
</header>
<!--End Header -->
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-lg border-0">
            <!-- Modal Header -->
            <div class="modal-header p-0 border-0 mb-3">
                <button type="button" class="close" data-dismiss="modal" style="
    position: relative;
    display: flex;
    flex-direction: column;
    background-color: #404040;
    color: wheat;
    border-radius: 50%;
    padding: 1px;
    width: 6%;
    height: 0%;
    align-items: center;
    top: 1.3rem;
    left: 0.4rem;
    margin: -2rem 0rem 0rem -0.2rem;">&times;</button>
                <div class="header-outline mx-auto d-block">
                    <svg id="profile" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 72.896 75.537">
                        <g id="Group_2079" data-name="Group 2079" transform="translate(12.589)">
                            <path id="Path_1470" data-name="Path 1470" d="M19.737,31.474A15.737,15.737,0,1,1,35.474,15.737,15.755,15.755,0,0,1,19.737,31.474Zm0-28.326A12.589,12.589,0,1,0,32.326,15.737,12.6,12.6,0,0,0,19.737,3.147Z" transform="translate(-4)" fill="#fff"/>
                        </g>
                        <g id="Group_2080" data-name="Group 2080" transform="translate(0 37.768)">
                            <path id="Path_1471" data-name="Path 1471" d="M26.753,40.326H1.574A1.574,1.574,0,0,1,0,38.753V26.163A14.18,14.18,0,0,1,14.163,12H33.047a1.574,1.574,0,0,1,0,3.147H14.163A11.028,11.028,0,0,0,3.147,26.163V37.179H26.753a1.574,1.574,0,0,1,0,3.147Z" transform="translate(0 -12)" fill="#fff"/>
                        </g>
                        <g id="Group_2083" data-name="Group 2083" transform="translate(34.112 34.624)">
                            <g id="Group_2081" data-name="Group 2081" transform="translate(11.525 12.586)">
                                <path id="Path_1472" data-name="Path 1472" d="M22.368,30.737a7.868,7.868,0,1,1,7.868-7.868A7.879,7.879,0,0,1,22.368,30.737Zm0-12.589a4.721,4.721,0,1,0,4.721,4.721A4.727,4.727,0,0,0,22.368,18.147Z" transform="translate(-14.5 -15)" fill="#fff"/>
                            </g>
                            <g id="Group_2082" data-name="Group 2082">
                                <path id="Path_1473" data-name="Path 1473" d="M32.74,51.914H27.72a3.136,3.136,0,0,1-3.132-2.836l-.4-4a14.78,14.78,0,0,1-2.722-1.583L17.79,45.153a3.131,3.131,0,0,1-4.019-1.3L11.263,39.51a3.14,3.14,0,0,1,.888-4.129l3.239-2.329a11.95,11.95,0,0,1,0-3.191L12.15,27.531a3.14,3.14,0,0,1-.888-4.129l2.508-4.347a3.136,3.136,0,0,1,4.019-1.3l3.676,1.659a14.78,14.78,0,0,1,2.722-1.583l.4-4A3.136,3.136,0,0,1,27.72,11h5.02a3.136,3.136,0,0,1,3.132,2.836l.4,4a14.752,14.752,0,0,1,2.722,1.583l3.676-1.659a3.141,3.141,0,0,1,4.019,1.3L49.2,23.4a3.14,3.14,0,0,1-.888,4.129l-3.239,2.329a11.95,11.95,0,0,1,0,3.191l3.239,2.329a3.14,3.14,0,0,1,.888,4.129l-2.505,4.343a3.135,3.135,0,0,1-4.019,1.3L39,43.494a14.78,14.78,0,0,1-2.722,1.583l-.4,4a3.136,3.136,0,0,1-3.132,2.833ZM21.687,40.1a1.574,1.574,0,0,1,1.01.368A11.721,11.721,0,0,0,26.2,42.5a1.575,1.575,0,0,1,1.026,1.322l.5,4.945h5.02l.494-4.945A1.575,1.575,0,0,1,34.264,42.5a11.788,11.788,0,0,0,3.5-2.036,1.572,1.572,0,0,1,1.656-.227l4.545,2.052,2.508-4.347-4.022-2.889A1.584,1.584,0,0,1,41.82,33.5a11.759,11.759,0,0,0,.211-2.039,11.759,11.759,0,0,0-.211-2.04,1.58,1.58,0,0,1,.633-1.552l4.022-2.889-2.508-4.347-4.545,2.049a1.577,1.577,0,0,1-1.659-.227,11.606,11.606,0,0,0-3.5-2.036A1.575,1.575,0,0,1,33.234,19.1l-.494-4.954H27.72l-.494,4.945A1.575,1.575,0,0,1,26.2,20.412a11.788,11.788,0,0,0-3.5,2.036,1.564,1.564,0,0,1-1.656.227L16.5,20.623l-2.508,4.347,4.022,2.889a1.584,1.584,0,0,1,.633,1.552,11.759,11.759,0,0,0-.211,2.039,11.758,11.758,0,0,0,.211,2.039,1.58,1.58,0,0,1-.633,1.552L13.988,37.93,16.5,42.276l4.545-2.049a1.644,1.644,0,0,1,.645-.132Z" transform="translate(-10.838 -11.001)" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body border-0 pt-1">
                <div id="login">
                    <div class="container-fluid">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-12">
                                <form id="logout-form" class="form" action="<?php echo e(route('logout')); ?>" method="get">
                                    <h4 class="text-center mb-3 text-main-login">تسجيل خروج
                                    </h4>
                                    <p class="text-center"> هل تريد تسجيل الخروج ؟</p>
                                    <div class="row send-data ml-3">
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-info-accept-order btn-md" data-toggle="modal" data-target="#myModal" value="موافق "/>
                                        </div>
                                        <div class="form-group">
                                            <input type="button" class="btn btn-cancel-gray btn-md close" data-dismiss="modal"  value="الغاء"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer border-0">
            </div>

        </div>
    </div>
</div>
<!--End modal-->
<!-- The Modal -->
<div class="modal" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content  modal-lg border-0">
            <!-- Modal Header -->
            <div class="modal-header p-0 border-0 mb-3">
                <button type="button" class="close" data-dismiss="modal" style="
    position: relative;
    display: flex;
    flex-direction: column;
    background-color: #404040;
    color: wheat;
    border-radius: 50%;
    padding: 1px;
    width: 6%;
    height: 0%;
    align-items: center;
    top: 1.3rem;
    left: 0.4rem;
    margin: -2rem 0rem 0rem -0.2rem;">&times;</button>
                <div class="header-outline mx-auto d-block">
                    <svg id="profile" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 72.896 75.537">
                        <g id="Group_2079" data-name="Group 2079" transform="translate(12.589)">
                            <path id="Path_1470" data-name="Path 1470" d="M19.737,31.474A15.737,15.737,0,1,1,35.474,15.737,15.755,15.755,0,0,1,19.737,31.474Zm0-28.326A12.589,12.589,0,1,0,32.326,15.737,12.6,12.6,0,0,0,19.737,3.147Z" transform="translate(-4)" fill="#fff"/>
                        </g>
                        <g id="Group_2080" data-name="Group 2080" transform="translate(0 37.768)">
                            <path id="Path_1471" data-name="Path 1471" d="M26.753,40.326H1.574A1.574,1.574,0,0,1,0,38.753V26.163A14.18,14.18,0,0,1,14.163,12H33.047a1.574,1.574,0,0,1,0,3.147H14.163A11.028,11.028,0,0,0,3.147,26.163V37.179H26.753a1.574,1.574,0,0,1,0,3.147Z" transform="translate(0 -12)" fill="#fff"/>
                        </g>
                        <g id="Group_2083" data-name="Group 2083" transform="translate(34.112 34.624)">
                            <g id="Group_2081" data-name="Group 2081" transform="translate(11.525 12.586)">
                                <path id="Path_1472" data-name="Path 1472" d="M22.368,30.737a7.868,7.868,0,1,1,7.868-7.868A7.879,7.879,0,0,1,22.368,30.737Zm0-12.589a4.721,4.721,0,1,0,4.721,4.721A4.727,4.727,0,0,0,22.368,18.147Z" transform="translate(-14.5 -15)" fill="#fff"/>
                            </g>
                            <g id="Group_2082" data-name="Group 2082">
                                <path id="Path_1473" data-name="Path 1473" d="M32.74,51.914H27.72a3.136,3.136,0,0,1-3.132-2.836l-.4-4a14.78,14.78,0,0,1-2.722-1.583L17.79,45.153a3.131,3.131,0,0,1-4.019-1.3L11.263,39.51a3.14,3.14,0,0,1,.888-4.129l3.239-2.329a11.95,11.95,0,0,1,0-3.191L12.15,27.531a3.14,3.14,0,0,1-.888-4.129l2.508-4.347a3.136,3.136,0,0,1,4.019-1.3l3.676,1.659a14.78,14.78,0,0,1,2.722-1.583l.4-4A3.136,3.136,0,0,1,27.72,11h5.02a3.136,3.136,0,0,1,3.132,2.836l.4,4a14.752,14.752,0,0,1,2.722,1.583l3.676-1.659a3.141,3.141,0,0,1,4.019,1.3L49.2,23.4a3.14,3.14,0,0,1-.888,4.129l-3.239,2.329a11.95,11.95,0,0,1,0,3.191l3.239,2.329a3.14,3.14,0,0,1,.888,4.129l-2.505,4.343a3.135,3.135,0,0,1-4.019,1.3L39,43.494a14.78,14.78,0,0,1-2.722,1.583l-.4,4a3.136,3.136,0,0,1-3.132,2.833ZM21.687,40.1a1.574,1.574,0,0,1,1.01.368A11.721,11.721,0,0,0,26.2,42.5a1.575,1.575,0,0,1,1.026,1.322l.5,4.945h5.02l.494-4.945A1.575,1.575,0,0,1,34.264,42.5a11.788,11.788,0,0,0,3.5-2.036,1.572,1.572,0,0,1,1.656-.227l4.545,2.052,2.508-4.347-4.022-2.889A1.584,1.584,0,0,1,41.82,33.5a11.759,11.759,0,0,0,.211-2.039,11.759,11.759,0,0,0-.211-2.04,1.58,1.58,0,0,1,.633-1.552l4.022-2.889-2.508-4.347-4.545,2.049a1.577,1.577,0,0,1-1.659-.227,11.606,11.606,0,0,0-3.5-2.036A1.575,1.575,0,0,1,33.234,19.1l-.494-4.954H27.72l-.494,4.945A1.575,1.575,0,0,1,26.2,20.412a11.788,11.788,0,0,0-3.5,2.036,1.564,1.564,0,0,1-1.656.227L16.5,20.623l-2.508,4.347,4.022,2.889a1.584,1.584,0,0,1,.633,1.552,11.759,11.759,0,0,0-.211,2.039,11.758,11.758,0,0,0,.211,2.039,1.58,1.58,0,0,1-.633,1.552L13.988,37.93,16.5,42.276l4.545-2.049a1.644,1.644,0,0,1,.645-.132Z" transform="translate(-10.838 -11.001)" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body border-0 pt-1">
                <div id="login">
                    <div class="container-fluid">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-12">
                                <form id="logout-form" class="form" action="<?php echo e(route('logout')); ?>" method="get">
                                    <h4 class="text-center mb-3 text-main-login">تسجيل خروج
                                    </h4>
                                    <p class="text-center"> هل تريد تسجيل الخروج ؟</p>
                                    <div class="row send-data ml-3">
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-info-accept-order btn-md" data-toggle="modal" data-target="#myModal" value="موافق "/>
                                        </div>
                                        <div class="form-group">
                                            <input type="button" class="btn btn-cancel-gray btn-md close" data-dismiss="modal"  value="الغاء"/>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer border-0">
            </div>

        </div>
    </div>
</div>
<!--End modal-->
<?php /**PATH C:\wamp64\www\newh\resources\views/master/header-main.blade.php ENDPATH**/ ?>