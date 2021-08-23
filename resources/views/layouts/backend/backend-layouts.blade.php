<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">
    <!-- App title -->
    <title>@yield('page-title')</title>

    <!-- Laravel Notify2 Css -->
    @notifyCss





















    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('asset/backend/plugins/morris/morris.css') }}">
    <!-- Switchery css -->
    <link href="{{ asset('assets/backend/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App CSS -->
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!-- yield another page css -->
    @stack('page-css')
    <style>
      .shadow-lg {
        margin-top: 45px;
      }
    </style>
  </head>
  <body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
      <!-- Top Bar Start -->
      @include('layouts.backend.partials.topbar')
      <!-- Top Bar End -->
      
      <!--  Left Sidebar Start  -->
      @include('layouts.backend.partials.left-sidebar')
      <!-- Left Sidebar End -->
      
      <!-- Start right Content here -->
      <div class="content-page">
        <!-- Anothr page yeild here  -->
        @yield('page-content')
        <!-- End Anothr page yeild here -->
      </div>
      <!-- End right Content here -->
      
      <!-- Footer -->
      @include('layouts.backend.partials.footer')
      <!-- Footer -->
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script>
      var resizefunc = [];
    </script>
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/detect.js') }}"></script>
    <script src="{{ asset('assets/backend/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/backend/js/waves.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/switchery/switchery.min.js') }}"></script>






    























    <!--Morris Chart-->
    <script src="{{ asset('assets/backend/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/raphael/raphael.min.js') }}"></script>
    <!-- Counter Up  -->
    <script src="{{ asset('assets/backend/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/counterup/jquery.counterup.js') }}"></script>
    <!-- Page specific js -->
    <script src="{{ asset('assets/backend/pages/jquery.dashboard.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/backend/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.app.js') }}"></script>
    <!-- yield another page js -->
    @stack('page-js')
    <!-- Notify Js -->
    @notifyJs
    <x:notify-messages />
  </body>
</html>