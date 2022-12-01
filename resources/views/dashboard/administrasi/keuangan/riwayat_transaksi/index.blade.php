@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Riwayat Transaksi</span>
    </div>
  </div>
  <div id="main" class="mx-3 px-4">
    <div class="row px-5">
      <div class="col-12 p-3 px-4 mb-3 btn btn-light bg-white box-shadow">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <span class="font-noto fw-semibold font-16">Riwayat Pembayaran Seragam</span>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-12 p-3 px-4 mb-3 btn btn-light bg-white box-shadow">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <span class="font-noto fw-semibold font-16">Riwayat Pembayaran Buku</span>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-12 p-3 px-4 mb-3 btn btn-light bg-white box-shadow">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <span class="font-noto fw-semibold font-16">Riwayat Pembayaran SPP</span>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-12 p-3 px-4 mb-3 btn btn-light bg-white box-shadow">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <span class="font-noto fw-semibold font-16">Riwayat Pembayaran Tabungan Murid</span>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-12 mb-3 d-flex justify-content-center">
        <figure>
          <img src="/assets/img/Pilih_Laporan.png" alt="Pilih Laporan">
          <figcaption class="font-noto font-16">Pilih laporan keuangan anda.</figcaption>
        </figure>
      </div>
    </div>
  </div>
@endsection
