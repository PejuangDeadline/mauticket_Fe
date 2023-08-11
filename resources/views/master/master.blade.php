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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/other.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/formstyle.css') }}">
  
    {{-- Font Poppins --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">
  
    {{-- Select2  --}}
    <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet" />
    
    {{-- DaterangePicker  --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    
    {{-- FontAwesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
    {{-- JQUERY  --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
          <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100" style="padding : 0.8rem">
              <a href="{{ route('homepage') }}">
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

                @if(Auth::user())
                  <ul class="navbar-nav d-lg-none mb-5">
                    <span class="nav-link">{{ Auth::user()->name }}</span>
                  </ul>
                  <hr class="mt-n2 mb-3">
                  <ul class="navbar-nav d-lg-none">
                    <a class="nav-link" href="{{ route('profil') }}"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profil</a>
                  </ul>
                  <ul class="navbar-nav d-lg-none mb-20">
                    <a class="nav-link" href="{{ route('listkarcis') }}"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Daftar Karcis</a>
                  </ul>
                  <ul class="navbar-nav d-lg-none">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-logout"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Keluar</a>
                  </ul>
                @else
                  <ul class="navbar-nav d-lg-none">
                    <li class="nav-item dropdown dropdown-mega">
                      <a class="nav-link" href="{{ route('login') }}" >Masuk</a>
                    </li>
                  </ul>
                @endif

                <div class="offcanvas-footer d-lg-none">
                  <div>
                    <a href="cdn-cgi/l/email-protection.html#c5a3acb7b6b1eba9a4b6b185a0a8a4aca9eba6aaa8" class="link-inverse"><span class="__cf_email__" data-cfemail="fd94939b92bd98909c9491d39e9290">info@maukarcis.co.id</span></a>
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

                @if(Auth::user())
                  <li class="nav-item dropdown test">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                        <i class="fas fa-caret-down" style="width: 10%"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in mr-10"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item w600" href="{{ route('profil') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item w600" href="{{ route('listkarcis') }}">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Daftar Karcis
                        </a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        <hr class="mb-2 mt-2">
                        <a class="dropdown-item w600" href="#" data-bs-toggle="modal" data-bs-target="#modal-logout">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                    
                  </li>
                @else
                  <li class="nav-item test">
                    <a class="nav-link w600" href="{{ route('login') }}">Masuk</a>
                  </li>
                  <li class="nav-item test">
                    <a href="{{ route('signup') }}" class="btn btn-sm btn-primary rounded-pill w600">Daftar</a>
                  </li>
                @endif

                <li class="nav-item d-lg-none">
                  <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>

    <div class="modal fade" id="modal-logout" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <!-- /.row -->
              <h3>Keluar</h3>
              <p class="mb-6">Anda Yakin Untuk Keluar?</p>
              <div class="newsletter-wrapper">
                <div class="row">
                  <div class="col-md-10 offset-md-1">
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                      <div>
                        <input type="button" class="btn btn-primary rounded-pill w-30 btn-login mb-2 closes" data-bs-dismiss="modal" aria-label="Close" value="Tutup">
                        <a href="{{ route('logout') }}" type="button" class="btn btn-primary rounded-pill w-30 btn-login mb-2 keluar">Keluar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  @yield('content')

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
  
  <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
  
  <script src="{{ asset('assets/js/signup/signup.js') }}"></script>
  <script src="{{ asset('assets/js/signup/step1.js') }}"></script>
  <script src="{{ asset('assets/js/signup/step2.js') }}"></script>
  <script src="{{ asset('assets/js/signup/step3.js') }}"></script>
  
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/headline.js') }}"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  
  <!-- Validation Form -->
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  
</body>

</html>