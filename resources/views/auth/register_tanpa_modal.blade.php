@extends('user.bagian')

@section('header')

@endsection
<!----------------------------------->

@section('content')
@include('user.templates.navbar')
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


<div class="col mt-md-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                  <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#daftar" role="tab"><i class="fas fa-user mr-1"></i>
              Daftar</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--masuk-->
          <div class="tab-pane fade in show active" id="daftar" role="tabpanel">
            <div class="modal-body">
                {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <br/>
                             <!-- form validasi -->
                <div class="text-center">
                    <img src="{{ asset('template/undraw/daftar.svg') }}" alt="logo" width="180px">
                </div>
                <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-7">
                                    <input type="text" id="usernamedf2" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-7">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_identitas" class="col-md-4 col-form-label text-md-right">{{ __('No Identitas') }}</label>

                                <div class="col-md-7">
                                    <input id="no_identitas" type="text" class="form-control @error('no_identitas') is-invalid @enderror" name="no_identitas" value="{{ old('no_identitas') }}" required autocomplete="no_identitas" autofocus onKeyPress="return onlyNumbers(event);">

                                    @error('no_identitas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>


                                <div class="col-md-7">
                                    <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

                                    @error('tanggal_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenkel" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                                <div class="col-md-7">
                                <!-- Material checked -->
                                <div class="form-check">
                                <input type="radio" class="form-check-input" id="materialChecked" name="jenkel" value="L">
                                <label class="form-check-label" for="materialChecked">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                <input type="radio" class="form-check-input" id="materialUnchecked" name="jenkel" value="P">
                                <label class="form-check-label" for="materialUnchecked">Perempuan</label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                                <div class="col-md-7">
                                    <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="alamat" autofocus>{{ old('alamat') }}</textarea>

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-7">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('No WA') }}</label>

                                <div class="col-md-7">
                                    <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" onKeyPress="return onlyNumbers(event);">

                                    @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="foto_user" class="col-md-4 col-form-label text-md-right">{{ __('Foto User') }}</label>

                                <div class="col-md-7">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    @error('foto_user') is-invalid @enderror  enctype="multipart/form-data" name="foto_user" aria-describedby="inputGroupFileAddon01" value="{{ old('foto_user') }}">
                                    <label class="custom-file-label" for="inputGroupFile01">*Wajib 1:1</label>
                                </div>

                                    @error('foto_user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-7">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                                <div class="col-md-7">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>



              <div class="text-center pl-4">
                  <p class="pt-4">Sudah ada akun? <a href="{{ route('login') }}" role="tab" class="yellow-text">Masuk</a></p>
                <a href="{{ route('/') }}" class="btn btn-outline-warning">Keluar</a>
                <button type="submit" class="btn btn-warning">
                    {{ __('Daftar') }}
                </button></div></form>


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
    function onlyNumbers(evt) {
    // Mendapatkan key code
    var charCode = (evt.which) ? evt.which : event.keyCode;

    // Validasi hanya tombol angka
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

$("#usernamedf2").on({
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



