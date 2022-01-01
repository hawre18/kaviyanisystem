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
                                        <th >#</th>
                                        <th >توضیحات</th>
                                        <th >کاربر ایجاد کننده</th>
                                        <th >تاریخ ایجاد</th>
                                        <th>محصول هدف</th>
                                        <th >وضعیت نشر</th>
                                        <th >عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $comment)
                                        <tr>
                                            <td><a href="{{ route('comments.show', $comment->id)}}">{{$loop->index+1}}</a></td>
                                            <td><a href="{{ route('comments.show', $comment->id)}}">{{mb_substr($comment->body,0,30)}}</a></td>
                                            <td>{{$comment->user['userName']}}</td>
                                            <td>{{\Hekmatinasser\Verta\Verta::instance($comment->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                                            <td>@if(isset($comment->product)){{$comment->product->title. ' '. 'با کد'.$comment->product->sku}} @else محصول هدف حذف شده @endif</td>
                                            @if($comment->status==0)
                                                <td class="center-block label label-danger">تایید نشده</td>
                                            @else
                                                <td class="center-block label label-success" >تایید شده</td>
                                            @endif
                                            <td>
                                                @if($comment->status==0)
                                                    {!! Form::open(['method'=>'POST','route'=>['comments.action',$comment->id]]) !!}
                                                    <div class="form-group">
                                                        {!! Form::hidden('action','approved') !!}
                                                        {!! Form::submit('تایید',['class'=>'btn btn-success']) !!}
                                                        <a class="btn btn-danger" href="{{route('comments.delete',$comment->id)}}">حذف</a>
                                                    </div>
                                                    {!! Form::close() !!}
                                                @else
                                                    <div>
                                                        {!! Form::open(['method'=>'POST','route'=>['comments.action',$comment->id]]) !!}
                                                        <div class="form-group">
                                                            {!! Form::hidden('action','rejected') !!}
                                                            {!! Form::submit('عدم تایید',['class'=>'btn btn-danger']) !!}
                                                            <a class="btn btn-danger" href="{{route('comments.delete',$comment->id)}}">حذف</a>
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                @endif
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
