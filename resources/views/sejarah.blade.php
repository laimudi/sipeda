<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sejarah</title>

    @include('layouts.landingpage-pengguna.style')
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">
    
        <h1 class="logo"><a href="/"><img src="{{ asset('assets/img/kmi-balut.png') }}" alt=""></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link" href="/">Home</a></li>
            <li class="dropdown"><a href="#" class="nav-link scrollto active"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a class="nav-link scrollto" href="/sejarah">Sejarah</a></li>
                <li><a href="/visimisi">Visi dan Misi</a></li>
                <li class="dropdown"><a href="#"><span>Struktur</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="/strukturorganisasi">Struktur Organisasi</a></li>
                    <li><a href="/strukturasrama">Struktur Asrama</a></li>
                    </ul>
                </li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="#">Pengumuman</a></li>
                <li><a href="#">Agenda</a></li>
                </ul>
            </li>
            <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
            <li><a class="nav-link scrollto " href="#berita">Berita</a></li>
            <li><a class="getstarted" href="/login">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container position-relative">
            <h1>Sejarah</h1>
        </div>
    </section>
    <!-- End Hero -->
  
    @include('layouts.landingpage-pengguna.footer')
      
  
    @include('layouts.landingpage-pengguna.script')
    
</body>
</html>