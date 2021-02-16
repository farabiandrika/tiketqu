@extends('user.bagian')
@section('header')
    @include('user.templates.navbar')
@endsection
<!----------------------------------->

<!--content-->
@section('content')
<style>

  .inputs {
  outline: none;
  box-shadow: none;
  border: 0;
  background: transparent;
}
</style>

<div class="row justify-content-center align-items-center">
  <div class="col-md-10">
    @foreach ($data as $d)
      <div class="card mb-3">
        <img class="card-img-top img img-responsive full-width" src="{{ asset('storage/event/'.$d->banner_event) }}" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">{{ $d->nama_event }}</h2>
          <p class="card-text"><small class="text-muted">{{ $d->kategori_event }}</small></p>
          <hr height="100%">
          <div class="row">
            <div class="col-md-4">
              <h6>Diselenggarakan oleh</h6>
              <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <img class="img img-responsive full-width" src="{{ asset('template/img/icon/ticket.png') }}" alt="Card image cap" style="height:60px;">
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-12">
                      <p class="text-muted">{{ $d->penyelenggara->nama_penyelenggara }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
              <h6>Tanggal & Waktu</h6>
              <i class="far fa-calendar-alt text-muted"> {{date('d F Y', strtotime($d->waktu_mulai_event))}} - {{date('d F Y', strtotime($d->waktu_berakhir_event))}}</i><br>
              <i class="far fa-clock text-muted"> {{date('G:i', strtotime($d->waktu_mulai_event))}}WIB</i>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
              <h6>Lokasi</h6>
              <i class="far fa-building text-muted">
                <a class="text-muted" data-toggle="tooltip" href="https://maps.google.com/?q=<?= $d->lokasi_event .'" target="_blank" title="'.$d->lokasi_event .'">'. $d->lokasi_event; ?></a></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center align-items-center mt-md-3">
      <div class="col-md-10">
        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#deskripsievent">Deskripsi Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tiket">Tiket</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#galeri">Galeri</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="col-md-12 tab-content mt-3 mt-md-2">
            <div id="deskripsievent" class="tab-pane active">
              <p class="text-justify" id="deskripsi"></p>
            </div>
                <div id="galeri" class="tab-pane fade">
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

            <div id="tiket" class="tab-pane fade">
              <div class="row">
                <div class="col-md-*">
                  <div class="row row-cols-1 row-cols-md-3">

                    @foreach($d->tikets as $t)
                    <div class="{{ count($d->tikets)  != '1' ? 'col' : 'col-md-5' }} mb-4">
                      <div class="card-overlay rounded hoverable" style="background-image: url('{{asset('template/img/portfolio/05-thumbnail.jpg')}}')">
                        <!--Card content-->
                        <div class="card-body mask rgba-black-strong">
                          <h4 id="jenis" class="card-title text-white font-weight-bold">{{ $t->nama_tiket }}</h4>
                          <p class="card-text text-white text-center">{{$t->stok_tiket}} Tiket<br>Rp.{{$t->harga_tiket}}</p><h3 class="text-white">

                            <div class="input-group number-spinner">
                              <span class="input-group-btn">
                                <button class="btn btn-sm btn-outline-white btn-minus hoverable text-white" data-target="{{ $t->nama_tiket }}" id="decrease" value="Decrease Value"><span class="glyphicon glyphicon-minus">-</span></button>{{-- tombol minus --}}
                              </span>
                              <input type="text" class="form-control text-center rounded" name="{{ $t->nama_tiket }}" id="number" onKeyPress="return onlyNumbers(event);" value="0" readonly>
                              <span class="input-group-btn">
                                <button class="btn btn-sm btn-outline-white btn-plus hoverable text-white" data-target="{{ $t->nama_tiket }}" id="increase" value="Increase Value"><span class="glyphicon glyphicon-plus">+</span></button>{{-- tombol minus --}}
                              </span>
                            </div>
                          </div><input type="hidden" name="id{{ $t->nama_tiket }}" id="id{{ $t->nama_tiket }}" value={{$t->id_tiket}}>
                          <input type="hidden" name="harga{{ $t->nama_tiket }}" id="harga{{ $t->nama_tiket }}" value={{$t->harga_tiket}}>
                          <input type="hidden" name="nama_tiket{{ $t->nama_tiket }}" id="nama_tiket{{ $t->nama_tiket }}" value={{ $t->nama_tiket }}>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>

@if (Auth::check())
        <form action="{{ route('transaksi.store') }}" method="POST" id="pesan_kirim" enctype="multipart/form-data">
        {{ csrf_field() }}
                  <div class="row border pt-3 pb-4 pb-md-0 text-center text-md-left">
                    <div class="col-6 col-xs-12 col-sm-4 col-md-3">
                    <p>
                      <img class="img img-responsive full-width mr-2 mb-2" src="{{ asset('template/img/icon/ticket.png') }}" alt="Card image cap" style="height:50px;">
                      <input type="hidden" value="<?php echo mt_rand(113458, 999999); ?>" readonly name="id_transaksi" id="id_transaksi" class="text-right inputs" size="7">
                      <input type="hidden" value="{{ $d->id_event }}" readonly name="id_event" id="id_event" class="text-right inputs" size="7">
                      <input type="text" size="6" value="" name="newopt" id="newopt" class="font-weight-bold inputs" readonly/>
                    </p>
                    </div>
                    <div class="col-6 col-xs-12 col-sm-4 col-md-6"><p>
                      <input type="hidden" size="2" value="0" readonly name="i" id="i" class="font-weight-bold ml-2 mr-n3 inputs">
                      Jumlah<input type="text" size="2" value="0" readonly name="n" id="n" class="font-weight-bold ml-2 mr-n3 inputs">
                      Harga: Rp. <input type="text" size="6" value="0" name="l" id="l" class="font-weight-bold inputs" readonly/>

                    </div>
                  </div>

                  <div class="row border pt-3 pb-4 pb-md-0 text-center">
                    <div class="col-12 col-xs-12 col-sm-4 col-md-12">
                      <div id="someId"></div>
                      <button type="submit" class="submit text-right btn btn-warning">Lanjutkan</button>
                    </div>
                  </div>
                  @else
                  <div class="row border pt-3 pb-4 pb-md-0 text-center">
                    <div class="col-12 col-xs-12 col-sm-4 col-md-12">
                      <p>Anda Harus masuk untuk melanjutkan proses</p>
                      <a href="{{ route('login') }}" class="btn btn-warning text-center">Masuk</a>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>


@endsection


@section('footer')
    @include('user.templates.footer')
@endsection

@section('optional-script')
<script>
$('.submit').hide();
$('.btn-plus').on('click', function(){
    $('.submit').show();
});



//untuk membuat tombol tambah
  $('.btn-plus').on('click', function(){
    input = $(this).data('target');
    var value = parseInt($('input[name='+input+']').val(), 10);
    value = isNaN(value) ? 0 : value;
    if($('input[name='+input+']').val() >=5){
        alert("hanya Bisa 5")
        value = 5;
    }
    else {
        value++;

    }
    $('input[name='+input+']').val(value);
    var nama = $('input[name='+input+']').attr('name');
    var harga = parseInt(document.getElementById('harga'+input).value);
    var idt = parseInt(document.getElementById('id'+input).value);

    document.getElementById('newopt').value = nama;
    document.getElementById('l').value = harga*value;
    document.getElementById('n').value = value;
    document.getElementById('i').value = idt;


  })

//untuk membuat tombol kurang
  $('.btn-minus').on('click', function(){
    input = $(this).data('target');
    var value = parseInt($('input[name='+input+']').val(), 10);
    value = isNaN(value) ? 0 : value;
    if($('input[name='+input+']').val() <=0){
        value = 0;
    }
    else {
        value--;
    }
    $('input[name='+input+']').val(value);
    var nama = $('input[name='+input+']').attr('name');
    var harga = parseInt(document.getElementById('harga'+input).value);
    var idt = parseInt(document.getElementById('id'+input).value);

    document.getElementById('newopt').value = nama;
    document.getElementById('l').value = harga*value;
    document.getElementById('n').value = value;
    document.getElementById('i').value = idt;


  })



$(document).ready(function(){


$(function () {
                $('.btn-plus').click(function () {
                    var newopt = $('#newopt').val();
                    var harga = parseInt(document.getElementById('harga'+input).value);
                    var k = $('#i').val();

                    if (newopt == '') {
                        if (j == 0){
                        alert('pembelian tidak boleh kosong!');
                        return;}
                    }



                    //<input type="checkbox" id="myCheck"  onclick="myFunction()">
                    //add the new option to the select box

                    $('#someId').append(
                        '<div class="row bg-light">\
                            <div class="col-3 col-md-2">\
                                <input type="hidden" name="id_tiket[]" value="'+k+'" class="inputs" id="id_'+newopt+'">\
                                <input type="text" name="nama_tiket[]" value="'+newopt+'" class="inputs" id="tiket_'+newopt+'">\
                            </div>\
                            <div class="col-3 col-md-1">\
                              <input type="text" name="jumlah_tiket[]" class="hitung inputs"  id="jumlah_'+newopt+'" onKeyPress="return onlyNumbers(event);" value="1" placeholder="Jumlah" readonly>\
                            </div>\
                            <div class="col-3 col-md-1">\
                              <input type="text" name="harga_tiket[]" size="5" value="'+harga+'" class="text-right hitung inputs"  id="harga_'+newopt+'" placeholder="Rp." readonly>\
                            </div>\
                            <div class="col-1 col-md-1">\
                              <i class="far fa-trash-alt delete text-danger" aria-hidden="true"></i>\
                            </div>\
                          </div>'

                    );


                });
            });

            $(document).on('click','.delete',function() {
     $(this).closest("div.row").remove();
});
});
</script>



@endsection
