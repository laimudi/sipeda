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
    <a href="{{ route('galeri.index') }}" class="nav-link {{ Request::is('galeri') ? 'collapsed' : '' }}">
      <i class="bi bi-camera"></i>
      <span>Galeri</span>
    </a>
  </li>