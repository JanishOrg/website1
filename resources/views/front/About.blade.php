@php
$web = DB::table('websettings')->first();
$home = DB::table('homedetails')->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--favicon icon-->
    <link rel="icon" href="https://res.cloudinary.com/dnvcb6v8a/image/upload/v1707907235/logo_bmzcte-removebg-preview_ki06sj.png" type="image/png" sizes="16x16">
    <!--title-->
    <title>{{ $web->website_tagline }}</title>
    <!--build:css-->

    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('admin-assets/fonts/line-awesome/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('admin-assets/vendors/js/sweet-alert/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin-assets/vendors/js/sweet-alert/jquery.sweet-modal.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('front-assets/css/main1.css') }}">
    <!-- endbuild -->
</head>

<body>
    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
        <img src="https://res.cloudinary.com/dnvcb6v8a/image/upload/v1707907235/logo_bmzcte-removebg-preview_ki06sj.png" alt="logo" width="80"
                class="img-fluid" />
            <div class="thecube">
                <div class="cube c1"></div>
                <div class="cube c2"></div>
                <div class="cube c4"></div>
                <div class="cube c3"></div>
            </div>
        </div>
    </div>
    <!--preloader end-->
    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="height:45px;">
                <img src="https://res.cloudinary.com/dnvcb6v8a/image/upload/v1707907235/logo_bmzcte-removebg-preview_ki06sj.png" alt="logo" width="80"
                        class="img-fluid" style="margin-top:-17px;" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li><a href="{{ url('/') }}" class=""> Home</a></li>
                        <li><a href="#about" class="page-scroll">About</a></li>
                        <li><a href="#features" class="page-scroll">Features</a></li>
                        <li><a href="#screenshots" class="page-scroll">Screenshots</a></li>
                        <li><a href="#faq" class="page-scroll">Faq</a></li>
                        <li><a href="#process" class="page-scroll">Review</a></li>
                        <li><a href="#contact" class="page-scroll">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->

    <div class="main">
        <!--page header section start-->
        <section class="page-header-section ptb-100 bg-image this_is_cusrtom" image-overlay="8">
            <div class="background-image-wraper" style="background: url('assets/img/slider-bg-1.jpg'); opacity: 1;">
            </div>
            <div class="container">
                <br><br>
                <div class="row align-items-center">
                    <div class="col-md-9 col-lg-7">
                        <div class="page-header-content text-white pt-4">
                            <h1 class="text-white mb-0 font-weight-bold">{{ $home->about_title }}</h1>
                            <p class="lead">{{ $home->about_desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--breadcrumb section start-->
        <div class="breadcrumb-bar gray-light-bg border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb pl-0 mb-0 bg-transparent">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

<!--blog section start-->
<div class="module pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <center>
                    <!-- Post-->
                    <article class="post">
                        <div class="post-wrapper">
                            <div class="post-header">
                                <h2 class="post-title">About Our Games</h2>
                            </div>
                            <div class="post-content">
                                <p>Welcome to <strong>GameHub</strong>, where classic fun meets modern excitement! Explore our top five games that are designed for all ages and offer endless entertainment.</p>
                                
                                <h3>1. Ludo</h3>
                                <p>The beloved classic board game brought to life in a new and exciting way! Roll the dice, move your tokens, and race your opponents to the finish. Whether playing with friends or AI, Ludo guarantees hours of fun and strategic gameplay.</p>
                                
                                <h3>2. Snake and Ladders</h3>
                                <p>Climb up the ladders and avoid the snakes in this timeless game of chance! Simple yet thrilling, Snake and Ladders brings the excitement of childhood back to life. Perfect for family game nights or casual fun with friends.</p>
                                
                                <h3>3. Lucky Number</h3>
                                <p>Test your luck in this thrilling number game! Choose your lucky number, spin the wheel, and see if fortune is on your side. Whether you're feeling lucky or strategic, this game is all about chance and excitement.</p>
                                
                                <h3>4. Fruit Slash</h3>
                                <p>Get ready for some juicy action! Swipe your way through a barrage of fruits and aim for high scores. With addictive gameplay and vibrant graphics, Fruit Slash is a fast-paced arcade game that keeps you coming back for more.</p>
                                
                                <h3>5. Spin Wheel</h3>
                                <p>Spin the wheel and win big! Spin Wheel offers endless fun with exciting rewards at every turn. Whether you’re trying your luck for prizes or just enjoying the thrill of the spin, this game is perfect for players looking for a quick and entertaining experience.</p>
                                
                                <p>Join us at <strong>GameHub</strong> and dive into these classic games reimagined for today’s gamers!</p>
                            </div>
                        </div>
                    </article>
                    <!-- Post end-->
                </center>
            </div>
        </div>
    </div>
</div>
<!--blog section end-->



    </div>

    <!--footer section start-->
    <!--when you want to remove subscribe newsletter container then you should remove .footer-with-newsletter class-->
    <footer class="footer-1 gradient-bg ptb-60 footer-with-newsletter">
        <div class="container bottom_border">
            <div class="row">
                <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">About us</h5>
                    <!--headin5_amrc-->
                    <p class="mb10">
                        {{ \Illuminate\Support\Str::limit($home->about_desc, 250, $end = '...') }}</p>
                </div>


                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="{{ url('/') }}" class=""> Home</a></li>
                        <li><a href="#features" class="page-scroll">Features</a></li>
                        <li><a href="#screenshots" class="page-scroll">Screenshots</a></li>
                        <li><a href="#faq" class="page-scroll">Faq</a></li>
                        <li><a href="#process" class="page-scroll">Review</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="{{ url('/') }}/about-us">About Us</a></li>
                        <li><a href="{{ url('/') }}/privacy-policy">Privacy Policy</a></li>
                        <li><a href="{{ url('/') }}/terms-condition">Terms & Conditions</a></li>
                        <li><a href="{{ url('/') }}/refund-policy">Refund Policy</a></li>
                        <li><a href="{{ url('/') }}/contact-us">Contact</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-4 col-md  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Contact us</h5>
                    <!--headin5_amrc ends here-->

                    <ul class="footer_ul2_amrc">
                        <p><i class="las la-map-marked-alt icon-size-sm"></i> {{ $web->address }} </p>
                        <p><i class="las la-phone-volume icon-size-sm"></i> {{ $web->pnum }} </p>
                        <p><i class="las la-envelope icon-size-sm"></i> {{ $web->pemail }} </p>
                    </ul>
                    <!--footer_ul2_amrc ends here-->
                </div>
            </div>
        </div>


        <div class="container">
            <center>
            <div class="list-inline social-list-default background-color social-hover-2 mt-2">
                    <li class="list-inline-item"><a class="twitter" href="{{ $web->twitter }}"
                            target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="youtube" href="{{ $web->youtube }}"
                            target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a class="linkedin" href="{{ $web->linkedin }}"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a class="dribbble" href="{{ $web->instagram }}"
                            target="_blank"><i class="fab fa-instagram"></i></a></li>
                </div>
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">{{ $web->copyright }}</p>
            </center>
            <!--social_footer_ul ends here-->
        </div>
        <!--end of container-->
        <!--end of container-->
    </footer>
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="{{ URL::asset('front-assets/js/vendors/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/vendors/popper.min.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/vendors/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('front-assets/s/vendors/countdown.min.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/vendors/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/vendors/jquery.rcounterup.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/vendors/magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/vendors/validator.min.js') }}"></script>
    <script src="{{ URL::asset('admin-assets/vendors/js/sweet-alert/sweet-alert.js') }}"></script>
    <script src="{{ URL::asset('admin-assets/vendors/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('admin-assets/css/custom/js/screenshot/screenshot.js') }}"></script>
    <script src="{{ URL::asset('front-assets/js/app.js') }}"></script>
    <!--endbuild-->
</body>

</html>
