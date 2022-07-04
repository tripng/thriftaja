<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{ asset('img/projek/me.jpg') }}" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          @auth()
          <span class="font-weight-bold mb-2">{{auth()->user()->username}}</span>
          @endauth
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('home') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('categories.index') }}">
        <span class="menu-title">Kategori Barang</span>
        <i class="mdi mdi-contacts menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/barang') }}">
        <span class="menu-title">Barang</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" href="{{route('penjualan')}}">
        <span class="menu-title">Penjualan</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('pembeli')}}">
        <span class="menu-title">Data Pembeli</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="menu-title">Akun</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
      </a>
      <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
        <ul class="nav flex-column sub-menu">
          @auth()
          <li class="nav-item">{{auth()->user()->username}}</li>
          @endauth
          <li class="nav-item"> <a class="nav-link" href="#"> Profile </a></li>
          <li class="nav-item"> <a class="nav-link" href="/logout"> Logout </a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>