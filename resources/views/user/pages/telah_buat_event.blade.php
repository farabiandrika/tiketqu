@extends('user.bagian')
@section('header')
    <style type="text/css">
    @media only screen
    and (min-device-width : 414px)
    and (max-device-width : 736px) {
    /* Styles */
    .card-img-top {
        width: 100%;
        height: 20vw;
        object-fit: cover;
    }
    }

    .card-img-top {
        width: 100%;
        height: 8vw;
        object-fit: cover;
    }
  }
    </style>
<!-- navbar-->
    @include('user.templates.navbar')
@endsection
<!----------------------------------->

<!--content-->
@section('content')

    <!-- Premium Data Event -->
        <div class="row row-cols-1 row-cols-md-3 mt-3 mb-2" style="margin-top:-75px;">
            <div class="col-md-12">
                <h4>Event Premium</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3" style="position:relative;">
                <div class="col-md-12 h-100 w-100" id="tpremium">
                    @include('user.templates.telahevent.edit_premium')
                </div>
        </div>
    <!-- End of Premium Data Event -->


    <!-- Free Data Event -->
        <div class="row row-cols-1 row-cols-md-3 mt-3 mb-2">
            <div class="col-md-12">
                <h4>Event Free</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3" style="position:relative;">
            <div class="col-md-12 h-100 w-100" id="tfree">
                @include('user.templates.telahevent.edit_free')
            </div>
        </div>



@endsection

@section('footer')
    @include('user.templates.footer')
@endsection
@section('optional-script')
<script>
    $('.pagination').addClass('justify-content-center');
</script>
<script>
$(document).ready(function(){
    $(document).on('click', '.pagination a', function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_free_data(page);
    });
        function fetch_free_data(page)
        {
            $.ajax({
                url:"/free?page="+page,
                success:function(free)
                {
                    $('#tfree').html(free);
                    $('.pagination').addClass('justify-content-center');
                    window.location.href = '#tfree';
                }
            });
        }

        function fetch_premium_data(page)
        {
            $.ajax({
                url:"/premium?page="+page,
                success:function(premium)
                {
                    $('#tpremium').html(free);
                }
            });
        }
});
</script>
@endsection
