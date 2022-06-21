


<?php $__env->startSection('page_css'); ?>

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
                    <h2 class="text-green  mt-3">تم انشاء حساب جديد</h2>
                    <p class="font-weight-bold  mt-3">قم بتسجيل الدخول لتتمتع بالمزيد من خدمات حليناها </p>
                    <div class="col-md-3 offset-md-5">
                        <a href="<?php echo e(route('login')); ?>">     <p class="successfuly-order">

                           تسجيل الدخول   </p></a>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/front-end/successfully-sign-in.blade.php ENDPATH**/ ?>