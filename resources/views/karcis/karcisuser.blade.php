@extends('master.navbar')

@section('content')

    <div class="mt-12">
      <section class="wrapper bg-gray">
        <div class="container py-3 py-md-10">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <div class="navplus">
              <ol class="breadcrumb mb-0 mt-n5">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Karcis</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
                <li class="breadcrumb-item"><a href="{{ route('listkarcis') }}"><span class="textbread">Daftar Karcis</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-ticket-alt"></i></div></a></li>
                <li class="breadcrumb-item active text-muted"><div class="textjudulbread2"><span id="textjudulbread2">Musikal Kapan Resign?</span></div></li>
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
              <div class="row">
                <div class="gambar">
                  <img class="imagcheckout" src="{{ asset('assets/img/photos/posterkapanresign.jpg') }}" alt="Image">
                </div>
                <div class="tulisan ml-3 mt-3">
                  <h3 class="title-checkout">Musikal Kapan Resign?</h3>
                  <span class="text-dark w400 eo-checkout">Jakarta Musical Crew</span>
                  <ul class="post-meta">
                    <li><span class="text-dark w400 time-checkout"><img src="{{ asset('assets/img/logo/calendar.svg') }}" class="icon-checkout"> 06 Oct 2023</span></li>
                  </ul>
                  <ul class="post-meta">
                    <li><span class="text-dark w400 time-checkout"><img src="{{ asset('assets/img/logo/clock.svg') }}" class="icon-checkout"> 14:00</span></li>
                  </ul>
                  <ul class="post-meta mb-3">
                    <li><span class="text-dark w400 time-checkout"><img src="{{ asset('assets/img/logo/map.svg') }}" class="icon-checkout"> Salemba text lokasi panjang </span></li>
                  </ul>
                  <div class="box">
                    <span class="w700 eo-checkout" style="color: #ffffff; position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      line-height: 1.2;">
                      Royal Seat</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h6 class="h7 mt-5 mb-5 w600">Detail Pemesanan</h6>

        <div class="row mb-3">
          <div class="detnama">
            <div class="form-group">
              <label class="form-label eo-checkout mb-n0">ID Pemesanan</label>
              <h3 class="eo-checkout text-ungu">1232146789643</h3>
            </div>
          </div>
          <div class="detnama">
            <div class="form-group">
              <label class="form-label eo-checkout mb-n0">Status Karcis</label>
              <h6><span class="badge bg-warning text-white eo-checkout">Pending</span></h6>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="detnama">
            <div class="form-group">
              <label class="form-label eo-checkout mb-n0">Nama Depan</label>
              <h3 class="eo-checkout text-ungu">{{ $datauser->firstname }}</h3>
            </div>
          </div>
          <div class="detnama">
            <div class="form-group">
              <label class="form-label eo-checkout mb-n0">Nama Belakang</label>
              <h3 class="eo-checkout text-ungu">{{ $datauser->lastname }}</h3>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="detnama mb-2">
            <div class="form-group">
              <label class="form-label eo-checkout mb-n0">E-mail</label>
              <h3 class="eo-checkout text-ungu">{{ $datauser->email }}</h3>
            </div>
          </div>
          <div class="detnama mb-2">
            <div class="form-group">
              <label class="form-label eo-checkout mb-n0">Nomor Telepon</label>
              <h3 class="eo-checkout text-ungu">{{ $datauser->phonenumber }}</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="detail-karcis">
            <h6 class="post-title h7 eo-checkout">Royal Seat</h6>
            <p class="mt-n2 time-checkout">Tiket dengan posisi tempat duduk nyaman & strategis</p>
          </div>
          <div class="harga-karcis text-center">
            <h4><span class="text-ungu w700 eo-checkout">Rp 300.000</span></li><h4>
          </div>
          <div class="jml-karcis text-end">
            <span class="text-dark w700 eo-checkout">4 Karcis</span>
        </div>

        <hr class="mt-n1 mb-2">

        <p class="text-end mb-5"><span class="time-checkout w-700" style="color: black">Total : <span class="text-ungu w700 eo-checkout">Rp 1.200.000<span></span></p>
        

        {{-- Kalau Karcis Belum Aktif Tampilkan Cara Pembayaran  --}}
        <div class="card mb-10">
          <h6 class="h7 mt-5 mb-2 w600">Cara Pembayaran Karcis</h6>
          <p class="eo-checkout">
            Untuk Mengaktifkan Karcis, Silahkan Lakukan Pembayaran sebesar <b>Rp. 1.200.000</b> Ke nomor rekening berikut :
          </p>
          <div class="tulisan ml-3 mt-3 mb-5 mt-n2">
            <ul class="post-meta">
              <li><span class="text-dark w600 eo-checkout"><img src="{{ asset('assets/img/logo/iconbca.png') }}" class="icon-bank"> 000123423230</span></li>
            </ul>
            <ul class="post-meta">
              <li><span class="text-dark w600 eo-checkout"><img src="{{ asset('assets/img/logo/iconbri.png') }}" class="icon-bank"> 098321312313</span></li>
            </ul>
          </div>
          <p class="eo-checkout">
            Setelah melakukan pembayaran upload bukti pembayaran disini, tunggu beberapa saat hingga karcis aktif
          </p>
          <div class="mb-5">
            <button href="" class="btnorder order">Upload Bukti Pembayaran</button>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="bodykosong"></div> --}}
    

@stop