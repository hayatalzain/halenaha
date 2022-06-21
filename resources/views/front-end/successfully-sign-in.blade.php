@extends('master.master')
{{--@section('title',$title)--}}

@section('page_css')

@endsection

@section('content')

    <!--Start Hero-->
    <section class="hero-section login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 wow fadeIn  text-center" data-wow-delay=".4s">
                    <div class="single-successfuly-image ">
                        <img src="{{asset('images/successfully.svg')}}" alt="service" class="img-fluid"/>
                    </div>
                    <h2 class="text-green  mt-3">تم انشاء حساب جديد</h2>
                    <p class="font-weight-bold  mt-3">قم بتسجيل الدخول لتتمتع بالمزيد من خدمات حليناها </p>
                    <div class="col-md-3 offset-md-5">
                        <a href="{{route('login')}}">     <p class="successfuly-order">

                           تسجيل الدخول   </p></a>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->
@endsection

@section('script')
@endsection
