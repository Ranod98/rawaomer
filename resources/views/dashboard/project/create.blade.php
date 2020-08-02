
@extends('layouts.dashboard.app')
@section('title', 'Project-Create')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@lang('site.project')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.types.index')}}">@lang('site.type')</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.projects.index')}}">@lang('site.project')</a></li>
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


                <form action="{{route('dashboard.projects.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="form-group">

                        <label>@lang('site.name')</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                    </div>

                    <div class="form-group">
                        <label>@lang('site.type')</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="type">
                            <option value=""  >@lang('site.all_type')</option>

                            @foreach($types as $type)

                            <option value="{{$type->id}}" {{ old('type') == $type->id ? 'selected' : '' }}>{{$type->name}}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('site.team')</label>

                        <select class="form-control select2bs4" style="width: 100%;" name="team" >
                            <option value="" >@lang('site.all_team')</option>

                            @foreach($teams as $team)

                            <option value="{{$team->id}}" {{ old('team') == $team->id ? 'selected' : '' }}>{{$team->full_name}}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">

                        <label>@lang('site.lang')</label>
                        <input type="text" name="lang" class="form-control" value="{{ old('lang') }}">

                    </div>

                    <div class="form-group">

                        <label>@lang('site.description')</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" value="{{ old('description') }}"></textarea>

                    </div>

                    <div> <label>@lang('site.image')</label></div>

                    <div class="custom-file">
                        <label>@lang('site.image')</label>
                        <input type="file"  name="image" class="custom-file-input image" id="customFile" >
                        <label class="custom-file-label"  for="customFile">Choose file</label>
                    </div>


                    <div class="form-group">
                        <img src="{{asset('dashboard/uploads/project_image/default.png')}}" style="width: 100px" class="img-thumbnail image-preview">

                    </div>

                    <div class="form-group">

                        <label>@lang('site.link')</label>
                        <input type="text" name="link" class="form-control" value="{{ old('link') }}">

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
