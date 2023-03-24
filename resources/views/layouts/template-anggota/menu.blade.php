 {{-- Anggota --}}
 <li class="nav-item">
    <a href="{{ url('/anggota') }}" class="nav-link {{ Request::is('anggota') ? 'collapsed' : '' }}">
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