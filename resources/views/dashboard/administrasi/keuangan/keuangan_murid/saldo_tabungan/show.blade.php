@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Saldo Tabungan</span>
    </div>
  </div>
  <main class="mb-4">
    <div class="row justify-content-center">
      <div class="col-10 box-shadow rounded mb-5">
        <div class="d-flex align-items-center">
          <img src="/assets/img/profil.png" alt="foto-profil" class="mx-2 rounded-circle" width="50px" height="50px">
          <div class="mx-2 my-2">
            <div class="font-noto fw-semibold font-16">Dini Anjani</div>
            <div class="font-noto font-14" style="color: #A6AAB4;">Murid</div>
            <div class="font-noto font-14" style="color: #A6AAB4;">202234567</div>
          </div>
        </div>
      </div>
      <div class="col-10 box-shadow rounded-3 bg-color-content mb-4">
        <div class="text-center py-3">
          <div class="font-noto font-16 mb-2">Saldo Tabungan :</div>
          <div class="font-rubik font-16 color-blue">RP 200.000</div>
        </div>
      </div>
      <div class="col-10 font-noto d-flex justify-content-between align-items-center mb-5">
        <div class="font-16">Riwayat Transaksi</div>
        <div class="font-12 color-blue">Lihat Semua</div>
      </div>
      <div class="col-10">
        <div class="font-noto w-100 p-2 rounded box-shadow">
          <div class="d-flex justify-content-between">
            <div class="font-16 fw-semibold">Tabungan Masuk</div>
            <div class="font-14">Rp.8.000</div>
          </div>
          <hr>
          <div class="d-flex justify-content-between font-14">
            <div style="color: #A6AAB4">Tabungan sebesar Rp 8.000 berhasil disimpan pada tanggal 14/11/2022.</div>
            <span class="badge badge-berhasil rounded">Berhasil</span>
          </div>
        </div>
      </div>
      <div class="col-10">
        <div class="font-noto w-100 p-2 rounded box-shadow">
          <div class="d-flex justify-content-between">
            <div class="font-16 fw-semibold">Tabungan Masuk</div>
            <div class="font-14">Rp.10.000</div>
          </div>
          <hr>
          <div class="d-flex justify-content-between font-14">
            <div style="color: #A6AAB4">Tabungan sebesar Rp 10.000 berhasil disimpan pada tanggal 14/11/2022.</div>
            <span class="badge badge-berhasil rounded">Berhasil</span>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
