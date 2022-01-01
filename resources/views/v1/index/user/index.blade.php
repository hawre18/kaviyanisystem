@extends('v1.template.user.master')
@section('content')
<article class="main-article">
    <!--<div class="main-slider">
        <a class="slide-item" href="#" target="_blank" style="background-image: url(assets/images/slider/slide9.jpg)"> </a>
    </div>-->
    <div id="mainslider" class="main-slider swiper-container">
        <div class="swiper-wrapper">
            <a href="#" target="_blank" class="slide-item swiper-slide" style="background-image: url({{asset('assets/v1/user/images/slider/slide6.jpg')}})"> </a>
            <a href="#" target="_blank" class="slide-item swiper-slide" style="background-image: url({{asset('assets/v1/user/images/slider/slide7.jpg')}})"> </a>
            <a href="#" target="_blank" class="slide-item swiper-slide" style="background-image: url({{asset('assets/v1/user/images/slider/slide8.jpg')}})"> </a>
            <a href="#" target="_blank" class="slide-item swiper-slide" style="background-image: url({{asset('assets/v1/user/images/slider/slide9.jpg')}})"> </a>
        </div>
        <div id="mslider-nbtn" class="swiper-button-next"></div>
        <div id="mslider-pbtn" class="swiper-button-prev"></div>
        <div class="swiper-pagination mainslider-btn"></div>
    </div>
    <aside class="c-adplacement">
        <a href="#"><img src="{{asset('assets/v1/user/images/slider/1000020035.gif')}}" alt=""></a>
        <a href="#" ><img src="{{asset('assets/v1/user/images/slider/1000020024.jpg')}}" alt=""></a>
    </aside>
</article>
<div class="clear"></div>

<div class="c-swiper-specials--incredible">
    <section class="icontainer">
        <a href="#" class="specials__title">
            <img src="{{asset('assets/v1/user/images/d9b15d68.png')}}" alt="پیشنهاد شگفت‌انگیز">
            <div class="specials__btn">مشاهده همه</div>
        </a>
        <div class="swiper--specials">
            <div id="inc-slider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/965174.jpg')}}" alt=""></a>
                        <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                        <div class="inc-product-price">
                            <del>۲,۴۵۶,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                            <span class="price">۱,۴۳۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/30 08:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/112948101.jpg')}}" alt=""></a>
                        <a class="title" href="#">گوشی موبایل شیائومی مدل Mi 9T M1903F10G دو سیم‌ کارت</a>
                        <div class="inc-product-price">
                            <del>۸۷,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                            <span class="price">۴۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/26 14:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/112551619.jpg')}}" alt=""></a>
                        <a class="title" href="#">گوشی موبایل سامسونگ مدل Galaxy Note 10 Plus N975F/DS</a>
                        <div class="inc-product-price">
                            <del>۱۲,۴۵۶,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                            <span class="price">۹,۴۳۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/07 12:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/111253599.jpg')}}" alt=""></a>
                        <a class="title" href="#">تبلت سامسونگ مدل Galaxy Tab S5e 10.5 LTE 2019 SM-T725 </a>
                        <div class="inc-product-price">
                            <del>۶,۶۴۵,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                            <span class="price">۴,۳۵۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/09 18:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/113944020.jpg')}}" alt=""></a>
                        <a class="title" href="#">اندروید باکس مدل R69</a>
                        <div class="inc-product-price">
                            <del>۲,۵۴۶,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۶۶٪</span></div>
                            <span class="price">۱,۴۳۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/25 20:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/2901119.jpg')}}" alt=""></a>
                        <a class="title" href="#">دسته بازی هویت مدل G89W</a>
                        <div class="inc-product-price">
                            <del>۸۷,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                            <span class="price">۴۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/10 20:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                </div>
            </div>
    </section>
</div>
<section class="image-row container">
    <a href="#"><img src="{{asset('assets/v1/user/images/inc1.jpg')}}" alt=""></a>
    <a href="#"><img src="{{asset('assets/v1/user/images/inc2.jpg')}}" alt=""></a>
    <a href="#"><img src="{{asset('assets/v1/user/images/inc3.jpg')}}" alt=""></a>
    <a href="#"><img src="{{asset('assets/v1/user/images/inc4.jpg')}}" alt=""></a>
</section>
<div class="c-swiper-specials--incredible c-swiper-specials--fresh">
    <section class="icontainer">
        <a href="#" class="specials__title">
            <img src="{{asset('assets/v1/user/images/8af90c4b.png')}}" alt="پیشنهاد شگفت‌انگیز">
            <div class="specials__btn">مشاهده همه</div>
        </a>
        <div class="swiper--specials">
            <div id="sp-slider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/112178547.jpg')}}" alt=""></a>
                        <a class="title" href="#">کنسرو ماهی تون در روغن ماوی مقدار 180 گرم</a>
                        <div class="inc-product-price">
                            <del>۲۴۵,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۳٪</span></div>
                            <span class="price">۱۴۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/30 08:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/110534625.jpg')}}" alt=""></a>
                        <a class="title" href="#">ماست سبو پروبیوتیک هراز - 2000 گرم</a>
                        <div class="inc-product-price">
                            <del>۸۷,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                            <span class="price">۴۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/30 08:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/113929782.jpg')}}" alt=""></a>
                        <a class="title" href="#">میگو سایز 90-71 بیستون - 500 گرم</a>
                        <div class="inc-product-price">
                            <del>۱۲۶,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۶۳٪</span></div>
                            <span class="price">۳۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/30 08:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/119512276.jpg')}}" alt=""></a>
                        <a class="title" href="#">شکر قهوه ای بن مانو مقدار 500 گرم</a>
                        <div class="inc-product-price">
                            <del>۴,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۵۰٪</span></div>
                            <span class="price">۳۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/30 08:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/114418008.jpg')}}" alt=""></a>
                        <a class="title" href="#">فرآورده کاکائویی مغزدار شیری باراکا - 450 گرم </a>
                        <div class="inc-product-price">
                            <del>۵۶,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۶٪</span></div>
                            <span class="price">۳۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/30 08:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="{{asset('assets/v1/user/images/110228964.jpg')}}" alt=""></a>
                        <a class="title" href="#">کوکی اسمارتیزی لاکچری گرجی وزن 350 گرم</a>
                        <div class="inc-product-price">
                            <del>۸۷,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                            <span class="price">۴۳,۰۰۰ </span>تومان
                        </div>
                        <div class="c-product-box__amazing">
                            <div class="c-product-box__timer" data-countdown="2021/08/30 08:22:22">۱۲:۵۲:۳۹</div>
                        </div>
                    </div><!--item-->
                </div>
            </div>
    </section>
</div>
<section class="product-wrapper container">
    <div class="headline">
        <h3>کالای دیجیتال</h3></div>
    <div id="pslider" class="swiper-container">
        <div class="product-box swiper-wrapper">
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/965174.jpg')}}" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/537196.jpg')}}" alt=""></a> <a class="title" href="#">تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43 اینچ</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/112544124.jpg')}}" alt=""></a> <a class="title" href="#">گوشی موبایل سامسونگ مدل Galaxy Note 10 SM-N970F/DS دو سیم‌کارت </a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/3307715.jpg')}}" alt=""></a> <a class="title" href="#">کارت حافظه microSDXC ویکو من مدل Final 600X کلاس 10 استاندارد UHS-I</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/112309225.jpg')}}" alt=""></a> <a class="title" href="#">دسته بازی بی سیم یوکام کد 8008</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/119239538.jpg')}}" alt=""></a> <a class="title" href="#">فلش مموری کداک مدل Mini Metal K802 ظرفیت 64 گیگ</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/965174.jpg')}}" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
        </div>
        <div id="pslider-nbtn" class="slider-nbtn swiper-button-next"></div>
        <div id="pslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
    </div>
</section>
<section class="image-row container">
    <a href="#"><img src="{{asset('assets/v1/user/images/1000005395.jpg')}}" alt=""></a>
    <a href="#"><img src="{{asset('assets/v1/user/images/1000019673.jpg')}}" alt=""></a>
    <a href="#"><img src="{{asset('assets/v1/user/images/1000009159.jpg')}}" alt=""></a>
    <a href="#"><img src="{{asset('assets/v1/user/images/1816.jpg')}}" alt=""></a>
</section>
<section class="product-wrapper container">
    <div class="headline">
        <h3>محصولات پربازدید اخیر</h3></div>
    <div id="vpslider" class="swiper-container">
        <div class="product-box swiper-wrapper">
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/111890636.jpg')}}" alt=""></a> <a class="title" href="#">ماسک تنفسی لیبراتون مدل 0011 بسته 50 عددی </a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/113851602.jpg')}}" alt=""></a> <a class="title" href="#">ماسک تزیینی صورت کد MA2</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/111460776.jpg')}}" alt=""></a> <a class="title" href="#">گوشی موبایل سامسونگ مدل Galaxy A50 SM-A505F/DS</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/p8.jpg')}}" alt=""></a> <a class="title" href="#">کوله پشتی برنامه نویسان</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/113562469.jpg')}}" alt=""></a> <a class="title" href="#">گوشی موبایل سامسونگ مدل Galaxy A10s SM-A107F/DS</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/p8.jpg')}}" alt=""></a> <a class="title" href="#">کوله پشتی برنامه نویسان</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
        </div>
        <div id="vpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
        <div id="vpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
    </div>
</section>
<section class="image-row container">
    <a href="#"><img style="max-width: 100%" src="{{asset('assets/v1/user/images/banner-2.jpg')}}" alt=""></a>
</section>
<section class="product-wrapper container">
    <div class="headline two-headline">
        <h3>منتخب جدیدترین کالاها</h3> <a href="#">مشاهده همه</a></div>
    <div id="newpslider" class="swiper-container">
        <div class="product-box swiper-wrapper">
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/p6.jpg')}}" alt=""></a> <a class="title" href="#">مایکروو مدل جدید</a> <span class="price">۲,۴۵۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/119238416.jpg')}}" alt=""></a> <a class="title" href="#">برچسب بدنه خودرو طرح گوزن کد 146</a> <span class="price">۲,۴۵۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/119279565.jpg')}}" alt=""></a> <a class="title" href="#">اسپرسوساز مباشی مدل ECM2015</a> <span class="price">۲,۴۵۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/119240285.jpg')}}" alt=""></a> <a class="title" href="#">کاور مدل SOR-010 مناسب برای گوشی موبایل سامسونگ</a> <span class="price">۲,۴۵۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/4272035.jpg')}}" alt=""></a> <a class="title" href="#">دسته بازی بی سیم مکسیدر مدل MX-GP8110 WN12 بسته دو عددی</a> <span class="price">۲,۴۵۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/p6.jpg')}}" alt=""></a> <a class="title" href="#">مایکروو مدل جدید</a> <span class="price">۲,۴۵۶,۰۰۰ تومان</span></div>
        </div>
        <div id="newpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
        <div id="newpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
    </div>
</section>
<section class="product-wrapper container">
    <div class="headline">
        <h3>محصولات پرفروش</h3></div>
    <div id="mostpslider" class="swiper-container">
        <div class="product-box swiper-wrapper">
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/363465.jpg')}}" alt=""></a> <a class="title" href="#">شارژر همراه انکر مدل A1271 PowerCore ظرفیت 20100 م</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/114776337.jpg')}}" alt=""></a> <a class="title" href="#">لامپ ال ای دی 20 وات سیدکو کد 001 پایه E27</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/p8.jpg')}}" alt=""></a> <a class="title" href="#">کوله پشتی برنامه نویسان</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/110177926.jpg')}}" alt=""></a> <a class="title" href="#">تخم مرغ تازه پروتانا بسته 20 عددی</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/3830350.jpg')}}" alt=""></a> <a class="title" href="#">کرم ضد آنفلوانزا مکث آویرال مدل Adults حجم 70 میلی</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/p8.jpg')}}" alt=""></a> <a class="title" href="#">کوله پشتی برنامه نویسان</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
        </div>
        <div id="mostpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
        <div id="mostpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
    </div>
</section>
<section class="image-row container">
    <a href="#"><img src="{{asset('assets/v1/user/images/1000020363.jpg')}}" alt=""></a>
    <a href="#"><img src="{{asset('assets/v1/user/images/1000020196.jpg')}}" alt=""></a>
</section>
<section class="product-wrapper container">
    <div class="headline">
        <h3>برندهای ویژه</h3></div>
    <div id="brandslider" class="swiper-container">
        <div class="product-box swiper-wrapper">
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/brand/adata.png')}}" alt=""></a>
            </div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/brand/samsung.png')}}" alt=""></a>
            </div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/brand/xvision.png')}}" alt=""></a>
            </div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/brand/lg.png')}}" alt=""></a>
            </div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/brand/parskhazar.png')}}" alt=""></a>
            </div>
            <div class="product-item swiper-slide">
                <a href="#"><img src="{{asset('assets/v1/user/images/brand/xvision.png')}}" alt=""></a>
            </div>
        </div>
        <div id="brandslider-nbtn" class="slider-nbtn swiper-button-next"></div>
        <div id="brandslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
    </div>
</section>
<div class="jump-to-up"> <i class="fa fa-chevron-up"></i> <span> بازگشت به بالا </span></div>
@endsection
