<div class="navbar sticky-top d-flex bg-transparent">
   <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
      aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
</div>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse mt-0">
   <div class="position-sticky pt-3 sidebar-sticky">
      <div class="mx-auto justify-content-center d-flex bg-color rounded-4 shadow-1">
         {{-- <div class="w-100 bg-transparent border-0 align-items-center justify-content-between bg-color rounded-3">
          <div>
            <img src="/assets/img/profil.png" class="card-img-top img-fluid rounded-5 mx-auto d-block" style="width: 100px; height: 100px;" alt="Masukkan Profil">
          </div>
          <div class="font-noto card bg-danger d-flex align-content-center">
            <div class="align-content-center">
              <h6 class="text-center color-user fw-bold fs-6">Administrator</h6>
              <p class="text-center color-user">Wildan</p>
            </div>
          </div>
        </div> --}}
         {{-- <div class="d-block d-md-flex align-items-center justify-content-center">
          <div class="p-2 d-flex justify-content-center">
            <img src="/assets/img/profil.png" class="card-img-top rounded-4 mx-auto" style="width: 60px; height: 60px;" alt="...">
          </div>
          <div class="row d-flex justify-content-center align-content-center">
            <h6 class="col-12 font-rubik font-16 text-center text-md-start pt-3">Guru Mapel</h6>
            <p class="col-12 font-noto font-14 text-center text-md-start">Wildan</p>
          </div>
        </div> --}}
         <div class="d-flex row align-items-center justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center ps-0 ps-md-4 pt-2 pt-md-0">
               <img src="/assets/img/profil.png" class="card-img-top rounded-4" style="width: 60px; height: 60px;"
                  alt="...">
            </div>
            <div class="col-12 col-md-8">
               <div class="row d-flex align-content-center">
                  
                  <h6 class="col-12 font-rubik font-16 text-center text-md-start pt-3">{{ Auth()->user()->status }}</h6>
                  <p class="col-12 font-noto font-14 text-center text-md-start">{{ auth()->user()->nama }}</p>
               </div>
            </div>
         </div>
      </div>
      <ul class="nav flex-column bg-color-content shadow-1 mt-3 h-100 rounded-4">
         <li class="nav-item w-100">
            <a class="nav-link w-100 d-flex align-items-center ps-lg-1 font-rubik" href="{{ route('home') }}">
               <i class="bi bi-house-door-fill"></i>
               <div class="d-flex w-100 ps-2">
                  <h6 class="pt-2 fs-6 font-rubik">Dashboard</h6>
               </div>
            </a>
         </li>
         <li class="mb-1">
            <button
               class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-1 w-100 font-rubik"
               data-bs-toggle="collapse" data-bs-target="#akademik-collapse" aria-expanded="false">
               <i class="bi bi-mortarboard-fill"></i>
               <div class="d-flex w-100 px-2">
                  <h6 class="pt-2">Akademik</h6>
               </div>
            </button>
            <div class="collapse" id="akademik-collapse">
               <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                  <li><a href="{{ route('jadwal_sekolah.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Jadwal Sekolah</a></li>
                  <li><a href="{{ route('jadwal_kelas.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Jadwal Kelas</a></li>
                  <li><a href="{{ route('rapor.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Raport Murid</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Penilaian
                        Pembelajaran</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Kartu Pelajar
                        Digital</a></li>
               </ul>
            </div>
         </li>
         <li class="mb-1">
            <button
               class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-1 w-100 font-rubik"
               data-bs-toggle="collapse" data-bs-target="#presensi-collapse" aria-expanded="false">
               <i class="bi bi-check-circle-fill"></i>
               <div class="d-flex w-100 px-2">
                  <h6 class="pt-2">Presensi</h6>
               </div>
            </button>
            <div class="collapse" id="presensi-collapse">
               <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                  <li><a href="{{ route('presensi.pegawai.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Presensi Pegawai</a></li>
                  <li><a href="{{ route('presensi.murid.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Presensi Murid</a></li>
               </ul>
            </div>
         </li>
         <li class="mb-1">
            <button
               class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-1 w-100 font-rubik"
               data-bs-toggle="collapse" data-bs-target="#berita-collapse" aria-expanded="false">
               <i class="bi bi-newspaper"></i>
               <div class="d-flex w-100 px-2">
                  <h6 class="pt-2">Berita</h6>
               </div>
            </button>
            <div class="collapse" id="berita-collapse">
               <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                  <li><a href="{{ route('berita_sekolah.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Berita Sekolah</a></li>
                  <li><a href="{{ route('berita_kelas.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Berita Kelas</a></li>
               </ul>
            </div>
         </li>
         <li class="mb-1">
            <button
               class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-1 w-100 font-rubik"
               data-bs-toggle="collapse" data-bs-target="#administrasi-collapse" aria-expanded="false">
               <i class="bi bi-front"></i>
               <div class="d-flex w-100 px-2">
                  <h6 class="pt-2">Administrasi</h6>
               </div>
            </button>
            <div class="collapse" id="administrasi-collapse">
               <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Keuangan</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Penerimaan Murid
                        Baru</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Data Murid</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Data Mutasi
                        Murid</a></li>
               </ul>
            </div>
         </li>
         <li class="mb-1">
            <button
               class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-1 w-100 font-rubik"
               data-bs-toggle="collapse" data-bs-target="#fasilitas-collapse" aria-expanded="false">
               <i class="bi bi-building"></i>
               <div class="d-flex w-100 px-2">
                  <h6 class="pt-2">Fasilitas</h6>
               </div>
            </button>
            <div class="collapse" id="fasilitas-collapse">
               <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                  <li><a href="{{ route('perpustakaan.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Perpustakaan</a></li>
                  <li><a href="{{ route('daftar_fasilitas.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Daftar Fasilitas</a></li>
                  <li><a href="{{ route('fasilitas.peminjaman.index') }}"
                        class="link-dark d-inline-flex text-decoration-none rounded">Peminjaman Fasilitas</a></li>
                  <li><a href="" class="link-dark d-inline-flex text-decoration-none rounded">Kantin</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Koperasi</a></li>
               </ul>
            </div>
         </li>
         <li class="mb-1">
            <button
               class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-1 w-100 font-rubik"
               data-bs-toggle="collapse" data-bs-target="#non_akademik-collapse" aria-expanded="false">
               <i class="bi bi-grid-1x2-fill" style="transform: rotate(90deg);"></i>
               <div class="d-flex w-100 px-2 ps-md-0 ps-lg-2">
                  <h6 class="pt-2">Non-Akademik</h6>
               </div>
            </button>
            <div class="collapse" id="non_akademik-collapse">
               <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monitoring
                        Kegiatan Osis</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monitoring
                        Ekstrakulikuler</a></li>
               </ul>
            </div>
         </li>
         <li class="mb-1">
            <button
               class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed ps-3 ps-lg-1 w-100 font-rubik"
               data-bs-toggle="collapse" data-bs-target="#laporan-collapse" aria-expanded="false">
               <i class="bi bi-file-earmark-bar-graph-fill"></i>
               <div class="d-flex w-100 px-2 ps-md-0 ps-lg-2">
                  <h6 class="pt-2">Laporan</h6>
               </div>
            </button>
            <div class="collapse" id="laporan-collapse">
               <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small font-noto">
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Laporan Presensi
                        Pegawai</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Laporan Presensi
                        Murid</a></li>
                  <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Laporan
                        Keuangan</a></li>
               </ul>
            </div>
         </li>
         <li class="nav-item w-100">
            {{-- <form action="{{ route('logout') }}" method="post" class="d-flex">
            @csrf 
            <button type="submit" class="nav-link px-3 bg-transparent border-0 "><i class="bi bi-box-arrow-left fs-5 font-rubik"></i> Logout <span data-feather="log-out"></span></button>
          </form> --}}
            <form action="{{ route('logout') }}" method="post">
               @csrf
               <a class="nav-link w-100 d-flex align-items-center ps-lg-1 font-rubik" href="{{ route('logout') }}">
                  <i class="bi bi-box-arrow-left fs-5 font-rubik"></i>
                  <div class="d-flex w-100 ps-2">
                     <h6 class="pt-2 fs-6 font-rubik">Log Out</h6>
                  </div>
               </a>
            </form>
         </li>
   </div>
</nav>
