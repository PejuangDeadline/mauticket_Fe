<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>MauTicket  - Online Ticket Booking</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logotm.ico') }}"/>
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/logotm.png') }}" /> --}}

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.animatedheadline.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>

<body>
    <!-- ==========Loading Icon========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Loading Icon========== -->

    <!-- ==========Scroll Overlay========== -->
    {{-- <div class="overlay"></div> --}}
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Scroll Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{ route('landingpage') }}">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="">Login</a>
                    </li>
                    <li class="header-button pr-0">
                        <a href="" style="color: aliceblue">Signup</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->

    @yield('konten')

    <!-- ==========Newslater-Section========== -->
    {{-- <footer class="footer-section"> --}}
    <footer class="footer-section">
        <div class="newslater-section padding-bottom">
            <div class="container">
                <div class="newslater-container bg_img" data-background="./assets/images/newslater/newslater-bg01.jpg">
                    <div class="newslater-wrapper">
                        <h5 class="cate">Subscribe to MauTicket.id </h5>
                        <h3 class="title">to get exclusive benifits</h3>
                        <form class="newslater-form">
                            <input type="text" placeholder="Your Email Address">
                            <button type="submit">subscribe</button>
                        </form>
                        <p>We respect your privacy, so we never share your info</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="logo">
                    <a href="index-1.html">
                        <img src="{{ asset('assets/images/footer/footer-logo.png') }}" alt="footer">
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left">
                        {{-- <p>Copyright © 2023.All Rights Reserved By <a href="#0">PaluGada </a></p> --}}
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#0">About</a>
                        </li>
                        <li>
                            <a href="#0">Terms Of Use</a>
                        </li>
                        <li>
                            <a href="#0">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#0">FAQ</a>
                        </li>
                        <li>
                            <a href="#0">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/heandline.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>