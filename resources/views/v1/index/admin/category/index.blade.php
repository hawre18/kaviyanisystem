@extends('v1.template.admin.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">داشبورد</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="index.html">
                                <i class="fas fa-home"></i> خانه</a>
                        </li>
                        <li class="breadcrumb-item active">داشبورد</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>دسته بندی ها</strong> لیست</h2>
                    </div>
                    <div class="alert">
                        @if(Session::has('error_category'))
                            <div class="alert alert-danger">
                                {{ Session::get('error_category')}}
                            </div>
                        @elseif(Session::has('category_success'))
                            <div class="alert alert-danger">
                                {{ Session::get('category_success')}}
                            </div>
                        @endif
                    </div>
                    <div class="tableBody">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عنوان دسته بندی</th>
                                    <th>آیکون</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($categories as $category)
                                <tr>
                                    {{$index=$loop->index+1}}
                                    <td>{{$index}}</td>
                                    <td>{{$category->name}}</td>
                                    <td class="table-img"><img src="{{$category->image->path}}" alt=""></td>
                                    <td>
                                        <a href="{{route('category.edit',$category->id)}}" class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </a>
                                        <a href="{{route('category.delete',$category->id)}}" class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href="{{route('categories.indexSetting',$category->id)}}" class="btn tblActnBtn">
                                            <i class="material-icons">add</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    @if(count($category->childrenRecursive)>0)
                                        @include('v1.index.admin.partials.category_list',['categories'=>$category->childrenRecursive,'level'=>1,'index'=>$index])
                                    @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>
    </div>
</section>
@endsection
