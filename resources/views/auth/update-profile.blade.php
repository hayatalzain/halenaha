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
                                        <div id="sign-in-box" class="col-md-9">
                                            <form id="sign-in-form" class="form" method="get" action="{{ route('update.profile.store')}}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="UserId" id="Id" value="{{$id}}" class="form-control">

                                                <h4 class="text-right text-main-register"> تحديث بيانات المستخدم </h4>
                                                @if(session()->has('success'))
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        {{ session()->get('success') }}
                                                    </div>
                                                @endif
                                                        <div class="form-group">
                                                            <input type="text" placeholder="الاسم بالكامل"  name="FullName" id="FirstName" value="{{$name}}" class="form-control {{ $errors->has('FullName') ? ' is-invalid' : '' }}">
                                                            @if ($errors->has('FullName'))
                                                                <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('FullName') }}</strong>
                                                </span>
                                                            @endif

                                                        </div>

                                                        <div class="form-group">
                                                            <input type="email" placeholder="الايميل" name="Email" id="email" value="{{$email}}" class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}">
                                                            @if ($errors->has('Email'))
                                                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('Email') }}</strong>
                                          </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="number" placeholder=" رقم الجوال"  name="Mobile" id="mobil" value="{{$mobile}}" class="english_num_pure form-control{{ $errors->has('Mobile') ? ' is-invalid' : '' }}">
                                                            @if ($errors->has('Mobile'))
                                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('Mobile') }}</strong></span>
                                                            @endif
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
