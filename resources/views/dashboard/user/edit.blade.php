
@extends('layouts.dashboard.app')
@section('title', 'User-Edit')
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
                        <li class="breadcrumb-item"><a href="{{route('dashboard.users.index')}}">@lang('site.user')</a></li>
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

                <form action="{{route('dashboard.users.update' , $user->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('put')}}
                    <div class="form-group">

                        <label>@lang('site.first_name')</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">

                    </div>

                    <div class="form-group">

                        <label>@lang('site.last_name')</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">

                    </div>

                    <div class="form-group">

                        <label>@lang('site.email')</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">

                    </div>

                    <div> <label>@lang('site.image')</label></div>

                    <div class="custom-file">
                        <label>@lang('site.image')</label>
                        <input type="file"  name="image" class="custom-file-input image" id="customFile" >
                        <label class="custom-file-label"  for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <img src="{{$user->image_path}}" style="width: 100px" class="img-thumbnail image-preview">

                    </div>



                    <div class="form-group">
                        <label>@lang('site.permissions')</label>


                    </div>
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            @php

                                $models = ['users','project','clint_side'];
                                $maps = ['create','read','update','delete'];

                            @endphp
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">

                                @foreach($models as $index=>$model)
                                    <li class="nav-item">
                                        <a class="nav-link {{$index == 0 ?'active':''}}" id="custom-tabs-four-home-tab" data-toggle="pill" href="#{{$model}}" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                                            @lang('site.'.$model)
                                        </a>
                                    </li>
                                @endforeach




                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">

                                @foreach($models as $index=>$model)

                                    <div class="tab-pane fade show {{$index == 0 ?'active':''}}" id="{{  $model }}" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                        @foreach($maps as $map)
                                            <label><input type="checkbox"   name="permissions[]"   {{$user->hasPermission($model.'_'.$map )? 'checked' : ''}} value="{{$model.'_'.$map}}"> @lang('site.'.$map)</label>
                                        @endforeach

                                    </div>

                                @endforeach




                            </div>
                        </div>
                        <!-- /.card -->
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
