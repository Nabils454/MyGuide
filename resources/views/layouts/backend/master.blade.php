<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="{{asset('backend/app.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}">
  @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

  <!-- Navbar -->
    @include('layouts.backend.inc.nav')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
    @include('layouts.backend.inc.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    @yield('content')
  </div>

  <!-- Control Sidebar -->
  @include('layouts.backend.inc.control-sidebar')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="{{asset('backend/app.js')}}"></script>
<script src="{{asset('assets/admin/js/custom.js')}}"></script>

<script>
  setTimeout(function() {
      $('#alert').fadeOut('fast');
}, 5000);

</script>

@stack('js')

</body>
</html>
