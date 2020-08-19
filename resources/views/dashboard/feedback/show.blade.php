@extends('layouts.dashboard.app')
@section('title', 'Feedback-Index')
@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@lang('site.feedback')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('dashboard.feedbacks.index')}}">@lang('site.feedback')</a></li>
                        <li class="breadcrumb-item active">@lang('site.show')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

        <!-- Main content -->
        <div class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('site.feeback_of') {{$feedback->name}}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                     <h2>{{$feedback->subject}}</h2>
                    <p>{{$feedback->message}}</p>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    @lang('site.time_of_send') {{$feedback->created_at->diffForHumans()}}
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.content -->



@endsection
