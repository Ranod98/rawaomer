
@extends('layouts.dashboard.app')
@section('title', 'Team-Type')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@lang('site.user')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.types.index')}}">@lang('site.type')</a></li>
                        <li class="breadcrumb-item active">@lang('site.edit')</li>
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
                <h3 class="card-title">@lang('site.edit')</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
                @include('include._error')

                <form action="{{route('dashboard.types.update' , $type->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('put')}}
                    <div class="form-group">

                        <label>@lang('site.name')</label>
                        <input type="text" name="name" class="form-control" value="{{ $type->name }}">

                    </div>



                    <div class="form-group">

                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>

                    </div>


                </form>



            </div>

        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
