
@extends('layouts.dashboard.app')
@section('title', 'Team-Edit')
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
                        <li class="breadcrumb-item"><a href="{{route('dashboard.teams.index')}}">@lang('site.team')</a></li>
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

                <form action="{{route('dashboard.teams.update' , $team->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('put')}}
                    <div class="form-group">

                        <label>@lang('site.fullname')</label>
                        <input type="text" name="full_name" class="form-control" value="{{ $team->full_name }}">

                    </div>

                    <div class="form-group">

                        <label>@lang('site.last_name')</label>
                        <input type="text" name="degree" class="form-control" value="{{ $team->degree }}">

                    </div>

                    <div class="form-group">

                        <label>@lang('site.email')</label>
                        <input type="email" name="email" class="form-control" value="{{ $team->email }}">

                    </div>

                    <div class="form-group">

                        <label>@lang('site.skill')</label>
                        <input type="text" name="skill" class="form-control" value="{{ $team->skill }}">

                    </div>


                    <div> <label>@lang('site.image')</label></div>

                    <div class="custom-file">
                        <label>@lang('site.image')</label>
                        <input type="file"  name="image" class="custom-file-input image" id="customFile" >
                        <label class="custom-file-label"  for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <img src="{{$team->image_path}}" style="width: 100px" class="img-thumbnail image-preview">

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
