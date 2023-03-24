 {{-- Admin --}}
 <li class="nav-item">
    <a href="{{ url('/admin') }}" class="nav-link {{ Request::is('admin') ? 'collapsed' : '' }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a href="{{ route('profil.index') }}" class="nav-link {{ Request::is('profil') ? 'collapsed' : '' }}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('mahasiswa.index') }}" class="nav-link {{ Request::is('mahasiswa') ? 'collapsed' : '' }}">
      <i class="bi bi-person"></i>
      <span>Data Mahasiswa</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('galeri.index') }}" class="nav-link {{ Request::is('galeri') ? 'collapsed' : '' }}">
      <i class="bi bi-camera"></i>
      <span>Galeri</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('berita.index') }}" class="nav-link {{ Request::is('berita') ? 'collapsed' : '' }}">
      <i class="ri-file-paper-2-line"></i>
      <span>Berita</span>
    </a>
  </li>