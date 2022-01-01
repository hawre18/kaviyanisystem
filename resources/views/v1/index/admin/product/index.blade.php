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
                            @if(Session::has('product_error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('product_error')}}
                                </div>
                            @elseif(Session::has('product_success'))
                                <div class="alert alert-success">
                                    {{ Session::get('product_success')}}
                                </div>
                            @endif
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                    <tr>
                                        <th>شناسه</th>
                                        <th>کد محصول</th>
                                        <th>نام محصول</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td><a href="{{ route('products.show', $product->id)}}">{{ $loop->index + 1 }}</a></td>
                                            <td><a href="{{ route('products.show', $product->id)}}">{{$product->sku}}</a></td>
                                            <td><a href="{{ route('products.show', $product->id)}}">{{$product->title}}</a></td>
                                            <td>
                                                <a href="{{route('products.edit',$product->id)}}" class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>
                                                <a href="{{route('products.delete',$product->id)}}" class="btn tblActnBtn">
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
