@extends('layout.navbar')

@section('konten')

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
              <div class="cardss">
                <img src="{{ asset('assets/img/photos/posterkapanresign.jpg') }}" alt="Image">
                <div class="cardss-content">
                  <h3 class="title-checkout">Musikal Kapan Resign?</h3>
                  <span class="text-dark w400 eo-checkout">Jakarta Musical Crew</span>
                  <div class="row">
                    <div class="detailevent">
                      <ul class="post-meta">
                        <li><span class="text-dark w400 time-checkout"><img src="{{ asset('assets/img/logo/calendar.svg') }}" class="icon-checkout" style="width: 0.75rem"> 06 Oct 2023</span></li>
                      </ul>
                      <ul class="post-meta">
                        <li><span class="text-dark w400 time-checkout"><img src="{{ asset('assets/img/logo/clock.svg') }}" class="icon-checkout" style="width: 0.75rem"> 14:00</span></li>
                      </ul>
                      <ul class="post-meta mb-3">
                        <li><span class="text-dark w400 time-checkout"><img src="{{ asset('assets/img/logo/map.svg') }}" class="icon-checkout" style="width: 0.75rem"> Salemba text lokasi panjang </span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bodykosong"></div>
    

@stop