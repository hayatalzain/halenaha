<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('script_ceo_successfully'); ?>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-845413558/fdsSCPeSkYADELb5j5MD',
            'value': 1.0,
            'currency': 'SAR'
        });
    </script>
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

        snaptr('track','RESERVE')


    </script>
    <!-- End Snap Pixel Code -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Start Hero-->
    <section class="hero-section login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 wow fadeIn  text-center" data-wow-delay=".4s">
                    <div class="single-successfuly-image ">
                        <img src="<?php echo e(asset('images/successfully.svg')); ?>" alt="service" class="img-fluid"/>
                    </div>
                    <h2 class="text-green  mt-3">تم تقديم طلبك بنجاح</h2>
                    <p class="font-weight-bold  mt-3">سيتم التواصل معك بعد قبول الفني للطلب </p>
                    <div class="col-md-3 offset-md-5">
                        <p class="successfuly-order">  رقم الطلب :

                            <span class="english_num_pure">#
                                <?php echo e($orders['Code']); ?>

                            </span>   </p>
                    </div>
                    <p class="mt-3"><a href="<?php echo e(route('orders')); ?>"><img src="<?php echo e(asset('images/icon-invoices.svg')); ?>" class="img-fluid m-2"/>متابعة الطلبات </a></p>


                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/front-end/successfully-order.blade.php ENDPATH**/ ?>