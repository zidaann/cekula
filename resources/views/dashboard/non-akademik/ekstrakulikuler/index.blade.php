@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <span class="text-white mx-auto">Ekstrakulikuler</span>
    </div>
  </div>
  <div id="main" class="mx-3 px-4">
    <div class="row px-5">
      <div class="col-12 p-3 px-4 mb-3 btn btn-light bg-white box-shadow">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <span class="font-noto fw-semibold font-16">Pemantauan Ekstrakulikuler</span>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-12 p-3 px-4 mb-3 btn btn-light bg-white box-shadow">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <span class="font-noto fw-semibold font-16">Presensi Ekstrakulikuler</span>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-12 mb-3 d-flex justify-content-center">
        <figure>
          <img src="/assets/svg/ekstrakulikuler/ekstra.svg" alt="Pilih Ekstrakulikuler">
          <figcaption class="font-noto font-16 text-center">Pilih menu ekstrakulikuler.</figcaption>
        </figure>
      </div>
    </div>
  </div>
  <div class="btn-add">
    <a href="#">
      <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
    </a>
  </div>
@endsection
