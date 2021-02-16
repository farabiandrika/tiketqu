<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tiketqu</title>

  <link href="{{ asset('template/img/icon/ticket.png') }}" rel='shortcut icon'>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"  type="text/css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kaushan+Script'  type='text/css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'  type='text/css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' type='text/css'>

  <!-- css plugin icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css file mdb -->
  <link rel="stylesheet" href="{{ asset('mdb/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}">
  <link rel="stylesheet" href="{{ asset('mdb/css/addons/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/agency.css') }}">

  <!--- Script jquery--->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  {{-- Membuat style untuk loading --}}
<style>
.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 100px;
}

.loader.hidden {
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

</style>
{{-- Membuat style untuk loading --}}

{{-- Membuat script untuk loading --}}
<script>
    window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
</script>
{{-- Membuat script untuk loading --}}

</head>
