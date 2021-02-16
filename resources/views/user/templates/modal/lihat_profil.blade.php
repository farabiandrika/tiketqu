{{-- style tombol ubah foto --}}
<style>
.image-upload > input
{
	display:none;
}
</style>

<div id="onphpidProfil" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 18px;">
      <div class="modal-header">
        <h5 class="modal-title">Detail Profil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Beranda</a>
          </li>
          <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#update" role="tab" aria-controls="profile" aria-selected="false">Ubah Profil</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row my-4 ">
            <div class="col-md-5 mb-2">
              <!--Image-->
              <div class="text-center">
                <img src="{{ asset('storage/users/'.Auth::user()->foto_user) }}"  class="rounded-circle" width="270px" height="270px">
              </div>
            </div>

            <div class="col-md-7 mb-n4 text-left">
              <h3 class="font-weight-bold text-center text-md-left">{{ Auth::user()->username }}</h3>
              <p class="text-muted">
                <table class="table">
                  <tr>
                    <td>No Identitas</td><td>:</td>
                    <td>{{ Auth::user()->no_identitas }}</td>
                  </tr>
                  <tr>
                    <td>Nama</td><td>:</td>
                    <td>{{ Auth::user()->nama }}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td><td>:</td>
                    <td>{{ date("d F Y", strtotime(Auth::user()->tanggal_lahir)) }}</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td><td>:</td>
                    <td>@if(Auth::user()->jenkel=='L')Laki-laki @else perempuan @endif</td>
                  </tr>
                  <tr>
                    <td>Alamat</td><td>:</td>
                    <td>{{ Auth::user()->alamat }}</td>
                  </tr>
                  <tr>
                    <td>Email</td><td>:</td>
                    <td><a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></td>
                  </tr>
                  <tr>
                    <td>Nomor WA</td><td>:</td>
                    <td><a href="tel:{{ Auth::user()->no_hp }}">{{ Auth::user()->no_hp }}</a></td>
                  </tr>
                </table>
              </p>
            </div>
          </div>
        </div>








        <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="profile-tab">
          <div class="row my-4 ">
              <div class="col-12 col-md-5 body px-5">
                <div class="text-center mb-2">
                <img src="{{ asset('storage/users/'.Auth::user()->foto_user) }}"  width="150px" height="150px" class="rounded-circle mb-2">
                <form action="update_foto/{{ Auth::user()->id  }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="image-upload">
                    <label for="file-input">
                        <span><i class="fas fa-camera fa-lg dark-white mr-2"></i>Ubah Foto</span>
                    </label>
                    <input type="file" id="file-input" name="foto_user" enctype="multipart/form-data"  onchange="this.form.submit();">
                    </div>
                </form>
                <form action="update/{{ Auth::user()->id  }}" method="post">
                @method('patch')
                @csrf

                <table class="table-borderless mt-3">
                <tr>
                     <td>Profesi</td><td class="pr-3">:</td>
                    <td>
                        <input type="text" name="profesi" class="form-control mb-3 @error('profesi') is-invalid @enderror"  autocomplete="profesi" autofocus value="{{ Auth::user()->profesi}}">
                        @error('profesi')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                 <tr>
                    <td>Bio Status</td><td class="pr-3">:</td>
                    <td>
                        <textarea type="text" name="status" class="form-control mb-3 @error('status') is-invalid @enderror" autocomplete="status" autofocus>{{ Auth::user()->status }}</textarea>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                </table>
              </div>
              </div>

              <div class="col-md-7 body px-3">
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

            <table class="table-borderless justify-content-center">
              <tr>
                <td>Username</td><td class="pr-3">:</td>
                <td>
                    <input type="text" id="usernamelp" name="username" class="form-control mb-2 @error('username') is-invalid @enderror" required autocomplete="username" autofocus value="{{ Auth::user()->username}}">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
              </tr>
              <tr>
                <td>Nama</td><td class="pr-3">:</td>
                <td>
                    <input type="text" name="nama" class="form-control mb-2 @error('nama') is-invalid @enderror" required autocomplete="nama" autofocus value="{{ Auth::user()->nama }}">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
              </tr>
              <tr>
                <td>Nomor Identitas</td><td class="pr-3">:</td>
                <td>
                    <input type="text" name="no_identitas" class="form-control mb-2 @error('no_identitas') is-invalid @enderror" required autocomplete="no_identitas" onKeyPress="return onlyNumbers(event);" autofocus value="{{ Auth::user()->no_identitas }}">
                    @error('no_identitas')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td><td class="pr-3">:</td>
                <td>
                    <input type="date" name="tanggal_lahir" class="form-control mb-2 @error('username') is-invalid @enderror" required autocomplete="username" autofocus value="{{ Auth::user()->tanggal_lahir }}">
                    @error('tanggal_lahir')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
              </tr>
              <tr>
                <td>jenkel</td><td class="pr-3">:</td>
                <td>
                    @if (Auth::user()->jenkel == 'L')
                    <input type="radio" name="jenkel" value="L" checked> Laki-laki
                    <input type="radio" name="jenkel" value="P"> Perempuan
                    @else
                    <ul class="list-inline">
                    <input type="radio" name="jenkel" value="L"> Laki-laki
                    <input type="radio" name="jenkel" value="P" checked> Perempuan
                    @endif</ul>
                </td>
              </tr>
              <tr>
                <td>Email</td><td class="pr-3">:</td>
                <td>
                    <input type="email" name="email" class="form-control my-2 @error('email') is-invalid @enderror" required autocomplete="email" autofocus value="{{ Auth::user()->email }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
              </tr>
              <tr>
                <td>Alamat</td><td class="pr-3">:</td>
                <td>
                    <input type="text" name="alamat" class="form-control mb-2 @error('alamat') is-invalid @enderror" required autocomplete="alamat" autofocus value="{{ Auth::user()->alamat }}">
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
              </tr>
              <tr>
                <td>Nomor WA</td><td class="pr-3">:</td>
                <td>
                    <input type="text" name="no_hp" class="form-control mb-3 @error('no_hp') is-invalid @enderror" required autocomplete="no_hp" onKeyPress="return onlyNumbers(event);" autofocus value="{{ Auth::user()->no_hp }}">
                    @error('no_hp')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td class="text-right">
                      <button type="submit" class="btn btn-warning">Simpan</button>
                  </td>
              </tr>
            </table>
            </form>
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
$("#usernamelp").on({
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



