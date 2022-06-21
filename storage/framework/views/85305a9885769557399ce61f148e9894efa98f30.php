<?php $__env->startSection('title',$title); ?>
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
    <style>
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #40386f;
            border-color: #40386f;
        }
        .page-link{
            color: #40386f;
        }
        .page-link:focus {
            z-index: 2;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgb(64 56 111 / 25%);
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Start Hero-->
    <section class="hero-section login-section">
        <div class="text-block">
            <div class="container">
                <h5 class="text-right mb-5 text-green mt-4">الطلبات</h5>
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <?php echo e(session()->get('success')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <?php echo e(session()->get('error')); ?>

                    </div>
                <?php endif; ?>
                <div class="justify-content-center">
                    <?php if(!empty($orders)): ?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12 mb-5 text-center" >

                        <a href="<?php echo e(url('details-order/'.$order['Id'])); ?>">
                        <div class  ="bg-white">
                            <h6 class="text-right text-num-order ml-3">
                                 طلب رقم : 	&nbsp;
                               <span class='english_num_pure'> <?php echo e($order['Code'] ?? ''); ?></span>

                            </h6>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-3 icon-size-mobile">
                                    <p class="text-green text-right text-icon ml-3 mt-2" data-toggle="tooltip" data-placement="bottom" title="حالة الطلب"><img class="icon-order" src="<?php echo e(asset('images/icon-info.svg')); ?>"/>
                                        <?php echo e($order["OrderStatus"] ?? ''); ?>


                                    </p>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2 icon-size-mobile">
                                    <p class="text-green text-right text-icon ml-3 mt-2" data-toggle="tooltip" data-placement="bottom" title="نوع الجوال"><img class="icon-order" src="<?php echo e(asset('images/icon-phone.svg')); ?>"/>
                                        <?php echo e($order["DeviceNameAr"] ?? ''); ?></p>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3 icon-size-mobile">
                                    <p class="text-green text-right text-icon ml-3 mt-2" data-toggle="tooltip" data-placement="bottom" title="المشكلة "><img class="icon-order" src="<?php echo e(asset('images/icon-setting.svg')); ?>"/>
                                        <?php echo e($order["IssueNameAr"] ?? ''); ?></p>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2 icon-size-mobile">
                                    <p class="text-green text-right text-icon ml-3 mt-2" data-toggle="tooltip" data-placement="bottom" title="ساعة ارسال الطلب "><img class="icon-order" src="<?php echo e(asset('images/icon-clock.svg')); ?>"/>

                                        <span class='english_num_pure'>
                                            <?php echo e(date('H:i A', strtotime($order["RequestDate"])) ?? ''); ?></span></p>

                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2 icon-size-mobile">
                                    <p class="text-green text-right text-icon ml-3 mt-2" data-toggle="tooltip" data-placement="bottom" title="تاريخ انشاء الطالب"><img class="icon-order" src="<?php echo e(asset('images/icon-date.svg')); ?>"/>

                                        <span class='english_num_pure'>
                                        <?php echo e(date('Y-m-d', strtotime($order["RequestDate"])) ?? ''); ?>

                                        </span></p>

                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php else: ?>
                        <div class="alert alert-warning">
لايوجدطلبات لعرضها
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/front-end/orders.blade.php ENDPATH**/ ?>