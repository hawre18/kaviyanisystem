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
                                        <th>تصویر محصولات</th>
                                        <th>نام محصولات</th>
                                        <th>تعداد</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->products as $product)
                                        <tr>
                                            <td><img width="15%" src="{{$product->photos[0]->path}}"></td>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->pivot->qty}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="customer-data">
                                    <p><strong>نام خریدار: </strong>{{$order->user['firstName'] . ' '.$order->user['lastName']}}</p>
                                    <p><strong>آدرس خریدار: </strong>{{$order->address->city->title . ' '.$order->address->city->title . ' '.$order->address->address}}</p>
                                    <p><strong>کدپستی خریدار: </strong>{{$order->address->postcode}}</p>
                                    <p><strong>شماره موبایل خریدار: </strong>{{$order->address->phoneNumber}}</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>
@endsection
