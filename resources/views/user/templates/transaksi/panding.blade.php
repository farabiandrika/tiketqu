
@foreach ($panding as $f)
<div class="col-md-3 col-sm-6 my-3">
  <div class="card" style="height:570px;">
    <!-- Card image -->
    <div class="view overlay">
      <img src="{{ asset('storage/event/'.$f->event->banner_event.'') }}" class="card-img-top " alt="tiket1" data-toggle="modal" data-target="#onphpidFoto">
    </div>
    <!-- Card content -->
    <div class="card-body">
      <!-- Title -->
          <?php $namaevent = strlen($f->event->nama_event);
            if ($namaevent > 14) {
                $nevent = substr($f->event->nama_event, 0, 14).'...';
            } else {
                $nevent = $f->event->nama_event;
            } ?>
            <h5 class="card-title text-center" data-toggle="tooltip" data-placement="top" title="{{$f->event->nama_event}}"><?= $nevent; ?>
            </h5>
        <hr>
        <!-- Text -->
        <p class="card-text">
          <table>
            <tr>
              <td class="text-left">Status</td>
              <td class="px-2">:</td>
              <td class="text-left text-warning"><i class="fas fa-clock mr-2"></i>Panding</td>
            </tr>
            <tr>
              <td class="text-left">Tanggal Beli</td>
              <td class="px-2">:</td>
              <td class="text-left"></i>{{ date("d F Y", strtotime($f->updated_at )) }}</td>
            </tr>
            <tr>
              <td class="text-left">Jumlah Tiket</td>
              <td class="px-2">:</td>
              <td class="text-left">{{ $f->jumlah_tiket}}</td>
            </tr>
            <tr>
              <td class="text-left">Total</td>
              <td class="px-2">:</td>
              <td class="font-weight-bold text-left">Rp. {{ number_format($f->total,0,',','.')}}</td>
            </tr>
          </table>
        <hr/>
          <p class="bg-#f9fbe7 lime lighten-5" style="border: 1.7px solid #f9fbc7">
            <?php
            $bank = $f->metode_pembayaran;
                $pilihan = $bank == 'BRI' ? 'BRI - ( 208701023703508 ) - AHMAD JULIAN' : ( $bank =='BRI Syariah' ? 'BRI Syariah - ( 1047465741 ) - MUHAMMAD RODHIAN SYABRI' : ($bank == 'BTN' ? 'BTN - ( 208701023703508 ) - MUHAMMAD FARABI ANDRIKA' : 'DANA - ( 082389444490 ) - RODHIAN') );
                echo $pilihan;
            ?>
          </p>
        </p>
        <p><i class="text-muted">Silahakan Melakukan Pembayaran, <i class="text-muted fas fa-clock"></i>&nbsp;tenggat 1x24 Jam</i></p>
        <a href="#" data-toggle = "modal" data-target = "#hapus" class="text-center text-danger mr-2"><i class="fas fa-close mr-2"></i>Batal</a>
        <a class="text-center text-dark ml-2" data-toggle = "modal" data-target = "#detailb"><i class="fas fa-eye mr-2"></i>Detail</a>
        </div>
    </div>
    {{-- --bagian card status panding --}}



    {{-- --bagian pilihan hapus tidak ya --}}
    <div class= "modal fade" id= "hapus" tabindex = "-1" role= "dialog" aria-labelledby = "hapus" aria-hidden ="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
        <div class= "modal-content">
          <div class= "modal-header">
            <h5 class= "modal-title" id= "exampleModalLabel">Peringatan</h5>
            <button type="button" class= "close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class = "modal-body text-center">
            <div class="row">
                <div class="col-md-12 text-center align-item-center justify-content-center p-3">
                    <h5>Batalkan Transaksi?</h5>
                    <br>
                    <img src="{{ asset('template/undraw/telah.svg') }}" alt="gambar" width="200px" class="p-4">
                    <br>
                    <a href="#" data-dismiss= "modal" class="btn btn-danger mr-2">Tidak</a>
                    <a href="{{url('/batal/'.$f->id_transaksi) }}" class="btn btn-primary mr-2">Iya</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- --bagian pilihan hapus tidak ya --}}




    <!-- Modal detail status panding-->
    <div class= "modal fade" id= "detailb" tabindex = "-1" role= "dialog" aria-labelledby = "detailb" aria-hidden ="true">
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
                        <th colspan="4" class="text-left">ID Transaksi : {{ $f->id_transaksi}}</th>
                    </tr>
                    <tr>
                        <th width="50px">
                        <img class="card-img-top img img-responsive full-width" src="{{ asset('storage/event/'.$f->event->banner_event.'') }}" alt="Card image cap" >
                        </th>
                        <th colspan=3>{{ $f->event->nama_event }}</th>
                    </tr>
                    <tr>
                        <th class="text-left"><b>Tiket yang dipilih</b></th>
                        <th class="text-center"><b>Jumlah</b></th>
                        <th width="2px"></th>
                        <th class="text-right text-md-center"><b>Harga</b></th>
                    </tr>
                        @foreach ($f->tiketbeli as $pm)
                    <tr>
                       <td class="text-left"><input type="text" value="{{ $pm->tiket->nama_tiket }}" readonly name="jenis_tiket" id="jenis_tiket" class="text-left inputs" size="11"></td>
                       <td><input type="text" value="{{ $pm->jumlah_beli }}" readonly name="jumlah" size="3" id="jumlah" class="text-right inputs"></td>
                       <td class="mx-n5">Rp.</td>
                       <td><input type="text" value="{{ $pm->harga }}" readonly name="harga" size="5" id="harga" class=" h6 text-right inputs px-n3"></td>
                  </tr>
                  @endforeach
                    <tr>
                        <td class="text-left">Nomor Verifikasi</td>
                        <td></td>
                        <td class="mx-n2">Rp.</td>
                        <td><input type="text"value="{{ $f->nover }}" size="5" readonly name="nover" id="nover" class="text-right inputs px-n3"></td>
                    </tr>
                    <tr>
                        <td class="text-left">Biaya Admin</td>
                        <td></td>
                        <td class="mx-n2">Rp.</td>
                        <td><input type="text" value="0" size="5" readonly name="admin" id="admin" class="text-right inputs px-n3"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-dark text-left">Total Pembayaran</td>
                        <td></td>
                        <td class="mx-n2">Rp.</td>
                        <td><input type="text" class=" h5 inputs text-warning text-right font-weight-bold px-n3" name="total_jumlah" id="total_jumlah" size="5" value="{{ number_format($f->total,0,',','.')}}" readonly></td>
                    </tr>
                </table>
                </div>
                <div class="col-md-6">
                    <div class="card border-light my-3">
                    <div class="card-header"><h6>Detail Pembeli</h6></div>
                    @foreach($f->pembeli as $dm)
                    <div class="card-body">
                        <h6 class="card-title text-left text-warning">Pembeli - {{ $dm->tiket->nama_tiket }}</h6>
                        <p class="card-text text-left">{{ $dm->nama_pembeli }} - {{ $dm->email_pembeli }}<a href="mailto:{{ $dm->email_pembeli }}"><i class="ml-2 fas fa-envelope text-muted"></i></a></p>
                        <hr/>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class= "btn btn-light" data-dismiss= "modal">Kembali</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal detail status panding-->
</div>
@endforeach

