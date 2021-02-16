@foreach ($sudah_bayar as $s)

<div class="col-md-3 col-sm-6 my-3">
    <div class="card" style="height:570px;">
        <!-- Card image -->
        <div class="view overlay">
        <img src="{{ asset('storage/event/'.$s->event->banner_event.'') }}" class="card-img-top " alt="tiket1" data-toggle="modal" data-target="#onphpidFoto">
        </div>
        <!-- Card content -->
        <div class="card-body">
      <!-- Title -->
          <?php $namaevent = strlen($s->event->nama_event);
            if ($namaevent > 14) {
                $nevent = substr($s->event->nama_event, 0, 14).'...';
            } else {
                $nevent = $s->event->nama_event;
            } ?>
            <h5 class="card-title text-center" data-toggle="tooltip" data-placement="top" title="{{$s->event->nama_event}}"><?= $nevent; ?>
            </h5>
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
                <td class="text-left"></i>{{ date("d F Y", strtotime($s->updated_at )) }}</td>
            </tr>
            <tr>
                <td class="text-left">Jumlah Tiket</td>
                <td class="px-2">:</td>
                <td class="text-left">{{ $s->jumlah_tiket}}</td>
            </tr>
            <tr>
                <td class="text-left">Total</td>
                <td class="px-2">:</td>
                <td class="text-left">Rp. {{ number_format($s->total,0,',','.')}}</td>
            </tr>
        </table>
        <hr/>

        <table>
            <tr>
                <td class="text-left">Tanggal Event</td>
                <td class="px-2">:</td>
                <td class="text-left"></i>{{date('d F Y', strtotime($s->event->waktu_mulai_event))}}</td>
            </tr>
            <tr>
                <td class="text-left">Waktu Event</td>
                <td class="px-2">:</td>
                <td class="text-left"></i>{{date('G:i', strtotime($s->event->waktu_mulai_event))}} WIB</td>
            </tr>
            <tr>
                <td class="text-left">Lokasi</td>
                <td class="px-2">:</td>
                <td class="text-left">
                    <?php $lokasi = explode(",",$s->event->lokasi_event);
                        $lokasifix = $lokasi[0];
                        $hitunglokasi = strlen($lokasifix);
                        if ($hitunglokasi > 19) {
                            $hasillokasi = substr($lokasifix, 0, 17).'...';
                        }
                        else {
                            $hasillokasi = $lokasifix;
                        }

                        ?>
                        <a class="text-dark" data-toggle="tooltip" href="https://maps.google.com/?q=<?= $lokasifix .'" target="_blank" title="'.$lokasifix.'">'. $hasillokasi; ?></a></td>
            </tr>
        </table>
        </p>
        <a class="text-center text-dark ml-2" data-toggle = "modal" data-target = "#detail{{$s->id_transaksi}}"><i class="fas fa-eye mr-2"></i>Detail</a>
        </div>
    </div>
    {{-- --bagian card status sudah bayar --}}

<!-- Modal detail status sudah bayar-->
    <div class= "modal fade" id= "detail{{$s->id_transaksi}}" tabindex = "-1" role= "dialog" aria-labelledby = "detail" aria-hidden ="true">
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
                        <th colspan="4" class="text-left">ID Transaksi : {{ $s->id_transaksi}}
                        </th>
                    </tr>
                    <tr>
                        <th width="50px">
                        <img class="card-img-top img img-responsive full-width" src="{{ asset('storage/event/'.$s->event->banner_event.'') }}" alt="Card image cap" >
                        </th>
                        <th colspan=3>{{ $s->event->nama_event }}</th>
                    </tr>
                    <tr>
                        <th class="text-left"><b>Tiket yang dipilih</b></th>
                        <th class="text-center"><b>Jumlah</b></th>
                        <th width="2px"></th>
                        <th class="text-right text-md-center"><b>Harga</b></th>
                    </tr>
                    @foreach ($s->tiketbeli as $pm)
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
                        <td><input type="text"value="{{ $s->nover }}" size="5" readonly name="nover" id="nover" class="text-right inputs px-n3"></td>
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
                        <td><input type="text" class=" h5 inputs text-warning text-right font-weight-bold px-n3" name="total_jumlah" id="total_jumlah" size="5" value="{{ number_format($s->total,0,',','.')}}" readonly></td>
                    </tr>
                </table>
                </div>
                <div class="col-md-6">
                    <div class="card border-light my-3">
                    <div class="card-header"><h6>Detail Pembeli</h6></div>
                    @foreach($s->pembeli as $dm)
                    <div class="card-body">
                        <h6 class="card-title text-left text-warning">Pembeli - {{ $dm->tiket->nama_tiket }}</h6>
                        <p class="card-text text-left">{{ $dm->nama_pembeli }} - {{ $dm->email_pembeli }}<a href="{{ $dm->email_pembeli }}"><i class="ml-2 fas fa-envelope text-muted"></i></a></p>
                        <div class="text-center"><img src="{{asset ('barcode/'.$dm->qrcode)}}" width="150px"></div>
                        <hr/>
                    </div>
                    @endforeach
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
@endforeach
