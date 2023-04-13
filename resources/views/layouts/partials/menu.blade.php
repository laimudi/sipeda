 {{-- Admin --}}
@if (auth()->user()->role->nama == 'admin')
  <li class="nav-item">
    <a href="{{ url('/admin') }}" class="nav-link {{ Request::is('dashboard/admin') ? 'collapsed' : '' }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a href="{{ route('profil.index') }}" class="nav-link {{ Request::is('profil') ? 'collapsed' : '' }}">
      <i class="bi bi-person"></i>
      <span>Profil</span>
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
{{-- Anggota --}}
@elseif (auth()->user()->role->nama == 'anggota')
  <li class="nav-item">
    <a href="{{ url('/anggota') }}" class="nav-link {{ Request::is('dashboard/anggota') ? 'collapsed' : '' }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a href="{{ route('profile.index') }}" class="nav-link {{ Request::is('profile') ? 'collapsed' : '' }}">
      <i class="bi bi-person"></i>
      <span>Profil</span>
    </a>
  </li>

{{-- Ketua Organisasi --}}
@elseif (auth()->user()->role->nama == 'ketua_org')
  <li class="nav-item">
    <a href="{{ url('/ketua_org') }}" class="nav-link {{ Request::is('dashboard/ketua_org') ? 'collapsed' : '' }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a href="{{ route('profilee.index') }}" class="nav-link {{ Request::is('profilee') ? 'collapsed' : '' }}">
      <i class="bi bi-person"></i>
      <span>Profil</span>
    </a>
  </li>

{{-- Ketua Asrama --}}
@elseif (auth()->user()->role->nama == 'ketua_asm')
  <li class="nav-item">
    <a href="{{ url('/ketua_asm') }}" class="nav-link {{ Request::is('dashboard/ketua_asm') ? 'collapsed' : '' }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a href="{{ route('profille.index') }}" class="nav-link {{ Request::is('profille') ? 'collapsed' : '' }}">
      <i class="bi bi-person"></i>
      <span>Profil</span>
    </a>
  </li>

{{-- Pengurus Asrama --}}
@elseif (auth()->user()->role->nama == 'pengurus_asm')
  <li class="nav-item">
    <a href="{{ url('/pengurus_asm') }}" class="nav-link {{ Request::is('dashboard/pengurus_asm') ? 'collapsed' : '' }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Pages</li>
@endif


