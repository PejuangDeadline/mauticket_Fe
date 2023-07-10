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

        @yield('konten')

      </div>

      @include('layout.include.footer')

    </body>
</html>