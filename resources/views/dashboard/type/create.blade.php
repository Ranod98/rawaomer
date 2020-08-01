
@extends('layouts.dashboard.app')
@section('title', 'Type-Create')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@lang('site.type')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.types.index')}}">@lang('site.type')</a></li>
                        <li class="breadcrumb-item active">@lang('site.create')</li>
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
                <h3 class="card-title">@lang('site.create')</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
                @include('include._error')

                <form action="{{route('dashboard.types.store')}}" method="post">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="form-group">

                        <label>@lang('site.name')</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                    </div>




                    <div class="form-group">

                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>

                    </div>


                </form>



            </div>

        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
