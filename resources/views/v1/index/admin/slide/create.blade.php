@extends('v1.template.admin.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">فرم عمومی</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="javascript:void(0);">فرم ها</a>
                            </li>
                            <li class="breadcrumb-item active">عمومی</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            @include('v1.errors.error')
                            <h2 class="card-inside-title">فرم اطلاعات ورودی برای اسلاید جدید</h2>
                            <form method="post" action="/admin/slides">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                                <label class="form-label">عنوان اسلاید</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label class="form-label">توضیحات اسلاید</label>
                                                <br>
                                                <br>
                                                <textarea type="text" name="description" value="{{old('description')}}" class="form-control" placeholder="توضیحات برند را وارد کنید..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h6 class="form-label"> وضعیت نشر</h6>
                                        <div class="form-group form-float">
                                            <div class="form-check form-check-radio">
                                                <label>
                                                    <input name="status" type="radio" value="1" />
                                                    <span>منتشر شده</span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label>
                                                    <input name="status" type="radio" value="0" checked />
                                                    <span>منتشر نشده</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group form-float">
                                            <div class="form-group">
                                                <label for="photo">تصویر</label>
                                                <input type="hidden" name="photo_id" id="category-photo">
                                                <div id="photo" class="dropzone"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn-primary">ثبت</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
