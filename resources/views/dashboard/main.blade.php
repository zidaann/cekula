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

    {{-- link icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- link sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
  </head>
  <body>
    <div id="main" class="container-fluid">
       <div class="row">
        <div class="navbar sticky-top d-flex bg-transparent">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-0">
          <div class="position-sticky pt-3 sidebar-sticky">
            <div class="mx-auto justify-content-center">
              <div class="card w-100 bg-transparent border-0">
                <img src="/assets/img/profil.png" class="card-img-top img-fluid rounded-5 mx-auto d-block" style="width: 100px; height: 100px;" alt="Masukkan Profil">
                <div class="card-body font-noto">
                  <h6 class="card-title text-center color-user fw-bold fs-5">Administrator</h6>
                  <p class="card-text text-center color-user fs-6">Wildan</p>
                </div>
              </div>
            </div>
            <ul class="nav flex-column">
              <!-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                  <i class="bi bi-layout-text-sidebar-reverse"></i>
                  Dashboard
                </a>
              </li> -->
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-0 w-100 font-rubik" data-bs-toggle="collapse" data-bs-target="#akademik-collapse" aria-expanded="false">
                  <i class="bi bi-mortarboard-fill"></i>
                  <div class="d-flex w-100 px-2">
                    <h6 class="pt-2">Akademik</h6>
                  </div>
                </button>
                <div class="collapse" id="akademik-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Jadwal Sekolah</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Jadwal Kelas</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Raport Murid</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Penilaian Pembelajaran</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Kartu Pelajar Digital</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-0 w-100 font-rubik" data-bs-toggle="collapse" data-bs-target="#presensi-collapse" aria-expanded="false">
                  <i class="bi bi-check-circle-fill"></i>
                  <div class="d-flex w-100 px-2">
                    <h6 class="pt-2">Presensi</h6>
                  </div>
                </button>
                <div class="collapse" id="presensi-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Presensi Pegawai</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Presensi Murid</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-0 w-100 font-rubik" data-bs-toggle="collapse" data-bs-target="#berita-collapse" aria-expanded="false">
                  <i class="bi bi-newspaper"></i>
                  <div class="d-flex w-100 px-2">
                    <h6 class="pt-2">Berita</h6>
                  </div>
                </button>
                <div class="collapse" id="berita-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Berita Sekolah</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Berita Kelas</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-0 w-100 font-rubik" data-bs-toggle="collapse" data-bs-target="#administrasi-collapse" aria-expanded="false">
                  <i class="bi bi-front"></i>
                  <div class="d-flex w-100 px-2">
                    <h6 class="pt-2">Administrasi</h6>
                  </div>
                </button>
                <div class="collapse" id="administrasi-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Keuangan</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Penerimaan Murid Baru</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Mutasi Murid</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-0 w-100 font-rubik" data-bs-toggle="collapse" data-bs-target="#fasilitas-collapse" aria-expanded="false">
                  <i class="bi bi-building"></i>
                  <div class="d-flex w-100 px-2">
                    <h6 class="pt-2">Fasilitas</h6>
                  </div>
                </button>
                <div class="collapse" id="fasilitas-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Perpustakaan</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Peminjaman Fasilitas</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Kantin</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Koperasi</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-0 w-100 font-rubik" data-bs-toggle="collapse" data-bs-target="#non_akademik-collapse" aria-expanded="false">
                  <i class="bi bi-grid-1x2-fill" style="transform: rotate(90deg);"></i>
                  <div class="d-flex w-100 px-2 ps-md-0 ps-lg-2">
                    <h6 class="pt-2">Non-Akademik</h6>
                  </div>
                </button>
                <div class="collapse" id="non_akademik-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monitoring Kegiatan Osis</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monitoring Ekstrakulikuler</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item mt-3 w-100">
                <a class="nav-link w-100 d-flex align-items-center ps-lg-0 font-rubik" href="#">
                  <i class="bi bi-box-arrow-left fs-5 font-rubik"></i>
                  <div class="d-flex w-100 ps-2">
                    <h6 class="pt-2 fs-6 font-rubik">Log Out</h6>
                  </div>
                </a>
              </li>
          </div>
        </nav>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @yield('contents')
        </div>
      </div>
    </div>


    <script src="/assets/js/sidebars.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>