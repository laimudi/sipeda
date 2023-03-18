@extends('layouts.template-admin.mainLayout')

@section('title', 'Berita')

@section('content')

<div class="pagetitle">
    <h1>Berita</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Berita</li>
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
                                data-bs-toggle="modal" data-bs-target="#tambahBerita">
                                Tambah Berita
                            </button></li>
                    </ol>
                    @include('admin.berita.modal_tambah')
                </nav>
            </div>
        </div>
        <div class="card-body shadow">
            <h5 class="card-title">Data Galeri</h5>
                <table class="table table-striped datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($berita as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td></td>
                        <td></td>
                        <td></td>   
                        <td></td>
                    </tr>          
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</section>
    
@endsection