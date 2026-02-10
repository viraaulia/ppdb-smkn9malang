<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <div class="container">

    <a href="/" class="navbar-brand">
      PPDB SMKN 9 Malang
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#guestNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="guestNavbar">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">Beranda</a>
        </li>

        <li class="nav-item {{ request()->is('tentang*') ? 'active' : '' }}">
          <a class="nav-link" href="/tentang">Tentang</a>
        </li>

        <li class="nav-item {{ request()->is('alur*') ? 'active' : '' }}">
          <a class="nav-link" href="/alur">Alur</a>
        </li>

        <li class="nav-item {{ request()->is('jadwal*') ? 'active' : '' }}">
          <a class="nav-link" href="/jadwal">Jadwal</a>
        </li>

        <li class="nav-item ml-lg-3">
          <a class="btn btn-primary btn-sm" href="/login">
            Login
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>