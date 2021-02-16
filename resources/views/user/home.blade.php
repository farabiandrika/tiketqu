
@extends('user.bagian')
@section('header')
@include('user.templates.navbar')

<style>
    .bg {
      background-image: url("https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg");

      /* Full height */
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .cards{
        background-image: url("https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg");
    }

    .cards:hover{
        background-image: url('template/undraw/event.svg');
    }
</style>

@endsection




<!--content-->
@section('content')


<div class="col mt-md-5">
  {{-- membuat header user --}}
  <div class="row">
    <div class="col-12 col-md-6 mb-3">
      <div class="row">
        <div class="col-4 col-md-3">
          <div class="text-left">
            <a href="{{ asset('storage/users/'.Auth::user()->foto_user) }}" data-size="1600x1067">
              <img src="{{ asset('storage/users/'.Auth::user()->foto_user) }}" class="rounded-circle" alt="Profil" width="95px" height="95px">
          </div>
        </div>
        <div class="col-8 col-md-9 text-left">
          <h4 class="card-title h3-md-responsive pt-3 mb-1 font-bold text-dark ">
            <strong class="juduls">Selamat Datang, {{ Auth::user()->username }}</strong></h4>
            <a href="#" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#onphpidProfil" style="border-radius:10px; "><i class="fas fa-user fa-lg text-dark mr-2"></i>Lihat Profil</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 text-justify py-2">
            <h6>{{ Auth::user()->profesi==""? "User" : Auth::user()->profesi}}</h6>
              {{ Auth::user()->status=="" ?'Ayo Jual dan Beli Tiket' : Auth::user()->status}}
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 mb-4">
      <div class="jumbotron text-center hoverable p-5 bg" style="border-radius:18px;">
      </div>
    </div>
  </div>
 {{-- membuat header user --}}



  <!-- Menu  -->
<div class="row">
    <div class="col-md-12">

    <h5 class="py-2 text-left">Menu</h5>
    <div class="row">
    <div class="col-6 col-xs-12 col-sm-3 col-md-3 mb-4">
        <a href="{{URL::to('/buat-event')}}">
        <div class="card cards" style="border-radius:18px;">
                <div class="card-body">
                    <div class="text-center mb-1">
                        <img src="{{ asset('template/undraw/event.svg') }}" class="rounded-circle" alt="Cinque Terre" width="120px" height="120px">
                        <h6 class="card-title text-dark">Buat Tiket Event</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-xs-12 col-sm-3 col-md-3 mb-4">
        <a href="{{URL::to('/eventku')}}">
        <div class="card cards" style="border-radius:18px;">
                <div class="card-body">
                    <div class="text-center mb-md-1">
                        <img src="{{ asset('template/undraw/udhbeli.svg') }}" class="rounded-circle" alt="Cinque Terre" width="120px" height="120px">
                        <h6 class="card-title text-dark">Event Telah Dibuat</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-xs-12 col-sm-3 col-md-3 mb-4">
        <a href="#" data-toggle="modal" data-target="#onphpidPoin">
        <div class="card cards" style="border-radius:18px;">
                <div class="card-body">
                    <div class="text-center mb-1">
                        <img src="{{ asset('template/undraw/poin.svg') }}" class="rounded-circle" alt="Cinque Terre" width="120px" height="120px">
                        <h6 class="card-title text-dark">Poin</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-xs-12 col-sm-3 col-md-3 mb-4">
        <a href="{{URL::to('/keranjang')}}">
        <div class="card cards" style="border-radius:18px;">
                <div class="card-body">
                    <div class="text-center mb-1">
                        <img src="{{ asset('template/undraw/keranjang.svg') }}" class="rounded-circle" alt="Cinque Terre" width="120px" height="120px">
                         <h6 class="card-title text-dark">Tiket Saya</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
</div>


@include('user.templates.modal.lihat_profil')
@include('user.templates.modal.panduan')
@include('user.templates.modal.poin')

@endsection

@section('footer')
    @include('user.templates.wa')
    @include('user.templates.footer')
@endsection

@section('optional-script')


@endsection
