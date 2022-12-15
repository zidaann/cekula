@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <span class="text-white mx-auto">Kegiatan Osis</span>
    </div>
  </div>
  <main class="mb-4">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-11">
          <div class="row">
            <div class="col-12 col-md-6 mb-3">
              <a href="#" class="text-decoration-none">
                <div class="card border-0 py-3 box-shadow">
                  <div class="text-center">
                    <img src="/assets/svg/ekstrakulikuler/ekstra.svg" class="card-img-top img-fluid mx-auto" style="height: 200px;">
                  </div>
                  <div class="card-body">
                    <div class="card-title fw-bold fs-5">Classmeeting Antar Kelas</div>
                    <p>24 - 28 Oktoberl 2022 </p>
                    <p>Lokasi : Ruang Osis Sekolah</p>
                  </div>
                  <div class="card-action d-flex align-items-center float-end">
                    <a href="#" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                    <form id="#" action="#" method="post">
                      @csrf
                      @method('DELETE')
                    </form>
                    <button onclick="" class="border-0"><i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <a href="#" class="text-decoration-none">
                <div class="card border-0 py-3 box-shadow">
                  <div class="text-center">
                    <img src="/assets/img/dashboard/img3.png" class="card-img-top img-fluid mx-auto" style="height: 200px;">
                  </div>
                  <div class="card-body">
                    <div class="card-title fw-bold fs-5">Pentas Seni Akhir Tahun</div>
                    <p>15 - 16 Desember</p>
                    <p>Lokasi : Lapangan Karangjaya</p>
                  </div>
                  <div class="card-action d-flex align-items-center float-end">
                    <a href="#" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                    <form id="#" action="#" method="post">
                      @csrf
                      @method('DELETE')
                    </form>
                    <button onclick="" class="border-0"><i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <a href="#" class="text-decoration-none">
                <div class="card border-0 py-3 box-shadow">
                  <div class="text-center">
                    <img src="/assets/img/dashboard/img3.png" class="card-img-top img-fluid mx-auto" style="height: 200px;">
                  </div>
                  <div class="card-body">
                    <div class="card-title fw-bold fs-5">Pentas Seni Akhir Tahun</div>
                    <p>15 - 16 Desember</p>
                    <p>Lokasi : Lapangan Karangjaya</p>
                  </div>
                  <div class="card-action d-flex align-items-center float-end">
                    <a href="#" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                    <form id="#" action="#" method="post">
                      @csrf
                      @method('DELETE')
                    </form>
                    <button onclick="" class="border-0"><i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="btn-add">
    <a href="#">
      <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
    </a>
  </div>
@endsection
