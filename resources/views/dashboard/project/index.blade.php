
@extends('layouts.dashboard.app')
@section('title', 'Project-Index')
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
                        <li class="breadcrumb-item active">@lang('site.project')</li>
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
                <h3 class="card-title">@lang('site.project')<small> {{$projects->total()}}</small></h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <form action="{{route('dashboard.projects.index')}}"  method="get">

                    <div class="row">
                        <div class ="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{request()->search}}">
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>

                            @if(auth()->user()->hasPermission('clint_side_create'))
                                <a href="{{route('dashboard.projects.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            @else
                                <button type="submit" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('site.add')</button>
                            @endif

                        </div>
                    </div>

                </form>
                <br>
                @if($projects->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>@lang('site.name')</th>
                            <th>@lang('site.type')</th>
                            <th>@lang('site.team')</th>
                            <th>@lang('site.link')</th>
                            <th>@lang('site.image')</th>
                            <th>@lang('site.created')</th>
                            <th>@lang('site.updated')</th>
                            <th>@lang('site.action')</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($projects as $index=>$project)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$project->name}}</td>
                                <td>{{$project->projectType['name']}}</td>
                                <td>{{$project->projectTeam->full_name}}</td>
                                <td>{{$project->link}}</td>
                                <td><img src="{{$project->image_path}}" style="width: 60px" class="img-thumbnail" alt=""></td>
                                <td>{{$project->created_at->diffForHumans()}}</td>
                                <td>{{$project->updated_at->diffForHumans()}}</td>


                                <td>

                                    @if(auth()->user()->hasPermission('clint_side_update'))
                                        <a href="{{route('dashboard.projects.edit',$project->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                    @else
                                        <button type="submit" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                                    @endif



                                    @if(auth()->user()->hasPermission('clint_side_delete'))
                                        <form action="{{route('dashboard.projects.destroy',$project->id)}}" method="post" style="display: inline-block">
                                            {{csrf_field()}}
                                            {{method_field('delete')}}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>

                                        </form>
                                    @else
                                        <button type="submit" class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <br>

                    {{$projects->appends(request()->query())->links()}}

                @else
                    <h2>@lang('site.no_data_found')</h2>
                @endif

            </div>

        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
