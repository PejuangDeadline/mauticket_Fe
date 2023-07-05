<!DOCTYPE html>
<html lang="en">

    @include('layout.include.head')

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

      @include('layout.include.footer')

    </body>
</html>