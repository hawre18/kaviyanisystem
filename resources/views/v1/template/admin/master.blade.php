<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>مدیریت کاویانی سیستم</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/v1/admin/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('assets/v1/admin/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/v1/admin/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('assets/v1/admin/css/style.css')}}" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('assets/v1/admin/css/styles/all-themes.css')}}" rel="stylesheet" />

    @yield('styles')
    <style>
        .datepicker {
            float: right
        }
        .datepicker.dropdown-menu {
            right:auto
        }
    </style>
</head>
<body class="light rtl">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img class="loading-img-spin" src="{{asset('assets/v1/admin/images/loading.png')}}" width="20" height="20" alt="admin">
        </div>
        <p>لطفا صبر کنید...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
               aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('assets/v1/admin/images/logo.png')}}" alt="" />
                <span class="logo-name">{{Auth::guard('admin')->user()->userName}}</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="far fa-bell"></i>
                        <span class="label-count bg-orange"></span>
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="header">اطلاعیه ها</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="table-img msg-user">
                                            <img src="{{asset('assets/v1/admin/images/user/user1.jpg')}}" alt="">
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">{{Auth::guard('admin')->user()->userName}}</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> 14 دقیقه پیش
                                            </span>
                                            <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">مشاهده تمام اطلاعیه ها</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications-->
                <li class="dropdown user_profile">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <img src="{{asset('assets/v1/admin/images/user.jpg')}}" width="32" height="32" alt="User">
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">person</i>پروفایل
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">feedback</i>بازخورد
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">help</i>راهنما
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('adminLogout')}}">
                                        <i class="material-icons">power_settings_new</i>خروج
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="sidebar-user-panel active">
                    <div class="user-panel">
                        <div class=" image">
                            <img src="{{asset('assets/v1/admin/images/usrbig.jpg')}}" class="img-circle user-img-circle" alt="User Image" />
                        </div>
                    </div>
                    <div class="profile-usertitle">
                        <div class="sidebar-userpic-name"> {{Auth::guard('admin')->user()->userName}} </div>
                        <div class="profile-usertitle-job ">مدیر </div>
                    </div>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>دسته بندی ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="{{route('category.index')}}">لیست دسته بندی ها</a>
                        </li>
                        <li class="active">
                            <a href="{{route('category.create')}}">ایجاد دسته بندی</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-mail-bulk"></i>
                        <span>ویژگی ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('attributegroup.index')}}">لیست ویژگی ها</a>
                        </li>
                        <li>
                            <a href="{{route('attributegroup.create')}}">ایجاد ویژگی جدید</a>
                        </li>
                        <li>
                            <a href="{{route('attributevalue.create')}}">ایجاد مقدار ویژگی جدید</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fab fa-google-play"></i>
                        <span>برندها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('brand.index')}}">لیست برندها</a>
                        </li>
                        <li>
                            <a href="{{route('brand.create')}}">ایجاد برند جدبد</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-shopping-cart"></i>
                        <span>اسلایدر</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('slides.index')}}">لیست اسلایدر</a>
                        </li>
                        <li>
                            <a href="{{route('slides.create')}}">ایجاد اسلاید جدید</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('comments.index')}}">
                        <i class="fas fa-braille"></i>
                        <span>کامنت ها</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-drafting-compass"></i>
                        <span>محصولات</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('products.index')}}">لیست محصولات</a>
                        </li>
                        <li>
                            <a href="{{route('products.create')}}">ایجاد محصول جدید</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fab fa-wpforms"></i>
                        <span>فرم ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/forms/basic-form-elements.html">فرم عمومی</a>
                        </li>
                        <li>
                            <a href="pages/forms/advanced-form-elements.html">فرم پیشرفته</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-examples.html">نمونه های فرم</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-validation.html">اعتبار سنجی فرم</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-wizard.html">فرم پیشرفته</a>
                        </li>
                        <li>
                            <a href="pages/forms/editors.html">ویرایشگرها</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-table"></i>
                        <span>جداول</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/tables/normal-tables.html">جداول معمولی</a>
                        </li>
                        <li>
                            <a href="pages/tables/advance-tables.html">جداول داده پیشرفته</a>
                        </li>
                        <li>
                            <a href="pages/tables/export-table.html">خروجی از جدول</a>
                        </li>
                        <li>
                            <a href="pages/tables/child-row-table.html">جدول ردیف کودک</a>
                        </li>
                        <li>
                            <a href="pages/tables/group-table.html">گروه بندی</a>
                        </li>
                        <li>
                            <a href="pages/tables/editable-table.html">جداول قابل ویرایش</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="far fa-images"></i>
                        <span>رسانه ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/medias/image-gallery.html">گالری تصویر</a>
                        </li>
                        <li>
                            <a href="pages/medias/carousel.html">اسلایدر Carousel</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-chart-line"></i>
                        <span>نمودارها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/charts/echart.html">ای چارت</a>
                        </li>
                        <li>
                            <a href="pages/charts/morris.html">موریس</a>
                        </li>
                        <li>
                            <a href="pages/charts/flot.html">فلوت</a>
                        </li>
                        <li>
                            <a href="pages/charts/chartjs.html">نمودار JS</a>
                        </li>
                        <li>
                            <a href="pages/charts/sparkline.html">اسپارک لاین</a>
                        </li>
                        <li>
                            <a href="pages/charts/jquery-knob.html">تهیه کننده جی کوئری</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fab fa-hubspot"></i>
                        <span>خط زمانی</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/timeline/timeline.html">خط زمانی 1</a>
                        </li>
                        <li>
                            <a href="pages/timeline/timeline2.html">خط زمانی 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-paw"></i>
                        <span>آیکون ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/icons/material-icons.html">آیکون های متریال</a>
                        </li>
                        <li>
                            <a href="pages/icons/font-awesome.html">فونت فوق العاده</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-id-card"></i>
                        <span>احراز هویت</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/examples/login-register.html">ورود و ثبت نام</a>
                        </li>
                        <li>
                            <a href="pages/examples/sign-in.html">ورود</a>
                        </li>
                        <li>
                            <a href="pages/examples/sign-up.html">ثبت نام</a>
                        </li>
                        <li>
                            <a href="pages/examples/forgot-password.html">فراموشی رمزعبور</a>
                        </li>
                        <li>
                            <a href="pages/examples/locked.html">قفل شده</a>
                        </li>
                        <li>
                            <a href="pages/examples/404.html">404 - یافت نشد</a>
                        </li>
                        <li>
                            <a href="pages/examples/500.html">500 - خطای سرور</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="far fa-file-alt"></i>
                        <span>صفحاات اضافی</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/examples/profile.html">پروفایل</a>
                        </li>
                        <li>
                            <a href="pages/examples/pricing.html">قیمت گذاری</a>
                        </li>
                        <li>
                            <a href="pages/examples/invoice.html">صورتحساب</a>
                        </li>
                        <li>
                            <a href="pages/examples/faqs.html">پرسش و پاسخ</a>
                        </li>
                        <li>
                            <a href="pages/examples/blank.html">صفحه خالی</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-globe-americas"></i>
                        <span>نقشه ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/maps/google.html">نقشه گوگل</a>
                        </li>
                        <li>
                            <a href="pages/maps/jqvmap.html">نقشه وکتور</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fas fa-angle-double-down"></i>
                        <span>منوی چند سطحی</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>آیتم منو</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span>آیتم منو - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>سطح - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>آیتم منو</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <span>سطح - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span>سطح - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
</div>
@yield('content')
@yield('script-vuejs')
<script src="{{asset('assets/v1/admin/js/app.min.js')}}"></script>
<script src="{{asset('assets/v1/admin/js/chart.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('assets/v1/admin/js/admin.js')}}"></script>
<script src="{{asset('assets/v1/admin/js/pages/index.js')}}"></script>
<script src="{{asset('assets/v1/admin/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('assets/v1/admin/js/pages/sparkline/sparkline-data.js')}}"></script>
<script src="{{asset('assets/v1/admin/js/pages/medias/carousel.js')}}"></script>
<script src="{{asset('assets/v1/admin/plugins/dropzone.js')}}"></script>
<script src="{{asset('assets/v1/admin/plugins/ckeditor/ckeditor.js')}}"></script>
@yield('scripts')
</body>
</html>
