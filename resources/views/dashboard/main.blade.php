<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cekula</title>

    {{-- Link Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&family=Rubik:wght@600&display=swap" rel="stylesheet">

    <!-- Link CSS-->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/sidebars.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/dashboard/app.css">

    {{-- link icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- link sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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

    @stack('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="/assets/js/sidebars.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>