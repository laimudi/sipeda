@extends('layouts.partials.mainLayout')

@section('title', 'Admin | Pengurus')

@section('content')

<div class="pagetitle">
    <h1>Pengurus</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Pengurus</li>
    </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
      <div class="card-body">
        
        <h5 class="card-title">Input Data Pengurus</h5>

        <form class="row g-3" action="{{ route('pengurus.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nm_pengurus">Nama</label>
                <div class="form-group">
                  <input class="form-control" type="text" name="nm_pengurus" id="nm_pengurus" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="bidang">Bidang</label>
                <select name="bidang_id" id="bidang" class="form-control" required>
                    <option value="">Pilih Jabatan</option>
                    @foreach ($bidang as $data)
                        <option value="{{ $data->id }}">{{ $data->bidang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</section>

@endsection