@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Pembayaran SPP</span>
      <a href="#" class="text-white "><i class="bi bi-clock-history"></i></a>
    </div>
  </div>
  <main class="mb-4">
    <div id="content-jadwal">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <form action="#" method="#" enctype="multipart/form-data">
              @csrf
              @include('dashboard.administrasi.keuangan.pembayaran_spp._form.form')
            </form>
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
