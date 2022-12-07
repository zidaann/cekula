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
      <span class="text-white mx-auto">Daftar Fasilitas</span>
      <a href="#" class="text-white "><i class="bi bi-clock-history"></i></a>
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
                        <th class="border-0" width="50%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NAMA BARANG
                          </div>
                        </th>
                        <th class="border-0" width="20%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            ID BARANG
                          </div>
                        </th>
                        <th class="border-0" width="15%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            JUMLAH
                          </div>
                        </th>
                        <th class="border-0" width="15%">
                          <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                        </th>
                      </tr>
                      {{-- tr content --}}
                      <tr>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                            Proyektor
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">PR00001</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">3</div>
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                            Proyektor
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">PR00001</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">3</div>
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                            Proyektor
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">PR00001</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">3</div>
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                            Proyektor
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">PR00001</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">3</div>
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
                        <th class="border-0" width="50%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NAMA RUANGAN
                          </div>
                        </th>
                        <th class="border-0" width="20%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            ID RUANGAN
                          </div>
                        </th>
                        <th class="border-0" width="15%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            JUMLAH
                          </div>
                        </th>
                        <th class="border-0" width="15%">
                          <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                        </th>
                      </tr>
                      {{-- tr content --}}
                      <tr>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                            Aula
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">PR00001</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">3</div>
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                            Aula
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">PR00001</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">3</div>
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                            Aula
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">PR00001</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">3</div>
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
