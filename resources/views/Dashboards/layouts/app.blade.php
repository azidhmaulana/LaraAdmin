<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('Dashboards.includes.title')
    @include('Dashboards.includes.favicon')
    
    @include('Dashboards.assets.style')
    @stack('before-styles')
    {{-- here --}}
    @stack('after-styles')
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  @include('Dashboards.includes.preloader')
 
  <!-- Navbar -->
  @include('Dashboards.includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Dashboards.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  @include('Dashboards.includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    @include('Dashboards.assets.script')    
    @yield('script')
    @stack('before-scripts')

    @stack('after-scripts')
</body>
</html>
