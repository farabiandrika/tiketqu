@extends('user.bagian')

@section('header')
<style>
    body{
      background-image: url("https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg");

      /* Full height */
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
@include('user.templates.navbar')
@endsection
<!----------------------------------->

@section('content')

<div class="col mt-md-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="modal-content">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#masuk" role="tab"><i class="fas fa-user mr-1"></i>
              Masuk</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--masuk-->
          <div class="tab-pane fade in show active" id="masuk" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <div class="row py-5">
                <div class="col-md-4 py-md-4">
                  <div class="text-center">
                    <img src="{{ asset('template/undraw/login.svg') }}" alt="logo" width="260px">
                  </div>
                </div>
                <div class="col-md-8 py-md-4">
                    <!---form login-->
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group row">
                    <label for="username" class="col-md-3 col-form-label text-left text-md-right">{{ __('Username') }}</label>
                      <div class="col-md-8">
                        <input id="usernamelgn" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username / E-mail" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>
                      <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="text-center mb-4">
                    Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
                  </div>
                  <div class="text-center ml-md-5">
                    <a href="{{ route('/') }}" class="btn btn-outline-warning">Keluar</a>
                    <button type="submit" class="btn btn-warning">{{ __('Masuk') }}</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $("#usernamelgn").on({
	keydown: function(e) {
  	if (e.which === 32)
    	return false;
  },
  keyup: function(){
  	this.value = this.value.toLowerCase();
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");

  }
});
</script>


@endsection

@section('footer')
    @include('user.templates.footer')
@endsection
