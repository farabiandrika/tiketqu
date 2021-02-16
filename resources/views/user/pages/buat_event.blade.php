@extends('user.bagian')
@section('header')

@include('user.templates.navbar')
@endsection

<!--content-->
@section('content')
<body style="background: url({{asset('template/img/seminar.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
<div class="container-fluid">
    <div class="row">
        <div class="col mb-n1 mt-n5 mt-md-0">
          <!-- Card -->
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title text-white font-weight-bold text-center h1">BUAT EVENT</h4>
            </div>
        </div>
          <!-- Card -->
    </div>

    <form method="post" action="{{ route('buat-event.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <!-- Penyelenggara-->
        <div class="col-md-3">
            <div class="card mb-3 z-depth-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nama Penyelenggara-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" class="form-control" placeholder="ex : Codora" name="nama_penyelenggara">
                                        <label for="nama_penyelenggara">Nama Penyelenggara</label>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Nama Penyelenggara-->

                            <!-- No. telp Penyelenggara-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" class="form-control" placeholder="ex : 085312341234" name="no_telp_penyelenggara">
                                        <label for="no_telp_penyelenggara">No. Telp</label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Of No. Telp Penyelenggara-->

                            <!-- No Rek Penyelenggara-->
                            <div class="row no-gutters">
                                <div class="col-md-7">
                                    <div class="md-form">
                                        <input type="text" class="form-control" placeholder="ex : No.Rek" name="no_rek_penyelenggara">
                                        <label for="no_rek_penyelenggara">No. Rek</label>
                                    </div>
                                </div>
                                <!-- Nama Bank Penyelenggara-->
                                <div class="col-md-5 mb-3 mt-md-4 mb-md-0">
                                    <select class="browser-default custom-select" name="nama_bank_penyelenggara">
                                        <option selected disabled>Bank</option>
                                        <option value="BNI">BNI</option>
                                        <option value="BTN">BTN</option>
                                    </select>
                                </div>
                                <!-- End of Penyelenggara-->
                            </div>
                            <!-- End of No. Rek Penyelenggara-->

                            <!-- Logo Penyelenggara-->
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center">
                                        <div class="btn btn-mdb-color btn-rounded float-left">
                                            <span>Logo Penyelenggara</span>
                                            <input type="file" name="logo_penyelenggara">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Logo Penyelenggara-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Penyelenggara-->

        <!-- Event-->
        <div class="col-md-9">
            <div class="card mb-3 z-depth-2">
                <div class="card-body">
                    <!-- Upload Banner-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col" style="background: url({{asset('template/img/buat-event.png')}}) no-repeat center center; -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover;  background-size: cover;">
                                <div class="row">
                                    <div class="col-md-12 mt-5 mb-n3">
                                        <h3 class="text-center text-white font-weight-bold">Unggah Gambar/Poster/Banner </h3>
                                        <h5 class="small text-center text-white">Direkomendasikan 724 x 300px dan tidak lebih dari 2mb</h5>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-2">
                                        <label for="files" class="btn z-depth-0"><i class="fas fa-plus-circle fa-4x text-white"></i></label>
                                    </div>
                                </div>
                                <input id="files" style="visibility:hidden;" name="banner_event" type="file">
                            </div>
                        </div>
                    </div>
                    <!-- End Of Upload Banner-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nama Event-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" placeholder="ex : Dapur Mum" class="form-control" name="nama_event">
                                        <label for="nama_event">Nama Event</label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Of Nama Event-->

                            <!-- Kategori Event -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="kategori_event">Kategori Event</label>
                                        <select class="form-control" id="kategori_event" name="kategori_event">
                                        <option value="" selected disabled>Pilih kategori event</option>
                                        <option value="seminar">Seminar</option>
                                        <option value="workshop">Workshop</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Of Kategori Event -->

                            <!-- Deskripsi Event-->
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="deskripsi_event">Deskripsi Event</label>
                                    <textarea class="form-control" id="deskripsi_event" name="deskripsi_event"></textarea>
                                </div>
                            </div>
                            <!-- End Of Deskripsi Event-->

                            <!-- Waktu Event-->
                            <div class="row">
                                <!-- Waktu Mulai -->
                                <div class="col-md-6 mt-n4 mt-md-0">
                                    <div class="md-form">
                                        <input type="text" id="waktu_mulai_event" placeholder="Waktu Mulai Event" class="form-control waktu-event" name="waktu_mulai_event">
                                        <script>
                                            $('#waktu_mulai_event').datetimepicker({ format: 'yyyy-mm-dd HH:MM', uiLibrary: 'bootstrap', modal: true, header: true, footer: true, iconsLibrary: 'fontawesome', icons: { rightIcon: '<span class="glyphicon glyphicon-chevron-down"></i>'}});
                                        </script>
                                    </div>
                                </div>
                                <!-- End Of Waktu Mulai -->

                                <!-- Waktu Berakhir -->
                                <div class="col-md-6 mt-n4 mt-md-0">
                                    <div class="md-form">
                                        <input type="text" id="waktu_berakhir_event" placeholder="Waktu Berakhir Event" class="form-control waktu-event" name="waktu_berakhir_event">
                                        <script>
                                            $('#waktu_berakhir_event').datetimepicker({ format: 'yyyy-mm-dd HH:MM', uiLibrary: 'bootstrap', modal: true, header: true, footer: true, iconsLibrary: 'fontawesome', icons: { rightIcon: '<span class="glyphicon glyphicon-chevron-down"></i>'}});
                                        </script>
                                    </div>
                                </div>
                                <!-- End of Waktu Berakhir -->
                        </div>
                        <!-- End Of Waktu Event -->

                        <!-- Jenis tiket -->
                        <div class="row">
                            <div class="col-md-10">
                                <div class="md-form">
                                    <input type="text" class="form-control-sm" id="newopt" placeholder="ex : Reguler"/><input class="btn btn-primary btn-sm z-depth-0" type="button" value="Tambah Tiket" id="addopt"/><input class="btn btn-primary btn-sm z-depth-0 bundleBtn" type="button" value="Bundle Tiket" id="bundletiket"/>
                                    <label for="newopt">Jenis Tiket</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-n3 mt-md-0" id="someId">

                            </div>
                        </div>
                        <!-- End of Jenis Tiket-->

                        <!-- Lokasi Event -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="lokasi_event">Lokasi Event</label>
                                    <input type="text" id="address-input" name="lokasi_event" class="form-control map-input" placeholder="ex : Codora, Wahana, Jalan Jendral Ahmad Yani, Tanah Datar, Pekanbaru City, Riau, Indonesia">
                                    <input type="hidden" name="lokasi_latitude" id="address-latitude" value="0" />
                                    <input type="hidden" name="lokasi_longitude" id="address-longitude" value="0" />
                                </div>
                            </div>
                        </div>
                        <!-- End Of Lokasi Event -->
                        <!-- Map -->
                        <div class="row mt-n4">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <div id="address-map-container" style="width:100%;height:400px; ">
                                        <div style="width: 100%; height: 100%" class="rounded border" id="address-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Of Map -->

                        <!-- Jenis Promosi -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="jenis_promosi">Jenis Promosi <a data-toggle="modal" data-target="#jenispromosimodal"><i class="far fa-question-circle text-info"></i></a></label>
                                    <select class="form-control" id="jenis_promosi" name="jenis_promosi">
                                        <option value="" selected disabled>Pilih jens promosi</option>
                                        <option value="0">Free</option>
                                        <option value="1">Premium</option>
                                    </select>

                                    <!-- Modal Jenis Promosi -->
                                    <div id="jenispromosimodal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modal Header</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Some text in the modal.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Of Modal Jenis Promosi-->

                                </div>
                            </div>
                        </div>
                        <!-- End Of Jenis Promosi -->

                        <!-- Button Submit -->
                        <div class="row justify-content-center mt-4 mb-2">
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- End Of Button Submit -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<body>
@endsection

@section('footer')
    @include('user.templates.wa')
    @include('user.templates.footer')
@endsection

@section('optional-script')
<script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>

<script>CKEDITOR.replace('deskripsi_event');</script>

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

  $('.btn-calendar').on('click',function(){
      input = $(this).data('target');

  })


function onlyNumbers(evt) {
    // Mendapatkan key code
    var charCode = (evt.which) ? evt.which : event.keyCode;

    // Validasi hanya tombol angka
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

 $(function () {
                $('#addopt').click(function () {
                    var newopt = $('#newopt').val();
                    if (newopt == '') {
                        alert('Please enter something!');
                        return;
                    }

                    //check if the option value is already in the select box
                    $('#someId input').each(function (index) {
                        if ($(this).val() == newopt) {
                            alert('Duplicate option, Please enter new!');
                        }
                    })

                    $('#someId').append(
                        '<div class="row md-form ml-2 mt-md-n4 mt-n1">\
                            <div class="col-md-3">\
                              <div class="custom-control custom-checkbox mb-2 mb-md-0">\
                                <input type="checkbox" name="nama_tiket[]" value="'+newopt+'" class="custom-control-input" id="tiket_'+newopt+'" checked>\
                                <label class="custom-control-label" for="tiket_'+newopt+'">'+newopt+'</label>\
                              </div>\
                            </div>\
                            <div class="col-md-3">\
                              <input type="text" name="deskripsi_tiket[]" class="form-control"  id="ket_'+newopt+'" placeholder="Keterangan">\
                            </div>\
                            <div class="col-md-2">\
                              <input type="text" name="harga_tiket[]" class="form-control"  id="tiket_'+newopt+'" placeholder="Rp.">\
                            </div>\
                            <div class="col-md-2">\
                              <input type="text" name="stok_tiket[]" class="form-control"  id="jumlah_'+newopt+'" onKeyPress="return onlyNumbers(event);" placeholder="Jumlah">\
                              <input type="hidden" name="satuan_tiket[]" class="form-control" value="1" id="satuan_'+newopt+'">\
                            </div>\
                            <div class="col-md-1">\
                              <button class="btn btn-sm btn-outline-danger z-depth-0 delete waves-effect"><i class="far fa-trash-alt delete" aria-hidden="true"></i></button>\
                            </div>\
                          </div>'
                    );
                });
            });

            $(document).on('click','.delete',function() {
     $(this).closest("div.row").remove();
});

$(document).on('click','.bundleBtn',function() {
    var newopt = $('#newopt').val();
    if (newopt == '') {
        alert('Please enter something!');
        return;
    }
    $('#someId').append(
    '<div class="row md-form ml-2 mt-md-n4 mt-n1">\
    <div class="col-md-2">\
        <div class="custom-control custom-checkbox mb-2 mb-md-0">\
            <input type="checkbox" name="nama_tiket[]" value="'+newopt+'" class="custom-control-input" id="tiket_'+newopt+'" checked>\
            <label class="custom-control-label" for="tiket_'+newopt+'">'+newopt+'</label>\
        </div>\
    </div>\
    <div class="col-md-2">\
        <input type="text" name="deskripsi_tiket[]" class="form-control"  id="ket_'+newopt+'" placeholder="Keterangan">\
    </div>\
    <div class="col-md-2">\
        <input type="text" name="harga_tiket[]" class="form-control"  id="tiket_'+newopt+'" placeholder="Rp.">\
    </div>\
    <div class="col-md-2">\
        <input type="text" name="stok_tiket[]" class="form-control"  id="jumlah_'+newopt+'" onKeyPress="return onlyNumbers(event);" placeholder="Jumlah">\
    </div>\
    <div class="col-md-2">\
        <input type="text" name="satuan_tiket[]" class="form-control"  id="satuan_'+newopt+'" onKeyPress="return onlyNumbers(event);" placeholder="Satuan Tiket">\
    </div>\
    <div class="col-md-1">\
        <button class="btn btn-sm btn-outline-danger z-depth-0 delete waves-effect"><i class="far fa-trash-alt delete" aria-hidden="true"></i></button>\
    </div>\
    </div>'
    )
});
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{asset('mdb/js/mapInput.js')}}"></script>
@endsection
