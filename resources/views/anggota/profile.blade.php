@extends('layouts.partials.mainLayout')

@section('title', 'Anggota | Profil')

@section('content')

<div class="pagetitle">
    <h1>Profil</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profil</li>
    </ol>
    </nav>
</div>

<section class="section profile">
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body shadow profile-card pt-4 d-flex flex-column align-items-center">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2>Kevin Anderson</h2>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <div class="col-12 col-md-12 order-md-12 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><button type="button" class="btn btn-outline-warning"
                                    data-bs-toggle="modal" data-bs-target="#editProfile">
                                    Edit Profil
                                </button></li>
                        </ol>
                    </nav>
                </div>
            </div>
          <div class="card-body shadow pt-3">
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                  <div class="col-lg-9 col-md-8"></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                  <div class="col-lg-9 col-md-8"></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                  <div class="col-lg-9 col-md-8"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Asal Sekolah</div>
                    <div class="col-lg-9 col-md-8"></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Alamat</div>
                  <div class="col-lg-9 col-md-8"></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Provinsi</div>
                  <div class="col-lg-9 col-md-8"></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Kabupaten/Kota</div>
                  <div class="col-lg-9 col-md-8"></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Asal Kecamatan/Desa</div>
                  <div class="col-lg-9 col-md-8"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">No. Telepon/HP</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection