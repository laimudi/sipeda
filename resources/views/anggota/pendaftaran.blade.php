@extends('layouts.partials.mainLayout')

@section('title', 'Admin | Pendftaran')

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

<section class="section">
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</section>

@endsection