<?php $__env->startSection('script_ceo_main'); ?>
    <!-- Snap Pixel Code -->
    <script type='text/javascript'>
        (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
        {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
            a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
            r.src=n;var u=t.getElementsByTagName(s)[0];
            u.parentNode.insertBefore(r,u);})(window,document,
            'https://sc-static.net/scevent.min.js');

        snaptr('init', 'c8d85b14-4e8b-4d09-9bae-4749023a62ce', {
            'user_email': '_ revnilife@gmail.com'
        });

        snaptr('track', 'PAGE_VIEW');

    </script>
    <!-- End Snap Pixel Code -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_css'); ?>
    <style type="text/css">

    /*    li{*/
    /*list-style: none;*/
    /*background: #e2e2e2;*/
    /*margin-left: 5px;*/
    /*text-align: center;*/
    /*border-radius:5px;*/
    /*}*/
    /*li span{*/
    /*font-size: 20px;*/
    /*}*/
    /*ul li{*/
    /*display: inline-block;*/
    /*padding: 10px 10px 5px;*/
    /*}*/

    .social {
        position: fixed;
        top: 160px;
        z-index: 9999;
        left: 136px;
    }
    .social ul {
        padding: 0px;
        -webkit-transform: translate(-200px, 0);
        -moz-transform: translate(-200px, 0);
        -ms-transform: translate(-200px, 0);
        -o-transform: translate(-200px, 0);
        transform: translate(-200px, 0);
    }
    .social ul li {
        display: block;
        margin: 5px;
        background: rgb(63 56 110);
        width: 95px;
        text-align: right;
        padding: 10px;
        -webkit-border-radius: 0 30px 30px 0;
        -moz-border-radius: 0 30px 30px 0;
        border-radius: 0 30px 30px 0;
        -webkit-transition: all 1s;
        -moz-transition: all 1s;
        -ms-transition: all 1s;
        -o-transition: all 1s;
        transition: all 1s;
    }
    .social ul li:hover {
        -webkit-transform: translate(50px, 0);
        -moz-transform: translate(50px, 0);
        -ms-transform: translate(50px, 0);
        -o-transform: translate(50px, 0);
        transform: translate(50px, 0);
        background: rgba(255, 255, 255, 0.4);
    }
    .social ul li:hover a {
        color: #797979;
    }
    .social ul li:hover i {
        color: #fff;
        background: rgba(0, 0, 0, 0.36);
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: all 1s;
        -moz-transition: all 1s;
        -ms-transition: all 1s;
        -o-transition: all 1s;
        transition: all 1s;
    }
    .social ul li i {
        margin-left: 10px;
        color: #000;
        background: #fff;
        padding: 10px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        font-size: 20px;
        background: #ffffff;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    a.social-button {
        color: #ffffff;
    }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <nav class="social">


    </nav>
    <!--Start Hero-->
    <section class="hero-section fl-hero" id="order_new">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="header-heading">
                            <h1 class="wow fadeInUp text-center" data-wow-delay=".2s">خدمة <span>حليناهـا</span> </h1>

                            <p class="wow fadeInUp text-center" data-wow-delay=".4s"> لصيانة جوالك وأنت في مكانك.</p>
                            <span class="title- wow fadeInUp text-center" data-wow-delay=".1s">الرياض | مكة | جدة | الدمام </span>

                            <a href="<?php echo e(route('new.order')); ?>" class="btn-main lnk wow fadeInUp text-center mt-4" data-wow-delay=".6s"> اطلب الآن <span class="circle"></span></a>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".4s">
                        <div class="single-image"><img  src="<?php echo e(asset('images/Group1809.svg')); ?>" alt="service" class="img-fluid showin-mobile"/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

    <!--Start maintenance-->
    <section class="about-freelance pad-tb" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <h1 class="mb-2 font-weight-bold text-green text-center">خدمات الصيانة المقدمة</h1>
                        <hr class="text-center line-main">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6 mt30 wow fadeInUp w-50 " data-wow-delay=".2s">
                        <div class="s-block" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <div class="s-card-icon">
                                <img src="<?php echo e(asset('images/serv_broken_icon.svg')); ?>"
                                     alt="صيانة  كسر شاشة " class="img-fluid-broke"/>
                            </div>
                        </div>
                        <h3 class="text-center pt-4">صيــــــانة </h3>
                        <h3 class="text-center pt-1"> كسر شاشة </h3>

                    </div>
                    <div class="col-md-3 col-sm-6 mt30 wow fadeInUp w-50" data-wow-delay=".2s">
                        <div class="s-block" data-tilt-speed="1000">
                            <div class="s-card-icon">
                                <img src="<?php echo e(asset('images/serv_battery_icon.svg')); ?>" alt="بطارية" class="img-fluid2" />

                            </div>
                        </div>
                        <h3 class="text-center pt-4">صيــــــانة  </h3>
                        <h3 class="text-center pt-1">بطارية</h3>

                    </div>
                    <div class="col-md-3 col-sm-6 mt30 wow fadeInUp w-50" data-wow-delay=".2s">
                        <div class="s-block" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <div class="s-card-icon">
                                <img src="<?php echo e(asset('images/serv_phone_icon.svg')); ?>" alt="زر الهوم" class="img-fluid2" />

                            </div>
                        </div>
                        <h3 class="text-center pt-4">صيــــــانة</h3>
                        <h3 class="text-center pt-1">زر الهوم  </h3>

                    </div>
                    <div class="col-md-3 col-sm-6 mt30 wow fadeInUp w-50" data-wow-delay=".2s">
                        <div class="s-block" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <div class="s-card-icon">
                                <img src="<?php echo e(asset('images/serv_camera_icon.svg')); ?>" alt="كاميرا خلفية" class="img-fluid2" />

                            </div>
                        </div>
                        <h3 class="text-center pt-4">صيــــــانة </h3>
                        <h3 class="text-center pt-1"> كاميرا خلفية </h3>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--End maintenance-->

    <!--Start why -->
    <section class="about-freelance pad-tb background_green" id="why_select_it">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <h1 class="mb-2 text-center font-weight-bold  text-white">ليش تطلب من حليناها</h1>
                        <hr class="text-center line-main">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="s-block-why" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon">
                            <img src="<?php echo e(asset('images/why1_icon.svg')); ?>" alt="صيانة  كسر شاشة " class="img-fluid1 why_icon" />

                            <h3 class="text-center pt-4 font-weight-normal text-green">في مكانك  </h3>
                            <p class="text-center pt-1 text-gray"> نخدمك وأنت في مكانك وبدل ماتطلع وتمشور عمرك بين
                                المحلات عشان تصلح جوالك </p>
                        </div>
                    </div>

</div>

                </div>
            <div class="row">
                <div class="col-md-6 offset-md-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="s-block-why" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon">
                            <img src="<?php echo e(asset('images/why2_icon.svg')); ?>" alt="صيانة  كسر شاشة " class="img-fluid1 why_icon" />

                            <h3 class="text-center pt-4 font-weight-normal text-green">تطمن  </h3>
                            <p class="text-center pt-1 text-gray">لاتشيل هم خدمة بعد الصيانة راح يكون عندك ضمان لايقل
                                عن ٣٠ يوم ويصل الى ٦٠ يوم حسب نوع القطعة </p>
                        </div>
                    </div>
                </div>
             </div>
            <div class="row">
                <div class="col-md-6 offset-md-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="s-block-why" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <div class="s-card-icon">
                            <img src="<?php echo e(asset('images/why3_icon.svg')); ?>" alt="صيانة  كسر شاشة " class="img-fluid1 why_icon" />

                            <h3 class="text-center pt-4 font-weight-normal text-green">أسرع شي  </h3>
                            <p class="text-center pt-1 text-gray">نخدمك باقرب وقت ممكن من نصف ساعة الى ساعتين وايضا تقدر
                                تجدول الطلب اذا كنت تبيه بعد يوم او يومين                                </p>
                        </div>
                    </div>

</div>

                </div>
        </div>

    </section>
    <!--End why-->

    <!--Start About-->
    <section class="about-freelance pad-tb" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <h1 class="mb-2 font-weight-bold text-center">خطوات طلب الخدمة</h1>
                        <hr class="text-center line-main">
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-3">
            <div class="row pro-max">
                <img class="img-fluid d-none d-lg-block d-xl-block" src="<?php echo e(asset('images/update_img.png')); ?>">
                <div class="col mx-auto d-block d-lg-none .d-xl-block">
                    <div class="counter-no mb20 wow bounceIn custom-margin-icon " data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
                        <div class="hexagon hexa3" data-tilt="" data-tilt-max="20">
                            <div class="counter-number">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 39.19 46.692">
                                    <g id="online-order" transform="translate(-41.129)">
                                        <g id="Group_1894" data-name="Group 1894" transform="translate(41.129)">
                                            <path id="Path_962" data-name="Path 962" d="M80.319,19.5a3.679,3.679,0,0,0-1.263-2.775,3.684,3.684,0,0,0-2.424-6.462h-.792a3.037,3.037,0,0,0-1.232.26V3.491A3.5,3.5,0,0,0,71.118,0H55.761A3.5,3.5,0,0,0,52.27,3.491V10.8a6.489,6.489,0,0,0-3.6-2.031,1.958,1.958,0,0,0-2.308,1.906V21.861a11.461,11.461,0,0,1-.746,4.087,25.792,25.792,0,0,0-1.762,8.458l-2.546,3.433a.913.913,0,0,0-.179.543v7.4a.912.912,0,0,0,.912.912H56.356a.912.912,0,0,0,.7-.325l3.127-3.713c1.489-.171,6.8-.985,9.73-4.1h1.207a3.5,3.5,0,0,0,3.491-3.491V34.028a3.037,3.037,0,0,0,1.232.26h.792a3.684,3.684,0,0,0,2.424-6.462,3.679,3.679,0,0,0,0-5.55A3.678,3.678,0,0,0,80.319,19.5Zm-4.479-7.413h.792a1.863,1.863,0,1,1,0,3.726h-.792a1.233,1.233,0,0,1-1.232-1.232V13.32A1.233,1.233,0,0,1,75.841,12.089ZM65.157,1.824v.2a1.709,1.709,0,1,1-3.417,0v-.2Zm7.628,33.237a1.669,1.669,0,0,1-1.667,1.667H55.761a1.669,1.669,0,0,1-1.667-1.667v-4.8a.912.912,0,1,0-1.824,0v4.8h0a3.5,3.5,0,0,0,3.491,3.491H67.051a18.837,18.837,0,0,1-7.4,2.323.912.912,0,0,0-.626.322l-3.092,3.672H42.953V38.684L45.5,35.254a.913.913,0,0,0,.179-.543A23.684,23.684,0,0,1,47.322,26.6a13.28,13.28,0,0,0,.865-4.735V10.674a.116.116,0,0,1,.132-.117,5.079,5.079,0,0,1,3.952,5.259v6.421a.912.912,0,1,0,1.824,0V3.491a1.669,1.669,0,0,1,1.667-1.667h4.154v.2a3.532,3.532,0,1,0,7.065,0v-.2h4.137a1.669,1.669,0,0,1,1.667,1.667v31.57ZM78.5,30.6a1.865,1.865,0,0,1-1.863,1.863h-.792a1.233,1.233,0,0,1-1.232-1.232V29.97a1.233,1.233,0,0,1,1.232-1.232h.792A1.865,1.865,0,0,1,78.5,30.6Zm0-5.55a1.865,1.865,0,0,1-1.863,1.863h-.792a1.233,1.233,0,0,1-1.232-1.232V24.42a1.233,1.233,0,0,1,1.232-1.232h.792A1.865,1.865,0,0,1,78.5,25.051Zm-2.655-3.687a1.233,1.233,0,0,1-1.232-1.232V18.87a1.233,1.233,0,0,1,1.232-1.232h.792a1.863,1.863,0,1,1,0,3.726h-.792Z" transform="translate(-41.129)" fill="#40386f"></path>
                                            <path id="Path_963" data-name="Path 963" d="M234.769,286.549h-4.356a3.153,3.153,0,0,0,0,6.307h4.356a3.153,3.153,0,0,0,0-6.307Zm0,4.483h-4.356a1.33,1.33,0,0,1,0-2.659h4.356a1.33,1.33,0,0,1,0,2.659Z" transform="translate(-210.535 -260.417)" fill="#40386f"></path>
                                            <path id="Path_965" data-name="Path 965" d="M165.168,277.828a.912.912,0,1,0-.493,1.191A.92.92,0,0,0,165.168,277.828Z" transform="translate(-152.264 -251.981)" fill="#40386f"></path>
                                            <g id="technics" transform="translate(18.723 12.459)">
                                                <g id="Group_1896" data-name="Group 1896" transform="translate(0.001 0.049)">
                                                    <g id="Group_1895" data-name="Group 1895" transform="translate(0 0)">
                                                        <path id="Path_966" data-name="Path 966" d="M7.257,5.739c-.679-.679-.634-.636-.653-.65l-1.8-1.326.7-.7A1.555,1.555,0,0,0,7.429.933.222.222,0,0,0,7.072.871L6.5,1.446a.222.222,0,0,1-.314-.314L6.758.557A.222.222,0,0,0,6.7.2,1.555,1.555,0,0,0,4.562,2.125l-.8.8A13.875,13.875,0,0,1,2.27,1.385l.162-.162A.222.222,0,0,0,2.389.876L1.2.162A.791.791,0,0,0,.115,1.247L.829,2.436a.222.222,0,0,0,.347.043l.152-.152c1.533,1.625,1.331,1.4,1.452,1.56l.009.01-.713.712A1.555,1.555,0,0,0,.152,6.744a.222.222,0,0,0,.357.061l.574-.574a.222.222,0,0,1,.314.314L.824,7.12a.222.222,0,0,0,.061.357A1.555,1.555,0,0,0,3.019,5.552l.609-.608L5.044,6.665c.011.013-.025-.023.609.61a1.192,1.192,0,0,0,.839.35,1.062,1.062,0,0,0,.623-.2A1.111,1.111,0,0,0,7.257,5.739ZM1.494,1.856a.222.222,0,0,0-.319,0l-.113.113L.5,1.019A.347.347,0,0,1,.971.543l.945.567L1.8,1.223a.222.222,0,0,0,0,.309A16.157,16.157,0,0,0,3.442,3.245l-.337.337C2.989,3.432,3.259,3.727,1.494,1.856ZM2.6,5.343a.222.222,0,0,0-.043.253A1.111,1.111,0,0,1,1.4,7.173l.314-.314A.666.666,0,0,0,.77,5.917l-.314.314A1.111,1.111,0,0,1,2.034,5.072a.222.222,0,0,0,.253-.043L4.981,2.334a.222.222,0,0,0,.043-.253A1.111,1.111,0,0,1,6.184.5L5.87.818a.666.666,0,1,0,.942.942l.314-.314A1.111,1.111,0,0,1,5.548,2.6a.222.222,0,0,0-.253.043Zm1.342-.714.548-.548.558.412-.667.667C3.928,4.609,3.956,4.643,3.942,4.629Zm2.914,2.44a.7.7,0,0,1-.889-.107L5.38,6.375l-.716-.87L5.41,4.76l.917.677.616.616A.666.666,0,0,1,6.856,7.069Z" transform="translate(-0.001 -0.049)" fill="#40386f"></path>
                                                    </g>
                                                </g>
                                                <g id="Group_1898" data-name="Group 1898" transform="translate(5.358 5.376)">
                                                    <g id="Group_1897" data-name="Group 1897">
                                                        <path id="Path_967" data-name="Path 967" d="M363.059,360.78l-.888-.888a.222.222,0,0,0-.314.314l.888.888a.222.222,0,0,0,.314-.314Z" transform="translate(-361.792 -359.827)" fill="#40386f"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <p class="text-center">قدم طلبك</p>
                    </div>
                </div>
                <div class="col mx-auto d-block d-lg-none .d-xl-block">

                    <div class="counter-no mb20 wow bounceIn custom-margin-icon" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
                        <div class="hexagon hexa3" data-tilt="" data-tilt-max="20">
                            <div class="counter-number">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="44" viewBox="0 0 40 47">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_724" data-name="Rectangle 724" width="44" height="44" transform="translate(940 1367)" fill="#40386f"/>
                                        </clipPath>
                                    </defs>
                                    <g id="Mask_Group_1" data-name="Mask Group 1" transform="translate(-940 -1367)" clip-path="url(#clip-path)">
                                        <g id="meeting-point" transform="translate(939.998 1370.498)">
                                            <g id="Group_1900" data-name="Group 1900">
                                                <g id="Group_1899" data-name="Group 1899">
                                                    <path id="Path_968" data-name="Path 968" d="M19.992,0a11.494,11.494,0,0,0-8.925,18.737q.019.029.04.056l8.269,10.594a.781.781,0,0,0,1.232,0l8.309-10.649.009-.011A11.494,11.494,0,0,0,19.992,0Zm7.7,17.763-.028.037-7.674,9.836L12.4,17.9a.785.785,0,0,0-.064-.089,9.932,9.932,0,1,1,15.363-.052Z" fill="#40386f"/>
                                                </g>
                                            </g>
                                            <g id="Group_1902" data-name="Group 1902">
                                                <g id="Group_1901" data-name="Group 1901">
                                                    <path id="Path_969" data-name="Path 969" d="M26.736,9.67a.781.781,0,1,0-1.5.442,5.469,5.469,0,1,1-3.687-3.69.781.781,0,0,0,.444-1.5A7.031,7.031,0,1,0,26.736,9.67Z" fill="#40386f"/>
                                                </g>
                                            </g>
                                            <g id="Group_1904" data-name="Group 1904">
                                                <g id="Group_1903" data-name="Group 1903">
                                                    <path id="Path_970" data-name="Path 970" d="M24.978,6.707l-.014-.014a.781.781,0,1,0-1.1,1.1l.014.014a.781.781,0,1,0,1.1-1.1Z" fill="#40386f"/>
                                                </g>
                                            </g>
                                            <g id="Group_1906" data-name="Group 1906">
                                                <g id="Group_1905" data-name="Group 1905">
                                                    <path id="Path_971" data-name="Path 971" d="M32,23.855a.781.781,0,0,0-.488,1.484c4.336,1.427,6.924,3.564,6.924,5.718,0,1.821-1.878,3.664-5.153,5.055A35.056,35.056,0,0,1,20,38.442a35.056,35.056,0,0,1-13.284-2.33c-3.275-1.392-5.153-3.234-5.153-5.055,0-1.525,1.315-3.074,3.7-4.363a28.387,28.387,0,0,1,10.064-2.775.781.781,0,0,0-.168-1.553A29.953,29.953,0,0,0,4.527,25.319C1.567,26.916,0,28.9,0,31.057c0,2.515,2.168,4.821,6.1,6.493A36.634,36.634,0,0,0,20,40,36.633,36.633,0,0,0,33.9,37.55c3.937-1.673,6.1-3.979,6.1-6.493C40,28.152,37.087,25.527,32,23.855Z" fill="#40386f"/>
                                                </g>
                                            </g>
                                            <g id="Group_1908" data-name="Group 1908">
                                                <g id="Group_1907" data-name="Group 1907">
                                                    <path id="Path_972" data-name="Path 972" d="M28.429,22.918l-.027-.005a.781.781,0,0,0-.309,1.532l.027.005a.781.781,0,0,0,.309-1.532Z" fill="#40386f"/>
                                                </g>
                                            </g>
                                            <g id="Group_1910" data-name="Group 1910">
                                                <g id="Group_1909" data-name="Group 1909">
                                                    <path id="Path_973" data-name="Path 973" d="M14.1,26.333a.781.781,0,0,0-.919-.613l-.054.013a.781.781,0,1,0,.973.6Z" fill="#40386f"/>
                                                </g>
                                            </g>
                                            <g id="Group_1912" data-name="Group 1912">
                                                <g id="Group_1911" data-name="Group 1911">
                                                    <path id="Path_974" data-name="Path 974" d="M22.609,25.061a.781.781,0,0,0-.122,1.558c5.1.4,7.818,1.891,7.818,2.815,0,.446-.71,1.2-2.712,1.869A25.016,25.016,0,0,1,20,32.344,25.014,25.014,0,0,1,12.412,31.3c-2-.667-2.712-1.423-2.712-1.869,0-.407.552-.92,1.477-1.373a.781.781,0,1,0-.687-1.4c-1.945.952-2.353,2.035-2.353,2.776,0,2.936,5.969,4.473,11.865,4.473s11.865-1.536,11.865-4.473C31.867,26.741,26.88,25.4,22.609,25.061Z" fill="#40386f"/>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <p class="text-center">يقبل الطلب اقرب فني لك  </p>
                    </div>
                </div>
                <div class="col mx-auto d-block d-lg-none .d-xl-block">
                    <div class="counter-no mb20 wow bounceIn custom-margin-icon" data-wow-delay=".2s" style="visibility: visible;animation-delay: 0.2s;animation-name: bounceIn;">
                        <div class="hexagon3 hexa3" data-tilt="" data-tilt-max="20">
                            <div class="counter-number">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 40 39.991">
                                    <g id="wrench" transform="translate(0 -0.004)">
                                        <g id="Group_1913" data-name="Group 1913">
                                            <path id="Path_975" data-name="Path 975" d="M36.49,26.875a6.98,6.98,0,0,0-4.894-.805L25.524,20,31.6,13.926a7.03,7.03,0,0,0,8.157-8.714,7.031,7.031,0,0,0-13.685,3.2L20,14.478l-.493-.493a.781.781,0,0,0-1.1,1.1l.493.492L15.581,18.9,9.754,13.07l3.311-3.315.365.365a.781.781,0,1,0,1.1-1.1L13.923,8.4A7.031,7.031,0,0,0,3.939.725c-.7.341-1.063.781-1.081,1.309A1.519,1.519,0,0,0,3.79,3.369l2.1,1.21c.357.206.357.306.357.487v.9c0,.56-.056.656-.541.936l-.778.449c-.152.088-.244.141-.6-.066l-2.1-1.21A1.519,1.519,0,0,0,.6,5.934a1.592,1.592,0,0,0-.594,1.59A7.031,7.031,0,0,0,8.4,13.931L14.476,20,8.4,26.074a7.028,7.028,0,1,0,5.528,5.517l4.255-4.254L20,25.521,26.077,31.6a7.031,7.031,0,0,0,9.985,7.68c.7-.341,1.063-.781,1.081-1.309a1.519,1.519,0,0,0-.932-1.335l-2.1-1.21c-.357-.206-.357-.306-.357-.487v-.9c0-.56.056-.656.541-.936l.778-.449c.152-.088.244-.141.6.066l2.1,1.21a1.519,1.519,0,0,0,1.622.139,1.592,1.592,0,0,0,.593-1.59,7.023,7.023,0,0,0-3.5-5.6Zm-32.2-15.1A5.463,5.463,0,0,1,1.577,7.5L3.544,8.636A2.016,2.016,0,0,0,5.707,8.7l.778-.449A2.3,2.3,0,0,0,7.807,5.964v-.9a2.015,2.015,0,0,0-1.138-1.84L4.7,2.091a5.468,5.468,0,0,1,7.656,6.161L8.251,12.364a5.429,5.429,0,0,1-3.96-.592ZM28.231,4.3a5.468,5.468,0,1,1,3.522,8.063L27.639,8.256A5.423,5.423,0,0,1,28.231,4.3ZM11.769,35.7a5.468,5.468,0,1,1-3.522-8.063l4.114,4.105a5.423,5.423,0,0,1-.592,3.958Zm1.3-5.46-3.317-3.31L26.932,9.758l3.317,3.31ZM21.1,24.417,24.419,21.1l5.827,5.825-3.311,3.315Zm15.351,6.946a2.016,2.016,0,0,0-2.163-.066l-.778.449a2.3,2.3,0,0,0-1.322,2.289v.9a2.015,2.015,0,0,0,1.139,1.84L35.3,37.909a5.468,5.468,0,0,1-7.656-6.161l4.106-4.112A5.466,5.466,0,0,1,38.423,32.5Z" fill="#40386f"/>
                                            <path id="Path_976" data-name="Path 976" d="M30.233,9.06l2.344,1.352a.781.781,0,0,0,.781,0L35.7,9.06a.781.781,0,0,0,.391-.677v-2.7A.781.781,0,0,0,35.7,5L33.357,3.649a.781.781,0,0,0-.781,0L30.233,5a.781.781,0,0,0-.391.677v2.7a.781.781,0,0,0,.391.677ZM31.4,6.129l1.562-.9,1.562.9v1.8l-1.562.9-1.562-.9Z" fill="#40386f"/>
                                            <path id="Path_977" data-name="Path 977" d="M9.767,30.94,7.424,29.588a.781.781,0,0,0-.781,0L4.3,30.94a.781.781,0,0,0-.391.677v2.7A.781.781,0,0,0,4.3,35L6.643,36.35a.781.781,0,0,0,.781,0L9.768,35a.781.781,0,0,0,.391-.677v-2.7A.782.782,0,0,0,9.767,30.94ZM8.6,33.87l-1.562.9-1.562-.9v-1.8l1.562-.9,1.562.9Z" fill="#40386f"/>
                                            <path id="Path_978" data-name="Path 978" d="M16.469,12.834a.781.781,0,1,0,0-1.562h0a.781.781,0,0,0,0,1.562Z" fill="#40386f"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <p class="text-center">يجيك ويصلح جوالك في مكانك </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End About-->

    <!--start FULL-WIDTH IMAGE -->
    <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <img class="img-fluid" src="<?php echo e(asset('images/full_img.svg')); ?>"/>
            </div>
        </div>
    </div>
   </section>
    <!--end FULL-WIDTH IMAGE -->

    <!--Start return fine-->
    <section class="about-freelance pad-tb" id="new_order">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <h1 class="mb-2 text-center font-weight-bold"> يرجع لك سليم <img class="img-fluid" src="<?php echo e(asset('images/smile.svg')); ?>" width="45"/> </h1>
                        <a href="<?php echo e(route('new.order')); ?>" class="btn-main-fine lnk wow fadeInUp text-center mt-4" data-wow-delay=".6s"> اطلب الآن <span class="circle"></span></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!--end return fine-->

            <?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $(".fixed-top");
                var $colo_nav= $(".navbar-light .navbar-nav .nav-link");
                var $color_logo= $(".id_logo");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                $colo_nav.toggleClass('scrolled', $(this).scrollTop() > $colo_nav.height());
                // $color_logo.toggleClass('scrolled', $(this).scrollTop() > $color_logo.height());
                if ($(this).scrollTop() > $color_logo.height()) {
                    $('.id_logo').attr('src','<?php echo asset('images/logo-green.svg'); ?>');
                }
                else {
                    $('.id_logo').attr('src','<?php echo asset('images/logo-white.svg'); ?>');
                }
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/front-end/index.blade.php ENDPATH**/ ?>