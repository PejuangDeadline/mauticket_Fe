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

        {{-- Select2  --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
        <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet" />
        
        {{-- DaterangePicker  --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        
        
    </head>

    <body>
      <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
          {{-- <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none"> --}}
          <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-light caret-none navbar-clone fixed navbar-stick">
            <div class="container flex-lg-row flex-nowrap align-items-center">
              <div class="navbar-brand w-100" style="padding : 0.8rem">
                <a href="index.html">
                  <img class="logo-dark" src="{{ asset('assets/img/logo/logo3.svg') }}" srcset="{{ asset('assets/img/logo/logo3.svg') }}" alt="">
                  <img class="logo-light" src="{{ asset('assets/img/logo/logo3.svg') }}" srcset="{{ asset('assets/img/logo/logo3.svg') }}" alt="">
                </a>
              </div>
              <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                  <h3 class="text-white fs-30 mb-0">
                    <img src="{{ asset('assets/img/logo/logo3.svg') }}" srcset="{{ asset('assets/img/logo/logo3.svg') }}" alt="">
                  </h3>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                  <ul class="navbar-nav d-lg-none">
                    <li class="nav-item dropdown dropdown-mega">
                      <a class="nav-link" href="#" >Login</a >
                    </li>
                  </ul>
                  <div class="offcanvas-footer d-lg-none">
                    <div>
                      <a href="cdn-cgi/l/email-protection.html#c5a3acb7b6b1eba9a4b6b185a0a8a4aca9eba6aaa8" class="link-inverse"><span class="__cf_email__" data-cfemail="fd94939b92bd98909c9491d39e9290">customer.care@maukarcis.co.id</span></a>
                      <br> 00 (123) 456 78 90 <br>
                      <nav class="nav social social-white mt-4">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
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
              </div>
            </div>
          </nav>
        </header>

        @yield('konten')

      </div>

      <footer class="bg-dark text-inverse">
        <div class="container py-md-7 mx-auto text-center w300 mt-2">
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

      <!-- Option 1: Bootstrap Bundle with Popper -->
      {{-- <script src="{{ asset('assets/js/bootstrap.js') }}"></script> --}}
      
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
      {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    </body>
</html>