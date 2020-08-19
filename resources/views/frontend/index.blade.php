@extends('layouts.frontend.app')
@section('active', 'active')
@section('content')




    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content">
                            <h3 class="text-uppercase">Hell0</h3>
                            <h1 class="text-uppercase">I am Rawa Omer</h1>
                            <h5 class="text-uppercase">Laravel Web developer</h5>
                            <div class="d-flex align-items-center">
                                <a class="primary_btn" href="https://www.facebook.com/rawa.omar123"><span>Talk to me</span></a>
                                <a class="primary_btn tr-bg" href="{{route('frontend.teamproject',4)}}"><span>See CV</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home_right_img">
                            <img class="" src="{{ asset('frontend/img/banner/home-right.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="{{ asset('frontend/img/about-us.png')}}" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2>let’s <br>
                            Introduce about <br>
                            myself</h2>
                        <p>
                            Im Rawa omer graduation from computer science at halabja university
                        </p>
                        <p>
                            That language is used in $skill = [HMLT,CSS,JS,PHP,Laravel]
                        </p>
                        <a class="primary_btn" href="#"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!--================ Srart Brand Area =================-->
    <section class="brand_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo4.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo5.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo6.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo7.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo8.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ asset('frontend/img/brands/logo9.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 col-md-6">
                    <div class="client-info">
                        <div class="d-flex mb-50">
                            <span class="lage">01</span>
                            <span class="smll">Years Experience Working</span>
                        </div>
                        <div class="call-now d-flex">
                            <div>
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="ml-15">
                                <p>call us now</p>
                                <h3>(+964)-7508291020</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Brand Area =================-->

    <!--================ Start Features Area =================-->
    <section class="features_area">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>service offers </h2>
                        <p>
                            Is give may shall likeness made yielding spirit a itself togeth created
                            after sea <br> is in beast beginning signs open god you're gathering ithe
                        </p>
                    </div>
                </div>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('frontend/img/services/s1.png') }}" alt="">
                        <h4>Wp developing</h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('frontend/img/services/s2.png') }}" alt="">
                        <h4>UI/ux design</h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('frontend/img/services/s3.png') }}" alt="">
                        <h4>Web design</h4>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('frontend/img/services/s4.png') }}" alt="">
                        <h4>Graphic design</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Area =================-->

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

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>our team member</h2>
                    </div>
                </div>
            </div>
            @foreach($team as $teams)
            <div class="row">

                <div class="testi_slider owl-carousel">
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img style="width: 130px ; height: 130px" src="{{$teams->image_path}}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>{{$teams->full_name}}</h4>
                                    <a href="{{route('frontend.teamproject',$teams->id)}}" class="genric-btn primary circle arrow small">See Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
             @endforeach



    <!--================ End Testimonial Area =================-->


@endsection
