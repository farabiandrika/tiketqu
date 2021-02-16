
<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <!--Modal: Login / Register Form-->

  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#masuk" role="tab"><i class="fas fa-user mr-1"></i>
              Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#daftar" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Daftar</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--masuk-->
          <div class="tab-pane fade in show active" id="masuk" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
               <div class="text-center py-4">
                    <img src="{{ asset('template/undraw/login.svg') }}" alt="logo" width="180px">
                </div>
                <!---form login-->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label text-left text-md-right">{{ __('Username') }}</label>
                        <div class="col-md-7">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username / E-mail" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-md-7">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                    <p class="text-dark">{{ __('Lupa Password?') }}</p>
                    </a>
                 @endif
                    </div>
                     <div class="text-center ml-md-5">
                      <button type="button" class="btn btn-outline-warning waves-effect ml-auto" data-dismiss="modal">Keluar</button>
                      <button type="submit" class="btn btn-warning">
                        {{ __('Masuk')}}
                    </button> </form>
                </div>
            </div>
          </div>









          <!--daftar-->
          <div class="tab-pane fade" id="daftar" role="tabpanel">
            <!--Body-->
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
                <div class="text-center py-4">
                    <img src="{{ asset('template/undraw/daftar.svg') }}" alt="logo" width="180px">
                </div>
                <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-7">
                                    <input id="usernamedf" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

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
                                    <input id="tanggal_lahir" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

                                     <script>
                                        $('#tanggal_lahir').datepicker({ format: 'yyyy-mm-dd', uiLibrary: 'bootstrap', modal: true, header: true, footer: true, iconsLibrary: 'fontawesome', icons: { rightIcon: '<span class="glyphicon glyphicon-chevron-down"></i>'
                                        }});
                                    </script>

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



              <div class="text-center">
                  <p class="pt-4">Sudah ada akun? <a data-toggle="tab" href="#masuk" role="tab" class="yellow-text">Masuk</a></p>


                <button type="button" class="btn btn-outline-warning waves-effect ml-auto" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-warning">
                    {{ __('Daftar') }}
                </button></form>
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

$("#username").on({
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

$("#usernamedf").on({
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
