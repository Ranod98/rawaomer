
@extends('layouts.dashboard.app')
@section('title', 'Project-Edit')
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
                        <li class="breadcrumb-item"><a href="{{route('dashboard.projects.index')}}">@lang('site.project')</a></li>
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

                <form action="{{route('dashboard.projects.update' , $project->id)}}" $user method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('put')}}
                    <div class="form-group">

                        <label>@lang('site.name')</label>
                        <input type="text" name="name" class="form-control" value="{{ $project->name }}">

                    </div>


                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="type">
                            <option value=""  >@lang('site.all_type')</option>

                            @foreach($types as $type)

                                <option value="{{$type->id}}" {{ $project->type_id == $type->id ? 'selected' : '' }}>{{$type->name}}</option>

                            @endforeach

                        </select>
                    </div>


                    <div class="form-group">
                        <label>Team</label>

                        <select class="form-control select2bs4" style="width: 100%;" name="team" >
                            <option value="" >@lang('site.all_team')</option>

                            @foreach($teams as $team)

                                <option value="{{$team->id}}" {{ $project->team_id == $team->id ? 'selected' : '' }}>{{$team->full_name}}</option>

                            @endforeach

                        </select>
                    </div>





                    <div class="form-group">

                        <label>@lang('site.lang')</label>
                        <input type="text" name="lang" class="form-control" value="{{ $project->lang }}">

                    </div>


                    <div class="form-group">

                        <label>@lang('site.description')</label>
                        <textarea class="form-control" id="myTextarea" name="description" rows="3"></textarea>
                        <script>document.getElementById("myTextarea").value = "{{ $project->description }}";</script>
                    </div>



                    <div> <label>@lang('site.image')</label></div>

                    <div class="custom-file">
                        <label>@lang('site.image')</label>
                        <input type="file"  name="image" class="custom-file-input image" id="customFile" >
                        <label class="custom-file-label"  for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <img src="{{$project->image_path}}" style="width: 100px" class="img-thumbnail image-preview">

                    </div>

                    <div class="form-group">

                        <label>@lang('site.link')</label>
                        <input type="text" name="link" class="form-control" value="{{ $project->link }}">

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
