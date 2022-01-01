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
                                        <th>مبلغ</th>
                                        <th>وضعیت پرداخت</th>
                                        <th>وضعیت ارسال</th>
                                        <th>عملیات ارسال</th>
                                        <th>عملیات پرداخت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td ><a href="{{route('orders.lists',['id'=>$order->id])}}">{{$loop->index+1}}</a></td>
                                            <td >{{$order->amount}}</td>
                                            @if($order->sents==0&&$order->status==1)
                                                <td ><span class="label label-success">پرداخت شده</span></td>
                                                <td ><span class="label label-danger">ارسال نشده</span> </td>
                                                <td ><a class="btn btn-success" href="{{route('order.send',['id'=>$order->id])}}">ارسال کردن</a></td>
                                                <td ><a class="btn btn-success disabled" href="{{route('order.pay',['id'=>$order->id])}}">پرداخت کردن</a></td>
                                            @elseif($order->sents==1&&$order->status==1)
                                                <td ><span class="label label-success">پرداخت شده</span></td>
                                                <td ><span class="label label-success">ارسال شده</span> </td>
                                                <td ><a class="btn btn-success disabled" href="{{route('order.send',['id'=>$order->id])}}">ارسال کردن</a></td>
                                                <td ><a class="btn btn-success disabled" href="{{route('order.pay',['id'=>$order->id])}}">پرداخت کردن</a></td>
                                            @elseif($order->sents==0&&$order->status==0)
                                                <td ><span class="label label-danger">پرداخت نشده</span></td>
                                                <td ><span class="label label-danger">ارسال نشده</span></td>
                                                <td ><a class="btn btn-success disabled" href="{{route('order.send',['id'=>$order->id])}}">ارسال کردن</a></td>
                                                <td ><a class="btn btn-success" href="{{route('order.pay',['id'=>$order->id])}}">پرداخت کردن</a></td>
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
