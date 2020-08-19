@extends('layouts.frontend.app')
@section('active', 'active')
@section('content')

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Portfolio</h2>
                    <div class="page_link">
                        <a href="{{route('frontend.index')}}">Home</a>
                        <a >Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Start Portfolio Area =================-->
    <section class="portfolio_area" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title text-left">
                        <h2>quality work <br>
                            Recently done project </h2>
                    </div>
                </div>
            </div>
            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">all</li>
                </ul>
            </div>

            <div class="filters-content">

                <div class="row portfolio-grid justify-content-center">
                    <div class="col-lg-4 col-md-6 all latest">

                    </div>


                    @foreach($project as $projects)

                        <div class="col-lg-4 col-md-6 all ">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img src="{{$projects->image_path}}" style="width: 60px" class="img-fluid w-100"alt="">

                                    <div class="overlay"></div>
                                    <a href="{{$projects->image_path}}" class="img-gal">
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4><a href="{{route('frontend.detail',$projects->id)}}">{{$projects->name}}</a></h4>
                                    <p>{{substr($projects->description, 0, 100)}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--================End Portfolio Area =================-->
@endsection
