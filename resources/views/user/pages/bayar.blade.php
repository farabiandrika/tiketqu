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

<div class="col mt-md-1 ml-n1">
  <div class="row">
    <div class="col-md-7">
      <div class="row">

        <div class="col-md-10">
          <img class="card-img-top mb-4" src="{{ asset('template/undraw/detail.svg') }}" alt="Card image cap" height="200px">
          <h5 class="text-center"><i class="fas fa-users mr-2"></i><b>Data Pembeli</b></h5>
          <br>
          <p>Untuk melanjutkan pembelian silahkan isi nama dan email pembeli!</p><br>

<form action="{{ route('transaksi.update') }}" method="POST" id="pesan_kirim" enctype="multipart/form-data">
        {{ csrf_field() }}
          @foreach ($data as $t)

            @foreach ($t->tiketbeli as $o)
            <?php
              $angka[]=$o->harga;
              $angkas[]=$o->jumlah_beli;


              $total = array_sum($angka);
              $jum = array_sum($angkas);
              $jums = count($angkas);

            ?>
            <h6 class="text-left text-warning">Pembeli</h6><br>
              <div class="row mt-n4">
                <div class="col-md-4">
                  <input type="text" class="form-control mb-3" name='namap[]' placeholder="Nama Pembeli" value="{{ old('namap') }}" required id="namap" autocomplete="namap" autofocus>
                </div>
                <div class="col-md-5">
                  <input type="email" class="form-control mb-3" name='email[]' placeholder="email" value="{{ old('namap') }}" required id="email" autofocus>
                </div>
                <div class="col-md-3">
                  <input type="text" id="jenist" class="form-control mb-3" name='nama_tiket[]' value="{{ $o->tiket->nama_tiket }}" readonly>
                  <input type="hidden" id="jenisss" class="form-control mb-3" name='tiket_id[]' value="{{ $o->tiket_id_tiket }}" readonly>
                  <input type="hidden" id="jenisss" class="form-control mb-3" name='tiketbeli_id[]' value="{{ $o->id_tiketbeli }}" readonly>
                  <input type="hidden" id="qrcode" class="form-control mb-3" name='qrcode[]' value="">
                </div>
              </div>
            <hr/>
            @endforeach
        </div>
      </div>
    </div>


    <div class="col-md-5">
      <span class="pembayaran">
        <div class="col-md-12 mt-5">
            <h5 class="text-center">Metode Pembayaran</h5>
            <table class="table text-center table-responsive{-sm|-md|-lg|-xl} table-borderless">
              <tr>
                <td>
                  <div class="custom-control custom-radio p-1">
                    <input class="p-1 btn" type="image" src="{{ asset('template/gambar/bri.png') }}" id="rBank1" onclick="tampilkan_warna('blue')" width="105px" height="40px" style="border-radius:10px;">
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio p-0">
                    <input class="p-1 btn" type="image" src="{{ asset('template/gambar/bris.png') }}" id="rBank2" onclick="tampilkan_warna('blue')" width="105px" height="40px" style="border-radius:10px;">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-radio p-0">
                    <input class="p-1 btn" type="image" src="{{ asset('template/gambar/btn.png') }}" id="rBank3" onclick="tampilkan_warna('blue')" width="105px" height="40px" style="border-radius:10px;">
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio p-0">
                    <input class="p-1 btn" type="image" src="{{ asset('template/gambar/danak.png') }}" id="rBank4" onclick="tampilkan_warna('blue')" width="105px" height="40px" style="border-radius:10px;">
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <p class="text-center" id="detil"><span class="text-danger">(*wajib) </span>Silahkan di klik untuk informasi pilihan metode pembayaran</p>
                </td>
              </tr>
            </table>
          </div>


          <div class="col-md-12">
            <h5 class="text-center my-3"><i class="fas fa-money mr-2"></i>Detail Pembayaran</h5>
                <table class="table table-responsive{-sm|-md|-lg|-xl}">
                  <tr>
                    <th class="text-left">
                      <input type="text" value="BRI" size="8" readonly name="metode_pembayaran" id="metode_pembayaran" class="text-dark text-left inputs">
                    </th>
                    <th colspan="3" class="text-right">
                        ID Transaksi<input type="text" value="{{ $t->id_transaksi }}" readonly name="id_transaksi" id="id_transaksi" class="text-right inputs" size="7">
                        <input type="hidden" value="{{ Auth::user()->id }}" readonly name="id_user" id="id_user" class="text-left inputs">
                        <input type="hidden" value="{{ Auth::user()->nama }}" readonly name="nama_user" id="nama_user" class="text-left inputs">
                    </th>
                  </tr>
                  <tr>
                    <th colspan=4 class="text-left"><input type="text" value="{{ $t->event->nama_event}}" readonly name="nama_tiket" id="nama_tiket" class="text-left inputs"></th>
                  </tr>
                  <tr>
                    <th class="text-left"><b>Tiket yang dipilih</b></th>
                    <th class="text-center"><b>Jumlah</b></th>
                    <th width="2px"></th>
                    <th class="text-right text-md-center"><b>Harga</b></th>
                  </tr>

                @foreach ($t->tiketbeli as $po)
                  <tr>
                    <td class="text-left"><input type="text" value="{{ $po->tiket->nama_tiket }}" readonly name="jenis_tiket" id="jenis_tiket" class="text-left inputs" size="11"></td>
                    <td><input type="text" value="{{ $po->jumlah_beli }}" readonly name="jumlah" size="3" id="jumlah" class="text-right inputs"></td>
                    <td class="mx-n5">Rp.</td>
                    <td><input type="text" value="{{ $po->tiket->harga_tiket }}" readonly name="harga" size="5" id="harga" class=" h6 text-right inputs px-n3"></td>
                  </tr>
                @endforeach

                  <tr>
                    <td class="text-left">Nomor Verifikasi</td>
                    <td></td>
                    <td class="mx-n2">Rp.</td>
                    <td><input type="text"value="<?php echo mt_rand(101, 999); ?>" size="5" readonly name="nover" id="nover" class="h6 text-right inputs px-n3"></td>
                  </tr>
                  <tr>
                    <td class="text-left">Biaya Admin</td>
                    <td></td>
                    <td class="mx-n2">Rp.</td>
                    <td><input type="text" value="0" size="5" readonly name="admin" id="admin" class="h6 text-right inputs px-n3"></td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold text-dark text-left">Total Pembayaran</td>
                    <td><input type="text" value="<?php echo $jum; ?>" readonly name="jum" size="3" id="jum" class="text-right inputs"/></td>
                    <td class="mx-n2">Rp.</td>
                    <td><input type="text" class="h5 inputs text-warning text-right font-weight-bold px-n3" name="total_jumlah" id="total_jumlah" size="5" value="<?php echo $total; ?>" readonly/></td>
                  </tr>
                </table>
                {{-- -untuk total --}}

                <div class="text-center">
                    <p><input type="checkbox" class="mr-2" name="persyaratan" id="persyaratan" value="" required>Terima peraturan &syarat berlaku</p>
                    <br>
                  <button type="submit" class="text-center btn btn-warning">Selanjutnya</button>
                </div>
            </div>
          </span>
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

  //total
  var nover = parseInt(document.getElementById('nover').value);
  var admin = parseInt(document.getElementById('admin').value);
  var total = parseInt(document.getElementById('total_jumlah').value);
  var total_harga = (nover + admin + total);
  document.getElementById('total_jumlah').value = total_harga;




//bagian pembayran untuk tampil detail bank harga dll
function tampilkan_warna(color){
  document.getElementById("rBank1").style.border=color;
  document.getElementById("rBank2").style.border=color;
  document.getElementById("rBank3").style.border=color;
  document.getElementById("rBank4").style.border=color;
}

$(document).ready(function(){


  $("#rBank1").click(function(){
     $("#metode_pembayaran").val("BRI");
     document.getElementById("detil").innerHTML = '<ol class="text-left"><li>Catat 15 digit nomor rekening & nominal pembayaran Anda </li><li>Gunakan ATM yang memiliki jaringan ATM Bersama/Prima/Alto untuk menyelesaikan pembayaran </li><li>Masukkan PIN Anda. </li><li>Di menu utama pilih ‘Others’ atau lainnya. Pilih ‘Transfer’</li><li>Masukkan kode bank BRI <b>‘002’</b> diikuti dengan 15 digit nomor rekening. </li><li>Masukkan nominal pembayaran lalu pilih ‘Correct/OK’. </li><li>Pastikan nominal pembayaran & nomor rekening sudah benar terisi, lalu pilih ‘Correct/OK’. </li><li>Pembayaran Tiket Event Anda berhasil, tunggu konfirmasi dari Admin.</li></ol>';
  });

  $("#rBank2").click(function(){
      $("#metode_pembayaran").val("BRI Syariah");
     document.getElementById("detil").innerHTML = '<ol class="text-left"><li>Catat 11 digit nomor rekening & nominal pembayaran Anda </li><li>Gunakan ATM yang memiliki jaringan ATM Bersama/Prima/Alto untuk menyelesaikan pembayaran </li><li>Masukkan PIN Anda. </li><li>Di menu utama pilih ‘Others’ atau lainnya. Pilih ‘Transfer’</li><li>Masukkan kode bank BRI Syariah <b>‘422’</b> diikuti dengan 11 digit nomor rekening. </li><li>Masukkan nominal pembayaran lalu pilih ‘Correct/OK’. </li><li>Pastikan nominal pembayaran & nomor rekening sudah benar terisi, lalu pilih ‘Correct/OK’. </li><li>Pembayaran Tiket Event Anda berhasil, tunggu konfirmasi dari Admin.</li></ol>';
  });

  $("#rBank3").click(function(){
      $("#metode_pembayaran").val("BTN");
    document.getElementById("detil").innerHTML = '<ol class="text-left"><li>Catat 11 digit nomor rekening & nominal pembayaran Anda </li><li>Gunakan ATM yang memiliki jaringan ATM Bersama/Prima/Alto untuk menyelesaikan pembayaran </li><li>Masukkan PIN Anda. </li><li>Di menu utama pilih ‘Others’ atau lainnya. Pilih ‘Transfer’</li><li>Masukkan kode bank BTN <b>‘200’</b> diikuti dengan 11 digit nomor rekening. </li><li>Masukkan nominal pembayaran lalu pilih ‘Correct/OK’. </li><li>Pastikan nominal pembayaran & nomor rekening sudah benar terisi, lalu pilih ‘Correct/OK’. </li><li>Pembayaran Tiket Event Anda berhasil, tunggu konfirmasi dari Admin.</li></ol>';
  });

  $("#rBank4").click(function(){
      $("#metode_pembayaran").val("DANA");
     document.getElementById("detil").innerHTML = '<ol class="text-left"><li>Dari halaman utama DANA, pilih menu <b>Send</b></li><li>klik bagian <b>send to Phone Number</b></li><li>klik tambah Send to Phone Number</li><li>input <b>nomor wa admin</b></li><li>Masukkan nominal total pembayaran</li><li>Pastikan nominal pembayaran & nomor rekening sudah benar terisi, lalu pilih ‘next/selanjutnya’. Kemudian Pilih <b>Send Dana</b></li><li>lalu pilih ‘Confirm’</li><li>Pembayaran Tiket Event Anda berhasil, tunggu konfirmasi dari Admin.</li></ol>';
  });
});


</script>
@endsection
