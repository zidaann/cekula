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
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Pemasukan dan Pengeluaran Sekolah</span>
    </div>
  </div>
  <main class="mb-4">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-11">
          <div class="tabs-bar">
            <div class="fasilitas">
              <div class="tabs-head">
                <span class="tabs-toggle is-active">Pemasukan</span>
                <span class="tabs-toggle">Pengeluaran</span>
              </div>
              <div class="tabs-search mt-3">
                <div class="row justify-content-center">
                  <div class="col-md-10">
                    <form class="d-flex align-items-center" role="search">
                      <input class="form-control me-2 input-bg" type="search" placeholder="Cari nama" aria-label="Search" />
                      <i class="bi bi-search"></i>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tabs-body">
                <div class="tabs-content is-active">
                  <div>
                    <table class="table font-noto font-16">
                      {{-- tr judul --}}
                      <tr class="text-center">
                        <th class="border-0" width="30%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NAMA SPONSOR
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            TANGGAL
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            JUMLAH
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            KETERANGAN
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            BUKTI
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                        </th>
                      </tr>
                      {{-- tr content --}}
                      <tr>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center font-14">15/12/2022</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Rp. 50.000.000</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pemasuakkan Eksternal</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><a href="#" class="text-decoration-none color-blue font-14">Lihat Bukti</a></div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-14">
                            <a href="#" class="text-black">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="#" class="text-black">
                              <i class="bi bi-trash"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center font-14">15/12/2022</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Rp. 50.000.000</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pemasuakkan Eksternal</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><a href="#" class="text-decoration-none color-blue font-14">Lihat Bukti</a></div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-14">
                            <a href="#" class="text-black">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="#" class="text-black">
                              <i class="bi bi-trash"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center font-14">15/12/2022</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Rp. 50.000.000</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pemasuakkan Eksternal</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><a href="#" class="text-decoration-none color-blue font-14">Lihat Bukti</a></div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-14">
                            <a href="#" class="text-black">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="#" class="text-black">
                              <i class="bi bi-trash"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="tabs-content">
                  <div>
                    <table class="table font-noto font-16">
                      {{-- tr judul --}}
                      <tr class="text-center">
                        <th class="border-0" width="30%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NAMA SPONSOR
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            TANGGAL
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            JUMLAH
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            KETERANGAN
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            BUKTI
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                        </th>
                      </tr>
                      {{-- tr content --}}
                      <tr>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center font-14">15/12/2022</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Rp. 50.000.000</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pemasuakkan Eksternal</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><a href="#" class="text-decoration-none color-blue font-14">Lihat Bukti</a></div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-14">
                            <a href="#" class="text-black">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="#" class="text-black">
                              <i class="bi bi-trash"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-add">
        <a href="#">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
    </div>
  </main>
  <div class="btn-add">
    <a href="#">
      <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
    </a>
  </div>
@endsection
@push('script')
  <script src="/assets/js/tab-bar.js"></script>
@endpush
