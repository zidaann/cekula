@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Transfer Bank</span>
    </div>
  </div>
  <div id="main" class="mx-3 px-4">
    <div class="row justify-content-center">
      <div class="col-11">
        <div class="w-100 p-2 rounded box-shadow">
          <div class="d-flex justify-content-between">
            <div class="font-rubik font-16 fw-semibold">Total</div>
            <div class="d-flex font-14 align-items-center">
              <div class="font-noto">Pilih dalam &nbsp;</div>
              <div class="text-danger font-rubik">23:59:35</div>
            </div>
          </div>
          <div class="font-rubik font-14">Rp.500.000</div>
          <div class="font-noto font-12">20227AGTFR</div>
        </div>
      </div>
    </div>
    <div class="row px-5 justify-content-center mt-3">
      <div class="col-11 font-14">
        <div class="font-rubik d-flex justify-content-between align-items-center my-2">
          <div>Bank BCA</div>
          <img src="/assets/img/bank/bca.png" alt="BCA">
        </div>
        <div class="font-noto d-flex justify-content-between align-items-center my-2">
          <div class="w-50">
            Lakukan pembayaran dari rekening bank BCA ke nomor virtual account di bawah ini :
          </div>
        </div>
        <div class="font-noto align-items-center my-2">
          <div class="fw-semibold">Nomor Virtual Account</div>
          <div class="d-flex justify-content-between">
            <div id="no_va">86758990012808399</div>
            <button type="button" class="color-blue fw-bold border-0 btn font-14" onclick="copy()">Salin</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('script')
  <script>
    function copy() {
      var teks = document.getElementById('no_va');
      window.getSelection().selectAllChildren(teks);
      document.execCommand("Copy")
    }
  </script>
@endpush
