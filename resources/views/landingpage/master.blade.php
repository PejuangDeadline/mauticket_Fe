<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>MauKarcis - Online Karcis Booking</title>
        <link rel="shortcut icon" href="{{ asset('assets/img/logo/logoicon.png') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/styleori.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/other.css') }}">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">
        
    </head>

    <body>
      <div class="content-wrapper mt-n6">
        <header class="wrapper bg-soft-primary">
          <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
            <div class="container flex-lg-row flex-nowrap align-items-center">
              <div class="navbar-brand w-100" style="padding : 0.8rem">
                <a href="index.html">
                  <img class="logo-dark" src="{{ asset('assets/img/logo/logo3.svg') }}" srcset="{{ asset('assets/img/logo/logo3.svg') }}" alt="">
                  <img class="logo-light" src="{{ asset('assets/img/logo/logo3.svg') }}" srcset="{{ asset('assets/img/logo/logo3.svg') }}" alt="">
                </a>
              </div>
              <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                  <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                  <!-- /.navbar-nav -->
                  <div class="offcanvas-footer d-lg-none">
                    <div>
                      <a href="cdn-cgi/l/email-protection.html#c5a3acb7b6b1eba9a4b6b185a0a8a4aca9eba6aaa8" class="link-inverse"><span class="__cf_email__" data-cfemail="fd94939b92bd98909c9491d39e9290">[email&#160;protected]</span></a>
                      <br> 00 (123) 456 78 90 <br>
                      <nav class="nav social social-white mt-4">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                  </div>
                  <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
              </div>
              <!-- /.navbar-collapse -->
              <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <li class="nav-item test">
                    <a class="nav-link w600" href="#">Login</a>
                  </li>
                  <li class="nav-item test">
                    <a href="#" class="btn btn-sm btn-primary rounded-pill w600">Sign Up</a>
                  </li>
                  <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                  </li>
                </ul>
                <!-- /.navbar-nav -->
              </div>
              <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
          </nav>
          <!-- /.navbar -->
          <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
            <div class="offcanvas-header">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pb-6">
              <div class="widget mb-8">
                <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
              </div>
              <!-- /.widget -->
              <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Contact Info</h4>
                <address> Moonshine St. 14/05 <br> Light City, London </address>
                <a href="cdn-cgi/l/email-protection.html#54323d2627207a38352720143139353d387a373b39"><span class="__cf_email__" data-cfemail="d5bcbbb3ba95b0b8b4bcb9fbb6bab8">[email&#160;protected]</span></a><br> 00 (123) 456 78 90
              </div>
              <!-- /.widget -->
              <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Learn More</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <!-- /.widget -->
              <div class="widget">
                <h4 class="widget-title text-white mb-3">Follow Us</h4>
                <nav class="nav social social-white">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                  <a href="#"><i class="uil uil-instagram"></i></a>
                  <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!-- /.widget -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.offcanvas -->
          <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
            <div class="container d-flex flex-row py-6">
              <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
              </form>
              <!-- /.search-form -->
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- /.container -->
          </div>
          <!-- /.offcanvas -->
        </header>
        <!-- /header -->


        @yield('konten')

      </div>

      <!-- /.content-wrapper -->
      <footer class="bg-dark text-inverse">
        <div class="container py-md-7 mx-auto text-center">
          <img src="{{ asset('assets/img/logo/logolight.svg') }}" alt=""> © 2023. All rights reserved.
          <nav class="social social-white">
            <a href="#"><i class="uil uil-twitter"></i></a>
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href="#"><i class="uil uil-instagram"></i></a>
            <a href="#"><i class="uil uil-youtube"></i></a>
          </nav>
        </div>
      </footer>
      <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
      </div>
      <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/plugins.js"></script>
      <script src="{{ asset('assets/js/theme.js') }}"></script>

      <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('assets/js/headline.js') }}"></script>

    </body>
</html>