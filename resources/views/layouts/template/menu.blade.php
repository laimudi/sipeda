<li class="nav-item">
    <a href="{{ url('/admin') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a href="{{ route('profil.index') }}" class="nav-link collapsed {{ Request::is('profil') || Request::is('profil/*') ? 'active' : '' }}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->