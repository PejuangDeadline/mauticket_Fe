@extends('master.navbar')

@section('content')

<section class="wrapper bg-gray mt-14">

  @if (session('deleteCart'))
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
                Sukses Menghapus Karcis dari Keranjang
            </div>
        </div>
    </div>
  </div>
  @if (session('faileddeleteCart'))
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
                Gagal, Menghapus Karcis dari Keranjang
            </div>
        </div>
    </div>
  </div>

  @foreach($chart->data as $eventName => $tickets)
    <div class="row" id="poster">
      <div class="card px-4 py-4 mt-4 col-lg-6 mx-auto">
        <div class="shopping-cart-item d-flex justify-content-center mb-4">
          <div class="d-flex flex-row">
            <div class="w-100 ms-4">
              <h4 class="post-title fs-16 lh-xs mb-1"><a href="shop-product.html" class="link-dark">{{ $eventName }}</a></h4>
            </div>
          </div>
        </div>
        @foreach($tickets as $ticket)
        <div class="shopping-cart-item d-flex justify-content-between mb-2">
          <div class="d-flex flex-row">
            <div class="w-100 ms-4">
              <h4 class="post-title fs-14 lh-xs mb-1">{{ $ticket->category }}</h4>
              <p class="price fs-sm"><span class="amount">{{ $ticket->price }}</span></p>
            </div>
          </div>
          <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt" data-bs-toggle="modal" data-bs-target="#modal-delete{{ $ticket->id }}"></i></a></div>
        </div>
        <hr class="mt-0 mb-0">

        @endforeach

        <form action="{{ route('checkoutchart') }}" method="post" enctype="multipart/form-data" id="myform" name="myform">
          @csrf

          <input type="hidden" name="id_event" value="{{ $tickets[0]->id_event }}">
          <input type="hidden" name="id_user" value="{{ $tickets[0]->id_user }}">

          <div class="offcanvas-footer flex-column text-center mb-n2">
            <button type="submit" class="btn btn-primary" name="sb"><i class="uil uil-credit-card fs-14"></i> Pembayaran</button>
          </div>
        </form>
      </div>
    </div>
    @foreach($tickets as $ticket)
    {{-- Modal Delete --}}
    <div class="modal fade" id="modal-delete{{ $ticket->id }}">
      <div class="modal-dialog modal-dialog-centered modal-xs">
        <div class="modal-content text-center">
          <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <h4 class="post-title fs-14 lh-xs mb-1">Anda Yakin Untuk Menghapus Karcis Ini?</h4>
            <form action="{{ route('deletechart', $ticket->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              <button type="submit" class="btn btn-icon btn-icon-start rounded w-50 text-white mt-4" style="background-color: red"><i class="fas fa-trash"></i> Hapus</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  @endforeach

  <br>
  <br>
  <br>
  <br>

</section>
    

@stop