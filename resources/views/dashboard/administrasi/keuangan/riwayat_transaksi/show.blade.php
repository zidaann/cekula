@extends('dashboard.main')
@section('styles')
  <style>
    .toggle-modal:hover {
      color: deepskyblue;
    }

    #t_slip,
    #t_slip tr,
    #t_slip td,
    #t_slip th {
      border: 1px solid black;
      text-align: center;
    }
  </style>
@endsection
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Riwayat Transaksi</span>
    </div>
  </div>
  <main class="mb-4">
    <div class="row justify-content-center">
      <div class="col-10 font-noto">
        <div class="font-16 fw-semibold">Amanda Manopo</div>
        <div class="color-grey">Pembayaran 10 buku berhasil disimpan pada tanggal 14/11/2022</div>
        <div><button class="toggle-modal color-grey border-0 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#modalBuku">Ketuk untuk melihat detail</button></div>
        <hr>
      </div>
      <div class="col-10 font-noto">
        <div class="font-16 fw-semibold">Amanda Manopo</div>
        <div class="color-grey">Pembayaran 10 buku berhasil disimpan pada tanggal 14/11/2022</div>
        <div><button class="toggle-modal color-grey border-0 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#modalBuku">Ketuk untuk melihat detail</button></div>
        <hr>
      </div>
      <div class="col-10 font-noto">
        <div class="font-16 fw-semibold">Amanda Manopo</div>
        <div class="color-grey">Pembayaran 10 buku berhasil disimpan pada tanggal 14/11/2022</div>
        <div><button class="toggle-modal color-grey border-0 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#modalBuku">Ketuk untuk melihat detail</button></div>
        <hr>
      </div>
    </div>
  </main>
@endsection
@include('dashboard.administrasi.keuangan.riwayat_transaksi.slip.seragam')
