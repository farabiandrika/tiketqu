<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::to('/') }}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Tiketqu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(2) == '' ? 'active': '' }}">
      <a class="nav-link" href="{{url('/admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(2) == 'konfirmasi-pembayaran' ? 'active': '' }}">
      <a class="nav-link" href="{{url('/admin/konfirmasi-pembayaran')}}">
        <i class="fas fa-check"></i>
        <span>Konfirmasi Pembayaran</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ Request::segment(2) == 'konfirmasi-event' ? 'active': '' }} {{ Request::segment(2) == 'event-berlalu' ? 'active': '' }}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manajemen-event" aria-expanded="true" aria-controls="manajemen-event">
        <i class="fas fa-stream"></i>
        <span>Manajemen Event</span>
      </a>
      <div id="manajemen-event" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Manajemen Event</h6>
          <a class="collapse-item" href="{{url('/admin/konfirmasi-event')}}">Konfirmasi Event</a>
          <a class="collapse-item" href="{{url('/admin/event-berlalu')}}">Event Berlalu</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
