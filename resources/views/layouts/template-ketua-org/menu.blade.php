 {{-- Ketua-Org --}}
 <li class="nav-item">
    <a href="{{ url('/ketua-org') }}" class="nav-link {{ Request::is('ketua-org') ? 'collapsed' : '' }}">
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