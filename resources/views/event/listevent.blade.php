@extends('master.navbar')

@section('content')

    <div class="mt-12">
      <section class="wrapper bg-gray">
        <div class="container py-3 py-md-10">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <div class="navplus">
              <ol class="breadcrumb mb-0 mt-n5">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
                <li class="breadcrumb-item active text-muted"><span class="textbread">Daftar Acara</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-list"></i></div></li>
              </ol>
            </div>
          </nav>
        </div>
      </section>
    </div>
    
    <div class="mt-3">
      <div id="div1">
        <div class="mt-n10 mb-n8">
          {{-- <div class="card lift"> --}}
          <div class="card">
            <div class="searchbody">
              {{-- <div class="card-headersearch mb-2"> --}}
              <div class="mb-2" style="border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 10px; background-image: url('{{ asset('assets/img/logo/bg.png') }}'); background-size: cover; background-position: center;">
                <div class="mx-auto text-center w500 mt-n1 mb-n1 text-white">
                  Temukan Yang Kamu Mau
                </div>
              </div>
              <form action="{{ route('listevent') }}" method="post" enctype="multipart/form-data" id="myForm">
                @csrf
                <span class="row justify-content-between align-items-center">
                  <div class="col-lg-3 mb-3">
                    <div class="form-floating">
                      <input id="textInputExample" type="text" name="keyword" class="form-control" placeholder="Text Input" value="{{ $event_name }}">
                      <label for="textInputExample">Kata Kunci</label>
                    </div>
                  </div>
                  <div class="col-lg-2 mb-3">
                    <select class="js-example-basic-single my-select2 pr" name="province">
                      <option value="" selected>Semua Provinsi</option>
                      @foreach ($provinces as $province)
                          <option value="{{ $province['id'] }}" @if($pr == $province['id']) selected @endif>{{ $province['nama'] }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <select class="js-example-basic-single my-select2" name="state">
                      <option value="">Semua Kota</option>
                      @if($city != "")
                        <option value="{{ $city }}" selected>{{ $city }}</option>
                      @endif
                    </select>
                  </div>
                  <div class="col-lg-3 mb-3">
                    {{-- <input class="form-control" type="text" name="daterange" value="{{ $daterange }}" /> --}}
                    <input class="form-control" type="text" name="daterange" value="" placeholder="Pilih Tanggal" />
                    <input type="hidden" value="{{ $from }}" name="start_date" id="start_date">
                    <input type="hidden" value="{{ $until }}" name="end_date" id="end_date">
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
    </div>

    <script>
      $(document).ready(function() {
        $('.pr').select2();
        $('.pr').on('select2:select', function (e) {
          var idProv = $(this).val();
          if(idProv==""){
            $('select[name="state"]').empty();
            $('select[name="state"]').append(
              '<option value="" selected>Semua Kota</option>'
            );
          } else {
            var url = '{{ route("mappingCity", ":id") }}';
            url = url.replace(":id", idProv);
            if (idProv) {
              $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function (data) {
                  $('select[name="state"]').empty();
                  $('select[name="state"]').append(
                    '<option value="" selected>Semua Kota</option>'
                  );

                  $.each(data, function (div, value) {
                      $('select[name="state"]').append(
                          '<option value="' +
                              value.nama +
                              '">' +
                              value.nama +
                              "</option>"
                      );
                  });
                },
              });
            } else {
                $('select[name="state"]').empty();
            }
          }
          
        });

      });
    </script>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-13">
        <div class="row">

          @foreach($getEvents as $event)
            <div class="col-lg-4 mb-3">
              <div class="swiper-slide mt-3">
                <div class="card">
                  <article>
                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                      <a href="{{ route('detailevent', $event->id) }}"> 
                        <img class="imag" src="{{ $endpointApi.$event->banner }}" alt="" />
                      </a>
                      <figcaption>
                        <h5 class="from-top mb-0">Baca Selengkapnya..</h5>
                      </figcaption>
                    </figure>
                    <div class="judulevent">
                      <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-5 textevent"><a class="link-dark" href="">{{ $event->event_name }}</a></h2>
                      </div>
                    </div>
                    
                    <div class="footerevent">
                      <div class="post-footer">
                        <div class="row">
                          <div class="detailevent">
                            <ul class="post-meta">
                              <li><span class="text-dark w400 textlokasi"><img src="{{ asset('assets/img/logo/calendar.svg') }}" style="width: 0.75rem"> {{ date("d F Y", strtotime($event->showtime_start)) }}</span></li>
                            </ul>
                            <ul class="post-meta">
                              <li><span class="text-dark w400 textlokasi"><img src="{{ asset('assets/img/logo/clock.svg') }}" style="width: 0.75rem"> {{ date("H:i A", strtotime($event->showtime_start)) }}</span></li>
                            </ul>
                            <ul class="post-meta mb-3">
                              <?php 
                                $find2 = '<p>';
                                $replaceWith2 = '';

                                $newString2 = str_replace($find2, $replaceWith2, $event->event_address);

                                $find3 = '</p>';
                                $replaceWith3 = '';

                                $newString3 = str_replace($find3, $replaceWith3, $newString2);
                              ?>
                              <li><span class="text-dark w400 textlokasi"><img src="{{ asset('assets/img/logo/map.svg') }}" style="width: 0.75rem"> {!! $newString3 !!} </span></li>
                            </ul>
                          </div>
                          <div class="detailevent text-end">
                            <ul class="post-meta mt-3">
                              <li><span class="text-dark w400">Karcis mulai dari</span></li>
                            </ul>
                            <ul class="post-meta">
                              <li><h4><span class="text-ungu w700">Rp {{ number_format($event->price, 0, ',', '.') }}</span></li><h4>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          @endforeach

          {{-- <div class="col-lg-4 mb-3">
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
                      <h2 class="post-title h3 mt-1 mb-5 textevent"><a class="link-dark" href="{{ route('detailevent') }}">Musikal Kapan Resign?</a></h2>
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
                      <h2 class="post-title h3 mt-1 mb-5 textevent"><a class="link-dark" href="{{ route('detailevent') }}">Musikal Kapan Resign?</a></h2>
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
          </div> --}}
          

        </div>

        <div class="my-centered-pagination">
          {{ $getEvents->links('vendor.pagination.bootstrap-4') }}
        </div>

        {{-- <div class="text-center w500 mt-4">
          <nav class="d-flex" aria-label="pagination">
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
        </div> --}}

      </div>
    </section>

@stop