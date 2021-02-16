<!-- head-->
@include('admin.templates.head')

<!-- header-->
@yield('header')

  <!-- content-->
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      @include('admin.templates.sidebar')
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          @yield('content')
          @include('admin.templates.scrolltop')
          @include('admin.templates.footer')
        </div>
      </div>
    </div>
    @include('sweetalert::alert')
  </body>
 <!-- footer-->
@yield('footer')
@include('admin.templates.logout')

 <!-- Javascript-->
@include('admin.templates.js')

@section('optional-script')
@show
</html>
