@extends('client.layout.master')

@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="login.html">حساب کاربری</a></li>
                <li><a href="register.html">ثبت نام</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div class="col-sm-9" id="content">
                    <h1 class="title">ورود/ثبت نام  </h1>
{{--                    <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="login.html">صفحه لاگین</a> مراجعه کنید.</p>--}}

                    <form class="form-horizontal" method="post" action="{{route('client.register.verifyOtp',$user)}}">
                        @csrf
                        <fieldset id="account">
                            <legend>کد ارسال شده به ایمیل تان را در کادر پایین وارد کنید</legend>

                            <div class="form-group required">
                                <label for="otp" class="col-sm-2 control-label"> کد یکبار مصرف </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="otp" placeholder=" کد یکبار مصرف" value="" name="otp"
                                           maxlength="5" minlength="5" min="11111" max="99999"
                                    >
                                </div>
                            </div>
                        </fieldset>
{{--                        <fieldset>--}}
{{--                            <legend>رمز عبور شما</legend>--}}
{{--                            <div class="form-group required">--}}
{{--                                <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>--}}
{{--                                <div class="col-sm-10">--}}
{{--                                    <input type="password" class="form-control" id="input-password" placeholder="رمز عبور" value="" name="password">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group required">--}}
{{--                                <label for="input-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>--}}
{{--                                <div class="col-sm-10">--}}
{{--                                    <input type="password" class="form-control" id="input-confirm" placeholder="تکرار رمز عبور" value="" name="confirm">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </fieldset>--}}
                        <div class="buttons">
                            <div class="pull-right">
                                <input type="submit" class="btn btn-primary" value="تایید">
                            </div>
                        </div>
                    </form>
                    @include('errors')
                </div>
            </div>
        </div>
    </div>

@endsection
