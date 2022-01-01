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
                            <h2><strong>اسلایدها</strong> لیست</h2>
                        </div>
                        <div class="alert">
                            @if(Session::has('slide_success'))
                                <div class="alert alert-success">
                                    {{ Session::get('slide_success')}}
                                </div>
                            @elseif(Session::has('slide_error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('slide_error')}}
                                </div>
                            @endif
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسلاید</th>
                                        <th>توضیحات</th>
                                        <th>وضعیت</th>
                                        <th>عکس اسلاید</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($slides as $slide)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$slide->title}}</td>
                                            <td>{!!mb_substr($slide->text,0,20)!!}</td>
                                            @if($slide->status==0)
                                                <td class="label label-danger">منتشر نشده</td>
                                            @else
                                                <td class="label label-success" >منتشر شده</td>
                                            @endif
                                            <td class="table-img"><img src="{{$slide->image->path}}" alt=""></td>
                                            <td>
                                                @if($slide->status==0)
                                                    {!! Form::open(['method'=>'POST','route'=>['slides.action',$slide->id]]) !!}
                                                    <div class="form-group">
                                                        {!! Form::hidden('action','approved') !!}
                                                        {!! Form::submit('انتشار',['class'=>'btn btn-success']) !!}
                                                        <a href="{{route('slides.edit',$slide->id)}}" class="btn tblActnBtn">
                                                            <i class="material-icons">mode_edit</i>
                                                        </a>
                                                        <a href="{{route('slides.delete',$slide->id)}}" class="btn tblActnBtn">
                                                            <i class="material-icons">delete</i>
                                                        </a>
                                                    </div>
                                                    {!! Form::close() !!}
                                                @else
                                                    <div>
                                                        {!! Form::open(['method'=>'POST','route'=>['slides.action',$slide->id]]) !!}
                                                        <div class="form-group">
                                                            {!! Form::hidden('action','rejected') !!}
                                                            {!! Form::submit('عدم انتشار',['class'=>'btn btn-danger']) !!}
                                                            <a href="{{route('slides.edit',$slide->id)}}" class="btn tblActnBtn">
                                                                <i class="material-icons">mode_edit</i>
                                                            </a>
                                                            <a href="{{route('slides.delete',$slide->id)}}" class="btn tblActnBtn">
                                                                <i class="material-icons">delete</i>
                                                            </a>
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
