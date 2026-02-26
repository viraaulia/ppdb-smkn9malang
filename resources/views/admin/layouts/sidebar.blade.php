<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index-2.html">PPDB</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index-2.html">Ppdb</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ request()->routeIs('beranda')?'active': '' }}">
              <a href="{{route ('beranda') }}" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
            </li>
            
            <li class="menu-header">Starter</li>
            <li class="dropdown {{ request()->routeIs('pengguna')?'active': '' }}">
              <a href="{{route ('pengguna')}}" class="nav-link"><i class="fas fa-user"></i><span>Pengguna</span></a>
            </li>
            <li class="dropdown {{ request()->routeIs('jurusan')?'active': '' }}">
            <a href="{{route ('jurusan')}}" class="nav-link"><i class="fas fa-book"></i><span>Jurusan</span></a>
            </li>
            <li class="dropdown {{ request()->routeIs('pendaftaran')?'active': '' }}">
            <a href="{{route ('pendaftaran')}}" class="nav-link"><i class="fas fa-clipboard-list"></i><span>Pendaftaran</span></a>
            </li>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
</div>