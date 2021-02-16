@extends('admin.bagian')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid mt-4">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Konfirmasi Pembayaran</h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export Data</a>
            </div>

            <!-- Content Row -->
            <div class="row mb-3">
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort By
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Terbaru</a>
                    <a class="dropdown-item" href="#">Event Terdekat</a>
                    <a class="dropdown-item" href="#">Belum Bayar</a>
                    </div>
                </div>
            </div>
            @foreach($data as $e)
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Id Transaksi</div>
                        <div class="h5 font-weight-bold text-gray-800">{{ $e->id_transaksi }}</div>
                      </div>
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User</div>
                        <div class="h5 font-weight-bold text-gray-800">{{ $e->user->username }}</div>
                      </div>
                      <div class="col-md-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Event</div>
                        <div class="h5 font-weight-bold text-gray-800">{{ $e->event->nama_event }}</div>
                      </div>
                      <div class="col-md-3">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jenis Tiket</div>
                        <div class="h6 small font-weight-bold text-gray-800 pr-5">@foreach($e->tiketbeli as $t)
                               {{ $t->tiket->nama_tiket }} = {{$t->jumlah_beli}} |
                            @endforeach</div>
                      </div>
                      <div class="col-md-1">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Via</div>
                        <div class="h5 font-weight-bold text-gray-800">{{ $e->metode_pembayaran }}</div>
                      </div>
                      <div class="col-md-1">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah</div>
                        <div class="h5 font-weight-bold text-gray-800">{{ $e->jumlah_tiket }}</div>
                      </div>
                      <div class="col-md-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total</div>
                        <div class="h5 font-weight-bold text-gray-800">Rp. {{ number_format($e->total,0,',','.')}}</div>
                      </div>
                      <div class="col-md-1">
                     @if ($e->status_transaksi == '1')
                        <img class="ml-5 ml-md-0" src="{{asset('template/gambar/sudah-bayar.png')}}" width="100px">
                      @else
                        <a href="#" class="btn btn-danger pembayaran" onclick="pembayaran({{$e->id_transaksi}})" data-id="{{$e->id_transaksi}}"><i class="fas fa-check"></i></a>
                      @endif

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach



          </div>
          <!-- /.container-fluid -->
@endsection

@section('optional-script')
<script>
  $('#myDropdown').on('show.bs.dropdown', function () {
    // do something…

  })

  function pembayaran(id_transaksi) {
        swal({
            title: "Yakin?",
            text: "Pastikan User sudah Transfer!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                var status_transaksi = 1;
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: 'changeStatusTransaksi',
                    data: {'status_transaksi': status_transaksi, 'id_transaksi': id_transaksi},
                    success: function(data){
                    console.log(data.success);
                    console.log(status_transaksi);
                    console.log(id_transaksi);
                    }
                });

            } else {
                e.dismiss;
            }
        }, function (dismiss) {
            return false;
        })
    }






</script>
@endsection
