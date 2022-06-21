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
        .alert-warning {
            color: #7e7e7e;
            background-color: #f8f7f5;
            border-color: #f8f7f5;
        }
    </style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!--Start Hero-->

    <section class="hero-section login-section">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="col">
                            <h6 class="text-green text-right text-icon mt-2 mb-3">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-faq.svg')); ?>"/>الأسئلة الشائعة</h6>

                            <?php if(is_array($faqs) || is_object($faqs)): ?>
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="sub-faq">
                                <p class="text-green text-right mt-2">
                                    <img class="pr-3 ml-2" src="<?php echo e(asset('images/icon-vertical-line.svg')); ?>"/>

                                    <?php echo e($faq['Question']?? ''); ?>

                                </p>
                                <p class="mt-2">
                                    <?php echo e($faq["Answer"] ?? ''); ?>

                                </p>

                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php else: ?>
                                <div class="alert alert-warning">
                                   شكراً لزيارتك ، سيتم تحديث البيانات
                                </div>
                            <?php endif; ?>


                        </div>

                        <hr>

                        <div class="col">
                            <h6 class="text-green text-right text-icon mt-2 mb-3">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-conditions.svg')); ?>"/>الشروط والأحكام</h6>

                            <p class="mt-2">

                                <a href="http://halenaha.com/privacy/customer">www.halenaha.com</a></p>

                        </div>
                        <hr>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".4s">
                        <div class="single-image">
                            <img src="<?php echo e(asset('images/conditions.svg')); ?>" alt="service" class="img-fluid showin-mobile ml-4"/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/front-end/faq.blade.php ENDPATH**/ ?>