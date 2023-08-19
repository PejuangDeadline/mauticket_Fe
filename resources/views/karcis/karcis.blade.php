@extends('master.navbar')

@section('content')

    <div class="mt-12">
      <section class="wrapper bg-gray">
        <div class="container py-3 py-md-10">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <div class="navplus">
              <ol class="breadcrumb mb-0 mt-n5">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
                <li class="breadcrumb-item"><a href="{{ route('listevent') }}"><span class="textbread">Daftar Acara</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-list"></i></div></a></li>
                <li class="breadcrumb-item"><a href="{{ route('detailevent') }}"><div class="textjudulbread2"><span id="textjudulbread2">Musikal Kapan Resign?</span></div></a></li>
                <li class="breadcrumb-item active text-muted"><span class="textbread">Karcis</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-ticket-alt"></i></div></li>
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

        <div class="contaianer mb-n12">
          <div class="row mt-5">
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

            <div class="col-lg-6 mb-3">
              <div class="form-floating">
                <input id="namadepan" type="text" name="namadepan" class="form-control" placeholder="Masukkan Kode Referal" value="">
                <label class="w500" style="color: black" for="namadepan">Masukkan Kode Referral</label>
              </div>
            </div>

            {{-- <div class="col-lg-6 mb-3">
              <div class="form-floating">
                <input id="namadepan" type="text" name="namadepan" class="form-control" placeholder="Masukkan Nama Depan" value="Joe">
                <label class="w500" style="color: black" for="namadepan">Nama Depan</label>
              </div>
            </div>
            <div class="col-lg-6 mb-3">
              <div class="form-floating">
                <input id="namabelakang" type="text" name="namabelakang" class="form-control" placeholder="Masukkan Nama Belakang" value="Doe">
                <label class="w500" style="color: black" for="namabelakang">Nama Belakang</label>
              </div>
            </div> --}}
            {{-- <div class="col-lg-6 mb-3">
              <div class="form-floating">
                <input id="email" type="text" name="email" class="form-control" placeholder="Masukkan E-mail" value="jane.doe@gmail.com">
                <label class="w500" style="color: black" for="email">E-mail</label>
              </div>
            </div>
            <div class="col-lg-6 mb-3">
              <div class="form-floating">
                <input id="phonenumber" type="text" name="phonenumber" class="form-control" placeholder="Masukkan Nomor Telepon" value="822xxxx">
                <label class="w500" style="color: black" for="phonenumber">Nomor Telepon</label>
              </div>
            </div> --}}
          </div>
        </div>

        <h6 class="h7 mt-15 w500">Detail Karcis</h6>
        <div class="row">
          <div class="detail-karcis">
            <h6 class="post-title h7 eo-checkout">Royal Seat</h6>
            <p class="mt-n2 time-checkout">Tiket dengan posisi tempat duduk nyaman & strategis</p>
          </div>
          <div class="harga-karcis text-center">
            <h4><span class="text-ungu w700 eo-checkout">Rp 300.000</span></li><h4>
          </div>
          <div class="jml-karcis">
            <select class="form-select w500 eo-checkout text-end" name="karcis" style="color: black">
              <option value="1"> 1 Karcis </option>
              <option value="2"> 2 Karcis </option>
              <option value="3"> 3 Karcis </option>
              <option value="4"> 4 Karcis </option>
            </select>
          </div>
        </div>

        <hr class="mt-n1 mb-2">

        <p class="text-end"><span class="time-checkout w-700" style="color: black">Total : <span class="text-ungu w700 eo-checkout">Rp 300.000<span></span></p>
        <div class="mt-10 mb-10 text-end">
          <a href="{{ route('karcisuser') }}" class="btnorder order w700">Pembayaran</a>
        </div>
      </div>
    </div>
    {{-- <div class="bodykosong"></div> --}}
    

@stop