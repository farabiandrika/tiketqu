<div class="col-md-3 col-sm-6 my-3">
    <div class="card" style="height:510px;">
        <!-- Card image -->
        <div class="view overlay">
        <img src="{{ asset('storage/event/banner.jpg') }}" class="card-img-top " alt="tiket1" data-toggle="modal" data-target="#onphpidFoto">
        </div>
        <!-- Card content -->
        <div class="card-body">
        <!-- Social shares button -->
        <!-- Title -->
        <h5 class="card-title">MIPA AWARD</h5>
        <hr>
        <!-- Text -->
        <p class="card-text">
            <table>
            <tr>
                <td class="text-left">Status</td>
                <td class="px-2">:</td>
                <td class="text-left text-success"><i class="fas fa-check mr-2"></i>Sudah Bayar</td>
            </tr>
            <tr>
                <td class="text-left">Tanggal Beli</td>
                <td class="px-2">:</td>
                <td class="text-left"></i>23 April 2020</td>
            </tr>
            <tr>
                <td class="text-left">Jumlah Tiket</td>
                <td class="px-2">:</td>
                <td class="text-left">3</td>
            </tr>
            <tr>
                <td class="text-left">Total</td>
                <td class="px-2">:</td>
                <td class="text-left">Rp. 50345</td>
            </tr>
        </table>
        <hr/>

        <table>
            <tr>
                <td class="text-left">Tanggal Event</td>
                <td class="px-2">:</td>
                <td class="text-left"></i>30 April 2020</td>
            </tr>
            <tr>
                <td class="text-left">Waktu Event</td>
                <td class="px-2">:</td>
                <td class="text-left"></i>08.00 WIB</td>
            </tr>
            <tr>
                <td class="text-left">Lokasi</td>
                <td class="px-2">:</td>
                <td class="text-left">Hotel Pangeran Pekanbaru</td>
            </tr>
        </table>
        </p>
        <a class="text-center text-danger mr-2" data-toggle = "modal" data-target = "#batal"><i class="fas fa-close mr-2"></i>Batal</a>
        <a class="text-center text-dark ml-2" data-toggle = "modal" data-target = "#detail"><i class="fas fa-eye mr-2"></i>Detail</a>
        </div>
    </div>
    {{-- --bagian card status sudah bayar --}}

<!-- Modal detail status sudah bayar-->
    <div class= "modal fade" id= "detail" tabindex = "-1" role= "dialog" aria-labelledby = "detail" aria-hidden ="true">
      <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class= "modal-content">
          <div class= "modal-header">
            <h5 class= "modal-title" id= "exampleModalLabel">Detail Transaksi</h5>
            <button type="button" class= "close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class = "modal-body text-center">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-responsive{-sm|-md|-lg|-xl}">
                    <tr>
                        <th colspan="4" class="text-left">ID Transaksi<input type="text" value="<?php echo mt_rand(113458, 999999); ?>" readonly name="id_transaksi" id="id_transaksi" class="text-right inputs" size="7">
                        <input type="hidden" value="1" readonly name="id_tiket" id="id_tiket" class="text-left inputs">
                        <input type="hidden" value="{{ Auth::user()->id }}" readonly name="id_user" id="id_user" class="text-left inputs">
                        <input type="hidden" value="{{ Auth::user()->nama }}" readonly name="nama_user" id="nama_user" class="text-left inputs">
                        </th>
                    </tr>
                    <tr>
                        <th width="50px">
                        <img class="card-img-top img img-responsive full-width" src="{{ asset('storage/event/banner.jpg') }}" alt="Card image cap" >
                        </th>
                        <th colspan=3><input type="text" value="MIPA AWARD 2020" readonly name="nama_tiket" id="nama_tiket" class="text-left inputs"></th>
                    </tr>
                    <tr>
                        <th class="text-left"><b>Tiket yang dipilih</b></th>
                        <th class="text-center"><b>Jumlah</b></th>
                        <th width="2px"></th>
                        <th class="text-right text-md-center"><b>Harga</b></th>
                    </tr>
                    <tr>
                        <td><input type="text" value="Reguler" readonly name="jenis_tiket" id="jenis_tiket" class="text-left inputs" size="11"></td>
                        <td><input type="text" value="0" readonly name="jumlah" size="3" id="jumlah" class="text-right inputs"></td>
                        <td class="mx-n5">Rp.</td>
                        <td><input type="text" value="0" readonly name="harga" size="5" id="harga" class="text-right inputs px-n3"></td>
                    </tr>
                    <tr>
                        <td class="text-left">Nomor Verifikasi</td>
                        <td></td>
                        <td class="mx-n2">Rp.</td>
                        <td><input type="text"value="<?php echo mt_rand(101, 999); ?>" size="5" readonly name="nover" id="nover" class="text-right inputs px-n3"></td>
                    </tr>
                    <tr>
                        <td class="text-left">Biaya Admin</td>
                        <td></td>
                        <td class="mx-n2">Rp.</td>
                        <td><input type="text" value="0" size="5" readonly name="admin" id="admin" class="text-right inputs px-n3"></td>
                    </tr>
                    <tr class="bg-light">
                        <td class="font-weight-bold text-dark text-left">Total Pembayaran</td>
                        <td></td>
                        <td class="mx-n2">Rp.</td>
                        <td><input type="text" class="inputs text-warning text-right font-weight-bold px-n3" name="total_jumlah" id="total_jumlah" size="5" value="0" readonly></td>
                    </tr>
                </table>
                </div>
                <div class="col-md-6">
                    <div class="card border-light my-3">
                    <div class="card-header"><h6>Detail Pembeli</h6></div>
                    <div class="card-body">
                        {{-- -@foreach --}}
                        <h6 class="card-title text-left text-warning">Pembeli 1 - Reguler</h6>
                        <p class="card-text text-left">Muhammad Rodhian Syabri - m.rodhiansabri@gmail.com</p>
                        <hr/>
                         {{-- -@foreach --}}
                    </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class= "btn btn-light" data-dismiss= "modal">kembali</button>
          </div>
        </div>
      </div>
    </div>
<!-- Modal detail status sudah bayar-->
</div>
