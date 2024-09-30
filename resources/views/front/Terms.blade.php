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
                            <h1 class="text-white mb-0 font-weight-bold">{{ $web->terms_title }}</h1>
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
                                <li class="breadcrumb-item active">Terms & Condition</li>
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
                                <h2 class="post-title">{{ $web->terms_title }}</h2>
                            </div>
                            <div class="post-content">
                                <p><strong>Welcome to GameHub! By using our services, you agree to the following terms and conditions. Please read them carefully before engaging with our games or making any purchases.</strong></p>

                                <h4>1. Acceptance of Terms</h4>
                                <p>By downloading, accessing, or using our games, you agree to these Terms and Conditions. If you do not agree with these terms, you may not use our services. We reserve the right to update these terms at any time, and your continued use of our services signifies acceptance of the updated terms.</p>

                                <h4>2. Account Registration</h4>
                                <p>To access certain features, you may be required to create an account. You agree to provide accurate information during registration and to keep your login credentials secure. You are responsible for any activity that occurs under your account.</p>

                                <h4>3. In-Game Currency and Purchases</h4>
                                <p>Our games may feature an in-game currency system, such as coins, which can be purchased with real money. You agree that:</p>
                                <ul>
                                    <li>All purchases of in-game currency are final and non-refundable unless required by law.</li>
                                    <li>In-game currency has no real-world value and cannot be redeemed for cash.</li>
                                    <li>We reserve the right to modify the availability or pricing of in-game items and currency at any time.</li>
                                    <li>You are solely responsible for any purchases made through your account, including accidental purchases.</li>
                                </ul>

                                <h4>4. Payments and Billing</h4>
                                <p>When making real-money purchases, you agree to provide accurate payment information. All payments are processed through secure third-party payment providers. We are not responsible for any issues arising from payment provider services.</p>

                                <h4>5. User Conduct</h4>
                                <p>You agree to use our services in a lawful and respectful manner. You may not:</p>
                                <ul>
                                    <li>Engage in any behavior that is harmful, abusive, or harassing to other players.</li>
                                    <li>Use cheats, exploits, or third-party software to gain an unfair advantage.</li>
                                    <li>Impersonate another person or misrepresent your identity.</li>
                                    <li>Violate the intellectual property rights of GameHub or any third parties.</li>
                                </ul>
                                <p>We reserve the right to suspend or terminate your account if you violate these rules or engage in behavior that negatively impacts the game community.</p>

                                <h4>6. Intellectual Property</h4>
                                <p>All content in our games, including but not limited to graphics, design, and gameplay, is the property of GameHub. You are not permitted to reproduce, distribute, or create derivative works without our prior written consent.</p>

                                <h4>7. Limitation of Liability</h4>
                                <p>GameHub is not liable for any damages resulting from the use or inability to use our services. This includes, but is not limited to, loss of data, in-game currency, or personal information. In no event shall our liability exceed the amount you paid to access the game or related services.</p>

                                <h4>8. Termination</h4>
                                <p>We reserve the right to terminate or suspend your access to our games at any time, for any reason, including violation of these Terms and Conditions. Upon termination, you will lose access to your account, in-game currency, and any purchased items, without refund.</p>

                                <h4>9. Changes to Terms and Services</h4>
                                <p>We may update these Terms and Conditions or modify our services at any time. We will notify you of significant changes through email or in-game notifications. Your continued use of our services after the update constitutes your acceptance of the new terms.</p>

                                <h4>10. Governing Law</h4>
                                <p>These Terms and Conditions are governed by the laws of [Insert Jurisdiction]. Any disputes arising from your use of our services will be subject to the exclusive jurisdiction of the courts in [Insert Jurisdiction].</p>

                                <h4>11. Contact Information</h4>
                                <p>If you have any questions about these Terms and Conditions, please contact us at <strong>support@gamehub.com</strong>.</p>

                                <p>Last Updated: 30/09/2024 </p>
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
