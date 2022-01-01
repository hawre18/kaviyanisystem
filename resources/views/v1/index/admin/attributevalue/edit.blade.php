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
                            <h2 class="card-inside-title">فرم اطلاعات ورودی برای مقادیر ویژگی</h2>
                            <form method="post" action="/admin/attributevalue/{{$attributeValues->id}}">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label for="attributeGroup_id">لیست ویژگی ها</label>
                                                <select name="attributeGroup_id" class="form-control">
                                                    <option value="">انتخاب کنید</option>
                                                    @foreach($attributeGroups as $attributeGroup)
                                                        <option value="{{$attributeGroup->id}}" @if($attributeValues->attributegroup->id==$attributeGroup->id) selected @endif>{{$attributeGroup->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="title" value="{{$attributeValues->name}}">
                                                <label class="form-label">مقدار ویژگی</label>
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
