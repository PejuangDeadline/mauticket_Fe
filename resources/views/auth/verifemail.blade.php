@extends('layout.navbar')

@section('konten')

    <div class="mt-12">
      <section class="wrapper bg-gray">
        <div class="container py-3 py-md-10">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <div class="navplus">
              <ol class="breadcrumb mb-0 mt-n5">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
                <li class="breadcrumb-item"><a href="{{ route('signin') }}"><span class="textbread">Masuk</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-sign-in-alt"></i></div></a></li>
                <li class="breadcrumb-item active text-muted"><span class="textbread">Verif Email</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-check-circle"></i></div></li>
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
            @if ($error == 1)
                <div class="alert alert-danger">
                    Maaf, Kode Tidak Cocok
                </div>
            @endif
            <div class="card">
              <div class="card-body text-center">

                <h2 class="mb-1 mt-n3 text-center">Verifikasi Email</h2>
                <p class="lead mb-6 text-center">Masukkan Kode Verfifikasi yang telah kami kirimkan ke E-mail <b>{{ $email }}</b></p>

                <form action="{{ route('verifemail') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" class="form-control" name="email" value="{{ encrypt($email) }}">
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Masukkan Kode" id="CodeVerif" name="codeVerif">
                    <label for="CodeVerif">Kode Verifikasi</label>
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Verifikasi</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

@stop