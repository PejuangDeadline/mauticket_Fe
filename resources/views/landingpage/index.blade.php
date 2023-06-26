@extends('landingpage.master')

@section('konten')

<!-- ==========Banner-Section========== -->
<section class="banner-section bg-banner">
    <div class="banner-bg bg_img bg-fixed" data-background="{{ asset('/assets/images/gallery/bg.png') }}"></div>
    <div class="container mt-n4">
        <div class="banner-content">
            <h1 class="title cd-headline clip"><span class="d-block">book</span> for 
                <span class="color-theme cd-words-wrapper p-0 m-0">
                    <b class="is-visible">Yourself</b>
                    <b>Family</b>
                    <b>Friend</b>
                    <b>Partner</b>
                </span>
            </h1>
            <p>Safe, secure, reliable ticketing</p>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Ticket-Search========== -->
{{-- <section class="search-ticket-section padding-top pt-lg-0">
    <div class="container">
        <div class="search-tab bg_img" data-background="./assets/images/ticket/ticket-bg01.jpg">
            <div class="row align-items-center mb--20">
                <div class="col-lg-6">
                    <div class="search-ticket-header">
                        <h3 class="title">what are you looking for</h3>
                    </div>
                </div>
            </div>
            <div class="tab-area">
                <div class="tab-item active">
                    <form class="ticket-search-form">
                        <div class="form-group large">
                            <input type="text" placeholder="Search for Event">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/ticket/city.png') }}" alt="ticket">
                            </div>
                            <span class="type">City</span>
                            <select class="select-bar">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Lampung">Lampung</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/ticket/date.png') }}" alt="ticket">
                            </div>
                            <span class="type">Date</span>
                            <select class="select-bar">
                                <option value="26-12-19">10/06/2023</option>
                                <option value="26-12-19">20/06/2023</option>
                                <option value="26-12-19">23/06/2023</option>
                                <option value="26-12-19">25/06/2023</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/ticket/cinema.png') }}" alt="ticket">
                            </div>
                            <span class="type">Show</span>
                            <select class="select-bar">
                                <option value="Leisure Event">Leisure Event</option>
                                <option value="Cultural Event">Cultural Event</option>
                                <option value="Personal Event">Personal Event</option>
                                <option value="Organisational Event">Organisational Event</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>     --}}
<!-- ==========Ticket-Search========== -->

<!-- ==========Event-Main-Section========== -->
<section class="movie-section padding-top padding-bottom">
    <div class="container">
        <div class="row flex-wrap-reverse justify-content-center">
            <div class="col-lg-3 col-sm-10  mt-50 mt-lg-0">
                <div class="widget-1 widget-facility">
                    <div class="widget-1-body">
                        <ul>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="{{ asset('assets/images/sidebar/icons/customer-service.png') }}" alt="sidebar"></span>
                                    <span class="cate">24X7 Care</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="{{ asset('assets/images/sidebar/icons/100.png') }}" alt="sidebar"></span>
                                    <span class="cate">100% Assurance</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="{{ asset('assets/images/sidebar/icons/marriage-vows.png') }}" alt="sidebar"></span>
                                    <span class="cate">Our Promise</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-1 widget-trending-search">
                    <h3 class="title">Trending Searches</h3>
                    <div class="widget-1-body">
                        <ul>
                            <li>
                                <h6 class="sub-title">
                                    <a href="#0">Coldplay</a>
                                </h6>
                                <p>Concert</p>
                            </li>
                            <li>
                                <h6 class="sub-title">
                                    <a href="#0">Kapan Resign</a>
                                </h6>
                                <p>Theater</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="article-section padding-bottom">
                    <div class="section-header-1">
                        <h2 class="title">events</h2>
                        <a class="view-all" href="#">View All</a>
                    </div>
                    <div class="row mb-30-none">
                        <div class="col-sm-6 col-lg-4">
                            <div class="event-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="{{ asset('assets/images/event/coldplay.png') }}" alt="event">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">15</h6>
                                        <span>Nov</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">Coldplay - Music of the spheres</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>GBK Stadium, Jakarta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="event-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="{{ asset('assets/images/event/kapanresign.png') }}" alt="event">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">06</h6>
                                        <span>Oct</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">Musikal - Kapan Resign?</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>Salihara Teater, Jakarta</span>
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
<!-- ==========Event-Main-Section========== -->

    
@endsection