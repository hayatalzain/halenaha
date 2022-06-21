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
                    <div class="col-lg-6 v-center">
                        <div class="header-heading">
                            <div id="login">
                                <div class="container">
                                    <div id="login-row" class="row justify-content-center align-items-center">
                                        <div id="login-column" class="col-md-9">
                                            <div id="login-box" class="col-md-11">

                                                <form id="login-form" class="form" action="{{route('forget.pass.send')}}" method="get">
                                                    {{ csrf_field() }}

                                                    <h4 class="text-right text-main-login">هل نسيت كلمة المرور </h4>
                                                    @if(session()->has('error'))
                                                        <div class="alert alert-danger">
                                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                            {{ session()->get('error') }}
                                                        </div>
                                                    @elseif(session()->has('success'))
                                                        <div class="alert alert-success">
                                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                            {{ session()->get('success') }}
                                                        </div>
                                                    @endif
                                                    <div class="form-group">
                                                        <label for="Email" class="mb-4">ادخل البريد الالكتروني الخاص بالاشتراك </label>
                                                        <input type="email" placeholder="ادخل البريد الالكتروني " name="Email" id="Email"
                                                               value="{{ old('Email') }}" class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}">
                                                        @if ($errors->has('Email'))
                                                            <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('Email') }}</strong>
                                                   </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="submit" name="submit" class="btn btn-info-login btn-md" value="ارسـال">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".4s">
                        <div class="single-image mt-md-5">
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
