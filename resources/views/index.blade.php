@extends('user.bagian')

<!-- header-->
@section('header')
<style type="text/css">
@media only screen
and (min-device-width : 414px)
and (max-device-width : 736px) {
/* Styles */
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
}

.card-img-top {
    width: 100%;
    height: 8vw;
    object-fit: cover;
}
</style>
<!-- navbar-->
    @include('user.templates.navbar')
    @include('user.templates.header')
    @include('user.templates.cari.cari')

@endsection


<!--content-->
@section('content')
    @include('user.templates.card.dtiket')
    @include('user.templates.tentang')
@endsection



@section('footer')
    @include('user.templates.wa')
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
                    $('#free').html(free);
                    $('.pagination').addClass('justify-content-center');
                    window.location.href = '#free';
                }
            });
        }

        function fetch_premium_data(page)
        {
            $.ajax({
                url:"/premium?page="+page,
                success:function(premium)
                {
                    $('#premium').html(free);
                }
            });
        }
});
</script>
@endsection
