@extends('landingpage.master')

@section('konten')

    <section class="wrapper bg-dark">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('assets/img/bglandingpage/bglandingpage.png') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                    <h1 class="cd-headline clip display-1 fs-56 mb-4 text-white w600">Cari tiket untuk
                      <br>
                      <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Kamu</b>
                        <b>Keluarga</b>
                        <b>Teman</b>
                        <b>Pasangan</b>
                      </span>
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="wrapper bg-light">
      <div class="container pt-16 pb-14 pb-md-0">
        <div class="row gx-lg-8 gx-xl-0 align-items-center">
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    
@endsection