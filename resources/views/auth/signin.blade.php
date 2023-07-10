@extends('layout.navbar')

@section('konten')

    <div class="mt-12">
      <section class="wrapper bg-gray">
        <div class="container py-3 py-md-10">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <div class="navplus">
              <ol class="breadcrumb mb-0 mt-n5">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
                <li class="breadcrumb-item active text-muted"><span class="textbread">Masuk</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-sign-in-alt"></i></div></li>
              </ol>
            </div>
          </nav>
        </div>
      </section>
    </div>
    
    
    <section class="wrapper bg-light mt-18">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
            <!-- Notifikasi menggunakan flash session data -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <!-- End Flash -->
            <div class="card">
              <div class="card-body text-center">

                <h2 class="mb-1 mt-n3 text-center">Masuk</h2>
                <p class="lead mb-6 text-center">Masukkan E-mail dan Kata Sandi.</p>

                <form action="{{ route('postsignin') }}" method="post" enctype="multipart/form-data" id="SigninForm">
                  @csrf
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Masukkan E-mail" id="loginEmail" name="loginEmail">
                    <label for="loginEmail">E-mail</label>
                  </div>
                  <div class="form-floating password-field mb-4">
                    <input type="password" class="form-control" placeholder="Masukkan Kata Sandi" id="loginPassword" name="loginPassword">
                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                    <label for="loginPassword">Kata Sandi</label>
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Masuk</button>
                </form>

                <p class="mb-1"><a href="#" class="hover">Lupa Kata Sandi?</a></p>
                <p class="mb-0">Belum memiliki akun? <a href="{{ route('signup') }}" class="hover">Daftar</a></p>

                {{-- <div class="divider-icon my-4">atau</div>
                <nav class="nav social justify-content-center text-center">
                  <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                  <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                  <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                </nav> --}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

@stop