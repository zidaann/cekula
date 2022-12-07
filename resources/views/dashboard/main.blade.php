<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cekula</title>
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery.min.js"></script>
    
    {{-- timepicker --}}
    <link rel="stylesheet" href="/assets/css/jquery.timepicker.min.css">
    <script src="/assets/js/jquery.timepicker.min.js"></script>
    {{-- datatable --}}
    <link rel="stylesheet" href="/assets/css/datatables.min.css">
    {{-- datepicker --}}
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
    {{-- sweet alert js --}}
    <script type="text/javascript" src="/assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="/assets/js/sweetalert2.js"></script>
    {{-- Link Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&family=Rubik:wght@600&display=swap" rel="stylesheet">

    <!-- Link CSS-->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/sidebars.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/dashboard/app.css">
    {{-- Select2 --}}
    <link href="/assets/css/select2.min.css">
    {{-- link icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" type="text/css" href="/assets/css/trix.css">
    <script type="text/javascript" src="/assets/js/trix.js"></script>
    @yield('styles')
  </head>
  <body>
    <div id="main" class="container-fluid">
       <div class="row">
        @include('dashboard.sidebar')
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-h-100">
          @yield('content')
        </div>
      </div>
    </div>

    {{-- select2 --}}
    <script src="/assets/js/select2.min.js"></script>
    <script src="/assets/js/sidebars.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- sweet alert --}}
    <script src="/assets/js/datatables.min.js"></script>
    @include('sweetalert::alert')
    @stack('script')
  </body>
</html>