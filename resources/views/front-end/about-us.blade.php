@extends('master.master')
@section('title',$title)
@section('script_ceo_main')
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
@endsection


@section('content')
    <!--Start Hero-->
    <section class="hero-section login-section">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="col">
                            <h4 class="text-green text-right text-icon mt-2 d-inline">
                     عن حليناها
                            </h4>
                            <p class="blockquote text-justify ml-4 mt-2"> خدمة حليناها تعتبر الأكبر والأهم لتقديم خدمات صيانة الجوالات الذكية في موقع العميل وتصل هذه الخدمة الى ابرز المدن حول المملكة لتوفر سهولة وسرعة الطلب على المستخدم وتحل مشكلة العناء والتعب في البحث بين محلات صيانة الجوالات التقليدية والدخول في متاهات الأسعار والجودة المتباينة..</p>

                            <p class="blockquote text-justify ml-4 mt-2">حليناها تهتم دائماً بعمليها بالحرص على توفير افضل جودة مع ضمان بعد الخدمة وتسهيل عملية الطلب على المستخدم لتضمن تجربة أفضل .</p>

                        </div>

                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".4s">
                        <div class="single-image">
                            <img src="{{asset('images/icon-contact-us.svg')}}" alt="service" class="img-fluid showin-mobile ml-4"/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

@endsection

@section('script')
@endsection
