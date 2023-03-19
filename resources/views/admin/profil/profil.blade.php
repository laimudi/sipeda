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
                    <li class="breadcrumb-item"><button type="button" class="btn btn-outline-primary"
                            data-bs-toggle="modal" data-bs-target="#tambahGaleri">
                            Tambah Galeri
                        </button></li>
                </ol>
            </nav>
        </div>
      </div>
      <div class="card-body shadow">
        <h5 class="card-title">Data Profil</h5>
        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100 active" id="sejarah-tab" data-bs-toggle="tab" data-bs-target="#sejarah-justified" type="button" role="tab" aria-controls="sejarah" aria-selected="true">Sejarah</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="visimisi-tab" data-bs-toggle="tab" data-bs-target="#visimisi-justified" type="button" role="tab" aria-controls="visimisi" aria-selected="false">Visi & Misi</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang-justified" type="button" role="tab" aria-controls="tentang" aria-selected="false">Tentang</button>
            </li>
        </ul>
        <div class="tab-content pt-4" id="myTabjustifiedContent">
            <div class="tab-pane fade show active" id="sejarah-justified" role="tabpanel" aria-labelledby="sejarah-tab">
              Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
            </div>
            <div class="tab-pane fade" id="visimisi-justified" role="tabpanel" aria-labelledby="visimisi-tab">
              Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
            </div>
            <div class="tab-pane fade" id="tentang-justified" role="tabpanel" aria-labelledby="tentang-tab">
              Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
            </div>
          </div>
      </div>
    </div>
</section>

@endsection