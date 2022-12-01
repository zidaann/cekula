@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Cekupay</span>
    </div>
  </div>
  <main class="mb-4">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="w-100 p-2 rounded box-shadow">
          <div class="d-flex justify-content-between">
            <div class="font-rubik font-16 fw-semibold">Total</div>
            <div class="d-flex font-14 align-items-center">
              <div class="font-noto">Pilih dalam &nbsp;</div>
              <div class="text-danger font-rubik">23:59:35</div>
            </div>
          </div>
          <div class="font-rubik font-14">Rp.30.000</div>
          <div class="font-noto font-12">20227AGTFR</div>
        </div>
      </div>
    </div>
    <div class="font-16 font-noto my-5 text-center">Scan disini untuk bayar</div>
    <div class="d-flex justify-content-center">
      <div class="p-5 rounded" style="background: #EDF1F7">
        <img src="/assets/img/qr.png" alt="qr">
      </div>
    </div>
    <div class="my-4">
      <div class="d-flex justify-content-center">
        <button class="btn-blue rounded px-4 py-2 d-flex font-rubik font-16 fw-semibold text-white" type="button">
          <div class="text-center mx-5 px-3">Simpan Pembayaran</div>
        </button>
      </div>
    </div>
  </main>
@endsection
