@extends('layouts.frontend.app')
@section('content')

    <section class="contact_area section_gap" style="margin-bottom: 10px">

    <div class="wrapper">

        <div class="main-wrapper">
            <div class="profile-container">
                <img class="profile" src="{{$team->image_path}}" style="width: 100px;height: 100px" alt="" />
                <span>
                    <h4 style="margin-top: 10px">{{$team->full_name}}
                    </h4>

                    <div style="margin-bottom: 10px">
                    {{$team->views}} <i class="fa fa-eye" style=""></i>
                        </div>
                </span>

            </div><!--//profile-container-->



            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Project </h2>
                <div class="summary">



                            <ul class="list-group" >
                                @foreach($project as $projects)

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{$projects->name}}
                                        <span class="badge  badge-pill"><a href="{{route('frontend.detail',$projects->id)}}" >Vist</a></span>
                                    </li>


                                @endforeach
                            </ul>


                </div><!--//summary-->
            </section><!--//section-->

        </div><!--//main-body-->
    </div>

    </section>
@endsection
