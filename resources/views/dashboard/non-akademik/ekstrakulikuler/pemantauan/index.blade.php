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
      <span class="text-white mx-auto">Pemantauan Ekstrakurikuler</span>
    </div>
  </div>
  <main class="mb-4">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-11">
          <div class="tabs-bar">
            <div class="fasilitas">
              <div class="tabs-head">
                <span class="tabs-toggle is-active">Daftar Ekstra</span>
                <span class="tabs-toggle">Penilaian Ekstra</span>
              </div>
              <div class="tabs-body">
                <div class="tabs-content is-active">
                  <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                      <a href="#" class="text-decoration-none">
                        <div class="card border-0 py-3 box-shadow">
                          <div class="text-center">
                            <img src="/assets/svg/pramuka.svg" class="card-img-top img-fluid mx-auto" style="height: 200px;">
                          </div>
                          <div class="card-body">
                            <div class="card-title fw-bold fs-5">Ekstrakurikuler Pramuka</div>
                            <p>Nama_Guru </p>
                            <p>Jadwal : Hari Jumat, 13:00-15:00</p>
                          </div>
                          <div class="card-action d-flex align-items-center float-end">
                            <a href="#" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                            <form id="#" action="#" method="post">
                              @csrf
                              @method('DELETE')
                            </form>
                            <button onclick="#" class="border-0"><i class="bi bi-trash"></i>
                            </button>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                      <a href="#" class="text-decoration-none">
                        <div class="card border-0 py-3 box-shadow">
                          <div class="text-center">
                            <img src="/assets/svg/pmr.svg" class="card-img-top img-fluid mx-auto" style="height: 200px;">
                          </div>
                          <div class="card-body">
                            <div class="card-title fw-bold fs-5">Ekstrakurikuler PMR</div>
                            <p>Nama_Guru </p>
                            <p>Jadwal : Hari Jumat, 13:00-15:00</p>
                          </div>
                          <div class="card-action d-flex align-items-center float-end">
                            <a href="#" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                            <form id="#" action="#" method="post">
                              @csrf
                              @method('DELETE')
                            </form>
                            <button onclick="#" class="border-0"><i class="bi bi-trash"></i>
                            </button>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                      <a href="#" class="text-decoration-none">
                        <div class="card border-0 py-3 box-shadow">
                          <div class="text-center">
                            <img src="/assets/svg/olimpiade.svg" class="card-img-top img-fluid mx-auto" style="height: 200px;">
                          </div>
                          <div class="card-body">
                            <div class="card-title fw-bold fs-5">Ekstrakurikuler Olimpiade</div>
                            <p>Nama_Guru </p>
                            <p>Jadwal : Hari Jumat, 13:00-15:00</p>
                          </div>
                          <div class="card-action d-flex align-items-center float-end">
                            <a href="#" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                            <form id="#" action="#" method="post">
                              @csrf
                              @method('DELETE')
                            </form>
                            <button onclick="#" class="border-0"><i class="bi bi-trash"></i>
                            </button>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="tabs-content">
                  <div class="tabs-search mb-4" style="margin-top: -10px">
                    <div class="row justify-content-center">
                      <div class="col-md-10">
                        <form class="d-flex align-items-center" role="search">
                          <input class="form-control me-2 input-bg" type="search" placeholder="Cari nama" aria-label="Search" />
                          <i class="bi bi-search"></i>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div>
                    <table class="table font-noto font-16">
                      {{-- tr judul --}}
                      <tr class="text-center">
                        <th class="border-0" width="40%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NAMA MURID
                          </div>
                        </th>
                        <th class="border-0" width="12%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NIS
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NAMA EKSTRAKURIKULER
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NILAI
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
                          <div class="rounded py-2 shadow-1 w-100 d-flex align-items-center font-14 text-center justify-content-center">201989238</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pramuka</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">B</div>
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
                          <div class="rounded py-2 shadow-1 w-100 d-flex align-items-center font-14 text-center justify-content-center">201989238</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pramuka</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">B</div>
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
                          <div class="rounded py-2 shadow-1 w-100 d-flex align-items-center font-14 text-center justify-content-center">201989238</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pramuka</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">B</div>
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
                          <div class="rounded py-2 shadow-1 w-100 d-flex align-items-center font-14 text-center justify-content-center">201989238</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pramuka</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">B</div>
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
                          <div class="rounded py-2 shadow-1 w-100 d-flex align-items-center font-14 text-center justify-content-center">201989238</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">Pramuka</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">B</div>
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
