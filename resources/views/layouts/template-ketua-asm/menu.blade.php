 {{-- Ketua-Asm --}}
 <li class="nav-item">
    <a href="{{ url('/ketua-asm') }}" class="nav-link {{ Request::is('ketua-asm') ? 'collapsed' : '' }}">
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