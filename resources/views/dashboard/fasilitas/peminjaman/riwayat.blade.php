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
      <a href="{{ route('fasilitas.peminjaman.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Peminjaman Fasilitas</span>
    </div>
  </div>
  <main class="mb-4">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-11">
          <div class="tabs-bar">
            <div class="fasilitas">
              <div class="tabs-head">
                <span class="tabs-toggle is-active">Barang</span>
                <span class="tabs-toggle">Ruangan</span>
              </div>
              <div class="tabs-body">
                <div class="tabs-content is-active">
                  <div class="row d-flex justify-content-between">
                    <div class="col-12 col-md-6 g-0 mb-3">
                      <div class="rounded shadow-1 px-3 py-2 mx-2">
                        <div class="d-flex justify-content-between align-items-center font-noto mb-2">
                          <span class="font-14 fw-semibold">Augusta Satrianto</span>
                          <span class="font-12">03 Aug 2022</span>
                        </div>
                        <div>
                          <div class="color-grey font-14">
                            Peminjaman 1 Proyektor berhasil disimpan pada tanggal 03/08/2022.
                          </div>
                        </div>
                        <div class="mb-2"><a href="#" class="color-grey font-14 text-decoration-none">Ketuk untuk melihat detail</a></div>
                        <div class="d-flex justify-content-end">
                          <span class="badge badge-error">Belum Dikembalikan</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 g-0 mb-3">
                      <div class="rounded shadow-1 px-3 py-2 mx-2"">
                        <div class="d-flex justify-content-between align-items-center font-noto mb-2">
                          <span class="font-14 fw-semibold">Edwin Fatkhur Rozi</span>
                          <span class="font-12">02 Aug 2022</span>
                        </div>
                        <div>
                          <div class="color-grey font-14">
                            Peminjaman 1 Bola Basket berhasil disimpan pada tanggal 02/08/2022.
                          </div>
                        </div>
                        <div class="mb-2"><a href="#" class="color-grey font-14 text-decoration-none">Ketuk untuk melihat detail</a></div>
                        <div class="d-flex justify-content-end">
                          <span class="badge badge-berhasil">Sudah Dikembalikan</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabs-content">
                  <div class="row d-flex justify-content-between">
                    <div class="col-12 col-md-6 g-0 mb-3">
                      <div class="rounded shadow-1 px-3 py-2 mx-2"">
                        <div class="d-flex justify-content-between align-items-center font-noto mb-2">
                          <span class="font-14 fw-semibold">Yuni Hidayati, S.pd </span>
                          <span class="font-12">03 Aug 2022</span>
                        </div>
                        <div>
                          <div class="color-grey font-14">
                            Peminjaman 1 Kelas 7A berhasil disimpan pada tanggal 03/08/2022.
                          </div>
                        </div>
                        <div class="mb-2"><a href="#" class="color-grey font-14 text-decoration-none">Ketuk untuk melihat detail</a></div>
                        <div class="d-flex justify-content-end">
                          <span class="badge badge-berhasil">Sudah Dikembalikan</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 g-0 mb-3">
                      <div class="rounded shadow-1 px-3 py-2 mx-2"">
                        <div class="d-flex justify-content-between align-items-center font-noto mb-2">
                          <span class="font-14 fw-semibold">M Faisal Yusuf, S.pd</span>
                          <span class="font-12">02 Aug 2022</span>
                        </div>
                        <div>
                          <div class="color-grey font-14">
                            Peminjaman 1 Kelas 9A berhasil disimpan pada tanggal 02/08/2022.
                          </div>
                        </div>
                        <div class="mb-2"><a href="#" class="color-grey font-14 text-decoration-none">Ketuk untuk melihat detail</a></div>
                        <div class="d-flex justify-content-end">
                          <span class="badge badge-berhasil">Sudah Dikembalikan</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
@push('script')
  <script src="/assets/js/tab-bar.js"></script>
@endpush
