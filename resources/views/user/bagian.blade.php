<!-- head-->
@include('user.templates.head')

<!-- header-->
@yield('header')

  <!-- content-->
  <section class="page-section" id="content">
    <div class="loader">
        <img src="{{ asset('template/gambar/loading.gif') }}" alt="Loading..." />
    </div>
    <div class="container">
        <br>
        @yield('content')
    </div>
  </section>


 <!-- footer-->
@yield('footer')


 <!-- Javascript-->
@include('user.templates.js')

@section('optional-script')
@show
@include('sweetalert::alert')
</body>
</html>
