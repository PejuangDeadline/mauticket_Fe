@extends('master.navbar')

@section('content')

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
      <div class="container py-2 px-6">
        
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

        <hr class="mt-4 mb-0" style="height: 0.07rem; background: rgba(101, 100, 100, 0.188); border: none;">

        <h6 class="post-title mt-5 mb-3">Deskripsi</h6>
        <p id="text-deskripsi" class="textevent" style="text-align: justify;">
          Smile  Inc. adalah tempat impian banyak orang untuk bekerja. Namun, di dalam perusahaan impian ini tagline “Kapan Resign?” merupakan tagline utama para karyawan. Pimpinan perusahaan yang menyebalkan dan tidak punya hati yang bernama SISKA, bahkan membuat 3 orang sahabat yakni AMEL, ADIT, dan RARA yang dikenal sebagai A-Team ikut diliput perasaan muak dan ingin resign. Begitu pula dengan MAS WINDHU, orang kepercayaan Siska yang ternyata akan resign setelah 10 tahun bekerja.
        </p>
        <a href="#" id="see-more">
          Lihat Lebih Banyak..
        </a>
        <a href="#" id="see-less" hidden>
          Lihat Lebih Sedikit..
        </a>

        <script>
          $('#see-more').click(function(e) {
              e.preventDefault();
              $("#text-deskripsi").removeClass("textevent");
              $("#see-more").attr('hidden', 'hidden');
              $("#see-less").removeAttr('hidden');
          });
          $('#see-less').click(function(e) {
              e.preventDefault();
              $("#text-deskripsi").addClass("textevent");
              $("#see-less").attr('hidden', 'hidden');
              $("#see-more").removeAttr('hidden');
          });
        </script>
        <div class="card card-highlight-event px-4 py-4 mt-4">
          <h6 class="h7 post-title"><i class="fas fa-thumbtack"></i> Highlight</h6>
          <ul class="icon-list bullet-bg bullet-soft-primary" style="text-align: justify;">
            <li><i class="uil uil-check"></i>Wajib menjaga protokol kesehatan yang berlaku.</li>
            <li><i class="uil uil-check"></i>Memahami dan menyutujui seluruh persyaratan dan ketentuan sebelum membeli dan menggunakan tiket.</li>
            <li><i class="uil uil-check"></i>Minimal umur 18 Tahun</li>
            <li><i class="uil uil-check"></i>Ibu Hamil dan Penderita Penyakit dalam seperti Jantung tidak boleh masuk Venue</li>
          </ul>
        </div>
        

        <hr class="mt-4 mb-0" style="height: 0.07rem; background: rgba(101, 100, 100, 0.188); border: none;">


        <h6 class="post-title mt-7 mb-1">Silahkan Pilih Waktu Pertunjukan</h6>
        {{-- <div class="bodykosong"></div> --}}

        <div class="position-relative">
          <div class="swiper-container mb-3" data-dots="false" data-items-xxl="8.5" data-items-lg="8.5" data-items-md="5.5" data-items-xs="3.5">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="1">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="2">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="3">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="4">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                {{-- <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="5">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="6">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="7">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="8">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="9">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="10">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="1">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center" id="1">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-inner px-0">
                    <div class="card cardshowtime post-meta mb-0 text-center">
                      2023-08-08 07:00
                    </div>
                  </div>
                </div> --}}

              </div>
            </div>
          </div>
        </div> 

        <div class="card card-cat-back px-4 py-4">
          <div class="row align-items-start">
            <div class="col-lg-4 position-lg-sticky" style="top: 8rem;">
              <div class="accordion-wrapper">
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-2">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">Pemetaan <i> Venue</i></button>
                  </div>
                  <div id="accordion-collapse-3-2" class="collapse show" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/foto/dummystage.png') }}" class="img-fluid mt-n7" alt="" data-bs-toggle="modal" data-bs-target="#modal-venue">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- Modal Foto Venue  --}}
            <div class="modal fade" id="modal-venue" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                  <div class="modal-header px-0 py-6" style="background-color: #eaeffb">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                    <img src="{{ asset('assets/img/foto/dummystage.png') }}" class="img-fluid mt-n7" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8 ms-auto">

              {{-- <h6 class="post-title mt-5 mb-5 text-center text-ungu">
                <i class="fas fa-clock"></i>
                <br>
                Pilih Waktu Pertunjukan Dahulu
              </h6> --}}


              <div class="card cardharga mb-4">
                <h6 class="post-title h7">Royal Seat</h6>
                <p>Tiket dengan posisi tempat duduk nyaman & strategis</p>
                <div class="note-harga"><h4><span class="text-ungu w700">Rp 300.000</span></li><h4></div>
                <a class="button-harga btnorder order" data-bs-toggle="modal" data-bs-target="#modal-book">
                  Beli
                </a>
                {{-- Modal Book Karcis  --}}
                <div class="modal fade" id="modal-book" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered modal-md">
                    <div class="modal-content">
                      <div class="modal-header px-0 py-3" style="background-color: #eaeffb">
                        <h4 class="post-title fs-20 mx-auto">Masukkan ke Keranjang</h4>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center py-4 mx-auto" style="max-height: 65vh; overflow-y: auto;">

                        <div class="row">
                          <div class="w-100">
                            <h6 class="post-title h7">Royal Seat</h6>
                            <p class="mt-n2 textevent">Tiket dengan posisi tempat duduk nyaman & strategis</p>
                            <p class="mt-n4"><b>2023-08-08 07:00</b></p>
                          </div>
                        </div>

                        {{-- <div class="row">
                          <div class="col-md-8 mx-auto">
                            <div class="form-floating">
                              <select class="form-select" id="seat_number" name="seat_number">
                                <option value="">- Pilih Kursi -</option>
                                <option value="">Standing</option>
                                <option value="">Free Seat</option>
                                <option value="">R-1</option>
                                <option value="">R-2</option>
                                <option value="">R-3</option>
                                <option value="">R-4</option>
                                <option value="">R-5</option>
                                <option value="">R-6</option>
                                <option value="">R-7</option>
                                <option value="">R-8</option>
                                <option value="">R-9</option>
                                <option value="">R-10</option>
                                <option value="">N-1</option>
                                <option value="">N-2</option>
                                <option value="">N-3</option>
                                <option value="">N-4</option>
                                <option value="">N-5</option>
                                <option value="">N-6</option>
                                <option value="">N-7</option>
                                <option value="">N-8</option>
                                <option value="">N-9</option>
                                <option value="">N-10</option>
                              </select>
                              <label for="seat_number" style="color: black" class="form-label">Kursi</label>
                            </div>
                          </div>
                        </div> --}}

                        {{-- <div class="card px-2 py-2 mt-2" style="background-color: #eaeffb">
                          <div class="row">
                            <div class="col-md-8 mx-auto py-2">
                              <div class="form-floating">
                                <input id="referal" type="text" name="referal" class="form-control" placeholder="Masukkan Nama Depan" value="">
                                <label class="w500" style="color: black" for="referal">Referral <label class="fs-10">(optional)</label></label>
                              </div>
                            </div>
                            <div class="col-md-4 mx-auto my-auto">
                              <button type="submit" class="btn btn-sm btn-warning" style="background-color: goldenrod">Generate</button>
                            </div>
                          </div>
                        </div> --}}

                        <div class="container mt-4 mb-4">
                          <label class="w500 mb-2" style="color: black" for="referal">Jumlah Karcis</label>
                          <div class="row">
                            <div class="col-md-8 mx-auto">
                              <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon1" onclick="decreaseQuantity()">-</button>
                                <input type="text" class="form-control text-center" placeholder="0" aria-label="quantity" aria-describedby="button-addon1 button-addon2" id="quantity-input" value="1">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="increaseQuantity()">+</button>
                            </div>
                            </div>
                          </div>
                        </div>
                        
                        <script>
                            const quantityInput = document.getElementById("quantity-input");
                        
                            const maxQty = 4; // Example maximum quantity

                            function increaseQuantity() {
                                let currentVal = parseInt(quantityInput.value) || 0;
                                if (currentVal < maxQty) {
                                    quantityInput.value = currentVal + 1;
                                } else {
                                    alert('Kuantitas maksimum karcis tercapai!'); // Optionally notify the user
                                }
                            }

                            function decreaseQuantity() {
                                let currentVal = parseInt(quantityInput.value) || 0;
                                if (currentVal > 0) {
                                    quantityInput.value = currentVal - 1;
                                }
                            }

                        </script>
                        

                        {{-- <div class="mx-auto mt-4">
                          <del><span class="amount">Rp 300.000</span></del>
                          <h3><span class="text-ungu w700">Rp 280.000</span></li><h3>
                        </div> --}}

                      </div>
                      <div class="modal-footer py-2">
                        <button type="submit" class="btn btn-primary mx-auto" name="sb"><i class="uil uil-shopping-cart"></i>&nbsp;Tambah</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="card cardharga mb-4">
                <h6 class="post-title h7">Royal Seat</h6>
                <p>Tiket dengan posisi tempat duduk nyaman & strategis</p>
                <div class="note-harga"><h4><span class="text-ungu w700">Rp 300.000</span></li><h4></div>
                <a href="{{ route('karcis') }}" class="button-harga btnorder order">
                  Beli
                </a>
              </div>
              <div class="card cardharga mb-4">
                <h6 class="post-title h7">Royal Seat</h6>
                <p>Tiket dengan posisi tempat duduk nyaman & strategis</p>
                <div class="note-harga"><h4><span class="text-ungu w700">Rp 300.000</span></li><h4></div>
                <a href="{{ route('karcis') }}" class="button-harga btnorder order">
                  Beli
                </a>
              </div>
              <div class="card cardharga mb-4">
                <h6 class="post-title h7">Royal Seat</h6>
                <p>Tiket dengan posisi tempat duduk nyaman & strategis</p>
                <div class="note-harga"><h4><span class="text-ungu w700">Rp 300.000</span></li><h4></div>
                <a href="{{ route('karcis') }}" class="button-harga btnorder order">
                  Beli
                </a>
              </div>
            </div>
          </div>
        </div>

        <script>
          $(document).ready(function() {
            $('.swiper-wrapper').on('click', '.cardshowtime', function(event) {
              $(".cardshowtime").removeClass("selected");
              $(this).addClass("selected");

              var id_showtime = $(this).attr('id');
            });
          });
        </script>

        <hr class="mt-7 mb-7" style="height: 0.07rem; background: rgba(101, 100, 100, 0.188); border: none;">

        
        <div class="row">

          <div class="col-md-6">
            <div class="card px-4 py-4">
              <div class="accordion accordion-wrapper" id="accordionExample">

                <div class="card plain accordion-item">
                  <div class="card-header" id="headingOne">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Fasilitas
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                    </div>
                  </div>
                </div>
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingTwo">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <i>Including Info</i>
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                    </div>
                  </div>
                </div>
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingThree">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <i>Excluding Info</i>
                    </button>
                  </div>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                    </div>
                  </div>
                </div>
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingThree">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Informasi Penukaran Karcis
                    </button>
                  </div>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                    </div>
                  </div>
                </div>
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingThree">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Syarat & Ketentuan
                    </button>
                  </div>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="card">
              <div class="widget px-2 py-4">
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-ungu fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                  </div>
                  <div class="align-self-start justify-content-start">
                    <h5 class="mb-1">Alamat</h5>
                    <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    {{-- <section class="wrapper bg-light mb-10">
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
                          <a href="{{ route('karcis') }}" class="button-harga btnorder order">
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
    </section> --}}
    

@stop