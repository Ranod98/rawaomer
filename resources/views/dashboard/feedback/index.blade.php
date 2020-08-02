
@extends('layouts.dashboard.app')
@section('title', 'Team-Index')
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
                        <li class="breadcrumb-item active">@lang('site.feedback')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">@lang('site.feedback')<small> {{$feedback->total()}}</small></h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <form action="{{route('dashboard.feedbacks.index')}}"  method="get">

                    <div class="row">
                        <div class ="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{request()->search}}">
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                        </div>
                    </div>

                </form>
                <br>
                @if($feedback->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>@lang('site.name')</th>
                            <th>@lang('site.email')</th>
                            <th>@lang('site.subject')</th>
                            <th>@lang('site.message')</th>
                            <th>@lang('site.created')</th>
                            <th>@lang('site.updated')</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($feedback as $index=>$feedbacks)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$feedbacks->name}}</td>
                                <td>{{$feedbacks->email}}</td>
                                <td>{{$feedbacks->subject}}</td>
                                <td>{{$feedbacks->message}}</td>

                                <td>{{$feedbacks->created_at->diffForHumans()}}</td>
                                <td>{{$feedbacks->updated_at->diffForHumans()}}</td>


                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <br>

                    {{$feedback->appends(request()->query())->links()}}

                @else
                    <h2>@lang('site.no_data_found')</h2>
                @endif

            </div>

        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
