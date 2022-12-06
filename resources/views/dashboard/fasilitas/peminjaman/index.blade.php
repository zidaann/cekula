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
                        <th class="border-0" width="30%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            NAMA PEMINJAM
                          </div>
                        </th>
                        <th class="border-0" width="15%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            ID BARANG
                          </div>
                        </th>
                        <th class="border-0" width="15%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            Fasilitas
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded px-2 py-2 shadow-1">
                            JUMLAH
                          </div>
                        </th>
                        <th class="border-0" width="20%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            STATUS
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 px-2 shadow-1">
                            TANGGAL
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                        </th>
                      </tr>
                      {{-- tr content --}}
                      <tr>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14 fw-bold">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-12 text-center">BB208924</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">Bola Basket</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">1</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><span class="badge badge-berhasil font-12">Sudah Dikembalikan</span></div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">04/11/2022</div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-12">
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14 fw-bold">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-12 text-center">BB208924</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">Bola Basket</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">1</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><span class="badge badge-berhasil font-12">Sudah Dikembalikan</span></div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">04/11/2022</div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-12">
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14 fw-bold">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-12 text-center">BB208924</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">Bola Basket</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">1</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><span class="badge badge-berhasil font-12">Sudah Dikembalikan</span></div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">04/11/2022</div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-12">
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14 fw-bold">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-12 text-center">BB208924</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">Bola Basket</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">1</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><span class="badge badge-berhasil font-12">Sudah Dikembalikan</span></div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">04/11/2022</div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-12">
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
                            NAMA PEMINJAM
                          </div>
                        </th>
                        <th class="border-0" width="15%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            ID BARANG
                          </div>
                        </th>
                        <th class="border-0" width="15%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            Fasilitas
                          </div>
                        </th>
                        <th class="border-0">
                          <div class="bg-color-content rounded px-2 py-2 shadow-1">
                            JUMLAH
                          </div>
                        </th>
                        <th class="border-0" width="20%">
                          <div class="bg-color-content rounded py-2 shadow-1">
                            STATUS
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 px-2 shadow-1">
                            TANGGAL
                          </div>
                        </th>
                        <th class="border-0" width="10%">
                          <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                        </th>
                      </tr>
                      {{-- tr content --}}
                      <tr>
                        <td class="border-0">
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14 fw-bold">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-12 text-center">BB208924</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">Aula</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">1</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><span class="badge badge-berhasil font-12">Sudah Dikembalikan</span></div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">04/11/2022</div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-12">
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14 fw-bold">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-12 text-center">BB208924</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">Aula</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">1</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><span class="badge badge-berhasil font-12">Sudah Dikembalikan</span></div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">04/11/2022</div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-12">
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
                          <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-14 fw-bold">
                            Augusta Satrianto
                          </div>
                        </td>
                        <td class="border-0 text-center">
                          <div class="rounded py-2 shadow-1 w-100 font-12 text-center">BB208924</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">Aula</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">1</div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center"><span class="badge badge-berhasil font-12">Sudah Dikembalikan</span></div>
                        </td>
                        <td class="text-center border-0 shadow-1">
                          <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-12">04/11/2022</div>
                        </td>
                        <td class="text-center border-0">
                          <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-12">
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
