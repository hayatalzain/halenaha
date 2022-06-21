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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--Start Hero-->
    <section class="hero-section login-section">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="col">
                            <h5 class="text-green text-right text-icon mt-2 d-inline">
                                <img class="icon-order" src="<?php echo e(asset('images/icon-setting.svg')); ?>"/>مشاكل الصيانة بعد الخدمة</h5>
                            <p class=" ml-4 mt-2 text-justify"> في حال واجهت مشكلة بعد الخدمة المقدمة نرجو رفع تذكرة ضمان على هذا الرابط وسيتم التواصل معك خلال ٧٢ ساعة حد اقصى . </p>
                            <p class=" ml-4 mt-2 text-justify">فضلا نرجو رفع تذكرة ضمان بالمشكلة التي لديك
                                عبر الرابط التالي : </p>
                            <a href="https://forms.gle/8oxhT4pqrsN8UMZY6"
                               type="button" class="btn btn-info-add-ticket btn-md">ارفع تذكرة </a>
                        </div>
                        <hr>
                        <div class="col">
                            <h5 class="text-green text-right text-icon mt-2 ml-4  d-inline">اتصل بنا</h5>
                            <p class="ml-4 mt-2" > <img class="icon-order" src="<?php echo e(asset('images/icon-email.svg')); ?>"/>

                                للتواصل مع الإدارة
                                <a class="text-green" href = "mailto:<?php echo e($info[0]['Value'] ?? ''); ?>">
                                    <?php echo e($info[0]['Value'] ?? ''); ?>

                                </a>

                            </p>


                            <p class="ml-4 mt-2"> <img class="icon-order" src="<?php echo e(asset('images/icon-phone.svg')); ?>"/>

                                <?php echo e($info[1]['Value'] ?? ''); ?>


                            </p>
                            <p class="ml-4 mt-2"> <img class="icon-order" src="<?php echo e(asset('images/icon-location.svg')); ?>"/>
                                Riyadh, Saudi Arabia
                            </p>
                        </div>
                        <hr>

                        <div class="col">
                            <h5 class="text-green text-right text-icon mt-2 ml-4  d-inline">انضم معنا</h5>
                            <p class="text-justify ml-4 mt-2">انضم معنا كفني صيانة جوالات
                                كن جزء من فريق الفنيين الذي يزيد عددهم اكثر من ٩٠ فني حول المملكة ..

                                قدم الطلب عبر هذا الرابط
                                والأولوية بالتواصل حسب الاحتياج للمنطقة او الخدمات التي تسطيع اصلاحه
                            </p>


                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSd8xd2dlCJhihK7nLxi4M-81XFs4n9hpfe2XWJ5OSPwGMijcg/viewform"
                                   type="button" class="btn btn-info-add-customer btn-md">قدم طلب </a>


                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".4s">
                        <div class="single-image">
                            <img src="<?php echo e(asset('images/icon-contact-us.svg')); ?>" alt="service" class="img-fluid showin-mobile ml-4"/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/front-end/contact-us.blade.php ENDPATH**/ ?>