@extends('master.master')
@section('title',$title)

@section('page_css')

@endsection

@section('content')
    <!--Start Hero-->
    <section class="hero-section login-section">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 v-center">
                        <div class="header-heading">
                            <div id="login">
                                <div class="container">
                                    <div id="login-row" class="row justify-content-center align-items-center">
                                        <div id="sign-in-box" class="col-md-11">
                                            <form id="sign-in-form" class="form" method="get" action="{{ route('register.store') }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" placeholder="Id"  name="Id" id="Id" value="{{ old('Id') }}" class="form-control">

                                                <h4 class="text-right text-main-register">انشاء حساب جديد </h4>
                                                @if(session()->has('error'))
                                                    <div class="alert alert-danger">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        {{ session()->get('error') }}

                                                    </div>
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" required placeholder="الاسم بالكامل"  name="FullName" id="FirstName" value="{{ old('FullName') }}" class="form-control {{ $errors->has('FullName') ? ' is-invalid' : '' }}">
                                                            @if ($errors->has('FullName'))
                                                                <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('FullName') }}</strong>
                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" required placeholder="بريد الكتروني" name="Email" id="email" value="{{ old('Email') }}" class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}">

                                                            @if ($errors->has('Email'))
                                                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('Email') }}</strong>
                                          </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="number" required placeholder=" رقم الجوال" min="0" max="9999999999" name="Mobile" id="mobil" value="{{ old('Mobile') }}" class="form-control{{ $errors->has('Mobile') ? ' is-invalid' : '' }}">
                                                            @if ($errors->has('Mobile'))
                                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('Mobile') }}</strong></span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="password" required placeholder="كلمة المرور" name="Password" id="password" value="{{ old('Password') }}" class="form-control{{ $errors->has('Password') ? ' is-invalid' : '' }}">
                                                            @if ($errors->has('Password'))
                                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('Password') }}</strong></span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" required placeholder="تأكيد كلمة المرور" name="password_confirmation" id="" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" >
                                                            @if ($errors->has('password_confirmation'))
                                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('password_confirmation') }}</strong></span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-switch mt-2">
                                                            <input type="checkbox"  required class="custom-control-input" id="customSwitches">
                                                            <label class="custom-control-label" for="customSwitches">الموافقة على الشروط والأحكام</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="rules-link text-left">
                                                            <p class="font-weight-bold"><a href="http://halenaha.com/privacy/customer">الشروط والاحكام</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group text-center">
                                                    <input type="submit" class="btn btn-info-sign-in btn-md" value="انشاء حساب ">
                                                    <div class="rules-link">
                                                        <p class="font-link">هل تمتلك حساب ؟<a href="{{route('login')}}">قم بتسجيل الدخول </a></p>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn mt-5" data-wow-delay=".4s">
                        <div class="single-image">
                            <img src="{{asset('images/Group1880.svg')}}" alt="service" class="img-fluid showin-mobile"/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

@endsection

@section('script')
@endsection
