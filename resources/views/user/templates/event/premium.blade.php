<div class="row">
        @foreach ($premium as $p)
            <div class="col-md-3 mb-3">
            <div class="card shadow mb-5 bg-white rounde">
                <img src="{{ asset('storage/event/'.$p->banner_event.'') }}" alt="Card image cap" id="zoom"  class="card-img-top">
                <div class="card-body">
                    <?php $namaevent = strlen($p->nama_event);
                        if ($namaevent > 14) {
                            $nevent = substr($p->nama_event, 0, 14).'...';
                        } else {
                            $nevent = $p->nama_event;
                        } ?>
                    <h5 class="card-title text-center" data-toggle="tooltip" data-placement="top" title="{{$p->nama_event}}"><?= $nevent; ?>
                    </h5>
                    <p class="text-warning">{{$p->kategori_event}}</p>
                    <div class="card-text">
                    <p>
                        <table align="center">
                        <tr>
                            <td><img src="{{ asset('template/img/icon/calendar.png') }}" width="14px"></td>
                            <td class="mr-5 px-2">{{date('d F Y', strtotime($p->waktu_mulai_event))}}</td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('template/img/icon/clock.png') }}" width="14px"></td>
                            <td class="mr-5 px-2">{{date('G:i', strtotime($p->waktu_mulai_event))}}</<td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('template/img/icon/pin.png') }}" width="14px"></td>
                            <td class="mr-5 px-2">
                                <?php $lokasi = explode(",",$p->lokasi_event);
                                $lokasifix = $lokasi[0];
                                $hitunglokasi = strlen($lokasifix);
                                if ( $hitunglokasi > 19) {
                                    $hasillokasi = substr($lokasifix, 0, 17);
                                }
                                else {
                                    $hasillokasi = $lokasifix;
                                }
                                ?>
                                <a data-toggle="tooltip" href="https://maps.google.com/?q=<?= $lokasifix .'" target="_blank" title="'.$lokasifix.'">'. $hasillokasi; ?>
                                </a></<td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('template/img/icon/ticket.png') }}" width="14px"></td>
                            <td class="mr-5 px-2">230 Tiket tersedia</<td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                            <a href="{{url('/detail/'.encrypt($p->id_event))}}" class="btn btn-warning">Selengkapnya</a>
                            </td>
                        </tr>
                        </table>
                    </p>
                    </div>
                </div>
            </div>
            </div>
    @endforeach
</div>
<div class="row w-100 justiy-align-center mt-3">
    <div class="col-md-12 text-center">{{ $premium->links() }}</div>
</div>
