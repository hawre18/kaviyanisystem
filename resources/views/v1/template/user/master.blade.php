<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>فروشگاه اینترنتی</title>
    <link rel="stylesheet" href="{{asset('assets/v1/user/vendor/fontawesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/v1/user/vendor/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/v1/user/vendor/slicknav/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/v1/user/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/v1/user/css/mediaq.css')}}">
</head>

<body>
<header>
    <section class="top-head container">
        <div class="right-head">
            <div class="logo">
                <a href="index.html"><img src="{{asset('assets/v1/user/images/logo.svg')}}" ></a>
            </div>
            <form action="#">
                <button><i class="fa fa-search"></i></button>
                <input type="text" placeholder="جستجو در دیجی شاپ ...">
            </form>
        </div>
        <div class="left-head">
            <div class="login-box">
                <div class="log-reg" id="logreg">
                    <i class="fa fa-user"></i>
                    <a href="{{route('login')}}"> ورود به حساب کاربری </a>

                    <!--<div class="user-modal">
                        <a class="login" href="#">ورود به دیجی کالا</a>
                        <div class="newuser">
                            <span>کاربر جدید هستید؟</span>
                            <a href="#">ثبت نام</a>
                        </div>
                        <a class="profile" href="#"><i class="fa fa-user"></i> پروفایل</a>
                        <a class="order" href="#"><i class="fa fa-folder"></i> پیگیری سفارش</a>
                    </div>-->
                </div>
            </div>
            <div class="devider"></div>

            <a href="cart.html" class="cart">
                <i class="fa fa-shopping-cart"></i>
            </a>
        </div>


    </section>

    <nav class="top-nav container">
        <ul class="dropdown" id="mynavmenu">
            <li class="main-category"><i class="fa fa-bars"></i><a href="#">دسته بندی کالاها</a>
                <ul class="dropdown2">
                    <li><a href="#">کالای دیجیتال</a>
                        <ul class="megamenu">
                            <li><a href="#">موبایل</a>
                                <ul>
                                    <li><a href="#">مدل موبایل</a></li>
                                    <li><a href="#">کیف و کاور</a></li>
                                    <li><a href="#">پاور بانک</a></li>
                                    <li><a href="#">پایه نگهدارنده</a></li>
                                </ul>
                            </li>
                            <li><a href="#">کامپیوتر</a>
                                <ul>
                                    <li><a href="#">ماوس</a></li>
                                    <li><a href="#">کیبورد</a></li>
                                    <li><a href="#">مانیتور</a></li>
                                </ul>
                            </li>
                            <li><a href="#">تجهیزات اداری</a>
                                <ul>
                                    <li><a href="#">کالای اول</a></li>
                                    <li><a href="#">کالای دوم</a></li>
                                    <li><a href="#">کالای سوم</a></li>
                                </ul>
                            </li>
                            <li><a href="#">تبلت</a>
                                <ul>
                                    <li><a href="#">لنوو</a></li>
                                    <li><a href="#">سامسونگ</a></li>
                                    <li><a href="#">ایسوس</a></li>
                                </ul>
                            </li>
                            <li><a href="#">دوربین</a>
                                <ul>
                                    <li><a href="#">کیف,کوله و کاور</a></li>
                                    <li><a href="#">کابل ها رابط و مبدل</a></li>
                                    <li><a href="#">کابل صدا و HDMI</a></li>
                                </ul>
                            </li>
                            <li><a href="#">لوازم جانبی لپ تاپ</a>
                                <ul>
                                    <li><a href="#">کیف,کوله و کاور</a></li>
                                    <li><a href="#">کابل ها رابط و مبدل</a></li>
                                    <li><a href="#">کابل صدا و HDMI</a></li>
                                </ul>
                            </li>

                            <li><a href="#">اسکوتر برقی</a>
                                <ul>
                                    <li><a href="#">کالای اول</a></li>
                                    <li><a href="#">کالای دوم</a></li>
                                    <li><a href="#">کالای سوم</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ماشین های اداری</a>
                                <ul>
                                    <li><a href="#">لوازم جانبی پرینتر</a></li>
                                    <li><a href="#">فکس</a></li>
                                    <li><a href="#">تلقن و بیسیم</a></li>
                                </ul>
                            </li>
                            <li><a href="#">مچ بند و ساعت هوشمند</a>
                                <ul>
                                    <li><a href="#">لوازم جانبی پرینتر</a></li>
                                    <li><a href="#">فکس</a></li>
                                    <li><a href="#">تلقن و بیسیم</a></li>
                                </ul>
                            </li>
                            <li><a href="#">دوربین های تحت شبکه</a>
                                <ul>
                                    <li><a href="#">لوازم جانبی پرینتر</a></li>
                                    <li><a href="#">فکس</a></li>
                                    <li><a href="#">تلقن و بیسیم</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">آرایشی و بهداشتی</a></li>
                    <li><a href="#">مد و پوشاک</a></li>
                    <li><a href="#">خانه و آشپزخانه</a></li>
                    <li><a href="#">ورزش و سفر</a></li>
                    <li><a href="#">کتاب,لوازم تحریر</a></li>
                    <li><a href="#">سوپرمارکت</a></li>
                </ul>
            </li>
            <li><a href="#">سوپرمارکت</a></li>
            <li><a href="#">تخفیف ها و پیشنهادها</a></li>
            <li><a href="#">دیجی شاپ من</a></li>
            <li><a href="#">دیجی کلاب</a></li>
            <li><a href="#">سوالی دارید؟</a></li>
            <li><a href="#">فروشنده شوید</a></li>
        </ul>
        <ul class="promotion"><li><a href="#">لطفا شهر و استان خود را انتخاب کنید</a><i class="fa fa-map-marker"></i></li></ul>

    </nav>

</header>
@yield('content')
<footer>
    <section class="footer container">
        <div class="icon">
            <div class="icon-item">
                <a href="#"> <img src="{{asset('assets/v1/user/images/icon/1.svg')}}" alt=""> <span>7 روز ضمانت بازگشت</span> </a>
            </div>
            <div class="icon-item">
                <a href="#"> <img src="{{asset('assets/v1/user/images/icon/2.svg')}}" alt=""> <span>پرداخت در محل</span> </a>
            </div>
            <div class="icon-item">
                <a href="#"> <img src="{{asset('assets/v1/user/images/icon/4.svg')}}" alt=""> <span>تحویل اکسپرس</span> </a>
            </div>
            <div class="icon-item">
                <a href="#"> <img src="{{asset('assets/v1/user/images/icon/3.svg')}}" alt=""> <span>پشتیبانی ۲۴ ساعته</span> </a>
            </div>
            <div class="icon-item">
                <a href="#"> <img src="{{asset('assets/v1/user/images/icon/5.svg')}}" alt=""> <span>ضمانت اصل بودن کالا</span> </a>
            </div>
        </div>
        <div class="footer-content">
            <div class="shop-help">
                <h3 class="head">راهنمای خرید از شاپ</h3>
                <ul>
                    <li><a href="#">نحوه ثبت سفارش</a></li>
                    <li><a href="#">رویه ارسال سفارش</a></li>
                    <li><a href="#">شیوه های پرداخت</a></li>
                </ul>
            </div>
            <div class="customer-service">
                <h3 class="head">خدمات مشتریان</h3>
                <ul>
                    <li><a href="#">پاسخ به پرسش های متداول</a></li>
                    <li><a href="#">رویه های بازگرداندن کالا</a></li>
                    <li><a href="#">حریم خصوصی</a></li>
                </ul>
            </div>
            <div class="newsletter">
                <h3 class="head">از تخفیف ها و جدیدترین های شاپ با خبر باشید</h3>
                <div class="content">
                    <form action="#">
                        <input type="text">
                        <button type="submit">ارسال</button>
                    </form>
                    <h3 class="head">ما را در شبکه های اجتماعی دنبال کنید</h3>
                    <div class="social"> <a href=""><i class="fa fa-instagram"></i></a> <a href=""><i class="fa fa-twitter-square"></i></a> <a href=""><i class="fa fa-facebook-square"></i></a> <a href=""><i class="fa fa-google-plus-square"></i></a></div>
                </div>
            </div>
            <div class="cert">
                <h3 class="head">مجوزهای فروشگاه</h3>
                <div class="image"> <img src="{{asset('assets/v1/user/images/cert/enamad.png')}}" alt=""> <img src="{{asset('assets/v1/user/images/cert/samandehi.png')}}" alt=""></div>
            </div>
        </div>
        <div class="footer-contact">
            <div class="contact"> <span>هفت روز هفته, ۲۴ ساعت شبانه روز پاسخگوی شما هستیم,</span> <span>شماره تماس : ۰۴۴-۳۳۳۳</span> <span>آدرس ایمیل : info@site.com</span></div>
            <div class="app"> <img src="{{asset('assets/v1/user/images/bazar.png')}}" alt=""> <img src="{{asset('assets/v1/user/images/sibapp.png')}}" alt=""></div>
        </div>
        <div class="copyright">
            <p>استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت فلان (فروشگاه آنلاین دیجی‌کالا) می‌باشد.</p>
        </div>
    </section>
</footer>
<script src="{{asset('assets/v1/user/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/v1/user/vendor/swiper/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/v1/user/vendor/slicknav/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('assets/v1/user/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/v1/user/vendor/persianumber.min.js')}}"></script>
<script src="{{asset('assets/v1/user/vendor/elevatezoom.js')}}"></script>
<script src="{{asset('assets/v1/user/js/script.js')}}"></script>
</body>

</html>
