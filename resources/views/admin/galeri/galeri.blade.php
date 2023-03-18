@extends('layouts.template-admin.mainLayout')

@section('title', 'Galeri')

@section('content')

<div class="pagetitle">
    <h1>Galeri</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Galeri</li>
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
                            data-bs-toggle="modal" data-bs-target="#tambahGaleri">
                            Tambah Galeri
                        </button></li>
                </ol>
                @include('admin.galeri.modal_tambah')
            </nav>
        </div>
      </div>
      <div class="card-body shadow">
        <h5 class="card-title">Data Galeri</h5>
          <table class="table table-striped datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>Brandon Jacob</td>
                <td>Designer</td>
                <td>28</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </section>
    
@endsection