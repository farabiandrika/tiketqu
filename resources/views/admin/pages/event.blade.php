@extends('admin.bagian')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid mt-4">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Manajemen Event</h1>
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
                    <a class="dropdown-item" href="#">Belum Acc</a>
                    </div>
                </div>
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-outline-white border-0 small" placeholder="Cari Event" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
            </div>

            @foreach($data as $e)
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="card {{ $e->status_event == '2' ? 'border-left-secondary bg-light' : 'border-left-primary'}} shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-md-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">Nama Event</div>
                        <div class="h5 font-weight-bold text-gray-800">{{ $e->nama_event }}</div>
                      </div>
                      <div class="col-md-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">Penyelenggara</div>
                        <div class="h5 font-weight-bold text-gray-800">
                            {{$e->penyelenggara->nama_penyelenggara}}
                        </div>
                      </div>
                      <!-- <div class="col-sm-2 col-xs-12 pr-4">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tiket</div>
                        <div class="h6 small font-weight-bold text-gray-800">
                            @foreach($e->tikets as $t)
                                {{ $t->nama_tiket }} = {{$t->harga_tiket}} <br>
                            @endforeach
                        </div>
                      </div> -->
                      <div class="col-sm-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">Waktu</div>
                        <div class="h5 small font-weight-bold text-gray-800">13 Januari 2020<br>08:00 WIB</div>
                      </div>
                      <div class="col-sm-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">Lokasi</div>
                        <div class="h5 small font-weight-bold text-gray-800">{{$e->lokasi_event}}</div>
                      </div>
                      <div class="col-sm-1">
                            <div class="text-xs font-weight-bold text-primary text-uppercase">Status</div>
                            <div class="custom-switch custom-control">
                                <input id="{{$e->id_event}}" data-id="{{$e->id_event}}" class="toggle-class custom-control-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $e->status_event ? 'checked' : '' }} {{ $e->status_event == '2' ? 'disabled' : ''}} >
                                <label class="custom-control-label" for="{{$e->id_event}}"></label>
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="row">
                              <div class="col-md-4">
                                <a href="#" class="btn btn-danger edit-modal" data-toggle='modal' data-status="{{$e->status_event}}" data-title="{{$e->nama_event}}" data-id="{{$e->id_event}}"><i class="{{ $e->status_event == '2' ? 'fas fa-info': 'fas fa-edit' }}"></i></a>
                              </div>
                              <div class="col-md-4">

                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          <!-- /.container-fluid -->

          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" action="/admin/updateevent" method="POST" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <!-- Penyelenggara -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center h4 font-weight-bold">PENYELENGGARA</div>
                                        <div class="form-group">
                                            <label class="control-label small" for="title">Nama Penyelenggara</label>
                                            <input type="name" class="form-control" id="np" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label small" for="title">Telp Penyelenggara</label>
                                            <input type="name" class="form-control" id="notelpp" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label small" for="title">Rek Penyelenggara</label>
                                            <input type="name" class="form-control" id="norekp" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label small" for="title">Bank Penyelenggara</label>
                                            <input type="name" class="form-control" id="pbank" disabled>
                                        </div>
                                        <!-- Logo Penyelenggara
                                        <div class="form-group">
                                            <label class="control-label" for="title">Nama Penyelenggara</label>
                                            <input type="name" class="form-control" id="np">
                                        </div>
                                    -->
                                    </div>
                                </div>
                                <!-- End Of Penyelenggara -->

                                <!-- User -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center h4 font-weight-bold">USER</div>
                                        <div class="form-group">
                                            <label class="control-label small" for="title">No. Identitas</label>
                                            <input type="name" class="form-control" id="unoi" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label small" for="title">Nama User</label>
                                            <input type="name" class="form-control" id="unama" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label small" for="title">Alamat Identitas</label>
                                            <input type="name" class="form-control" id="ualamat" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label small" for="title">Email</label>
                                            <input type="name" class="form-control" id="uemail" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Of User -->
                            </div>

                            <!-- Event -->
                            <div class="col-md-7">
                                <div class="text-center h4 font-weight-bold">EVENT</div>
                                <div class="form-group">
                                    <label class="control-label small" for="title">Nama Event</label>
                                    <input type="name" name="nama_event" class="form-control" id="enama">
                                    <input type="hidden" name="id_event" class="form-control" id="id_event">
                                </div>
                                <div class="form-group">
                                    <label class="control-label small" for="title">Deskripsi Event</label>
                                    <input type="name" name="deskripsi_event" class="form-control" id="edeskripsi">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label small" for="title">Waktu Mulai</label>
                                            <input type="name" class="form-control" name="waktu_mulai_event" id="ewaktumulai">
                                            <script>
                                                $('#ewaktumulai').datetimepicker({ format: 'yyyy-mm-dd HH:MM', uiLibrary: 'bootstrap', modal: true, header: true, footer: true});
                                            </script>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label small" for="title">Waktu Berakhir</label>
                                            <input type="name" name="waktu_berakhir_event" class="form-control" id="ewaktuberakhir">
                                            <script>
                                                $('#ewaktuberakhir').datetimepicker({ format: 'yyyy-mm-dd HH:MM', uiLibrary: 'bootstrap', modal: true, header: true, footer: true});
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="tiket">

                                </div>
                                <div class="form-group">
                                    <label class="control-label small" for="title">Lokasi</label>
                                    <input type="text" id="address-input" name="lokasi_event" class="form-control map-input">
                                    <input type="hidden" name="lokasi_latitude" id="address-latitude" value="0" />
                                    <input type="hidden" name="lokasi_longitude" id="address-longitude" value="0" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label small" for="title">Kategori Event</label>
                                    <select class="form-control" id="kategori_event" name="kategori_event">

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label small" for="title">Jenis Promosi</label>
                                    <select class="form-control" id="ejenispromosi" name="jenis_promosi">

                                    </select>
                                </div>
                            </div>
                            <!-- End of Event -->
                        </div>
                    <div class="modal-footer" id="modal-footer">


                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Modal -->
            </form>
@endsection

@section('optional-script')
<script type="text/javascript">
    // Edit Data (Modal and function edit data)
    $(document).on('click', '.edit-modal', function() {
        var status = $(this).data('status');
        var eventId = $(this).data('id');
        var kategori = 'seminar';
        var jenispromo = '0';
        $.ajax({
            url : "{{url('getevent')}}",
            type : "GET",
            data : {id:eventId},
            dataType : 'json',
            success : function(data) {
                console.log(data);
                    $('#footer_action_button').html('');
                    $('#modal-footer').html('');
                    $('#id_event').val(eventId);
                    $('#modal-footer').html('');
                    $('#modal-footer').append(
                        '<button type="submit" class="btn btn-primary">Simpan</button>\
                        <button type="button" class="btn btn-danger" data-dismiss="modal">\
                            <span class="glyphicon glyphicon-remove"></span> Close\
                        </button>');
                    $('.modal-title').text('Edit');
                    $('#kategori_event').html('');
                    $('#kategori_event').append(
                        '<option value="seminar"'+(data.kategori_event == kategori ? "selected" : "")+'>Seminar</option>\
                        <option value="workshop"'+(data.kategori_event != kategori ? "selected" : "")+'>Workshop</option>');
                    $('#ejenispromosi').html('');
                    $('#ejenispromosi').append(
                        '<option value="0"'+(data.jenis_promosi == jenispromo ? "selected" : "")+'>Free</option>\
                        <option value="1"'+(data.jenis_promosi != jenispromo ? "selected" : "")+'>Premium</option>');
                    $('#tiket').html('');
                    $.each(data.tikets, function(i, tiket) {
                        $('#tiket').append(
                            '<div class="row">\
                            <div class="col-md-3">\
                            <label class="control-label small" for="title">Nama Tiket</label>\
                            <input type="name" name="nama_tiket[]" class="form-control nt" value="' + tiket.nama_tiket +'">\
                            </div>\
                            <div class="col-md-3">\
                            <label class="control-label small" for="title">Deskripsi Tiket</label>\
                            <input type="name" name="deskripsi_tiket[]" class="form-control" value="'+tiket.deskripsi_tiket+'">\
                            </div>\
                            <div class="col-md-2">\
                            <label class="control-label small" for="title">Harga</label>\
                            <input type="name" name="harga_tiket[]" class="form-control" value="'+tiket.harga_tiket+'">\
                            </div>\
                            <div class="col-md-2">\
                            <label class="control-label small" for="title">Stok</label>\
                            <input type="name" name="stok_tiket[]" class="form-control" value="'+tiket.stok_tiket+'">\
                            <input type="hidden" name="satuan_tiket[]" value="'+tiket.satuan_tiket+'" class="form-control">\
                            </div>\
                            <div class="col-md-1 text-center mt-3 mt-md-4 pt-md-2">\
                            <button type="button" class="ml-n3 btn btn-sm btn-outline-danger deleteEvent" data-id="'+tiket.id_tiket+'"><i class="far fa-trash-alt delete" aria-hidden="true"></i></button>\
                            </div>\
                            <div class="col-md-1 text-center mt-3 mt-md-4 pt-md-2">\
                            <button type="button" class="ml-n3 btn btn-sm btn-outline-success tambah"><i class="fas fa-plus" aria-hidden="true"></i></button>\
                            </div>\
                            </div>'
                            );
                    });
                    $('.tambah').on('click', function (e) {
                        e.preventDefault();
                        //add the new option to the select box
                        $('#tiket').append(
                            '<div class="row">\
                            <div class="col-md-3">\
                            <label class="control-label small" for="title">Nama Tiket</label>\
                            <input type="name" name="nama_tiket_baru[]" class="form-control">\
                            </div>\
                            <div class="col-md-3">\
                            <label class="control-label small" for="title">Deskripsi Tiket</label>\
                            <input type="name" name="deskripsi_tiket_baru[]" class="form-control">\
                            </div>\
                            <div class="col-md-2">\
                            <label class="control-label small" for="title">Harga</label>\
                            <input type="name" name="harga_tiket_baru[]" class="form-control">\
                            </div>\
                            <div class="col-md-2">\
                            <label class="control-label small" for="title">Stok</label>\
                            <input type="name" name="stok_tiket_baru[]" class="form-control">\
                            <input type="hidden" name="satuan_tiket_baru[]" value="1" class="form-control">\
                            </div>\
                            <div class="col-md-1 text-center mt-3 mt-md-4 pt-md-2">\
                            <button class="ml-n3 btn btn-sm btn-outline-danger deleteEvent"><i class="far fa-trash-alt delete" aria-hidden="true"></i></button>\
                            </div>\
                            <div class="col-md-1 text-center mt-3 mt-md-4 pt-md-2">\
                            <button class="ml-n3 btn btn-sm btn-outline-success tambah"><i class="fas fa-plus" aria-hidden="true"></i></button>\
                            </div>\
                            </div>'
                        );
                    });
                $('.form-horizontal').show();
                $('#idp').val(data.penyelenggara.id_penyelenggara);
                $('#np').val(data.penyelenggara.nama_penyelenggara);
                $('#notelpp').val(data.penyelenggara.no_telp_penyelenggara);
                $('#norekp').val(data.penyelenggara.no_rek_penyelenggara);
                $('#pbank').val(data.penyelenggara.nama_bank_penyelenggara);
                $('#unoi').val(data.user.no_identitas);
                $('#unama').val(data.user.nama);
                $('#ualamat').val(data.user.alamat);
                $('#uemail').val(data.user.email);
                $('#enama').val(data.nama_event);
                $('#edeskripsi').val(data.deskripsi_event);
                $('#ewaktumulai').val(data.waktu_mulai_event);
                $('#ewaktuberakhir').val(data.waktu_berakhir_event);
                $('#address-input').val(data.lokasi_event);
                $('#myModal').modal('show');
            }
        });
});
</script>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status_event = $(this).prop('checked') == true ? 1 : 0;
        var id_event = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatusEvent',
            data: {'status_event': status_event, 'id_event': id_event},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })

$(document).on('click','.delete',function() {
    $(this).closest("div.row").remove();
});

$(document).on('click','.deleteEvent',function() {
    var id = $(this).data("id");
    var nt = $('.nt').length;
    if (nt > 1) {
        console.log(nt);
        $(this).closest("div.row").remove();
        $.ajax(
        {
            url: "tiket/delete",
            type: 'GET',
            dataType: "JSON",
            data: {
                "id": id
            },
            success: function ()
            {
                console.log("it Work");
            }
        })
    } else {
        console.log(nt);
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Jenis tiket harus ada minimal 1',
        })
    }
});

function eventBerlalu(id_event) {
        swal({
            title: "Yakin?",
            text: "Pastikan Event Sudah Selesai!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                var status_event = 2;
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeStatusEvent',
                    data: {'status_event': status_event, 'id_event': id_event},
                    success: function(data){
                    console.log(data.success);
                    console.log(status_event);
                    console.log(id_event);
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
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
<script src="{{asset('mdb/js/mapInput.js')}}"></script>
@endsection
