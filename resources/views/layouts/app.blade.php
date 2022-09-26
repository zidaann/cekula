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
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    
    <div id="main">
      @yield('navbar')
      @yield('content')
    </div>



    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>