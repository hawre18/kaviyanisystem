@extends('v1.template.admin.master')
@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">محصولات</h3>
                <div class="text-left">
                    <a class="btn btn-app"  href="{{route('products.create')}}">
                        <i class="fa fa-plus"></i> جدید
                    </a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <lable>عنوان محصول: {{$product->title}}</lable><br>
                <lable>کد محصول در سیستم: {{$product->sku}}</lable><br>
                <lable>اسم مستعار: {{$product->slug}}</lable><br>
                <lable>وضعیت نشر: {{$product->status}}</lable><br>
                <lable>قیمت محصول: {{$product->price}}</lable><br>
                <lable>قیمت تخفیف خورده: {{$product->discountPrice}}</lable><br>
                <lable for="shortdescription">توضیحات کوتاه: </lable><br>
                <div id="shortdescription" itemprop="description" id="tab-description" class="tab-pane active">
                    {!! $product->shortDescription !!}
                </div>
                <lable for="longdescription">توضیحات اصلی: </lable><br>
                <div id="longdescription" itemprop="description" id="tab-description" class="tab-pane active">
                    {!! $product->longDescription !!}
                </div>
                <lable>برند محصول: {{$product->brand->name}}</lable><br>
                <lable>کاربر ایجاد کننده محصول: {{$product->admin->userName . ' ' . $product->admin->last_name}}</lable><br>
                <a class="btn btn-warning" href="{{route('products.edit',$product->id)}}">ویرایش</a>
                <a class="btn btn-danger" href="{{route('products.delete',$product->id)}}">حذف</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
