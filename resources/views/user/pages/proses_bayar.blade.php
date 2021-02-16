@extends('user.bagian')
@section('header')
    @include('user.templates.navbar')
@endsection
<!----------------------------------->

<!--content-->
@section('content')
<div class="col mt-md-5">
<!-- Card deck -->
<div class="row">
    <div class="col-md-7">
        <div class="card-deck">
            <!-- Card -->
            <div class="card mb-4">
                <!--Card content-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <h2 class="card-title">Terima kasih atas pesanan kamu</h2>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Card -->

  <!-- Card -->
  <div class="col-md-5">
  <div class="card mb-4">

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas accusamus quos cum! Molestiae cupiditate corporis eveniet sed itaque enim, aut mollitia quas totam dolores esse quibusdam obcaecati architecto laboriosam ad.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->

  </div>
  <!-- Card -->
</div>
</div>
</div>
<!-- Card deck -->
</div>

@endsection

@section('footer')
    @include('user.templates.footer')
@endsection
