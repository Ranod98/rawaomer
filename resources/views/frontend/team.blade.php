
@extends('layouts.frontend.app')
@section('active', 'active')
@section('content')
    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Team Member</h2>
                    <div class="page_link">
                        <a href="{{route('frontend.index')}}">Home</a>
                        <a >Team Member</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap" style="margin-bottom: 10px">

        <div class="container">

                 <h2>Team Member</h2>
                <ul class="list-group" >
                    @foreach($team as $teams)

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$teams->full_name}}
                            <span class="badge  badge-pill"><a href="{{route('frontend.teamproject',$teams->id)}}" >View</a></span>
                        </li>


                    @endforeach
                </ul>




        </div>
    </section>
    <!--================Contact Area =================-->

@endsection
