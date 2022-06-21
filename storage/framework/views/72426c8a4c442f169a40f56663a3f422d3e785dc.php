<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('description',$description); ?>

<?php $__env->startSection('script_ceo_new_order'); ?>
    <!-- Snap Pixel Code -->
    <script type='text/javascript'>
        (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
        {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
            a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
            r.src=n;var u=t.getElementsByTagName(s)[0];
            u.parentNode.insertBefore(r,u);})(window,document,
            'https://sc-static.net/scevent.min.js');

        snaptr('init', 'c8d85b14-4e8b-4d09-9bae-4749023a62ce', {
            'user_email': '_ revnilife@gmail.com_'
        });

        snaptr('track','START_CHECKOUT')

    </script>
    <!-- End Snap Pixel Code -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_css'); ?>

    <style>
        a.btn-info-login-custam{
            font-size: 20px;
            color: #FFF !important;
            width: 53%;
            font-weight: 400;
            font-family: Myriad Arabic Regular;
            padding: 0 33px;
            line-height: 33px;
            outline: 0;
            background-color: #5ec0af;
            border: none;
            -webkit-border-radius: 20px;
            border-radius: 20px;
        /* display: inline-block; */
            position: relative;
            -webkit-box-shadow: 0 10px 15px 0 rgb(64 64 111 / 15%);
            box-shadow: 0 10px 15px 0 rgb(64 64 111 / 15%);
            margin-left: 0rem;
            margin-right: 2.3rem;
            margin-top: 2.3rem;
        }
      .custom-link-list-bt
        {
            font-size: 20px;
            margin-top: 14px;
            color: #FFF;
            font-weight: 400;
          font-family: Myriad Arabic Regular;
          padding: 0 38px;
            line-height: 32px;
            outline: 0;
            background-color: #40386F;
            border: none;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            position: relative;
        }

    .modal-open .container {
        -webkit-filter: blur(5px);
        filter: blur(5px);
    }
    a.custom-link-list:hover {
        color: #5ec0af;
    }
    a.custom-link-list {
        color: #40386f;
    }
    .main-like-list{
        overflow: auto;
        white-space: nowrap;
        overflow-y: hidden;
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #5ec0af;
        border-color: #5ec0af;
    }
    .btn-primary {
        color: #fff;
        background-color: #5ec0af;
        border-color: #5ec0af;
    }
    .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #5ec0af;
        border-color: #5ec0af;
    }
    .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20rem; }
    .toggle.ios .toggle-handle { border-radius: 20rem; }

    .btn.focus, .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgb(64 56 111 / 25%);
    }
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }

        .custom-select{
            font-size: 1.2rem;

        }
        .blue_font{
            color: #40386f;
            margin-right: 5%;
        }
        .info-card{
            padding: 10px;
        }
        .app-card{
            background: #f6f6f685;

        }
        .info-card p {
            font-size: 20px;
            line-height: 28px;
            margin: 20px 10px;
            color: #67618d;
        }
        .btn-download-app {
            font-size: 14px;
            font-weight: 600;
            font-family: Myriad Arabic Regular;
            padding: 0 14px;
            line-height: 33px;
            outline: 0;
            background-color: #dcdcdcd4;
            border: none;
            color: #40386f !important;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            display: inline-block;
            position: relative;
            -webkit-box-shadow: 0 10px 15px 0 rgb(64 64 111 / 5%);
            box-shadow: 0 10px 15px 0 rgb(64 64 111 / 5%);
            /*margin-top: 20px;*/
            /* margin-right: 32%;*/
        }
        .pad-tb1{
            padding-top: 100px;
            padding-bottom: 0px;
        }
        @media  only screen and (max-width: 991px){
            .hero-section {
                padding-top: 20px;
                padding-bottom: 80px;
                height: auto;
            }
           /*.btn-download-app{*/
           /*    margin-right: 31%;*/
           /*}*/
        }
        /*///phone*/
        @media  only screen and (max-width: 1370px){
            .hero-section {
                position: relative;
                padding-top: 20px;
                padding-bottom: 40px;
                height: auto;
                align-items: center;
                display: grid;
            }
            /*.btn-download-app{*/
            /*    margin-right: 30%;        */
            /*}*/
        }
        .hero-section {
            position: relative;
            padding-top: 20px;
            padding-bottom: 40px;
            height: auto;
            align-items: center;
            display: grid;
        }


</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--Start Hero-->
        <div class="container pad-tb1">
            <h4 class="text-right text-green mt-4">طلب جديد </h4>
        </div>

    <section class="hero-section">
        <div class="container">
            <form action=""  method="get"  >
                <?php echo e(csrf_field()); ?>


                <div id="test"></div>
                <div class="row justify-content-center">

                    <div class="col-md-6 col-12 mt-4">

                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-phone.svg')); ?>"/>
                                 الشركة </p>
                            <div class="input-group mb-3 mt-3 px-5">
                                <select class="custom-select" id="brand_id" name="BrandId" aria-label="Example select with button addon">
                                    <option selected disabled>اختر الشركة</option>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=" <?php echo e($brand['Id']?? ''); ?>"> <?php echo e($brand['NameAr']?? ''); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-phone.svg')); ?>"/>
                                 الهاتف </p>
                            <div class="input-group mb-3 mt-3 px-5">
                                <select class="custom-select" id="device_id" name="DeviceId" aria-label="Example select with button addon">


                                    <option disabled>اختر نوع الهاتف</option>




                                        <option value=""  data-id=""></option>






                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-setting.svg')); ?>"/>
                                مشكلة الهاتف </p>
                            <div class="input-group mb-3 mt-3 px-5">
                                <select class="custom-select" id="issue_id" name="IssueId" aria-label="Example select with button addon">
                                        <option  value="" data-index-id="" disabled>اختر المشكلة التي تود حلها </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-color.svg')); ?>"/>
                                لون الهاتف </p>
                            <div class="input-group mb-3 mt-3 px-5">
                                <select class="custom-select" id="ColorTypeId" name="ColorTypeId" aria-label="Example select with button addon">
                                    <option selected disabled>اختر لون الهاتف </option>
                                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($color['Id']?? ''); ?>"> <?php echo e($color['Name']?? ''); ?></option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-date.svg')); ?>"/> موعد الصيانة </p>
                            <div class="form-group px-5">
                                <div class="input-group date">
                                    <input type="text" data-date="" readonly="readonly" data-time="" id="AppointmentId" name="AppointmentId" class="form-control datetimepicker-input english_num_test"  data-toggle="modal" data-target="#myModal1" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-note.svg')); ?>"/>ملاحظات   </p>
                            <div class="form-group">
            <textarea class="form-control ml-5 w-82 mt-3" name="Comment" value='' placeholder="هل هناك ملاحظة تود اخبارنا بها"  id="comment" rows="3"></textarea>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="<?php echo e(asset('images/coupon.svg')); ?>"/> ادخل كود العرض الترويجي </p>
                            <div class="form-group px-5">
                                <div class="input-group" >
                                    <input type="text" id="OfferCode" name="OfferCode" class="form-control"  />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-wallet.svg')); ?>"/>
                                المبلغ   </p>
                            <input name="MaxPrice" type="hidden" value=""/>

                            <p class="ml-5 mt-2">  <span class="english_num_test" id="price_id"></span>
                                ريال سعودي نقدا
                                ً</p>
                        </div>

                    </div>

                    <div class="col-md-6 col-12 mt-4">
                        <h5 class="text-green text-right text-icon mb-2">
                            <img class="icon-order" src="<?php echo e(asset('images/icon-location.svg')); ?>"/>
                            الموقع
                            <span class="blue_font">(نرجو تحديد موقعك الدقيق على الخريطة) </span></h5>
                        <!--Google map-->
                        <p id="hidden" style="display: none">
                            <b>العنوان التفصيلي: </b><span class="english_num_test" id="address_details" data-address=""></span>
                       </p>
                        <!--The div element for the map -->
                        <div id="map"  data-lng="" data-lat="" ></div>

                        <div class="container mt-5">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h4 class="text-green"> تنويه:</h4>
                                            <p>في حال عدم ظهور الخريطة تأكد من إعدادات الخصوصية في جهازك
                                                بالسماح للوصول إلى الموقع أو قدم طلبك من خلال تطبيقنا</p></div>
                                        <div class="col-md-3 mt-4">

                                        <button type="button"
                            onclick="window.location.href='https://apps.apple.com/sa/app/%D8%AD%D9%84%D9%8A%D9%86%D8%A7%D9%87%D8%A7/id1383515855'"
                                       class="btn-download-app" value="">حمل التطبيق
                                        </button>
                                        </div>
                                    </div>
                        </div>

                        <!--Google Maps-->














                    </div>
                    <div class="row send-data">
                        <div class="form-group" id="submit_order_id">
                        <?php
                           if ( Session::has('Id')) {
                            echo '<input type="button" id="submit_order" name="submit" class="btn btn-info-accept-order btn-md"  data-toggle="modal" data-target="#myModalAccept" value="تقديم طلب">';
                            }else{
                               echo '<input type="button" id="submit_order" name="submit" class="btn btn-info-accept-order btn-md"  data-toggle="modal" data-target="#myModalRegister" value="تقديم طلب">';
                           }
                            ?>
                        </div>



                    </div>
                </div>

            </form>
        </div>
    </section>

    <!-- The Modal Accept -->
    <div class="modal" id="myModalAccept">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="
    margin-top: 5rem;
">
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
      margin: -2rem 0rem 0rem -0.2rem;
">&times;</button>
                    <div class="header-outline mx-auto d-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 71.541 71.541">
                            <g id="Outline" transform="translate(-16 -16)">
                                <path id="Path_1566" data-name="Path 1566" d="M79.194,25.539a1.192,1.192,0,0,0,1.192-1.192V21.962A5.968,5.968,0,0,0,74.425,16H31.5a5.968,5.968,0,0,0-5.962,5.962V75.617h2.385V21.962A3.581,3.581,0,0,1,31.5,18.385H69.658a5.931,5.931,0,0,0-1.2,3.577V81.579a3.577,3.577,0,1,1-7.154,0V79.194A1.192,1.192,0,0,0,60.117,78H17.192A1.192,1.192,0,0,0,16,79.194v2.385a5.968,5.968,0,0,0,5.962,5.962H64.886a5.968,5.968,0,0,0,5.962-5.962V25.539ZM21.962,85.156a3.581,3.581,0,0,1-3.577-3.577V80.386h40.54v1.192a5.931,5.931,0,0,0,1.2,3.577ZM74.425,18.385A3.581,3.581,0,0,1,78,21.962v1.192H70.848V21.962a3.581,3.581,0,0,1,3.577-3.577Z" fill="#fff"/>
                                <path id="Path_1567" data-name="Path 1567" d="M184,63.154a3.043,3.043,0,0,0,1.2,2.465,3.125,3.125,0,0,0,3.486,3.486,3.125,3.125,0,0,0,4.929,0,3.125,3.125,0,0,0,3.486-3.486,3.125,3.125,0,0,0,0-4.929,3.125,3.125,0,0,0-3.486-3.486,3.125,3.125,0,0,0-4.929,0A3.125,3.125,0,0,0,185.2,60.69,3.043,3.043,0,0,0,184,63.154Zm2.938-.692a1.192,1.192,0,0,0,.745-1.8.71.71,0,0,1,.979-.979,1.192,1.192,0,0,0,1.8-.745.71.71,0,0,1,1.384,0,1.192,1.192,0,0,0,1.8.745.71.71,0,0,1,.979.979,1.192,1.192,0,0,0,.745,1.8.71.71,0,0,1,0,1.384,1.192,1.192,0,0,0-.745,1.8.71.71,0,0,1-.979.979,1.192,1.192,0,0,0-1.8.745.71.71,0,0,1-1.384,0,1.192,1.192,0,0,0-1.8-.745.71.71,0,0,1-.979-.979,1.192,1.192,0,0,0-.745-1.8.71.71,0,0,1,0-1.384Z" transform="translate(-142.959 -34.038)" fill="#fff"/>
                                <path id="Path_1568" data-name="Path 1568" d="M192,200h11.923v2.385H192Z" transform="translate(-149.768 -156.576)" fill="#fff"/>
                                <path id="Path_1569" data-name="Path 1569" d="M216,168h11.923v2.385H216Z" transform="translate(-170.191 -129.346)" fill="#fff"/>
                                <path id="Path_1570" data-name="Path 1570" d="M168,168h4.769v2.385H168Z" transform="translate(-129.346 -129.346)" fill="#fff"/>
                                <path id="Path_1571" data-name="Path 1571" d="M152,240h28.616v2.385H152Z" transform="translate(-115.73 -190.614)" fill="#fff"/>
                                <path id="Path_1572" data-name="Path 1572" d="M120,240h2.385v2.385H120Z" transform="translate(-88.5 -190.614)" fill="#fff"/>
                                <path id="Path_1573" data-name="Path 1573" d="M152,272h19.077v2.385H152Z" transform="translate(-115.73 -217.845)" fill="#fff"/>
                                <path id="Path_1574" data-name="Path 1574" d="M296,272h7.154v2.385H296Z" transform="translate(-238.268 -217.845)" fill="#fff"/>
                                <path id="Path_1575" data-name="Path 1575" d="M152,304h28.616v2.385H152Z" transform="translate(-115.73 -245.076)" fill="#fff"/>
                                <path id="Path_1576" data-name="Path 1576" d="M120,304h2.385v2.385H120Z" transform="translate(-88.5 -245.076)" fill="#fff"/>
                                <path id="Path_1577" data-name="Path 1577" d="M152,336h7.154v2.385H152Z" transform="translate(-115.73 -272.306)" fill="#fff"/>
                                <path id="Path_1578" data-name="Path 1578" d="M216,336h19.077v2.385H216Z" transform="translate(-170.191 -272.306)" fill="#fff"/>
                                <path id="Path_1579" data-name="Path 1579" d="M152,368h19.077v2.385H152Z" transform="translate(-115.73 -299.537)" fill="#fff"/>
                                <path id="Path_1580" data-name="Path 1580" d="M120,368h2.385v2.385H120Z" transform="translate(-88.5 -299.537)" fill="#fff"/>
                                <path id="Path_1581" data-name="Path 1581" d="M152,400h28.616v2.385H152Z" transform="translate(-115.73 -326.768)" fill="#fff"/>
                                <path id="Path_1582" data-name="Path 1582" d="M296,368h7.154v2.385H296Z" transform="translate(-238.268 -299.537)" fill="#fff"/>
                                <path id="Path_1583" data-name="Path 1583" d="M410.731,116.769h-1.192a4.769,4.769,0,0,0-9.539,0v38.155a1.185,1.185,0,0,0,.127.533h0l3.577,7.154a1.192,1.192,0,0,0,2.133,0l3.577-7.154h0a1.185,1.185,0,0,0,.127-.533v-35.77h1.192a1.194,1.194,0,0,1,1.192,1.192v13.116h2.385V120.346A3.581,3.581,0,0,0,410.731,116.769Zm-5.962-2.385a2.387,2.387,0,0,1,2.385,2.385h-4.769A2.387,2.387,0,0,1,404.769,114.385Zm2.385,39.347h-4.769V135.847h4.769Zm0-20.27h-4.769v-2.385h4.769Zm-2.385,25.95-1.648-3.3h3.3Zm2.385-30.719h-4.769v-9.539h4.769Z" transform="translate(-326.768 -81.692)" fill="#fff"/>
                            </g>
                        </svg>

                    </div>
                </div>

                <!-- Modal body -->
                <div class="modal-body border-0 pt-1">
            <p class="text-center mb-4"> يجب الموافقة على جميع الشروط</p>
       <?php
                                                $count = 0;
                                                ?>
                    <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="col-9">
                            <p>
                        <?php echo e($term['Note']??''); ?>

                            </p>
                        </div>

                        <div class="col-2 ">
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="customSwitches-<?php echo e($count); ?>">
                                <label class="custom-control-label" for="customSwitches-<?php echo e($count); ?>"></label>
                            </div>

                        </div>
                        <div class="col-1"></div>
                    </div>
                        <hr>
                        <?php
                        $count++;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <button id="submit_data" class="btn btn-accept " data-count="<?php echo e($count); ?>">
                        <i> تـم</i>
                    </button>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer border-0">
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Accept -->

    <!-- The Modal data and time -->
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
                </div>
                <!-- Modal body -->
                <div class="modal-body border-0 pt-1">
                    <div id="login">
                        <div class="container-fluid">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-12">
                                    <form id="time-form" class="form" action="" method="post">
                                        <h4 class="text-center mb-3 text-green text-main-login">تحديد موعد الوصول</h4>

                                        <div class="form-group flex-row flex-nowrap">
                                            <label class="text-purple">اليوم</label>
                                            <ul class="list-inline text-center main-like-list">
                                                <?php
                                                $count = 0;
                                                ?>
                                                <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <li class="list-inline-item mx-3 my-2 "  >

                                  <a class="custom-link-list day_id english_num_test" id="day-<?php echo e($count); ?>" data-text="<?php echo e($day['Name']?? ''); ?> <?php echo e($day['DateFormatted']?? ''); ?>" data-days-id="<?php echo e($count); ?>" data-value="<?php echo e($day['Date']?? ''); ?>" href="#" >

                                      <?php echo e($day['Name']?? ''); ?>

                                  <br>
                                  <br>
                                      <span class="english_num_test"><?php echo e($day['DateFormatted']?? ''); ?></span>
                                  </a></li>|
                                                 <?php
                                                 $count++;
                                                 ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-purple">الوقت</label>
                                            <input type="hidden" required value="" name="AppointmentDate" id="AppointmentDate">
                                        </div>
                                        <div id="appointment_id">

                                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="radio">
                                                    <label class="english_num_test"><input class="appointment-active" type="radio" name="optradio"
                                               data-name="<?php echo e($appointment['Name']?? ''); ?> " value="<?php echo e($appointment['Id']?? ''); ?>"  <?php echo e($appointment['IsActive']==true ? '' : 'disabled'); ?>><?php echo e($appointment['Name']?? ''); ?>

                                                    </label></div>
                                            <hr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>

                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer border-0">
                    <div  class="mx-auto d-block">
                        <a class="custom-link-list-bt " id="app-done" href="#" >تم</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Modal-->

    <!-- The Modal Register-->
    <div class="modal" id="myModalRegister">
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
                <div class="mx-3" id="start_alert_register"></div>
                <div class="modal-body border-0 pt-1">
                    <div id="login">
                        <div class="container-fluid">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-12">
                                    <form id="login-form" class="form" method="get">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" placeholder="Id"  name="Id" id="Id1" value="" class="form-control">

                                        <h4 class="text-center mb-3 text-main-login">انشاء حساب جديد</h4>

                                        <div class="form-group">
                                            <input type="text" required placeholder="الاسم بالكامل"  name="FullName" id="full_name" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="Email"  name="Email" placeholder="بريد الكتروني" id="email1" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" required placeholder=" رقم الجوال" min="0" max="9999999999" name="Mobile" id="mobile" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required name="Password" placeholder="كلمة المرور" id="password1" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <input type="password" required placeholder="تأكيد كلمة المرور" name="Password_confirmation" id="password_confirmation" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="custom-control custom-switch mt-2">
                                                        <input type="checkbox"  required class="custom-control-input" id="customSwitches">
                                                        <label class="custom-control-label" for="customSwitches">الموافقة على الشروط والأحكام</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="rules-link text-right">
                                                        <p class="font-weight-bold"><a href="http://halenaha.com/privacy/customer">الشروط والاحكام</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <a id="submit_register" type="submit" class="btn btn-info-login-custam btn-md mx-auto d-block" value="">انشاء حساب
                                            </a>
                                        </div>

                                    </form>
                                    <div id="register-link" class="mx-auto d-block mt-2 text-center">
                            <span class="forget-pass">هل تمتلك حساب  ؟
                          <a href="" id="myModalLogin1" class="forget-pass" data-toggle="modal" data-target="#myModalLogin" > قم بتسجيل الدخول </a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal-->

    <!-- The Modal Login -->
    <div class="modal" id="myModalLogin">
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
                <div class="mx-3" id="start_alert"></div>
                <div class="modal-body border-0 pt-1">
                    <div id="login">
                        <div class="container-fluid">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-12">
                                    <form id="login-form" class="form" method="get">
                                        <?php echo e(csrf_field()); ?>

                                        <h4 class="text-center mb-3 text-main-login">تسجيل دخول</h4>
                                        <div class="form-group">
                                            <input type="Email"  name="Email" placeholder="بريد الكتروني" id="email" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="Password" placeholder="كلمة المرور" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="remember" class="text-halenaha">
                                                <a class="forget-pass" href="<?php echo e(route('forget.pass')); ?>">هل نسيت كلمة المرور ؟</a>
                                            </label>
                                            <br>
                                            <a id="submit_login" type="submit" class="btn btn-info-login-custam btn-md mx-auto d-block" value="">تسجيل الدخول
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <div id="register-link" class="mx-auto d-block mt-2">
                            <span class="forget-pass">لا تمتلك حساب ؟
                          <a href="" id="myModalRegisterClick" class="forget-pass" data-toggle="modal"  data-target="#myModalRegister" > أنشئ حساب جديد </a></span>
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
    <!--End Modal-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


    <script src="<?php echo e(asset('js/bootstrap4-toggle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYMs2ZEEsgqmD2vsmQ3eVyLs6Yr4tGR5o"></script>

    <script>
        window.onload  = function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(initMap);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }
        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        }

        $(document ).ready(function() {
            if($.session.get('device_id')){
                device_id = $.session.get('device_id');
                brand_id = $.session.get('brand_id');
                issue_id = $.session.get('issue_id');
                lat = $.session.get('lat');
                lng = $.session.get('lng');
                region_id = $.session.get('region_id');
                $comment_get= $.session.get('comment');
                $ColorTypeId_get= $.session.get('ColorTypeId');
                $date_id_get= $.session.get('date_id');
                $time_id_get= $.session.get('time_id');
                $full_date_get= $.session.get('full_date');
                $price_id_get= $.session.get('price_id');
                $data_address_get= $.session.get('GoogleAddress');
                $('#hidden').css('display', 'block');
                $('#address_details').attr('data-address',$data_address_get);
                $('#map').attr('data-lat',lat);
                $('#map').attr('data-lng',lng);
                $('#map').attr('data-region',region_id);
                $('#address_details').text($data_address_get);
                // $('#brand_id option[value="'+brand_id+'"]').attr("selected", "selected");
                $('#brand_id option[value="'+brand_id+'"]').attr("selected", "selected");
                $("#AppointmentId").val($full_date_get);

                $.ajax({
                    url: "<?php echo e(url('get/device')); ?>",
                    type: "GET",
                    data: {brand_id: brand_id},
                    cache: false,
                    dataType: 'json',
                    success: function (data) {
                        var count = 0;
                        $.each(data.Devices, function (index) {
                            if (device_id == data.Devices[index].Id) {
                                $('#device_id').append("<option selected value=" + data.Devices[index].Id + " data-id=" + count + ">" + data.Devices[index].NameAr + "</option>")

                            } else {
                                $('#device_id').append("<option  value=" + data.Devices[index].Id + " data-id=" + count + ">" + data.Devices[index].NameAr + "</option>")
                            }
                            count++
                        });
                    }
                });

                $.ajax({
                    url: "<?php echo e(url('get/issues')); ?>",
                    type: "GET",
                    data: {device_id, brand_id},
                    cache: false,
                    dataType: 'json',
                    success: function (data) {
                        var count = 0;
                        $.each(data, function (index, id) {
                            if (issue_id == data[index].Id) {
                                $('#issue_id').append("<option selected value=" + data[index].Id + " data-index-id=" + count + ">" + data[index].NameAr + "</option>")
                            } else {
                                $('#issue_id').append("<option value=" + data[index].Id + " data-index-id=" + count + ">" + data[index].NameAr + "</option>")
                            }
                            count++
                        });
                    }
                });
                $('#issue_id option[value="'+issue_id+'"]').attr("selected", "selected");
                $.ajax({
                    url: "<?php echo e(url('get/region')); ?>",
                    type: "GET",
                    data:{lat,lng},
                    cache: false,
                    dataType: 'json',
                    success: function(data){
                        if (data['Message']==''){
                            $region_id= data['Result'].Id;
                            $('#map').attr('data-lat',lat);
                            $('#map').attr('data-lng',lng);
                            toastr.success(data['Result'].Name);
                        }else{
                            toastr.error(data['Message']);
                        }
                    }
                });

                $("#comment").val($comment_get);
                $("#ColorTypeId").val($ColorTypeId_get);
                $("#price_id").text($price_id_get);
                // $("#address_details").attr('data-address',$data_address_get);

                $("#AppointmentId").attr('data-date',$date_id_get);
                $("#AppointmentId").attr('data-time',$time_id_get);
                $("#AppointmentId").val();

            }
            // $("#AppointmentId").attr('data-date',value);
            // $brand_id_get= $.session.get('brand_id');
            // $("#brand_id").val($brand_id_get);
            // $device_id_get= $.session.get('device_id');
            // $("#device_id").val($device_id_get);
            // $issue_id_get= $.session.get('issue_id');
            // $("#issue_id").val($issue_id_get);
            // $comment_get= $.session.get('comment');
            // $("#comment").val($comment_get);
            // $AppointmentId_get= $.session.get('AppointmentId');
            // $("#AppointmentId").val($AppointmentId_get);

            // $('#brand_id option[value=1]').removeAttr('selected').filter('[value=$brand_id_get]')
            //     .attr('selected', true);
            // $("#brand_id option:selected").prop("selected",false);
            // $("#brand_id option[value=" + $brand_id_get + "]")
            //     .prop("selected",true);
            // $("#my_tag").data("special", "value");
            // $("select[name=brand_id] option[value=brand_id_get]").attr('selected','selected');
            // $('#brand_id').attr("selected","selected");
            // $("#brand_id select").val("2");

            // const myNode = document.getElementById("brand_id");
            // myNode.innerHTML = '';

            //device view
            $( "#brand_id" ).change(function() {
                var test=  $('#brand_id').find(":selected").val();
                $('#device_id').empty();
                $('#issue_id').empty();
                $.ajax({
                    url: "<?php echo e(url('get/device')); ?>",
                    type: "GET",
                    data:{brand_id:test},
                    cache: false,
                    dataType: 'json',
                    success: function(data){
                        var count = 0;
                        $('#device_id').append("<option selected class='english_num_test' disabled>اختر نوع الهاتف </option>");
                        $('#issue_id').append("<option disabled>اختر المشكلة التي تود حلها  </option>");
                        $.each(data.Devices, function(index){
                            $('#device_id').append("<option  value="+data.Devices[index].Id+" data-id="+count+">"+data.Devices[index].NameAr+"</option>")
                            count++
                        });
                    }
                });
            });

            //issue view
            $( "#device_id" ).change(function() {
                var device_id=  $('#device_id').find(":selected").attr('data-id');
                var brand_id=  $('#brand_id').find(":selected").val();

                $('#issue_id').empty();
                $.ajax({
                    url: "<?php echo e(url('get/issues')); ?>",
                    type: "GET",
                    data:{device_id,brand_id},
                    cache: false,
                    dataType: 'json',
                    success: function(data){
                        // $.session.get('brand_id');
                        // console.log(data)
                        var count = 0;
                        $('#issue_id').append("<option selected disabled> اختر المشكلة التي تود حلها   </option>");
                        $.each(data, function(index,id){
                            $('#issue_id').append("<option value="+data[index].Id+" data-index-id="+count+">"+data[index].NameAr+"</option>")
                            count++
                        });
                    }
                });
            });

            //price
            $( "#issue_id" ).change(function() {
                var brand_id=  $('#brand_id').find(":selected").val();
                var device_id=  $('#device_id').find(":selected").attr('data-id');
                var issue_id=  $('#issue_id').find(":selected").attr('data-index-id');
                $('#price_id').empty();
                $.ajax({
                    url: "<?php echo e(url('get/price')); ?>",
                    type: "GET",
                    data:{device_id,issue_id,brand_id},
                    cache: false,
                    dataType: 'json',
                    success: function(data){
                        $('#price_id').append(data);
                    }
                });
            });
             //day
            $( ".day_id" ).click(function() {
                var clickedBtnID = $(this).attr('id'); // or var clickedBtnID = this.id
                $('#AppointmentDate').val("");
                test=  $(this).attr("data-days-id");
                text=  $(this).attr("data-text");
                value=  $(this).attr("data-value");
                $('#AppointmentDate').attr('data-text',text);
                $('#AppointmentDate').attr('data-value',value);
                const myNode = document.getElementById("appointment_id");
                myNode.innerHTML = '';
                $.ajax({
                    url: "<?php echo e(url('get/appointment')); ?>",
                    type: "GET",
                    data:{test},
                    cache: false,
                    dataType: 'json',
                    success: function(data){

                        $.each(data, function(index){
                            $('#appointment_id').append(
                                "<div class='radio'>"+
                                "<label class='english_num_test'><input class='appointment-active english_num_test' type='radio' name='optradio' data-name='"+data[index].Name+"' value='"+data[index].Id+"'>"+data[index].Name+" "+
                                "</label>" +
                                "</div> " +
                                "<hr>")
                            if(data[index].IsActive==false){

                                $(".appointment-active").attr('disabled','disabled');
                                $(".radio label").css("color","#d0c9c9");
                            }
                        });
                    }
                });
            });
            //code offer
            $( "#OfferCode" ).change(function() {
                var offer_code=  $('#OfferCode').val();
                $.ajax({
                    url: "<?php echo e(url('check/offer')); ?>",
                    type: "GET",
                    data:{offer_code:offer_code},
                    cache: false,
                    dataType: 'json',
                    success: function(data){
                        if(data['Request']== null){
                            toastr.error(data['Message'])
                        }
                    }
                });
            });

            $( "#app-done" ).click(function() {
                $('#AppointmentId').val("");
                date=  $('#AppointmentDate').attr("data-text");
                value=  $('#AppointmentDate').attr('data-value');
                if(!(date)){
                    date=  $('#day-0').attr("data-text");
                    value=  $('#day-0').attr('data-value');
                }
                time=  $("input[name='optradio']:checked").attr('data-name');
                dataTime=  $("input[name='optradio']:checked").val()

                $("#AppointmentId").val(date + ' '+ time);
                $("#AppointmentId").attr('data-date',value);
                $("#AppointmentId").attr('data-time',dataTime);
                $('#myModal1').modal('hide');

            });
            $( "#submit_login" ).click(function(e) {
                e.preventDefault()
                $("#start_alert").empty()
                var email=  $('#email').val();
                var pass=  $('#password').val();

                $.ajax({
                    url: "<?php echo e(url('user/login/ajax')); ?>",
                    type: "GET",
                    data:{email,pass},
                    cache: false,
                    dataType: 'json',
                    success: function(data){
// console.log(data)
                        if (data['Message']){

                            toastr.error(data['Message'])
                            // $('#start_alert').append('<div class="alert alert-danger" role="alert">'+data['Message']+'</div>')// $('#myModalLogin').modal('hide')
                        }else{
                            toastr.success("تم تسجيل الدخول بنجاح ")
                            // $('#start_alert').append('<div class="alert alert-success" role="alert">تم تسجيل الدخول نجاح </div>')
                            if((data['access_token'])) {
                                $('#nav_login').text('');
                                $('#nav_login').html('<li class="nav-item"> <a class="nav-link" href="" data-toggle="modal" data-target="#myModalLogout">تسجيل خروج  </a> </li');
                                $('#submit_order_id').text('');
                                $('#submit_order_id').html('<input type="button" id="submit_order" name="submit" class="btn btn-info-accept-order btn-md" data-toggle="modal" data-target="#myModalAccept" value="تقديم طلب">');
                                // $('#myModalLogin').modal('hide');
                                // $('#myModalRegister').modal('hide');
                                setTimeout(function(){
                                    $('#myModalLogin').modal('hide');
                                    $('#myModalRegister').modal('hide');
                                    // $('#myModal1').modal('hide');
                                    if($('#myModalAccept'))

                                        $('#myModalAccept').modal('show');

                                }, 1000);
                            }
                        }
                    }
                });
            });
            $( "#submit_register" ).click(function(e) {
                e.preventDefault()
                    // .is(':checked')
                if ($("#customSwitches").is(':checked')) {
                    $("#start_alert_register").empty()
                    var full_name = $('#full_name').val();
                    var email = $('#email1').val();
                    var mobile = $('#mobile').val();
                    var password = $('#password1').val();
                    var password_confirmation = $('#password_confirmation').val();

                    $.ajax({
                        url: "<?php echo e(url('user/register/ajax')); ?>",
                        type: "GET",
                        data: {full_name, email, mobile, password, password_confirmation},
                        cache: false,
                        dataType: 'json',
                        success: function (data) {
                            // console.log(data);
                            if (data['error'] != 'api' && data['Message']) {
                                for (var i in data['Message'])
                                    toastr.error(data['Message'][i][0]);
                            } else if (data['error'] == 'api' && data['Message']) {
                                toastr.error(data['Message']);
                                // toastr.error(data['Message'])
                                // $('#start_alert').append('<div class="alert alert-danger" role="alert">'+data['Message']+'</div>')// $('#myModalLogin').modal('hide')
                            } else {
                                toastr.success("تم انشاء حساب جديد بنجاح ")
                                if ((data['access_token'])) {
                                    $('#nav_login').text('');
                                    $('#nav_login').html('<li class="nav-item"> <a class="nav-link" href="" data-toggle="modal" data-target="#myModalLogout">تسجيل خروج  </a> </li');
                                    $('#submit_order_id').text('');
                                    $('#submit_order_id').html('<input type="button" id="submit_order" name="submit" class="btn btn-info-accept-order btn-md" data-toggle="modal" data-target="#myModalAccept" value="تقديم طلب">');
                                    // $('#myModalLogin').modal('hide');
                                    // $('#myModalRegister').modal('hide');
                                    setTimeout(function () {
                                        $('#myModalLogin').modal('hide');
                                        $('#myModalRegister').modal('hide');
                                        if ($('#myModalAccept'))
                                            $('#myModalAccept').modal('show');
                                    }, 1000);
                                }
                                // $('#start_alert').append('<div class="alert alert-success" role="alert">تم تسجيل الدخول نجاح </div>')

                            }
                        }
                    });
                }else{
                    toastr.error('لم تتم الموافقة على الشروط');
                }
            });
        });


    // Initialize and add the map
    $("#submit_data").click(function (){
    var comment=  $('#comment').val();
    var OfferCode=  $('#OfferCode').val();
    var brand_id=  $('#brand_id').val();
    var ColorTypeId=  $('#ColorTypeId').val();
    var device_id=  $('#device_id').find(":selected").val();
    var issue_id=  $('#issue_id').find(":selected").val();
    var price_id=    $('#price_id').text();
    var date_id=  $("#AppointmentId").attr('data-date');
    var time_id=  $("#AppointmentId").attr('data-time');
    var full_date=  $("#AppointmentId").val();
    var lat= $('#map').attr('data-lat');
    var lng= $('#map').attr('data-lng');
    var region_id= $('#map').attr('data-region');
    var GoogleAddress= $('#address_details').attr('data-address');

    // console.log(GoogleAddress)
    var count= $('#submit_data').attr('data-count');
    let accept = 0;
    var orgCount= count;
    while(count>=0){
        if($('#customSwitches-'+count).is(':checked'))
            accept++;
        count--;
    }
    $.session.set('comment', comment);
    $.session.set('brand_id', brand_id);
    $.session.set('OfferCode', OfferCode);
    $.session.set('ColorTypeId', ColorTypeId);
    $.session.set('device_id', device_id);
    $.session.set('issue_id', issue_id);
    $.session.set('price_id', price_id);
    $.session.set('date_id', date_id);
    $.session.set('time_id', time_id);
    $.session.set('full_date', full_date);
    $.session.set('lat', lat);
    $.session.set('lng', lng);
    $.session.set('region_id', region_id);
    $.session.set('GoogleAddress', GoogleAddress);
    $.session.set('count', count);
    $.ajax({
        url: "<?php echo e(url('post/order')); ?>",
        type: "GET",
        data:{comment,OfferCode,ColorTypeId,device_id,issue_id,price_id,date_id,time_id,
            lat,lng,region_id,orgCount,accept,GoogleAddress},
        cache: false,
        dataType: 'json',
        success: function(res,data){
            if(res['success']==1){
                window.location = '<?php echo e(url('successfully-order')); ?>';
                $.session.clear();
            }
            else{
                if ( res['popup']== 0){
                    $('#myModalRegister').modal('show');
                    $('#myModalLogin').modal('hide');
                    $('#myModalAccept').modal('hide');
                }else{
                    if (res['Message']== ''){
                        toastr.success("تم ارسال الطلب بنجاح")
                        $('#myModalAccept').modal('hide');
                        $.session.clear();

                    }else if(res['success']!== 0 && res['Result']== null){
                        toastr.error(res['Message'])
                    }
                    else{
                        for(var i in res['Message'])
                            toastr.error(res['Message'][i][0]);
                    }
                }
            }
        }
    });
});

    $('a[href$="#myModalLogout"]').on( "click", function() {
        $('#myModalLogout').modal('show');
        $.session.clear();
    });
    $('#myModalLogin1').on( "click", function() {
        $('#myModalRegister').modal('hide');
        // $('#myModalRegister').modal('show');
    });
        $('#myModalRegisterClick').on( "click", function() {
            $('#myModalLogin').modal('hide');
            // $('#myModalRegister').modal('show');
        });

        // $('#myModalLogin1').on( "click", function() {
        //     // alert('dkfjkfd');
        //     // $('#myModalRegister').modal('hide');
        //     $('#myModalLogin').modal('show');
        // });

    </script>

    <script>
        function initMap(position) {
            let map;
            let markers = [];
            let myLatlng;

            // Sets the map on all markers in the array.
            function setMapOnAll(map) {
                for (let i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }
// Removes the markers from the map, but keeps them in the array.
            function clearMarkers() {
                setMapOnAll(null);
            }
            function placeMarker(location) {
                clearMarkers();
                markers = [];
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                markers.push(marker);
                // JSON.stringify(location.toJSON(), null, 2)
                markerr = JSON.stringify(location.toJSON(), null, 2)
                myObj = JSON.parse(markerr);
                var lat=myObj['lat'];
                var lng=myObj['lng'];
                var latlng = new google.maps.LatLng(lat, lng);
                // This is making the Geocode request
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'latLng': latlng },
                    (results, status) =>{
                        if (status !== google.maps.GeocoderStatus.OK) {
                            alert(status);
                        }
                        // This is checking to see if the Geoeode Status is OK before proceeding
                        if (status == google.maps.GeocoderStatus.OK) {
                            var address = (results[0].formatted_address);
                            $('#hidden').css('display', 'block');
                            $('#address_details').text(address);
                            $('#address_details').attr('data-address',address);
                        }
                    });
                $.ajax({
                    url: "<?php echo e(url('get/region')); ?>",
                    type: "GET",
                    data:{lat,lng},
                    cache: false,
                    dataType: 'json',
                    success: function(data){
                        if (data['Message']==''){
                            $region_id= data['Result'].Id;
                            $('#map').attr('data-lat',lat);
                            $('#map').attr('data-lng',lng);
                            $('#map').attr('data-region',$region_id);
                            toastr.success(data['Result'].Name);
                        }else{
                            toastr.error(data['Message']);

                        }
                    }
                });
            }
            if($.session.get('lat'))
                myLatlng = new google.maps.LatLng($.session.get('lat'), $.session.get('lng'));
            else
                myLatlng = {lat: position.coords.latitude, lng: position.coords.longitude};
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: myLatlng,
            });

            // Create the initial InfoWindow.
            let infoWindow = new google.maps.InfoWindow({
                position: myLatlng,
            });
            if($.session.get('lat')){
                var latlng = new google.maps.LatLng($.session.get('lat'), $.session.get('lng'));
                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({ location: latlng })
                    .then((response) => {
                        if (response.results[0]) {
                            const marker = new google.maps.Marker({
                                position: latlng,
                                map: map,
                            });
                            markers.push(marker);
                            infoWindow.setContent(response.results[0].formatted_address);
                            infoWindow.open(map, marker);
                        } else {
                            window.alert("No results found");
                        }
                    })
            }else{
                infoWindow.open(map);
            }
            infoWindow.close();
            // Configure the click listener.

            google.maps.event.addListener(map, 'click', function(event) {
                // Close the current InfoWindow.
                placeMarker(event.latLng);

            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/front-end/new-order.blade.php ENDPATH**/ ?>