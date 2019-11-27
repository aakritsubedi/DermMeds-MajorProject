<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Derm Meds</title>

    <link rel="shortcut icon" href="{{asset('/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('css/animate-3.7.0.css')}}')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<!-- Preloader Starts -->
{{--<div class="preloader">
    <div class="spinner"></div>
</div>--}}

<!-- Header Area Starts -->
<header class="header-area d-print-none">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 d-md-flex">
                    <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +977 1 2070021</h6>
                    <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> contactus@dermmeds.com.np</h6>
                    <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Dhapakhel,Lalitpur</h6>
                </div>
                <div class="col-lg-3">
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo" style="margin-top: 50px;">
                    <a href="{{url('/')}}" >
                        <h2>
                            <i class="fa fa-stethoscope"></i>
                            <font color="navy">DERM</font>
                            <font color="maroon">MEDS</font>
                        </h2>
                    </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{url('/')}}">Home</a></li>
                        <li class="menu"><a href="{{url('/index.php/research')}}">Research</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </div>
</header>


<!-- Banner Area Starts -->
<section class="banner-area d-print-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2>
                    <i class="fa fa-stethoscope"></i>
                    <font color="navy">DERM</font>
                    <font color="maroon">MEDS</font>
                </h2>
                <span style="font-family: cursive;font-size: 15px;">skin diseases analysis using CNN</span>
                <hr>
                <h3>Leading the way in medical excellence</h3>
                <p>
                    DERM MEDS is little try to make skin disease analysis more easy and reliable using neural network
                    to find what's wrong with your skin.
                </p>
                <a href="http://localhost:5000/static/predict.html" class="template-btn mt-3" target="_blank">Upload Skin Photo</a>
            </div>
        </div>
    </div>
</section>

<!-- Department Area Starts -->


@yield('section')

<!-- Footer Area Starts -->
<footer class="footer-area d-print-none" style="padding: 15px;">
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                            <span>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Derm Meds
    </span>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap-4.1.3.min.js')}}"></script>
<script src="{{asset('js/vendor/wow.min.js')}}"></script>
<script src="{{asset('js/vendor/owl-carousel.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/vendor/superfish.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
