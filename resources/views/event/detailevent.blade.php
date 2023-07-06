@extends('layout.navbar')

@section('konten')

    {{-- <div class="backbtn">
      <a href="{{ url()->previous() }}">
        <i class="uil uil-arrow-left"></i>
      </a>
    </div> --}}

    <div class="mt-12">
      <section class="wrapper bg-gray">
        <div class="container py-3 py-md-10">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <div class="navplus">
              <ol class="breadcrumb mb-0 mt-n5">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
                <li class="breadcrumb-item"><a href="{{ route('listevent') }}"><span class="textbread">Daftar Acara</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-list"></i></div></a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page"><div class="textjudulbread"><span id="textjudulbread">Musikal Kapan Resign?</span></div></li>
              </ol>
            </div>
          </nav>
        </div>
      </section>
    </div>
    
    <div id="poster">
      <div class="mt-n8 mb-n8">
        <div class="card">
          <div class="searchbody">
            <div class="card">
              <div class="parent-container">
                <div class="image-container">
                  <img class="background-image" src="{{ asset('assets/img/photos/posterkapanresign.jpg') }}" alt="Background Image">
                  <img class="foreground-image" src="{{ asset('assets/img/photos/posterkapanresign.jpg') }}" alt="Foreground Image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      

    <section class="wrapper bg-light mt-10">
      <div class="container py-2 py-md-5 px-3">
        
        <h2 class="post-title h3 mt-1 mb-5 textevent">Musikal Kapan Resign?</h2>
        <div class="row">
          <div class="detailevent">
            <ul class="post-meta">
              <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/calendar.svg') }}" style="width: 0.75rem"> 06 - 08 Oct 2023</span></li>
            </ul>
            <ul class="post-meta">
              <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/clock.svg') }}" style="width: 0.75rem"> 14:00 & 19:00</span></li>
            </ul>
            <ul class="post-meta mb-3">
              <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/map.svg') }}" style="width: 0.75rem"> Salemba text lokasi panjang </span></li>
            </ul>
          </div>
          <div class="detailevent text-end">
            <ul class="post-meta">
              <li><span class="text-dark w400">Jakarta Musical Crew</span></li>
            </ul>
          </div>
        </div>

        <h6 class="post-title mt-5 mb-3">Deskripsi</h6>
        <p>
          Smile  Inc. adalah tempat impian banyak orang untuk bekerja. Namun, di dalam perusahaan impian ini tagline “Kapan Resign?” merupakan tagline utama para karyawan.

          Pimpinan perusahaan yang menyebalkan dan tidak punya hati yang bernama SISKA, bahkan membuat 3 orang sahabat yakni AMEL, ADIT, dan RARA yang dikenal sebagai A-Team ikut diliput perasaan muak dan ingin resign. Begitu pula dengan MAS WINDHU, orang kepercayaan Siska yang ternyata akan resign setelah 10 tahun bekerja.
        </p>
        <a href="#">
          Lihat Lebih Banyak
        </a>

        <h6 class="post-title mt-10 mb-3">Karcis 6 Okt 2023 14:00</h6>
        {{-- <div class="bodykosong"></div> --}}


      </div>
    </section>

    <section class="wrapper bg-light mb-10">
      <div class="container px-3">
        <div class="row gx-xl-12 gy-10">  
          <div class="col-xl-12">
            <div class="position-relative">
              <div class="swiper-container dots-closer mb-3" data-margin="0" data-dots="true" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="item-inner">
                        <div class="card cardharga">
                          <h6 class="post-title h7">Royal Seat</h6>
                          <p>Tiket dengan posisi tempat duduk nyaman & strategis</p>
                          <div class="note-harga"><h4><span class="text-ungu w700">Rp 300.000</span></li><h4></div>
                          <a href="" class="button-harga btnorder order">
                            Beli
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="item-inner">
                        <div class="card cardharga">
                          <h6 class="post-title h7">Best Seat</h6>
                          <p>Tiket dengan posisi tempat duduk strategis</p>
                          <div class="note-harga"><h4><span class="text-ungu w700">Rp 250.000</span></li><h4></div>
                          <a href="" class="button-harga btnorder order">
                            Beli
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="item-inner">
                        <div class="card cardharga">
                          <h6 class="post-title h7">Normal Seat</h6>
                          <p>Tiket dengan posisi tempat duduk normal</p>
                          <div class="note-harga"><h4><span class="text-ungu w700">Rp 200.000</span></li><h4></div>
                          <a href="" class="button-harga btnorder order">
                            Beli
                          </a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

@stop