@extends('auth.layouts.app')



<style>
  .btn.btn-primary.disabled {
    background-color: #a3a3a3;
}

  input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}
</style>
<!--content-->
@section('content')
    <div class="row mt-md-5">
        <div class="col-md-6">
            <img src="{{ asset('template/img/portfolio/03-thumbnail.jpg') }}" class="container" alt="tiket8">
            </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 col-xs-6 text-center mt-2 mb-n2 mt-sm-0 mb-sm-0">
                    <h2>Dapur Mum</h2>
                    </div>
                <div class="col-md-12">
                    <ul class="nav mt-2">
                        <li><a class="btn btn-light active mr-md-2" data-toggle="tab" href="#deskripsievent">Deskripsi Event</a></li>
                        <li><a class="btn btn-light mr-md-2" data-toggle="tab" href="#tiket">Tiket</a></li>
                        <li><a class="btn btn-light" data-toggle="tab" href="#gallery">Gallery</a></li>
                        </ul>
                    </div>
                <div class="col-md-12 tab-content mt-3 mt-md-2">
                    <div id="deskripsievent" class="tab-pane active">
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <i class="fas fa-calendar-alt mb-2"> 4 Maret 2020</i><br>
                        <i class="fas fa-clock mb-2"> 08.00 - Selesai</i><br>
                        <i class="fas fa-map-marker-alt"> Evo Hotel Pekanbaru</i>
                        </div>
                    <div id="tiket" class="tab-pane fade">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card mb-2">
                            <div class="card-body">
                              <h5 class="card-title">Reguler</h5>
                              <p class="card-text">Harga Rp.120.000</p>
                              <form>
                                <div class="text-center">
                                  <div class="btn btn-primary btn-minus" data-target="jumlahTiketReguler" id="decrease" value="Decrease Value">-</div>
                                  <input type="number" name="jumlahTiketReguler" id="number" onKeyPress="return onlyNumbers(event);" value="0" max="5" style="width:20px;text-align:center"/>
                                  <div class="btn btn-primary btn-plus" data-target="jumlahTiketReguler"  id="increase" value="Increase Value">+</div>
                                  </div>
                                </form>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">VIP</h5>
                              <p class="card-text">Harga Rp.399.000</p>
                              <form>
                                <div class="text-center">
                                  <div class="btn btn-primary disabled" data-target="jumlahTiketVIP" id="decrease" value="Decrease Value">-</div>
                                  <input type="number" name="jumlahTiketVIP" id="number1" onKeyPress="return onlyNumbers(event);" value="0" max="5" style="width:20px;text-align:center" disabled/>
                                  <div class="btn btn-primary disabled" data-target="jumlahTiketVIP" id="increase" value="Increase Value">+</div>
                                  </div>
                                </form>
                                <p style="font-size:10px;color:red;"><em> Tiket dijual pada 20 Februari 2019 Pukul 08.00 WIB </em></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-md-5">
                        <div class="col-md-12 col-sm-12">
                          <div class="row">
                            <div class="col-md-2 col-sm-6">
                              <i class="fas fa-ticket-alt"> </i>
                            </div>
                            <div class="col-md-4 col-sm-6">
                              <h4>Dapur Mum</h4>
                              <p class="mt-n2">Reguler 1 Tiket | VIP 1 Tiket</p>
                            </div>
                            <div class="col-md-6">
                              <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-md-6 col-sm-6">
                                  <p class="h6">Sub-Total Rp.500.000</p>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                  <button class="btn btn-primary">Beli</button>
                                </div>
                              </div>

                            </div>
                          </div>


                        </div>
                      </div>
                      </div>
                    <div id="gallery" class="tab-pane fade mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('template/img/portfolio/03-thumbnail.jpg') }}" class="container" alt="tiket8">
                                </div>
                            <div class="col-md-4">
                                <img src="{{ asset('template/img/portfolio/03-thumbnail.jpg') }}" class="container" alt="tiket8">
                                </div>
                            <div class="col-md-4">
                                <img src="{{ asset('template/img/portfolio/03-thumbnail.jpg') }}" class="container" alt="tiket8">
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="https://google.com" class="btn btn-primary mt-3 text-center">Lihat selengkapnya</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footer')
    @include('user.templates.footer')
@endsection

@section('optional-script')
<script>

  $('.btn-plus').on('click', function(){
    input = $(this).data('target');
    var value = parseInt($('input[name='+input+']').val(), 10);
    value = isNaN(value) ? 0 : value;
    value++;
    $('input[name='+input+']').val(value);
  })

  $('.btn-minus').on('click', function(){
    input = $(this).data('target');
    var value = parseInt($('input[name='+input+']').val(), 10);
    value = isNaN(value) ? 0 : value;
    value--;
    $('input[name='+input+']').val(value);
  })



function onlyNumbers(evt) {
    // Mendapatkan key code
    var charCode = (evt.which) ? evt.which : event.keyCode;

    // Validasi hanya tombol angka
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
  </script>
@endsection
