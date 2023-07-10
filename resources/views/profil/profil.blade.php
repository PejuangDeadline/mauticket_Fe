@extends('layout.navbar')

@section('konten')

    <div class="mt-12">
      <section class="wrapper bg-gray">
        <div class="container py-3 py-md-10">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <div class="navplus">
              <ol class="breadcrumb mb-0 mt-n5">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
                <li class="breadcrumb-item active text-muted"><span class="textbread">Profil</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-user"></i></div></li>
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
              <div class="card-body text-start">

                <h2 class="post-title h3 mt-1 mb-5 textevent">Detail Profil</h2>

                <div class="row">
                  <div class="detnama">
                    <div class="form-group">
                      <label class="form-label eo-checkout mb-n0">Username</label>
                      <h3 class="eo-checkout text-ungu">{{ $datauser->name }}</h3>
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

                <div class="text-end">
                  <a href="#" class="btngantipw gantipw" data-bs-toggle="modal" data-bs-target="#modal-changepw">
                    <i class="fas fa-edit"></i> Ganti Password
                  </a>
                  <a class="p-1"></a>
                  <a href="#" class="btnedit order" data-bs-toggle="modal" data-bs-target="#modal-edit">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="modal-edit" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
          <form action="{{ route('edit-profil') }}" method="post" enctype="multipart/form-data" id="editForm">
            @csrf

            <div class="modal-header">
              <h5 class="modal-title mt-n5">Edit Profil</h5>
              <a class="button btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
            </div>
            <hr class="mt-n7 mb-n4">

            <div class="modal-body text-start">
              <div class="row mt-5">
                <div class="col-lg-6 mb-3">
                  <div class="form-floating">
                    <input id="namadepan" type="text" name="namadepan" class="form-control" placeholder="Masukkan Nama Depan" value="{{ $datauser->firstname }}">
                    <label class="w500" style="color: black" for="namadepan">Nama Depan</label>
                  </div>
                </div>
                <div class="col-lg-6 mb-3">
                  <div class="form-floating">
                    <input id="namabelakang" type="text" name="namabelakang" class="form-control" placeholder="Masukkan Nama Belakang" value="{{ $datauser->lastname }}">
                    <label class="w500" style="color: black" for="namabelakang">Nama Belakang</label>
                  </div>
                </div>
                <div class="col-lg-6 mb-3">
                  <div class="form-floating">
                    <input id="username" type="text" name="username" class="form-control" placeholder="Masukkan Username" value="{{ $datauser->name }}">
                    <label class="w500" style="color: black" for="username">Username</label>
                  </div>
                </div>
                <div class="col-lg-6 mb-3">
                  <div class="form-floating">
                    <input id="phonenumber" type="text" name="phonenumber" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ $datauser->phonenumber }}">
                    <label class="w500" style="color: black" for="phonenumber">Nomor Telepon</label>
                  </div>
                </div>
              </div>
              
            </div>

            <hr class="mt-n4 mb-n4">
            <div class="modal-body text-end mb-n8 mt-n3">
              <button type="submit" class="btn btn-primary rounded-pill w-30 btn-login mb-2 keluar">Update</button>
            </div>

          </form>

        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-changepw" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
          <form action="{{ route('change-pw') }}" method="post" enctype="multipart/form-data" id="changeForm">
            @csrf

            <div class="modal-header">
              <h5 class="modal-title mt-n5">Ganti Kata Sandi</h5>
              <a class="button btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
            </div>
            <hr class="mt-n7 mb-n4">

            <div class="modal-body text-start">
              <div class="row mt-5">
                <div class="col-lg-12 mb-3">
                  <div class="form-floating password-field">
                    <input type="password" class="form-control" placeholder="Masukkan Kata Sandi Sebelumnya" id="passwordbefore" name="passwordbefore" required>
                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                    <label for="passwordbefore">Kata Sandi Sebelumya</label>
                  </div>
                </div>
                <div class="col-lg-12 mb-3">
                  <div class="form-floating password-field">
                    <input type="password" class="form-control" placeholder="Masukkan Kata Sandi Baru" id="password" name="password" required>
                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                    <label for="password">Kata Sandi Baru</label>
                  </div>
                </div>
                <div class="col-lg-12 mb-3">
                  <div class="form-floating password-field">
                    <input type="password" class="form-control" placeholder="Ulangi Kata Sandi Baru" id="confirmpassword" name="confirmpassword" required>
                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                    <label for="confirmpassword">Ulangi Kata Sandi Baru</label>
                  </div>
                </div>
              </div>
              
            </div>

            <hr class="mt-n4 mb-n4">
            <div class="modal-body text-end mb-n8 mt-n3">
              <button type="submit" class="btn btn-primary rounded-pill w-30 btn-login mb-2 keluar">Update</button>
            </div>

          </form>

        </div>
      </div>
    </div>
    

@stop