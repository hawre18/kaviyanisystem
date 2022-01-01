@extends('layouts.app')
@section('content')
<section class="account-box">
    <div class="register-logo">
        <a href="{{route('index')}}"><img src="{{asset('assets/v1/user/images/logo.svg')}}" alt=""></a>
    </div>
    <div class="register">
        <div class="headline">ثبت‌نام در تک‌کالا</div>
        <div class="content">
            <span class="hint">اگر قبلا با ایمیل ثبت‌نام کرده‌اید، نیاز به ثبت‌نام مجدد با شماره همراه ندارید</span>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="mobtel">ایمیل یا شماره موبایل</label>
                <input id="mobtel" type="text" placeholder="پست الکترونیک یا شماره موبایل خود را وارد نمایید" name="email" value="{{ old('email') }}">
                <label for="pwd">کلمه عبور</label>
                <input id="pwd" type="password" placeholder="کلمه عبور خود را وارد نمایید" name="password">
                <div class="acc-agree">
                    <input id="chkbox" type="checkbox" name="law">
                    <label for="chkbox">
                        <a href="#">حریم خصوص</a>
                        <span>و</span>
                        <a href="#">شرایط و قوانین</a>
                        <span> استفاده از سرویس های سایت تک‌کالا را مطالعه نموده و با کلیه موارد آن موافقم.</span>
                    </label>
                </div>
                <button type="submit"><i class="fa fa-unlock"></i> ورود به تک کالا</button>
            </form>
        </div>
        <div class="foot">
            <span>قبلا در تک‌کالا ثبت‌نام کرده‌اید؟</span>
            <a href="{{ route('login') }}">وارد شوید</a>
        </div>
    </div>
</section>
@endsection

