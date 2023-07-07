@extends('layout.navbar-home')

@section('konten')

    <section class="wrapper bg-dark mt-n13">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('assets/img/bglandingpage/bglandingpage.png') }}">
              <div class="container h-100 mt-5">
                <div class="row h-100">
                  <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                    <h1 class="cd-headline clip display-1 fs-56 mb-4 text-white w600">Cari karcis untuk
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

    <div id="div1">
      <div class="mt-n10 mb-n8">
        <div class="card lift">
          <div class="searchbody">
            <div class="card-headersearch mb-2">
              <div class="mx-auto text-center w500 mt-n1 mb-n1">
                Temukan Yang Kamu Mau
              </div>
            </div>
            <form action="{{ route('search') }}" method="post" enctype="multipart/form-data" id="myForm">
              @csrf
              <span class="row justify-content-between align-items-center">
                <div class="col-lg-5 mb-3">
                  <div class="form-floating">
                    <input id="textInputExample" name="keyword" type="text" class="form-control" placeholder="Text Input">
                    <label for="textInputExample">Kata Kunci</label>
                  </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <select id="mySelect2" class="js-example-basic-single my-select2" name="state">
                      <option value="All">Semua Tempat</option>
                      <option value="Jakarta">Jakarta</option>
                      <option value="Jambi">Jambi</option>
                      <option value="Bandung">Bandung</option>
                      <option value="Surabaya">Surabaya</option>
                      <option value="Jogjakarta">Jogjakarta</option>
                    </select>
                </div>
                <div class="col-lg-3 mb-3">
                  <input class="form-control" type="text" name="daterange" value="" />
                </div>
                <div class="col-lg-1 mb-3">
                  <div class="mx-auto text-center w300">
                    <a id="submitBtn" type="submit" class="btnsrch srch"><i class="uil uil-search"></i></a>
                  </div>
                </div>
              </span>
            </form>
          </div>
        </div>
      </div>
    </div>

    <section class="wrapper bg-light px-0">
      <div class="container py-14 py-md-13">
        
        <h4 class="display-4">Acara Mendatang</h4>
        <h4 class="display-sub w400 text-ash mb-10">Acara-acara menarik yang bisa kamu datangi bersama pacar atau gebetan kamu</h4>
        <div class="row">
          
          <div class="col-lg-4 mb-3">
            <div class="swiper-slide mt-3">
              <div class="card">
                <article>
                  <figure class="overlay overlay-1 hover-scale rounded mb-5">
                    <a href="{{ route('detailevent') }}"> 
                      <img class="imag" src="{{ asset('assets/img/photos/posterkapanresign.jpg') }}" alt="" />
                    </a>
                    <figcaption>
                      <h5 class="from-top mb-0">Baca Selengkapnya..</h5>
                    </figcaption>
                  </figure>
                  <div class="judulevent">
                    <div class="post-header">
                      <h2 class="post-title h3 mt-1 mb-5 textevent"><a class="link-dark" href="./blog-post.html">Musikal Kapan Resign?</a></h2>
                    </div>
                  </div>
                  
                  <div class="footerevent">
                    <div class="post-footer">
                      <div class="row">
                        <div class="detailevent">
                          <ul class="post-meta">
                            <li><span class="text-dark w400 textlokasi"><img src="{{ asset('assets/img/logo/calendar.svg') }}" style="width: 0.75rem"> 06 - 08 Oct 2023</span></li>
                          </ul>
                          <ul class="post-meta">
                            <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/clock.svg') }}" style="width: 0.75rem"> 14:00 & 19:00</span></li>
                          </ul>
                          <ul class="post-meta mb-3">
                            <li><span class="text-dark w400 textlokasi"><img src="{{ asset('assets/img/logo/map.svg') }}" style="width: 0.75rem"> Salemba text lokasi panjang </span></li>
                          </ul>
                        </div>
                        <div class="detailevent text-end">
                          <ul class="post-meta mt-3">
                            <li><span class="text-dark w400">Karcis mulai dari</span></li>
                          </ul>
                          <ul class="post-meta">
                            <li><h4><span class="text-ungu w700">Rp 200.000</span></li><h4>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-3">
            <div class="swiper-slide mt-3">
              <div class="card">
                <article>
                  <figure class="overlay overlay-1 hover-scale rounded mb-5">
                    <a href="#"> 
                      <img class="imag" src="{{ asset('assets/img/photos/posterkapanresign.jpg') }}" alt="" />
                    </a>
                    <figcaption>
                      <h5 class="from-top mb-0">Baca Selengkapnya..</h5>
                    </figcaption>
                  </figure>
                  <div class="judulevent">
                    <div class="post-header">
                      <h2 class="post-title h3 mt-1 mb-5 textevent"><a class="link-dark" href="./blog-post.html">Konser Tunggal Musisi Ibu Kota Bebas Siapa</a></h2>
                    </div>
                  </div>
                  
                  <div class="footerevent">
                    <div class="post-footer">
                      <div class="row">
                        <div class="detailevent">
                          <ul class="post-meta">
                            <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/calendar.svg') }}" style="width: 0.75rem"> 08 Nov 2023</span></li>
                          </ul>
                          <ul class="post-meta">
                            <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/clock.svg') }}" style="width: 0.75rem"> 21:00</span></li>
                          </ul>
                          <ul class="post-meta mb-3">
                            <li><span class="text-dark w400 textlokasi"><img src="{{ asset('assets/img/logo/map.svg') }}" style="width: 0.75rem"> Menara Kadin</span></li>
                          </ul>
                        </div>
                        <div class="detailevent text-end">
                          <ul class="post-meta mt-3">
                            <li><span class="text-dark w400">Karcis mulai dari</span></li>
                          </ul>
                          <ul class="post-meta">
                            <li><h4><span class="text-ungu w700">Rp 1.000.000</span></li><h4>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-3">
            <div class="swiper-slide mt-3">
              <div class="card">
                <article>
                  <figure class="overlay overlay-1 hover-scale rounded mb-5">
                    <a href="#"> 
                      <img class="imag" src="{{ asset('assets/img/photos/posterkapanresign.jpg') }}" alt="" />
                    </a>
                    <figcaption>
                      <h5 class="from-top mb-0">Baca Selengkapnya..</h5>
                    </figcaption>
                  </figure>
                  <div class="judulevent">
                    <div class="post-header">
                      <h2 class="post-title h3 mt-1 mb-5 textevent"><a class="link-dark" href="./blog-post.html">Contoh Judul Acara Kalau String Panjang Hingga Melebihi</a></h2>
                    </div>
                  </div>
                  
                  <div class="footerevent">
                    <div class="post-footer">
                      <div class="row">
                        <div class="detailevent">
                          <ul class="post-meta">
                            <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/calendar.svg') }}" style="width: 0.75rem"> 08 Nov 2023</span></li>
                          </ul>
                          <ul class="post-meta">
                            <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/clock.svg') }}" style="width: 0.75rem"> 21:00</span></li>
                          </ul>
                          <ul class="post-meta mb-3">
                            <li><span class="text-dark w400 textlokasi"><img src="{{ asset('assets/img/logo/map.svg') }}" style="width: 0.75rem"> Menara Kadin</span></li>
                          </ul>
                        </div>
                        <div class="detailevent text-end">
                          <ul class="post-meta mt-3">
                            <li><span class="text-dark w400">Karcis mulai dari</span></li>
                          </ul>
                          <ul class="post-meta">
                            <li><h4><span class="text-ungu w700">Rp 1.000.000</span></li><h4>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>

        </div>

        <div class="text-center w500 mt-4">
          <a href="{{ route('listevent') }}" class="btnmore lbhbyk">Lebih banyak...</a>
        </div>

        


      </div>
    </section>

@stop