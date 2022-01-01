@extends('layouts.app')
@section('content')
<section class="account-box">
    <div class="register-logo">
        <a href="{{route('index')}}"><img src="{{asset('assets/v1/user/images/logo.svg')}}" alt=""></a>
    </div>
    <div class="register login">
        <div class="headline">ورود به تک‌کالا</div>
        <div class="content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="mobtel">ایمیل یا شماره موبایل</label>
                <input id="mobtel" type="text" placeholder="پست الکترونیک یا شماره موبایل خود را وارد نمایید" name="email" value="{{ old('email') }}">
                <label for="pwd">کلمه عبور</label>
                <input id="pwd" type="password" placeholder="کلمه عبور خود را وارد نمایید" name="password">
                <div class="acc-agree">
                    <input id="chkbox" type="checkbox" checked name="remember">
                    <label for="chkbox"><span>مرا به خاطر داشته باش</span></label>
                </div>
                <button type="submit"><i class="fa fa-unlock"></i> ورود به تک کالا</button>
            </form>
        </div>
        <div class="foot login-foot">
            <span>کاربر جدید هستید؟</span>
            <a href="{{route('register')}}">ثبت نام در تک کالا</a>
        </div>
        <div class="foot login-foot">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                </a>
            @endif

        </div>
    </div>
</section>

