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
      <div class="col-11 p-3 px-4 btn btn-light bg-white">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <div class="d-flex align-items-center">
            <div style="width: 80px"><img src="/assets/img/bank/bca.png" alt="BCA"></div>
            <div class="font-noto fw-semibold font-16">Bank BCA</div>
          </div>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-11 p-3 px-4 btn btn-light bg-white ">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <div class="d-flex align-items-center">
            <div style="width: 80px"><img src="/assets/img/bank/mandiri.png" alt="BCA"></div>
            <div class="font-noto fw-semibold font-16">Bank Mandiri</div>
          </div>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-11 p-3 px-4 btn btn-light bg-white">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <div class="d-flex align-items-center">
            <div style="width: 80px"><img src="/assets/img/bank/bri.png" alt="BCA"></div>
            <div class="font-noto fw-semibold font-16">Bank BRI</div>
          </div>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
      <div class="col-11 p-3 px-4 btn btn-light bg-white">
        <a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
          <div class="d-flex align-items-center">
            <div style="width: 80px"><img src="/assets/img/bank/bni.png" alt="BCA"></div>
            <div class="font-noto fw-semibold font-16">Bank BNI</div>
          </div>
          <span><i class="bi bi-chevron-right"></i></span>
        </a>
      </div>
    </div>
  </div>
@endsection
