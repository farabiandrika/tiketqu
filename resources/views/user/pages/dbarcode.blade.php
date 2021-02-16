@extends('user.bagian')
@section('header')
    @include('user.templates.navbar')
@endsection
<!----------------------------------->

<!--content-->
@section('content')
<br>
<div class = "row">
<div class = "col-4">
<div class = "list-group position-fixed" id = "list-tab" role = "tablist">
<a   class = "list-group-item list-group-item-action" id = "list-home-list" data-toggle     = "list" href = "#list-home" role     = "tab" aria-controls = "home"><i class     = "fas fa-star"></i>&nbsp;Terbaru</a>
<a   class = "list-group-item list-group-item-action" id = "list-profile-list" data-toggle  = "list" href = "#list-profile" role  = "tab" aria-controls = "profile"><i class  = "fas fa-copy"></i>&nbsp;Sudah Digunakan</a>
<a   class = "list-group-item list-group-item-action" id = "list-messages-list" data-toggle = "list" href = "#list-messages" role = "tab" aria-controls = "messages"><i class = "fas fa-map-marked-alt"></i>&nbsp;Terdekat</a>
<a   class = "list-group-item list-group-item-action" id = "list-settings-list" data-toggle = "list" href = "#list-settings" role = "tab" aria-controls = "settings"><i class = "fas fa-filter"></i>&nbsp;Kategori</a>
    </div>
  </div>
  <div class = "col-8">
  <div class = "tab-content"               id = "nav-tabContent">
  <div class = "tab-pane fade show active" id = "list-home" role = "tabpanel" aria-labelledby = "list-home-list">
<!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
<div class = "row no-gutters">
<div class = "col-md-4">
<img src   = "{{ asset('template/img/portfolio/02-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
      </div>
        <div class       = "col-md-8">
        <div class       = "card-body">
        <h5  class       = "card-title">Dapur Mum</h5>
        <p   small class = "card-text"><small class = "text-muted">

                          <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                          <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                          <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                    </small>
                  </p>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class = "text-right">
<!-- Button trigger modal -->
<button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
  Lihat Tiket
</button>

<!-- Modal -->
<div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
<div    class       = "modal-dialog" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
<button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
        </button>
      </div>
      <div class = "modal-body text-center">
      <div class = "card mb-3" style = "max-width: 540px;">
      <div class = "row no-gutters">
      <div class = "col-md-4">
      <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                </div>
                <div class = "col-md-8">
                <div class = "card-body">
                <h5  class = "card-title">Dapur Mum</h5>
                <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>

      </div>
      <div    class = "modal-footer">
      <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
      <button type  = "button" class = "btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

                  </div>
                </div>
              </div>
            </div>
          </div>

<!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
<div class = "row no-gutters">
<div class = "col-md-4">
<img src   = "{{ asset('template/img/portfolio/01-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
          </div>
            <div class       = "col-md-8">
            <div class       = "card-body">
            <h5  class       = "card-title">Dapur Mum</h5>
            <p   small class = "card-text"><small class = "text-muted">

                              <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                              <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                              <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                        </small>
                      </p>
                      <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class = "text-right">

<!-- Button trigger modal -->
    <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
      Lihat Tiket
    </button>

    <!-- Modal -->
    <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
    <div    class       = "modal-dialog" role = "document">
    <div    class       = "modal-content">
    <div    class       = "modal-header">
    <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
    <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
    <span   aria-hidden = "true">&times;</span>
            </button>
          </div>
          <div class = "modal-body text-center">
          <div class = "card mb-3" style = "max-width: 540px;">
          <div class = "row no-gutters">
          <div class = "col-md-4">
          <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "img" alt = "...">
                    </div>
                    <div class = "col-md-8">
                    <div class = "card-body">
                    <h5  class = "card-title">Card title</h5>
                    <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                </div>

          </div>
          <div    class = "modal-footer">
          <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
          <button type  = "button" class = "btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- event yang dibuat -->
              <div class = "card shadow mb-3 bg-white rounde">
              <div class = "row no-gutters">
              <div class = "col-md-4">
              <img src   = "{{ asset('template/img/portfolio/03-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
                    </div>
                      <div class       = "col-md-8">
                      <div class       = "card-body">
                      <h5  class       = "card-title">Dapur Mum</h5>
                      <p   small class = "card-text"><small class = "text-muted">

                                        <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                                        <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                                        <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                                  </small>
                                </p>
                                <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class = "text-right">
<!-- Button trigger modal -->
              <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
                Lihat Tiket
              </button>

              <!-- Modal -->
              <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
              <div    class       = "modal-dialog" role = "document">
              <div    class       = "modal-content">
              <div    class       = "modal-header">
              <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
              <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
              <span   aria-hidden = "true">&times;</span>
                      </button>
                    </div>
                    <div class = "modal-body text-center">
                    <div class = "card mb-3" style = "max-width: 540px;">
                    <div class = "row no-gutters">
                    <div class = "col-md-4">
                    <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                              </div>
                              <div class = "col-md-8">
                              <div class = "card-body">
                              <h5  class = "card-title">Card title</h5>
                              <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                    <div    class = "modal-footer">
                    <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
                    <button type  = "button" class = "btn btn-primary">Save</button>
                    </div>
                  </div>
                </div>
              </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- event yang dibuat -->
                        <div class = "card shadow mb-3 bg-white rounde">
                        <div class = "row no-gutters">
                        <div class = "col-md-4">
                        <img src   = "{{ asset('template/img/portfolio/04-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
                              </div>
                                <div class       = "col-md-8">
                                <div class       = "card-body">
                                <h5  class       = "card-title">Dapur Mum</h5>
                                <p   small class = "card-text"><small class = "text-muted">

                                                  <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                                                  <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                                                  <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                                            </small>
                                          </p>
                                          <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                          <div class = "text-right">
<!-- Button trigger modal -->
                        <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
                          Lihat Tiket
                        </button>

                        <!-- Modal -->
                        <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
                        <div    class       = "modal-dialog" role = "document">
                        <div    class       = "modal-content">
                        <div    class       = "modal-header">
                        <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
                        <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
                        <span   aria-hidden = "true">&times;</span>
                                </button>
                              </div>
                              <div class = "modal-body text-center">
                              <div class = "card mb-3" style = "max-width: 540px;">
                              <div class = "row no-gutters">
                              <div class = "col-md-4">
                              <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                                        </div>
                                        <div class = "col-md-8">
                                        <div class = "card-body">
                                        <h5  class = "card-title">Card title</h5>
                                        <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                              <div    class = "modal-footer">
                              <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
                              <button type  = "button" class = "btn btn-primary">Save</button>
                              </div>
                            </div>
                          </div>
                        </div>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>


      </div>


      <div class = "tab-pane fade" id = "list-profile" role  = "tabpanel" aria-labelledby = "list-profile-list">
<!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
  <div class = "row no-gutters">
  <div class = "col-md-4">
  <img src   = "{{ asset('template/img/portfolio/05-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
        </div>
          <div class       = "col-md-8">
          <div class       = "card-body">
          <h5  class       = "card-title">Dapur Mum</h5>
          <p   small class = "card-text"><small class = "text-muted">

                            <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                            <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                            <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                      </small>
                    </p>
                    <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class = "text-right">
  <!-- Button trigger modal -->
  <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
    Lihat Tiket
  </button>

  <!-- Modal -->
  <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
  <div    class       = "modal-dialog" role = "document">
  <div    class       = "modal-content">
  <div    class       = "modal-header">
  <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
  <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
  <span   aria-hidden = "true">&times;</span>
          </button>
        </div>
        <div class = "modal-body text-center">
        <div class = "card mb-3" style = "max-width: 540px;">
        <div class = "row no-gutters">
        <div class = "col-md-4">
        <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                  </div>
                  <div class = "col-md-8">
                  <div class = "card-body">
                  <h5  class = "card-title">Card title</h5>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <div    class = "modal-footer">
        <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
        <button type  = "button" class = "btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
  <div class = "row no-gutters">
  <div class = "col-md-4">
  <img src   = "{{ asset('template/img/portfolio/02-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
        </div>
          <div class       = "col-md-8">
          <div class       = "card-body">
          <h5  class       = "card-title">Dapur Mum</h5>
          <p   small class = "card-text"><small class = "text-muted">

                            <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                            <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                            <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                      </small>
                    </p>
                    <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class = "text-right">
  <!-- Button trigger modal -->
  <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
    Lihat Tiket
  </button>

  <!-- Modal -->
  <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
  <div    class       = "modal-dialog" role = "document">
  <div    class       = "modal-content">
  <div    class       = "modal-header">
  <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
  <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
  <span   aria-hidden = "true">&times;</span>
          </button>
        </div>
        <div class = "modal-body text-center">
        <div class = "card mb-3" style = "max-width: 540px;">
        <div class = "row no-gutters">
        <div class = "col-md-4">
        <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                  </div>
                  <div class = "col-md-8">
                  <div class = "card-body">
                  <h5  class = "card-title">Card title</h5>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <div    class = "modal-footer">
        <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
        <button type  = "button" class = "btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
<div class = "row no-gutters">
<div class = "col-md-4">
<img src   = "{{ asset('template/img/portfolio/02-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
      </div>
        <div class       = "col-md-8">
        <div class       = "card-body">
        <h5  class       = "card-title">Dapur Mum</h5>
        <p   small class = "card-text"><small class = "text-muted">

                          <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                          <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                          <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                    </small>
                  </p>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class = "text-right">
<!-- Button trigger modal -->
<button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
  Lihat Tiket
</button>

<!-- Modal -->
<div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
<div    class       = "modal-dialog" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
<button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
        </button>
      </div>
      <div class = "modal-body text-center">
      <div class = "card mb-3" style = "max-width: 540px;">
      <div class = "row no-gutters">
      <div class = "col-md-4">
      <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                </div>
                <div class = "col-md-8">
                <div class = "card-body">
                <h5  class = "card-title">Card title</h5>
                <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>

      </div>
      <div    class = "modal-footer">
      <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
      <button type  = "button" class = "btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>


<div class = "tab-pane fade" id = "list-messages" role = "tabpanel" aria-labelledby = "list-messages-list">
<!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
  <div class = "row no-gutters">
  <div class = "col-md-4">
  <img src   = "{{ asset('template/img/portfolio/02-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
        </div>
          <div class       = "col-md-8">
          <div class       = "card-body">
          <h5  class       = "card-title">Dapur Mum</h5>
          <p   small class = "card-text"><small class = "text-muted">

                            <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                            <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                            <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                      </small>
                    </p>
                    <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class = "text-right">
  <!-- Button trigger modal -->
  <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
    Lihat Tiket
  </button>

  <!-- Modal -->
  <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
  <div    class       = "modal-dialog" role = "document">
  <div    class       = "modal-content">
  <div    class       = "modal-header">
  <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
  <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
  <span   aria-hidden = "true">&times;</span>
          </button>
        </div>
        <div class = "modal-body text-center">
        <div class = "card mb-3" style = "max-width: 540px;">
        <div class = "row no-gutters">
        <div class = "col-md-4">
        <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                  </div>
                  <div class = "col-md-8">
                  <div class = "card-body">
                  <h5  class = "card-title">Card title</h5>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <div    class = "modal-footer">
        <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
        <button type  = "button" class = "btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

                    </div>
                  </div>
                </div>
              </div>
            </div><!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
<div class = "row no-gutters">
<div class = "col-md-4">
<img src   = "{{ asset('template/img/portfolio/02-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
      </div>
        <div class       = "col-md-8">
        <div class       = "card-body">
        <h5  class       = "card-title">Dapur Mum</h5>
        <p   small class = "card-text"><small class = "text-muted">

                          <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                          <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                          <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                    </small>
                  </p>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class = "text-right">
<!-- Button trigger modal -->
<button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
  Lihat Tiket
</button>

<!-- Modal -->
<div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
<div    class       = "modal-dialog" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
<button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
        </button>
      </div>
      <div class = "modal-body text-center">
      <div class = "card mb-3" style = "max-width: 540px;">
      <div class = "row no-gutters">
      <div class = "col-md-4">
      <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                </div>
                <div class = "col-md-8">
                <div class = "card-body">
                <h5  class = "card-title">Card title</h5>
                <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>

      </div>
      <div    class = "modal-footer">
      <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
      <button type  = "button" class = "btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
  <div class = "row no-gutters">
  <div class = "col-md-4">
  <img src   = "{{ asset('template/img/portfolio/01-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
        </div>
          <div class       = "col-md-8">
          <div class       = "card-body">
          <h5  class       = "card-title">Dapur Mum</h5>
          <p   small class = "card-text"><small class = "text-muted">

                            <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                            <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                            <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                      </small>
                    </p>
                    <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class = "text-right">
  <!-- Button trigger modal -->
  <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
    Lihat Tiket
  </button>

  <!-- Modal -->
  <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
  <div    class       = "modal-dialog" role = "document">
  <div    class       = "modal-content">
  <div    class       = "modal-header">
  <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
  <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
  <span   aria-hidden = "true">&times;</span>
          </button>
        </div>
        <div class = "modal-body text-center">
        <div class = "card mb-3" style = "max-width: 540px;">
        <div class = "row no-gutters">
        <div class = "col-md-4">
        <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                  </div>
                  <div class = "col-md-8">
                  <div class = "card-body">
                  <h5  class = "card-title">Card title</h5>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <div    class = "modal-footer">
        <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
        <button type  = "button" class = "btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
<div class = "row no-gutters">
<div class = "col-md-4">
<img src   = "{{ asset('template/img/portfolio/04-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
      </div>
        <div class       = "col-md-8">
        <div class       = "card-body">
        <h5  class       = "card-title">Dapur Mum</h5>
        <p   small class = "card-text"><small class = "text-muted">

                          <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                          <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                          <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                    </small>
                  </p>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class = "text-right">
<!-- Button trigger modal -->
<button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
  Lihat Tiket
</button>

<!-- Modal -->
<div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
<div    class       = "modal-dialog" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
<button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
        </button>
      </div>
      <div class = "modal-body text-center">
      <div class = "card mb-3" style = "max-width: 540px;">
      <div class = "row no-gutters">
      <div class = "col-md-4">
      <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                </div>
                <div class = "col-md-8">
                <div class = "card-body">
                <h5  class = "card-title">Card title</h5>
                <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>

      </div>
      <div    class = "modal-footer">
      <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
      <button type  = "button" class = "btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>


<div class = "tab-pane fade" id = "list-settings" role = "tabpanel" aria-labelledby = "list-settings-list">
<!-- event yang dibuat -->
<div class = "card shadow mb-3 bg-white rounde">
  <div class = "row no-gutters">
  <div class = "col-md-4">
  <img src   = "{{ asset('template/img/portfolio/03-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
        </div>
          <div class       = "col-md-8">
          <div class       = "card-body">
          <h5  class       = "card-title">Dapur Mum</h5>
          <p   small class = "card-text"><small class = "text-muted">

                            <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                            <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                            <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                      </small>
                    </p>
                    <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class = "text-right">
  <!-- Button trigger modal -->
  <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
    Lihat Tiket
  </button>

  <!-- Modal -->
  <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
  <div    class       = "modal-dialog" role = "document">
  <div    class       = "modal-content">
  <div    class       = "modal-header">
  <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
  <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
  <span   aria-hidden = "true">&times;</span>
          </button>
        </div>
        <div class = "modal-body text-center">
        <div class = "card mb-3" style = "max-width: 540px;">
        <div class = "row no-gutters">
        <div class = "col-md-4">
        <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                  </div>
                  <div class = "col-md-8">
                  <div class = "card-body">
                  <h5  class = "card-title">Card title</h5>
                  <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>

        </div>
        <div    class = "modal-footer">
        <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
        <button type  = "button" class = "btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

                    </div>
                  </div>
                </div>
              </div>
            </div><!-- event yang dibuat -->
            <div class = "card shadow mb-3 bg-white rounde">
            <div class = "row no-gutters">
            <div class = "col-md-4">
            <img src   = "{{ asset('template/img/portfolio/06-thumbnail.jpg') }}" class = "card-img" alt = "dtiket1">
                  </div>
                    <div class       = "col-md-8">
                    <div class       = "card-body">
                    <h5  class       = "card-title">Dapur Mum</h5>
                    <p   small class = "card-text"><small class = "text-muted">

                                      <td><img src = "{{ asset('template/img/icon/calendar.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>14 Februari 2020</td>

                                      <td><img src = "{{ asset('template/img/icon/clock.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>08:00 - 12:00 WIB</td>

                                      <td><img src = "{{ asset('template/img/icon/pin.png') }}" width = "10px"></td><td>&nbsp;&nbsp;</td><td>Grand Central Hotel Pekanbaru</td>

                                </small>
                              </p>
                              <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <div class = "text-right">
            <!-- Button trigger modal -->
            <button type = "button" class = "btn btn-warning" data-toggle = "modal" data-target = "#exampleModal">
              Lihat Tiket
            </button>

            <!-- Modal -->
            <div    class       = "modal fade" id     = "exampleModal" tabindex = "-1" role          = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
            <div    class       = "modal-dialog" role = "document">
            <div    class       = "modal-content">
            <div    class       = "modal-header">
            <h5     class       = "modal-title" id    = "exampleModalLabel">QR CODE</h5>
            <button type        = "button" class      = "close" data-dismiss    = "modal" aria-label = "Close">
            <span   aria-hidden = "true">&times;</span>
                    </button>
                  </div>
                  <div class = "modal-body text-center">
                  <div class = "card mb-3" style = "max-width: 540px;">
                  <div class = "row no-gutters">
                  <div class = "col-md-4">
                  <img src   = "{{ asset('template/img/qrcode.png') }}" width = "50%" class = "card-img" alt = "...">
                            </div>
                            <div class = "col-md-8">
                            <div class = "card-body">
                            <h5  class = "card-title">Card title</h5>
                            <p   class = "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                  </div>
                  <div    class = "modal-footer">
                  <button type  = "button" class = "btn btn-light" data-dismiss = "modal">Close</button>
                  <button type  = "button" class = "btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
</div>
    </div>
  </div>
</div>

@endsection


@section('footer')
    @include('user.templates.footer')
@endsection
