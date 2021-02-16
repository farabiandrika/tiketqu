@extends('user.bagian')
@section('header')
@include('user.templates.navbar')
@endsection

@section('content')
<style>

  .inputs {
  outline: none;
  box-shadow: none;
  border: 0;
  background: transparent;
}
</style>
    <div class="col-md-12 mt-1">
        <h5 class="mb-5 text-center"><i class="fas fa-shopping-basket mr-2"></i>Tiket Saya</h5>
        <div class="row justify-content-center align-items-center">
      <div class="col-md-12">
        <div class="cardw text-center">
          <div class="cardw-header">
            <ul class="nav nav-tabs card-header-tabs justify-content-center">
              <li class="nav-item">
                <a class="nav-link active h6" data-toggle="tab" href="#terbaru"><i class="fas fa-calendar mr-1"></i>Terbaru</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h6" data-toggle="tab" href="#sudah"><i class="fas fa-copy mr-1"></i>Sudah Digunakan</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="col-md-12 tab-content mt-3 mt-md-2">
              <div id="terbaru" class="tab-pane active">
                    <div class="row justify-content-center align-items-center">
                        <!-- Search form -->
                        <form>
                        <input class="form-control" type="text" placeholder="Pencaharian"
                            aria-label="Search">
                        </form>
                    </div><br>
                    {{-- --bagian card status sudah bayar --}}
                      <div class="row">
                         @include('user.templates.transaksi.panding')
                         @include('user.templates.transaksi.sudah_bayar')
                     </div>
              </div>


              <div id="sudah" class="tab-pane fade">
                  <div class="row justify-content-center align-items-center">
                        <!-- Search form -->
                        <form>
                        <input class="form-control" type="text" placeholder="Pencaharian"
                            aria-label="Search">
                        </form>
                    </div><br>
                    <div class="row">
                         @include('user.templates.transaksi.sudah_digunakan')
                     </div>
              </div>

            </div>
        </div>
    </div>
    </div>
</div>



</div>




@include('user.templates.modal.lihat_profil')
@include('user.templates.modal.panduan')
@include('user.templates.modal.poin')

@endsection

@section('footer')
    @include('user.templates.wa')
    @include('user.templates.footer')
@endsection

@section('optional-script')


@endsection
