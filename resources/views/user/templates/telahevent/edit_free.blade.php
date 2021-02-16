<div class="row">

    @foreach ($free as $f)
        <div class="col-md-3 col-sm-6">
            <div class="card shadow mb-3 bg-white rounde">
                <img src="{{ asset('storage/event/'.$f->banner_event.'') }}"  id="zoom"  class="card-img-top">
                    <div class="card-body">
                        <?php $namaevent = strlen($f->nama_event);
                        if ($namaevent > 14) {
                            $nevent = substr($f->nama_event, 0, 14).'...';
                        } else {
                            $nevent = $f->nama_event;
                        } ?>
                        <h5 class="card-title text-center" data-toggle="tooltip" data-placement="top" title="{{$f->nama_event}}"><?= $nevent; ?>
                        </h5>
                        <p class="text-warning">{{$f->kategori_event}}</p>
                        <div class="card-text">
                            <p>
                            <table>
                                <tr>
                                    <td><img src="{{ asset('template/img/icon/calendar.png') }}" width="14px"></td>
                                    <td class="mr-5 px-2">{{date('d F Y', strtotime($f->waktu_mulai_event))}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('template/img/icon/clock.png') }}" width="14px"></td>
                                    <td class="mr-5 px-2">{{date('G:i', strtotime($f->waktu_mulai_event))}} WIB</<td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('template/img/icon/pin.png') }}" width="14px"></td>
                                    <td class="mr-5 px-2">
                                        <?php $lokasi = explode(",",$f->lokasi_event);
                                        $lokasifix = $lokasi[0];
                                        $hitunglokasi = strlen($lokasifix);
                                        if ($hitunglokasi > 19) {
                                            $hasillokasi = substr($lokasifix, 0, 17).'...';
                                        }
                                        else {
                                            $hasillokasi = $lokasifix;
                                        }

                                        ?>
                                        <a data-toggle="tooltip" href="https://maps.google.com/?q=<?= $lokasifix .'" target="_blank" title="'.$lokasifix.'">'. $hasillokasi; ?></a></<td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('template/img/icon/ticket.png') }}" width="14px"></td>
                                    <td class="mr-5 px-2">230 Tiket tersedia</<td>
                                </tr>
                            </table>
                            </p>
                        </div>
                        <div class="row text-center justify-content-center align-items-center">
                            <a class="text-center text-danger mr-2" data-toggle = "modal" data-target = "#batal"><i class="fas fa-close mr-2"></i>Batal</a>
                            <a href="{{url('/edit-eventku/'.$f->id_event) }}" class="text-center text-dark ml-2" ><i class="fas fa-pencil-square-o mr-2"></i>Edit</a>
                        </div>
                    </div>
            </div>
        </div>
@endforeach



</div>
<div class="row w-100 justiy-align-center mt-3">
    <div class="col-md-12 text-center">{{ $free->links() }}</div>
</div>
