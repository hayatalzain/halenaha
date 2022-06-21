<?php $__env->startSection('page_css'); ?>
    <style>
        .modal-open .container {
            -webkit-filter: blur(5px);
            filter: blur(5px);
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--Start Hero-->
    <section class="hero-section">
        <div class="container">
            <form action="" >
                <h5 class="text-right text-green mt-4">طلب جديد </h5>
                <div class="row justify-content-center">

                    <div class="col-md-6 mt-4">

                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="images/icon-phone.svg"/>
                                نوع الشركة </p>
                            <div class="input-group mb-3 mt-3 px-5">
                                <select class="custom-select" id="2" aria-label="Example select with button addon">
                                    <option selected>اختر نوع الشركة</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="images/icon-phone.svg"/>
                                نوع الجهاز </p>
                            <div class="input-group mb-3 mt-3 px-5">
                                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                    <option selected>اختر نوع الجهاز</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="images/icon-color.svg"/>
                                لون الجهاز </p>
                            <div class="input-group mb-3 mt-3 px-5">
                                <select class="custom-select" id="3" aria-label="Example select with button addon">
                                    <option selected>اختر لون الجهاز </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="images/icon-setting.svg"/>
                                نوع الخدمة </p>
                            <div class="input-group mb-3 mt-3 px-5">
                                <select class="custom-select" id="4" aria-label="Example select with button addon">
                                    <option selected>اختر نوع الخدمة </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>


                        <!--    <div class="col-md-12">-->
                        <!--        <p class="text-green text-right text-icon ml-3 mt-2">-->
                        <!--            <img class="icon-order" src="images/icon-date.svg"/> تحديد موعد الوصول </p>-->
                        <!--        <div class="form-group px-5">-->
                        <!--            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">-->
                        <!--                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" />-->
                        <!--                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">-->
                        <!--                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--    </div>-->
                        <!--    </div>-->

                        <div class="col-md-12">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="images/icon-note.svg"/>ملاحظات   </p>
                            <div class="form-group">
            <textarea class="form-control ml-5 w-82 mt-3" placeholder="هل هناك ملاحظة تود اخبارنا بها"
                      id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>


                        </div>

                        <div class="col-md-12 mb-3">
                            <p class="text-green text-right text-icon ml-3 mt-2">
                                <img class="icon-order" src="images/icon-wallet.svg"/>
                                المبلغ   </p>
                            <p class="ml-5 mt-2">  ريال سعودي نقداً </p>

                        </div>


                    </div>

                    <div class="col-md-6 mt-4">
                        <h6 class="text-green text-right text-icon mb-2">
                            <img class="icon-order" src="<?php echo e(asset('images/icon-location.svg')); ?>"/>  الموقع</h6>

                        <!--Google map-->
                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                    style="border:0" allowfullscreen></iframe>
                        </div>

                        <!--Google Maps-->
                    </div>
                    <div class="row send-data">
                        <div class="form-group">
                            <input type="button" name="submit" class="btn btn-info-accept-order btn-md"  data-toggle="modal" data-target="#myModalLogin" value="تقديم طلب">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-cancel-gray btn-md"  value="الغاء">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>

    <!--end Hero-->

















































































<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/auth/login-popup.blade.php ENDPATH**/ ?>