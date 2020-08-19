@extends('layouts.frontend.app')
@section('active', 'active')
@section('content')
    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Portfolio Details</h2>
                    <div class="page_link">
                        <a href="{{route('frontend.index')}}">Home</a>
                        <a href="{{route('frontend.project')}}">Project</a>
                        <a>Project Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->


    <!--================Start Portfolio Details Area =================-->
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left_img">
                            <img class="img-fluid" src="{{$Project->image_path}}" alt="">
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-5">
                        <div class="portfolio_right_text mt-30">
                            <h4 class="text-uppercase">{{$Project->name}}</h4>
                            <p>
                                {{$Project->lang}}
                            </p>
                            <ul class="list">
                                <li><span>Vist</span>: <a href="{{$Project->link}}"><i class="fa fa-plus" ></i> GO</a></li>
                                <li><span>Created By</span>: {{$Project->projectTeam->full_name}}</li>
                                <li><span>Type</span>: {{$Project->projectType->name}}</li>
                                <li><span>View</span>: {{$Project->view}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p style="margin-bottom: 100px;">{{$Project->description}}</p>

            </div>
        </div>
    </section>
    <!--================End Portfolio Details Area =================-->





@endsection
