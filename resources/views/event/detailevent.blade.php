@extends('master.navbar')

@section('content')

<style>
  .loader {
    border: 12px solid #f3f3f3;
    border-top: 12px solid #7F39D8;
    border-radius: 50%;
    width: 80px;
    height: 80px;
    animation: spin 2s linear infinite;
    z-index: 100;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
</style>

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

    @if (session('itemAddedToCart'))
      <script>
          window.onload = function() {
              $('#successModal').modal('show');
              
              setTimeout(function() {
                  $('#successModal').modal('hide');
              }, 1500);
          };
      </script>
    @endif
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
              <div class="modal-body text-center">
                  Sukses Dimasukkan Ke Keranjang
              </div>
          </div>
      </div>
    </div>
    @if (session('itemFailedAddToCart'))
      <script>
          window.onload = function() {
              $('#failedModal').modal('show');
              
              setTimeout(function() {
                  $('#failedModal').modal('hide');
              }, 1500);
          };
      </script>
    @endif
    <div class="modal fade" id="failedModal" tabindex="-1" aria-labelledby="failedModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
              <div class="modal-body text-center">
                  Gagal, Jumlah Karcis Tidak Tersedia
              </div>
          </div>
      </div>
    </div>
    
    <div id="poster">
      <div class="mt-n8 mb-n8">
        <div class="card">
          <div class="searchbody">
            <div class="card">
              <div class="parent-container">
                <div class="image-container">
                  <img class="background-image" src="{{ $endpointApi.$getEventDetail->events[0]->banner }}" alt="Background Image">
                  <img class="foreground-image" src="{{ $endpointApi.$getEventDetail->events[0]->banner }}" alt="Foreground Image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      

    <section class="wrapper bg-light mt-10">
      <div class="container py-2 px-6">
        
        <h2 class="post-title h3 mt-1 mb-5 textevent">{{ $getEventDetail->events[0]->event_name }}</h2>
        <div class="row">
          <div class="detailevent">
            <ul class="post-meta">
              <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/calendar.svg') }}" style="width: 0.75rem"> {{ date("d F Y", strtotime($getEventDetail->showtimes[0]->showtime_start)) }}</span></li>
            </ul>
            <ul class="post-meta">
              <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/clock.svg') }}" style="width: 0.75rem"> {{ date("H:i A", strtotime($getEventDetail->showtimes[0]->showtime_start)) }}</span></li>
            </ul>
            <ul class="post-meta mb-3">
              <?php 
                $find2 = '<p>';
                $replaceWith2 = '';

                $newString2 = str_replace($find2, $replaceWith2, $getEventDetail->events[0]->event_address);

                $find3 = '</p>';
                $replaceWith3 = '';

                $newString3 = str_replace($find3, $replaceWith3, $newString2);
              ?>
              <li><span class="text-dark w400"><img src="{{ asset('assets/img/logo/map.svg') }}" style="width: 0.75rem"> {!! $newString3 !!} </span></li>
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

        <div id="event-description">
          {!! substr(strip_tags($getEventDetail->events[0]->description), 0, 150) !!}
          <span id="ellipsis">...</span>
          <span id="hidden-content" style="display: none;">{!! substr(strip_tags($getEventDetail->events[0]->description), 150) !!}</span>
        </div>
        
        <a href="#" id="see-more">
            Lihat Lebih Banyak..
        </a>
        <a href="#" id="see-less" style="display: none;">
            Lihat Lebih Sedikit..
        </a>
      
        <script>
          $(document).ready(function() {
            $('#see-more').click(function(e) {
                e.preventDefault();
                $('#ellipsis').hide();
                $('#hidden-content').show();
                $(this).hide();
                $('#see-less').show();
            });
    
            $('#see-less').click(function(e) {
                e.preventDefault();
                $('#ellipsis').show();
                $('#hidden-content').hide();
                $(this).hide();
                $('#see-more').show();
            });
          });
        </script>
        <div class="card card-highlight-event px-4 py-4 mt-4">
          <h6 class="h7 post-title"><i class="fas fa-thumbtack"></i> Highlight</h6>
          <?php 
            // Change bullet to be check
            $find = '<ul>';
            $replaceWith = '<ul class="icon-list bullet-bg bullet-soft-primary">';

            $newString1 = str_replace($find, $replaceWith, $getEventDetail->events[0]->highlight);

            $find1 = '<li>';
            $replaceWith1 = '<li><span><i class="uil uil-check"></i></span>';

            $newString = str_replace($find1, $replaceWith1, $newString1);
          ?>

          {!! $newString !!}
        </div>
        

        <hr class="mt-4 mb-0" style="height: 0.07rem; background: rgba(101, 100, 100, 0.188); border: none;">


        <h6 class="post-title mt-7 mb-1">Silahkan Pilih Waktu Pertunjukan</h6>

        <div class="position-relative">
          <div class="swiper-container mb-3" data-dots="false" data-items-xxl="8.5" data-items-lg="8.5" data-items-md="5.5" data-items-xs="3.5">
            <div class="swiper">
              <div class="swiper-wrapper">
                @foreach($getEventDetail->showtimes as $showtime)
                  <div class="swiper-slide">
                    <div class="item-inner px-0">
                      <div class="card cardshowtime post-meta mb-0 text-center" showtime_start="{{ $showtime->showtime_start }}" idEvent="{{ $showtime->id_event }}">
                        {{ date("d-m-Y", strtotime($showtime->showtime_start)) }}
                        {{ date("H:i", strtotime($showtime->showtime_start)) }}-{{ date("H:i", strtotime($showtime->showtime_finish)) }}
                      </div>
                    </div>
                  </div>
                @endforeach

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
                      @if($getEventDetail->events[0]->attach_venue==null)
                        <img src="{{ asset('assets/img/image_not_available.png') }}" class="img-fluid mt-n7" alt="" data-bs-toggle="modal" data-bs-target="#modal-venue">
                      @else
                        <img src="{{ $endpointApi.$getEventDetail->events[0]->attach_venue }}" class="img-fluid mt-n7" alt="" data-bs-toggle="modal" data-bs-target="#modal-venue">
                      @endif
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
                    @if($getEventDetail->events[0]->attach_venue==null)
                      <img src="{{ asset('assets/img/image_not_available.png') }}" class="img-fluid mt-n7" alt="">
                    @else
                      <img src="{{ $endpointApi.$getEventDetail->events[0]->attach_venue }}" class="img-fluid mt-n7" alt="">
                    @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8 ms-auto">
              <h6 class="post-title mt-7 mb-5 text-center text-ungu" id="choose">
                <i class="fas fa-clock"></i><br>Pilih Waktu Pertunjukan Dahulu
              </h6>
              <div class="mt-4" id="loading" align="center">
                <div class="loader"></div><br>
                <div class="m-0 font-weight-bold text-ungu">Silahkan Tunggu</div>
              </div>
              <div id="category-karcis"></div>
            </div>

          </div>
        </div>

        <script>
          $(document).ready(function() {
            $('#choose').show();
            $('#loading').hide();

            $('.swiper-wrapper').on('click', '.cardshowtime', function(event) {
              $('#choose').hide();
              $('#loading').show();
              $('#category-karcis').html("");

              $(".cardshowtime").removeClass("selected");
              $(this).addClass("selected");

              var idEvent = $(this).attr('idEvent');
              var ss = $(this).attr('showtime_start');

              var url = '{{ route("getCategory") }}';
              
              if (url) {
                $.ajax({
                  url: url,
                  type: "POST",
                  dataType: "json",
                  data: {
                      idEvent: idEvent,
                      showtime_start: ss,
                  },
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(data) {
                    var html = '';
                    $('#loading').hide();

                    $.each(data, function(index, item) {
                      prices = item.price.replace('.00', '');

                      if (item.price === null || item.price === undefined) {
                          return;
                      }

                      let priceValue = parseFloat(item.price);
                      if (isNaN(priceValue)) {
                          return;
                      }

                      let parts = priceValue.toFixed(2).split('.');
                      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                      let priceFormatted = 'Rp. ' + parts.join(',');

                      html += `
                        <div class="card cardharga mb-4">
                            <h6 class="post-title h3">${item.category}</h6>
                            <div class="note-harga"><h4><span class="text-ungu w700">${priceFormatted}</span></h4></div>
                            <a class="button-harga btnorder order" data-bs-toggle="modal" data-bs-target="#modal-book${item.id_category}">
                                Beli
                            </a>
                            <div class="modal fade" id="modal-book${item.id_category}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header px-0 py-3" style="background-color: #eaeffb">
                                            <h4 class="post-title fs-20 mx-auto">Masukkan ke Keranjang</h4>
                                            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('storechart') }}" method="post" enctype="multipart/form-data" id="myform${item.category}">
                                          @csrf
                                          <div class="modal-body text-center py-4 mx-auto" style="max-height: 65vh; overflow-y: auto;">
                                              <div class="row">
                                                  <div class="w-100">
                                                      <span>Kategori Tiket : <b>${item.category}</b></span>
                                                      <br>
                                                      <span>Pada : <b>${item.showtime_start}</b></span>
                                                  </div>
                                              </div>
                                              <input type="hidden" id="max${item.id_category}" value="${item.qty}">
                                              <input type="hidden" name="id_ticket_category" value="${item.id_category}">
                                              <input type="hidden" name="id_event" value="`+ idEvent +`">
                                              <input type="hidden" name="id_showtime" value="${item.id}">
                                              <input type="hidden" name="price" value="${item.price}">
                                              <div class="container mt-4 mb-4">
                                                  <label class="w500 mb-2" style="color: black" for="referal">Jumlah Karcis</label>
                                                  <div class="row">
                                                      <div class="col-md-8 mx-auto">
                                                          <div class="input-group">
                                                              <button class="btn btn-outline-secondary decrease-btn" type="button" data-id="${item.id_category}">-</button>
                                                              <input type="text" class="form-control text-center" placeholder="0" aria-label="quantity" aria-describedby="button-addon1 button-addon2" name="qty" id="quantity-input${item.id_category}" value="1">
                                                              <button class="btn btn-outline-secondary increase-btn" type="button" data-id="${item.id_category}">+</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="modal-footer py-2">
                                              <button type="submit" class="btn btn-primary mx-auto" name="sb" id="sb${item.category}"><i class="uil uil-shopping-cart"></i>&nbsp;Tambah</button>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    });

                    $('#category-karcis').html(html);

                    $(document).off('click', '.increase-btn');
                    $(document).off('click', '.decrease-btn');

                    $(document).on('click', '.increase-btn', function() {
                        const itemId = $(this).data('id');
                        const quantityInput = $(`#quantity-input${itemId}`);
                        const max = parseInt($(`#max${itemId}`).val()) || 0;
                        const maxQty = (max > 4) ? 4 : max;

                        let currentVal = parseInt(quantityInput.val()) || 0;

                        if (currentVal < maxQty) {
                            quantityInput.val(currentVal + 1);
                        } else {
                            alert('Kuantitas maksimum karcis tercapai!');
                        }
                    });

                    $(document).on('click', '.decrease-btn', function() {
                        const itemId = $(this).data('id');
                        const quantityInput = $(`#quantity-input${itemId}`);

                        let currentVal = parseInt(quantityInput.val()) || 0;

                        if (currentVal > 1) {
                            quantityInput.val(currentVal - 1);
                        } else {
                            alert('Kuantitas minimum karcis adalah 1!');
                        }
                    });

                    $(document).on('submit', 'form[id^="myform"]', function(e) {
                        const btn = $(this).find('button[name=sb]');
                        btn.attr("disabled", "disabled");
                        btn.html("Silahkan Tunggu..");
                    });
                  }
                });
              }
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
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Fasilitas
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      {!! $getEventDetail->events[0]->facility !!}
                      {{-- <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p> --}}
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
                      {!! $getEventDetail->events[0]->including_info !!}
                      {{-- <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p> --}}
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
                      {!! $getEventDetail->events[0]->excluding_info !!}
                      {{-- <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p> --}}
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
                      {!! $getEventDetail->events[0]->exchange_ticket_info !!}
                      {{-- <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p> --}}
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
                      {!! $getEventDetail->events[0]->tc_info !!}
                      {{-- <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p> --}}
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
                    <?php 
                      $find2 = '<p>';
                      $replaceWith2 = '';

                      $newString2 = str_replace($find2, $replaceWith2, $getEventDetail->events[0]->event_address);

                      $find3 = '</p>';
                      $replaceWith3 = '';

                      $newString3 = str_replace($find3, $replaceWith3, $newString2);
                    ?>
                    <address>{!! $newString3 !!},
                      {{ $getEventDetail->events[0]->sub_district.', '.$getEventDetail->events[0]->district.', '.$getEventDetail->events[0]->city.', '.$getEventDetail->events[0]->province.', '.$getEventDetail->events[0]->zip_code }}</address>
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