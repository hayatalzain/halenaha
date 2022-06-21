<?php $__env->startSection('page_css'); ?>
    <style>
        /*.modal-open .container {*/
        /*    -webkit-filter: blur(5px);*/
        /*    filter: blur(5px);*/
        /*}*/
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 3vw;
            color: #FFD600;
            cursor: pointer
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }

        @media  only screen and (max-width: 600px) {
            .rating>label {
                position: relative;
                width: 1em;
                font-size: 9vw;
                color: #FFD600;
                cursor: pointer;
            }


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

                    <div class="row send-data">
                        <div class="form-group">

                            <input type="button" name="submit" class="btn btn-info-accept-order btn-md"  data-toggle="modal" data-target="#myModalRating" value="تقديم طلب">
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

    <!-- The Modal -->
    <div class="modal" id="myModalRating">
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

                                        <h4 class="text-center mb-3 text-green">تقييم الخدمة</h4>
                                        <div class="container d-flex justify-content-center mt-200">
                                            <form id="login-form" class="form" action="<?php echo e(route('rating.create')); ?>" method="post">
                                            <div class="stars">
                                                            <h6 class="text-green"> قيم الخدمة </h6>

                                                            <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                                            </div>
                                                                <h6 class="text-green"> تعليقك </h6>
                                                                <div class="form-group">
            <textarea class="form-control w-100 " placeholder="تعليقك"
                      id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                </div>
                                                            <div class="form-group">
                                                                <input type="submit" name="submit" class="btn btn-info-login btn-md mx-auto d-block" value="تقييم ">
                                                            </div>
                                                </div>
                                            </form>
                                        </div>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\newh\resources\views/front-end/rating-popup.blade.php ENDPATH**/ ?>