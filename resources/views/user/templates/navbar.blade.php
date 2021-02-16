<body data-spy="scroll" data-target=".navbar" data-offset="0" id="page-top">
  <!-- Navigation -->
    <nav class="navbar z-depth-0 navbar-expand-lg navbar-dark {{ Request::segment(1) == '' ? '': 'bg-dark' }} fixed-top" id="mainNav">
      <div class="container">
        <img src="{{ asset('template/img/icon/ticket.png') }}" alt="logo" width="18px">
        <a class="navbar-brand js-scroll-trigger" href="{{URL::to('/')}}#page-top">Tiketqu</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{URL::to('/')}}#cari">Cari Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{URL::to('/buat-event')}}">Buat Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{URL::to('/')}}#team">Tentang</a>
            </li>
            @if ($logged ?? '' != '0')
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('storage/users/'.Auth::guard($logged ?? '')->user()->foto_user) }}" class="rounded-circle mr-3"  width="30px" height="28px">{{ Auth::guard($logged ?? '')->user()->username }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{URL::to('/home')}}"><i class="fas fa-user mr-3"></i>Beranda</a>
            <a class="dropdown-item" href="{{URL::to('/')}}#cari"><i class="fas fa-bell mr-3"></i>Notifikasi</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fas fa-power-off text-danger mr-3"></i>
                {{ __('Logout') }}
            </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#modallogin"><i class="fas fa-user"></i>&nbsp;Masuk</a>
            </li>

            @endif
          </ul>
        </div>
      </div>
    </nav>

    @include('auth.login')
