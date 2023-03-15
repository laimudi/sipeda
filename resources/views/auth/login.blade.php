@include('layouts.LandingPage.style')


<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
  
      <h1 class="logo"><a href="/home"><img src="{{ asset('assets/img/kmi-balut.png') }}" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#sejarah">Sejarah</a></li>
              <li><a href="#">Visi dan Misi</a></li>
              <li class="dropdown"><a href="#"><span>Struktur</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Struktur Organisasi</a></li>
                  <li><a href="#">Struktur Asrama</a></li>
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


<div class="container" style="margin-top: 150px;">
  <div class="row justify-content-center">
      <div class="d-grid gap-2 col-6 mx-auto">

          <div class="card shadow">
              <div class="card-header text-center">
                  <img src="{{ asset('assets/img/kmib.png') }}" style="width: 90px;">
                  <h5>SIPEDA</h5>
                  <h5>KMI-BALUT</h5>
              </div>
              <form action="cekLogin.php" method="post">
                  <div class="card-body">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon3">
                            <i class="bi bi-person-lock"></i>
                          </span>
                          <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan Username" aria-describedby="basic-addon3">
                      </div>
                      <label for="password" class="form-label">Password</label>
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon3">
                            <i class="bi bi-file-lock"></i>
                          </span>
                          <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan Password" aria-describedby="basic-addon3">
                      </div>
                      <div class="d-grid gap-2 col-12 mx-auto">
                          <button type="submit" class="btn btn-primary" name="login">Login</button>
                      </div>

                      <div class="d-grid gap-2 col-12 mx-auto text-center">
                        <p>Belum Punya Akun</p>
                        <a href="#">Buat Akun</a>
                      </div>
                  </div>
              </form>
          </div>

      </div>
  </div>

</div>

  




@include('layouts.LandingPage.script')