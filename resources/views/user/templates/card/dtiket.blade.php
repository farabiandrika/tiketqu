    @if (count($premium) != 0)
    <!-- Premium Data Event -->
        <div class="row row-cols-1 row-cols-md-3 mb-2" style="margin-top:-75px;">
            <div class="col-md-12">
                <h3>Rekomendasi Event</h3>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3" style="position:relative;">
            <div class="col-md-12 h-100 w-100" id="premium">
                @include('user.templates.event.premium')
            </div>
        </div>
    <!-- End of Premium Data Event -->
    @endif

    <!-- Free Data Event -->
        <div class="row row-cols-1 row-cols-md-3 mt-n5 mb-2">
            <div class="col-md-12">
                <h3>Event Terbaru</h3>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3" style="position:relative;">
            <div class="col-md-12 h-100 w-100" id="free">
                @if (count($free) == 0)
                    <div class="row mb-5 mt-3">
                        <div class="col-md-12 text-center text-black-50 h-100 h5 font-weight-bold small"><img src="{{asset('template/undraw/empty.svg')}}" class="mt-4" width="30%"><br><br><br>
                            MAAF BELUM ADA EVENT
                        </div>
                    </div>
                @else
                    @include('user.templates.event.free')
                @endif
            </div>
        </div>

    <!-- End of Free Data Event -->
