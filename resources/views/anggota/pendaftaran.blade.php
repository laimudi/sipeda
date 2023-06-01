@extends('layouts.partials.mainLayout')

@section('title', 'Anggota | Pendftaran')

@section('content')

<div class="pagetitle">
    <h1>Pendaftaran</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Mahasiswa</li>
          <li class="breadcrumb-item active">Pendaftaran</li>
    </ol>
    </nav>
</div>

{{-- <section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col-12 col-md-12 order-md-12 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><button type="button" class="btn btn-outline-primary"
                                data-bs-toggle="modal" data-bs-target="#tambahPendaftaran">
                                Daftar
                            </button></li>
                    </ol>
                    @include('anggota.modal_pendaftaran_tambah')
                </nav>
            </div>
        </div>
        <div class="card-body shadow">
            <h5 class="card-title">Pendaftaran Orientasi Pomenggon Noa</h5>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Riwayat Penyakit</th>
                            <th>No. Hp Orang Tua</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>{{ $anggotas->nm_lengkap }}</td>
                            <td>{{ $anggotas->gender }}</td>
                            <td>{{ $anggotas->tmp_lahir }}</td>
                            <td>{{ $anggotas->tgl_lahir }}</td>
                            <td>{{ $daftar->agama }}</td>
                            <td>{{ $anggotas->alamat }}</td>
                            <td>{{ $daftar->penyakit }}</td>
                            <td>{{ $daftar->telepon_ortu }}</td>
                            <td><img src="{{ asset('storage/pendaftaran-gambar/'.$daftar->gambar) }}" alt="" width="100" height="100"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</section> --}}

<section class="section">
    @if (Session::has('tambah'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      {{ Session::get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (Session::has('edit'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      {{ Session::get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="row">
    <div class="col-xl-4">
        <div class="card">
          <div class="card-body shadow profile-card pt-4 d-flex flex-column align-items-center">
            @if ($daftar != null)
            <img src="{{ asset('storage/pendaftaran-gambar/'. $daftar->gambar) }}" alt="Profile" class="rounded-circle" width="200" height="200">
            <h2>{{ $daftar->nm_lengkap }}</h2>
            @endif
          </div>
        </div>
    </div>

    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <div class="col-12 col-md-12 order-md-12 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                              @if ($daftar == null)
                              <button type="button" class="btn btn-outline-primary"
                                    data-bs-toggle="modal" data-bs-target="#tambahPendaftaran">
                                    Daftar
                              </button>
                              @include('anggota.modal_pendaftaran_tambah')
                              @else
                              <a class="btn btn-outline-danger" data-placement="top" href="{{ route('cetak.formulir', $daftar->id) }}" target="_blank">
                                <i class="bi bi-file-earmark-pdf-fill">Cetak Formulir</i>
                              </a>
                              @endif
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card-body shadow pt-3">
                <div class="tab-content pt-2">
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Pendaftaran</h5>
                    @if ($daftar != null)
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $daftar->nm_lengkap }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $daftar->gender }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $daftar->tmp_lahir }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $daftar->tgl_lahir }}</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Agama</div>
                        <div class="col-lg-9 col-md-8"><strong>{{ $daftar->agama }}</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                        <div class="col-lg-9 col-md-8"><strong>{{ $daftar->alamat }}</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Riwayat Penyakit</div>
                        <div class="col-lg-9 col-md-8"><strong>{{ $daftar->penyakit }}</strong></div>
                    </div>
                    <div class="row">
                          <div class="col-lg-3 col-md-4 label">No. Telepon/HP Orang Tua</div>
                          <div class="col-lg-9 col-md-8"><strong>{{ $daftar->telepon_ortu }}</strong></div>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
        </div>
    </div>
  </div>
</section>

@endsection