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
                            <h2><strong>برندها</strong> لیست</h2>
                        </div>
                        <div class="alert">
                            @if(Session::has('brand_success'))
                                <div class="alert alert-success">
                                    {{ Session::get('brand_success')}}
                                </div>
                            @elseif(Session::has('brand_error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('brand_error')}}
                                </div>
                            @endif
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>برند</th>
                                            <th>توضیحات</th>
                                            <th>نماد برند</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($brands as $brand)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$brand->name}}</td>
                                            <td>{{mb_substr($brand->description,0,20)}}</td>
                                            <td class="table-img"><img src="{{$brand->image->path}}" alt=""></td>
                                            <td>
                                                <a href="{{route('brand.edit',$brand->id)}}" class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>
                                                <a href="{{route('brand.delete',$brand->id)}}" class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
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
