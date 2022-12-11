@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1 mb-5">
    <div class="d-flex align-items-center px-4">
      <span class="text-white mx-auto">Mata Pelajaran</span>
    </div>
  </div>
  <div id="main" class="mx-3 px-4 mt-5">
    <div class="row px-4 d-flex justify-content-center">
      <div class="col-12">
        <div class="row font-noto font-16">
          {{-- mapel --}}
          <div class="col-1 d-flex justify-content-around mb-3">
            <img src="/assets/svg/mapel/indonesia.svg" alt="Indonesia" style="width: 3opx; height: 30px;">
          </div>
          <div class="col-10">
            Bahasa Indonesia
          </div>
          <div class="col-1 d-flex justify-content-around pe-4">
            <a href="#" class="text-black">
              <i class="bi bi-pencil-square"></i>
            </a>
            <a href="#" class="text-black">
              <i class="bi bi-trash"></i>
            </a>
          </div>
          {{-- akhir mapel --}}
          {{-- mapel --}}
          <div class="col-1 d-flex justify-content-around mb-3">
            <img src="/assets/svg/mapel/inggris.svg" alt="Bahasa Inggris" style="width: 3opx; height: 30px;">
          </div>
          <div class="col-10">
            Bahasa Inggris
          </div>
          <div class="col-1 d-flex justify-content-around pe-4">
            <a href="#" class="text-black">
              <i class="bi bi-pencil-square"></i>
            </a>
            <a href="#" class="text-black">
              <i class="bi bi-trash"></i>
            </a>
          </div>
          {{-- akhir mapel --}}
          {{-- mapel --}}
          <div class="col-1 d-flex justify-content-around mb-3">
            <img src="/assets/svg/mapel/mtk.svg" alt="Matematika" style="width: 3opx; height: 30px;">
          </div>
          <div class="col-10">
            Matematika
          </div>
          <div class="col-1 d-flex justify-content-around pe-4">
            <a href="#" class="text-black">
              <i class="bi bi-pencil-square"></i>
            </a>
            <a href="#" class="text-black">
              <i class="bi bi-trash"></i>
            </a>
          </div>
          {{-- akhir mapel --}}
        </div>
      </div>
    </div>
    <div class="btn-add">
      <a href="#">
        <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
      </a>
    </div>
  </div>
@endsection
