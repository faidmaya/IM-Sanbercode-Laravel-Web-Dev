<aside class="left-sidebar">
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="text-nowrap logo-img">
        <img src="{{ asset('assets/images/logos/seodashlogo.png') }}" width="180" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>

    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">

        <!-- HOME -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Home</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('home') }}">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>

        <!-- SANBERBOOK -->
        <li class="nav-small-cap mt-4">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">SanberBook</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('register') }}">
            <span>
              <i class="ti ti-user-plus"></i>
            </span>
            <span class="hide-menu">Register</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('welcome') }}">
            <span>
              <i class="ti ti-hand-stop"></i>
            </span>
            <span class="hide-menu">Welcome Page</span>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>
