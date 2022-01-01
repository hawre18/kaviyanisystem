@extends('v1.template.admin.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/v1/admin/css/dropzone.css')}}"/>
@endsection
@section('content')
    <section id="app" class="content">
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
                            <h2 class="card-inside-title">فرم اطلاعات ورودی برای دسته بندی جدید</h2>
                            <form method="post" action="/admin/products/{{$product->id}}">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="title" value="{{$product->title}}">
                                                <label class="form-label">عنوان محصول</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="slug" value="{{$product->slug}}">
                                                <label class="form-label">نام مستعار محصول</label>
                                            </div>
                                        </div>
                                    </div>
                                    <attribute-component :brands="{{$brands}}"></attribute-component>
                                    <div class="col-sm-12">
                                        <h6 class="form-label"> وضعیت نشر</h6>
                                        <div class="form-group form-float">
                                            <div class="form-check form-check-radio">
                                                <label>
                                                    <input name="status" type="radio" value="enable" @if($product->status=='enable') checked @endif/>
                                                    <span>منتشر شده</span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label>
                                                    <input name="status" type="radio" value="disable" @if($product->status=='disable') checked @endif />
                                                    <span>منتشر نشده</span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label>
                                                    <input name="status" type="radio" value="finish" @if($product->status=='finish') checked @endif />
                                                    <span>اتمام موجودی</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="price" value="{{$product->price}}">
                                                <label class="form-label">قیمت اصلی</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="discountprice" @if(!($product->discountPrice== null)) value="{{$product->discountPrice}}" @endif>
                                                <label class="form-label">قیمت همراه با تخفیف</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label class="form-label">توضیحات کوتاه</label>
                                                <br>
                                                <br>
                                                <textarea type="text" name="short_description"  class="form-control" >{{$product->shortDescription}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label class="form-label">توضیحات اصلی</label>
                                                <br>
                                                <br>
                                                <textarea type="text" name="long_description" class="form-control" >{{$product->longDescription}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group form-float">
                                            <div class="form-group">
                                                <label for="photo">تصویر</label>
                                                <input type="hidden" name="photo_id[]" id="product-photo">
                                                <div id="photo" class="dropzone"></div>
                                            </div>
                                        </div>
                                        @foreach($product->images as $photo)
                                            <div class="col-sm-3" id="updated_photo_{{$photo->id}}">
                                                <img class="img-responsive" src="{{$photo->path}}">
                                                <button type="button" class="btn btn-danger" onclick="removeImages({{$photo->id}})">حذف</button>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" onclick="productGallery()" class="btn-primary">ثبت</button>
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
@section('script-vuejs')
    <script src="{{asset('/admin/js/app.js')}}"></script>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('/admin/dist/js/dropzone.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        Dropzone.autoDiscover=false;
        var photosGallery=[]
        var photo=[].concat({{$product->images->pluck('id')}})
        var drop=new Dropzone('#photo',{
            addRemoveLinks:true,
            url:"{{route('photos.upload')}}",
            sending:function (file,xhr,formData) {
                formData.append("_token","{{csrf_token()}}")
            },
            success: function (file,response) {
                photosGallery.push(response.photo_id)
            }
        });
        productGallery=function () {
            document.getElementById('product-photo').value = photosGallery
        }
        CKEDITOR.replace('short_description',{
            customConfig:'config.js',
            toolbar:'simple',
            language:'fa',
            removePlugins:'cloudservices, easyimage'
        });
        CKEDITOR.replace('long_description',{
            customConfig:'config.js',
            toolbar:'simple',
            language:'fa',
            removePlugins:'cloudservices, easyimage'
        })
    </script>
@endsection
