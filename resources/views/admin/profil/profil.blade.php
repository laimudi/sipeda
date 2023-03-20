@extends('layouts.template-admin.mainLayout')

@section('title', 'Profil')

@section('content')

<div class="pagetitle">
    <h1>Profil</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Profil</li>
    </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
      <div class="card-header">
        <div class="col-12 col-md-12 order-md-12 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      @if ($profil->isEmpty())
                      <button type="button" class="btn btn-outline-primary"
                      data-bs-toggle="modal" data-bs-target="#tambahProfil">
                      Tambah Profil
                      </button>
                      @else
                      <button type="button" class="btn btn-outline-warning"
                            data-bs-toggle="modal" data-bs-target="#editProfil">
                            Edit Profil
                        </button>
                        @endif
                      </li>
                </ol>
            </nav>
            @include('admin.profil.modal_tambah')
            @include('admin.profil.modal_edit')
        </div>
      </div>
      <div class="card-body shadow">
        <h5 class="card-title">Data Profil</h5>
        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100 active" id="sejarah-tab" data-bs-toggle="tab" data-bs-target="#sejarah-justified" type="button" role="tab" aria-controls="sejarah" aria-selected="true">Sejarah</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="tujuan-tab" data-bs-toggle="tab" data-bs-target="#tujuan-justified" type="button" role="tab" aria-controls="tujuan" aria-selected="false">Tujuan</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang-justified" type="button" role="tab" aria-controls="tentang" aria-selected="false">Tentang</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="struktur_org-tab" data-bs-toggle="tab" data-bs-target="#struktur_org-justified" type="button" role="tab" aria-controls="struktur_org" aria-selected="false">Struktur Organisasi</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="struktur_asm-tab" data-bs-toggle="tab" data-bs-target="#struktur_asm-justified" type="button" role="tab" aria-controls="struktur_asm" aria-selected="false">Struktur Asrama</button>
            </li>
        </ul>
        @foreach ($profil as $data)
        <div class="tab-content pt-4" id="myTabjustifiedContent">
          <div class="tab-pane fade show active" id="sejarah-justified" role="tabpanel" aria-labelledby="sejarah-tab">
            {!! $data->sejarah !!}
          </div>
          <div class="tab-pane fade" id="tujuan-justified" role="tabpanel" aria-labelledby="tujuan-tab">
            {!! $data->tujuan !!}
          </div>
          <div class="tab-pane fade" id="tentang-justified" role="tabpanel" aria-labelledby="tentang-tab">
            {!! $data->tentang !!}
          </div>
          <div class="tab-pane fade" id="struktur_org-justified" role="tabpanel" aria-labelledby="struktur_org-tab">
            {{ asset('public/profil-pdf'.$data->struktur_org) }}
          </div>
          <div class="tab-pane fade" id="struktur_asm-justified" role="tabpanel" aria-labelledby="struktur_asm-tab">
            {{ asset('public/profil-pdf'.$data->struktur_asm) }}
          </div>
        </div>
        @endforeach
      </div>
    </div>
</section>

@endsection