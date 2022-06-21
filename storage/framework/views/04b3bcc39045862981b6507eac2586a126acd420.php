<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('page_css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--Start Hero-->
    <section class="hero-section login-section">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="header-heading">
                            <div id="login">
                                <div class="container">
                                    <div id="login-row" class="row justify-content-center align-items-center">
                                        <div id="sign-in-box" class="col-md-9">
                                            <form id="sign-in-form" class="form" method="get" action="<?php echo e(route('update.profile.store')); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                <input type="hidden" name="UserId" id="Id" value="<?php echo e($id); ?>" class="form-control">

                                                <h4 class="text-right text-main-register"> تحديث بيانات المستخدم </h4>
                                                <?php if(session()->has('success')): ?>
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        <?php echo e(session()->get('success')); ?>

                                                    </div>
                                                <?php endif; ?>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="الاسم بالكامل"  name="FullName" id="FirstName" value="<?php echo e($name); ?>" class="form-control <?php echo e($errors->has('FullName') ? ' is-invalid' : ''); ?>">
                                                            <?php if($errors->has('FullName')): ?>
                                                                <span class="invalid-feedback" role="alert">
                                               <strong><?php echo e($errors->first('FullName')); ?></strong>
                                                </span>
                                                            <?php endif; ?>

                                                        </div>

                                                        <div class="form-group">
                                                            <input type="email" placeholder="الايميل" name="Email" id="email" value="<?php echo e($email); ?>" class="form-control<?php echo e($errors->has('Email') ? ' is-invalid' : ''); ?>">
                                                            <?php if($errors->has('Email')): ?>
                                                                <span class="invalid-feedback" role="alert">
                                         <strong><?php echo e($errors->first('Email')); ?></strong>
                                          </span>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="number" placeholder=" رقم الجوال"  name="Mobile" id="mobil" value="<?php echo e($mobile); ?>" class="english_num_pure form-control<?php echo e($errors->has('Mobile') ? ' is-invalid' : ''); ?>">
                                                            <?php if($errors->has('Mobile')): ?>
                                                                <span class="invalid-feedback" role="alert">
                                                 <strong><?php echo e($errors->first('Mobile')); ?></strong></span>
                                                            <?php endif; ?>
                                                        </div>

                                                <div class="form-group text-center">
                                                    <input type="submit" class="btn btn-info-update-profile btn-md" value="حفظ التعديل ">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeIn mt-5" data-wow-delay=".4s">
                        <div class="single-image">
                            <img src="<?php echo e(asset('images/Group1880.svg')); ?>" alt="service" class="img-fluid showin-mobile"/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/auth/update-profile.blade.php ENDPATH**/ ?>