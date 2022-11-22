<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cekula</title>

    {{-- load Image --}}
    @yield('loadImage')

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

    {{-- link sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/assets/css/trix.css">
    <script type="text/javascript" src="/assets/js/trix.js"></script>
    @yield('styles')
  </head>
  <body>
    
    <div id="main">
      @yield('navbar')
      @yield('content')
    </div>

    <script src="/assets/js/app.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    {{-- select2 --}}
    <script src="/assets/js/select2.min.js"></script>
    <script src="/assets/js/sidebars.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- sweet alert --}}
    @include('sweetalert::alert')
    @stack('script')
  </body>
</html>