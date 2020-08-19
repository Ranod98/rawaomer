<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('frontend/img/favicon.png') }}" type="image/png">
    <title>My Personal Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
    <script defer src="{{asset('frontend/assets/fontawesome/js/all.min.js')}}"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('frontend/assets/css/orbit-1.css')}}">

</head>

<body>

<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('frontend/img/logo.png')}}" style="width:  px;height: 100px" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item @yield('active', '')"><a class="nav-link" href="{{route('frontend.index')}}">Home</a></li>
                        <li class="nav-item @yield('active', '')" ><a class="nav-link" href="{{route('frontend.about')}}">About</a></li>
                        <li class="nav-item @yield('active', '')"><a class="nav-link" href="{{route('frontend.project')}}">Project</a></li>
                        <li class="nav-item @yield('active', '')"><a class="nav-link" href="{{route('frontend.team')}}">Team Member</a></li>
                        <li class="nav-item @yield('active', '')"><a class="nav-link" href="{{route('contact.create')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->





@yield('content')






<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="footer_top flex-column">
                    <div class="footer_logo">
                        <a href="#">
                            <img src="{{asset('frontend/img/logo.png')}}" alt="">
                        </a>
                        <h4>Follow Me</h4>
                    </div>
                    <div class="footer_social">
                        <a href="https://www.facebook.com/rawa.omar123"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/Rawa_Ranod"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UC1194K9zzoWt0-OahbGNMIw"><i class="fa fa-youtube"></i></a>
                        <a href="https://www.instagram.com/rawa_omar_/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer_bottom justify-content-center">
            <p class="col-lg-8 col-sm-12 footer-text">

                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Rawa Omer</a>
               </p>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/stellar.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/isotope/isotope-min.js') }}"></script>
<script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/js/mail-script.js') }}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('frontend/js/gmaps.min.js') }}"></script>
<script src="{{ asset('frontend/js/theme.js') }}"></script>
</body>

</html>
