@extends('dashboard.main')
@section('styles')
  <link rel="stylesheet" href="/assets/css/tab-bar.css">
@endsection
@push('script')
  <script src="/assets/js/tab-bar.js"></script>
@endpush
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <span class="text-white mx-auto">Peminjaman Fasilitas</span>
      <a href="#" class="text-white "><i class="bi bi-clock-history"></i></a>
    </div>
  </div>
  <main class="mb-4">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-11">
          <div class="text-center mb-5 font-noto font-24 fw-semibold">
            Ahmad Jourji Zaidan
          </div>
          <div class="d-flex justify-content-center print-container">
            <div class="ktp d-flex align-items-center justify-content-center rounded-4" style="width: 630px; height: 380px;">
              <div>
                <div class="d-flex align-items-center justify-content-center px-3">
                  <div class="rounded-circle"><img src="/assets/img/kartu_digital/pp.png" class="img-fluid"></div>
                  <div class="ms-3 font-noto fw-semibold">
                    <h6 class="text-center font-noto fw-semibold font-16">Ahmad Jourji Zaidan</h6>
                    <h6 class="text-center font-noto fw-semibold font-16">Murid SMPN 1 Cekula</h6>
                  </div>
                </div>
                <div class="d-flex justify-content-center px-4 mx-5">
                  <div>
                    <table class="small font-rubik">
                      <ul>
                        <tr>
                          <td class="fw-semibold">NIS</td>
                          <td>: 2022345678</td>
                        </tr>
                        <tr>
                          <td class="fw-semibold">Tempat, Tanggal Lahir</td>
                          <td>: Kediri, 15 Agustus 2004</td>
                        </tr>
                        <tr>
                          <td class="fw-semibold">Alamat</td>
                          <td>: Ds. Bangkok, Kec. Gurah, Kab. Kediri</td>
                        </tr>
                      </ul>
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
