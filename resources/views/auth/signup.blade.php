@extends('layout.navbar')

@section('konten')

    <div class="mt-12">
      <section class="wrapper bg-gray">
        <div class="container py-3 py-md-10">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <div class="navplus">
              <ol class="breadcrumb mb-0 mt-n5">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
                <li class="breadcrumb-item active text-muted"><span class="textbread">Daftar</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-user-plus"></i></div></li>
              </ol>
            </div>
          </nav>
        </div>
      </section>
    </div>
    
    <section class="wrapper bg-light mt-18">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
            <!-- Notifikasi menggunakan flash session data -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <!-- End Flash -->
            <div class="card">
              <div class="card-body text-center">

                <h2 class="mb-1 mt-n3 text-center">Daftar</h2>
                <div class="mb-2" style="text-align:center;">
                  <span class="step active"></span>
                  <span class="step" id="round2"></span>
                  <span class="step" id="round3"></span>
                </div>
                {{-- <p class="lead mb-6 text-center">Masukkan E-mail/Username dan Kata Sandi.</p> --}}

                <form action="{{ route('storesignup') }}" method="post" enctype="multipart/form-data" id="SignupForm">
                  @csrf

                  <input type="hidden" id="urlvalidemail" value="{{ route("validation.email", ":email") }}">
                  <input type="hidden" id="urlvalidusername" value="{{ route("validation.username", ":username") }}">

                  <div class="card-forms text-start mb-6">
                    <div id="step1">
                      <div class="row">
                        <div class="col-lg-6 mb-4">
                          <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Masukkan Nama Depan" id="namadepan" name="namadepan">
                            <label for="namadepan"><label id="namadepanlabel">Nama Depan</label><small class="small1"></small></label>
                          </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                          <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Masukkan Nama Belakang" id="namabelakang" name="namabelakang">
                            <label for="namabelakang"><label id="namabelakanglabel">Nama Belakang</label><small class="small1"></small></label>
                          </div>
                        </div>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                        <label for="email"><label id="emaillabel">E-mail</label><small class="small1"></small></label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Masukkan No Telepon" id="phone" name="phone">
                        <label for="phone"><label id="phonelabel">Nomor Telepon</label><small class="small1"></small></label>
                      </div>
                    </div>

                    <div id="step2" hidden>
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Depan" id="username" name="username">
                        <label for="username"><label id="usernamelabel">Username</label><small class="small1"></small></label>
                      </div>
                      <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="password"><label id="pwlabel">Kata Sandi</label><small class="small1"></small></label>
                      </div>
                      <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="passwordconfirm" name="passwordconfirm">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="passwordconfirm"><label id="pwconfirmlabel">Ulangi Kata Sandi</label><small class="small1"></small></label>
                      </div>
                    </div>

                    <div id="step3" hidden>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">Nama Depan</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summarynd"></b></h5>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">Nama Belakang</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summarynb"></b></h5>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">E-mail</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summaryemail"></b></h5>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">No Telepon</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summaryno"></b></h5>
                          </div>
                        </div>
                      </div>

                      <hr class="mt-n1 mb-2">

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">Username</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summaryuname"></b></h5>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="row mt-n5">
                    <div class="col-lg-12">
                      <div id="btnstep1" class="btnstep">
                        <input id="nextstep1" type="button" class="btn btn-primary rounded-pill btn-login mb-2 next" value="Berikutnya">
                      </div>
                      <div id="btnstep2" class="btnstep" hidden>
                        <input id="backstep2" type="button" class="btn btn-primary rounded-pill w-30 btn-login mb-2 back" value="Kembali">
                        <input id="nextstep2" type="button" class="btn btn-primary rounded-pill w-30 btn-login mb-2 next" value="Berikutnya">
                      </div>
                      <div id="btnstep3" class="btnstep" hidden>
                        <input id="backstep3" type="button" class="btn btn-primary rounded-pill w-30 btn-login mb-2 back" value="Kembali">
                        <button id="nextstep4" type="submit" class="btn btn-primary rounded-pill w-30 btn-login mb-2 next" name="sb" value="Submit">Daftar</button>
                      </div>
                    </div>
                    <div class="col-lg-12 text-center">
                      <p class="mb-n5">Sudah memiliki akun? <a href="{{ route('login') }}" class="hover">Masuk</a></p>
                    </div>
                  </div>
                </form>

                <script>
                  $('#SignupForm').submit(function() {
                      if (!$('#SignupForm').valid()) return false;
      
                      $('#SignupForm button[name=sb]').attr("disabled", "disabled");
                      $('#SignupForm button[name=sb]').html("Please Wait..");
                      return true;
                  });
                </script>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    {{-- <section class="wrapper bg-light mt-18">
      <div class="container pb-14 pb-md-16 test">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
            <div class="card">
              <div class="card-body text-center">
                <h2 class="mt-n4 text-center">Daftar</h2>
                <div style="text-align:center;">
                  <span class="step active"></span>
                  <span class="step" id="round2"></span>
                  <span class="step" id="round3"></span>
                </div>
                <p class="lead mb-6 text-center">Daftarkan menggunakan data yang valid.</p>
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="card-forms text-start mb-3">
                    <div id="step1">
                      <div class="form-floating mb-4">
                        <input type="number" class="form-control" placeholder="Masukkan Nama Depan" id="namadepan" name="namadepan">
                        <label for="namadepan"><label id="namadepanlabel">Nama Depan</label><small class="small1"></small></label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Belakang" id="namabelakang" name="namabelakang">
                        <label for="namabelakang"><label id="namabelakanglabel">Nama Belakang</label><small class="small1"></small></label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                        <label for="email"><label id="emaillabel">E-mail</label><small class="small1"></small></label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Masukkan No Telepon" id="phone" name="phone">
                        <label for="phone"><label id="phonelabel">Nomor Telepon</label><small class="small1"></small></label>
                      </div>
                    </div>

                    <div id="step2" hidden>
                      <div class="form-floating mb-4">
                        <input type="number" class="form-control" placeholder="Masukkan Nama Depan" id="username" name="username">
                        <label for="username"><label id="usernamelabel">Username</label><small class="small1"></small></label>
                      </div>
                      <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="password"><label id="pwlabel">Kata Sandi</label><small class="small1"></small></label>
                      </div>
                      <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="passwordconfirm" name="passwordconfirm">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="passwordconfirm"><label id="pwconfirmlabel">Ulangi Kata Sandi</label><small class="small1"></small></label>
                      </div>
                    </div>

                    <div id="step3" hidden>
                      <div class="row">
                        <div class="col-lg-6 mb-3">
                          <div class="form-group">
                            <label class="form-label">Nama Depan</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summarynd"></b></h5>
                          </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                          <div class="form-group">
                            <label class="form-label">Nama Belakang</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summarynb"></b></h5>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">E-mail</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summaryemail"></b></h5>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">No Telepon</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summaryno"></b></h5>
                          </div>
                        </div>
                      </div>

                      <hr class="mt-n1 mb-2">

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">Username</label>
                            <h5 class="mt-n3" style="color: #151a48"><b id="summaryuname"></b></h5>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-label">Foto Profil</label>
                            <img id="previewuploadfoto2" src="#" alt="your image" />
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div id="btnstep1" class="btnstep">
                        <input id="nextstep1" type="button" class="btn btn-primary rounded-pill btn-login mb-2 next" onclick="nextstep1()" value="Berikutnya">
                      </div>
                      <div id="btnstep2" class="btnstep" hidden>
                        <input id="backstep2" type="button" class="btn btn-primary rounded-pill w-30 btn-login mb-2 back" onclick="backstep2()" value="Kembali">
                        <input id="nextstep2" type="button" class="btn btn-primary rounded-pill w-30 btn-login mb-2 next" onclick="nextstep2()" value="Berikutnya">
                      </div>
                      <div id="btnstep3" class="btnstep" hidden>
                        <input id="backstep3" type="button" class="btn btn-primary rounded-pill w-30 btn-login mb-2 back" onclick="backstep3()" value="Kembali">
                        <button id="nextstep4" type="submit" class="btn btn-primary rounded-pill w-30 btn-login mb-2 next" value="Submit">Submit</button>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <p class="mb-n5">Sudah memiliki akun? <a href="{{ route('login') }}" class="hover">Masuk</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    

@stop