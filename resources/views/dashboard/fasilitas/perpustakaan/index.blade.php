@extends('dashboard.main')
@section('styles')
    <style>
        a:hover{
            color: #797F8F;
        }
    </style>
@endsection
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Perpustakaan</span>
    </div>
  </div>
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 ">
        <div class="row mt-5 p-3">
          <a href="#" class="d-flex justify-content-between text-decoration-none text-grey-700 p-2 align-items-center mb-3 rounded box-shadow p-3">
            <h6>Peminjaman & Pengembalian Buku</h6>
            <span><i class="bi bi-chevron-right"></i></span>
          </a>
          <a href="#" class="d-flex justify-content-between text-decoration-none text-grey-700 p-2 align-items-center mb-3 rounded box-shadow p-3">
            <h6>Denda Keterlambatan & Hilang</h6>
            <span><i class="bi bi-chevron-right"></i></span>
          </a>
          <a href="#" class="d-flex justify-content-between text-decoration-none text-grey-700 p-2 align-items-center mb-3 rounded box-shadow p-3">
            <h6>Sumbang Buku</h6>
            <span><i class="bi bi-chevron-right"></i></span>
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12 col-sm-12 py-4 text-center text-grey-600 font-noto">
        <img src="/assets/img/dashboard/perpustakaan/ilustrasi_perpustakaan.png" class="img-fluid" width="350">
        <h6 class="mt-3">Pilih menu perpustakaan terlebih dahulu</h6>
      </div>
  </div>
  </div>
@endsection