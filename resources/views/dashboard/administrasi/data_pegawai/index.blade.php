@extends('dashboard.main')
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Data Pegawai</span>
    </div>
  </div>
  <main>
    <div class="container">
        <div class="row justify-content-center ">
          <div class="col-md-11">
            <div class="fasilitas-bar">
              <div class="fasilitas">
                <div class="fasilitas-head">
                  <span class="fasilitas-toggle is-active">Data Pegawai</span>
                  <span class="fasilitas-toggle">Data Guru</span>
                </div>
                <div class="fasilitas-search">
                  <div class="row justify-content-center">
                    <div class="col-md-10">
                      <form class="d-flex align-items-center" role="search">
                        <input
                          class="form-control me-2 input-bg"
                          type="search"
                          placeholder="Cari nama"
                          aria-label="Search"
                        />
                        <i class="bi bi-search"></i>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="fasilitas-body">
                  <div class="fasilitas-content is-active">
                    <div>
                        <table class="table font-noto font-16">
                            {{-- tr judul --}}
                            <tr class="text-center">
                              <th class="border-0" style="width: 100px;">
                                <div class="bg-color-content rounded py-2 shadow-1">
                                  FOTO
                                </div>
                              </th>
                              <th class="border-0">
                                <div class="bg-color-content rounded py-2 shadow-1">
                                  NAMA PEGAWAI
                                </div>
                              </th>
                              <th class="border-0">
                                <div class="bg-color-content rounded py-2 shadow-1">
                                  NIP
                                </div>
                              </th>
                              <th class="border-0">
                                <div class="bg-color-content rounded py-2 shadow-1">
                                  JABATAN
                                </div>
                              </th>
                              <th class="border-0">
                                <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                              </th>
                            </tr>
                            {{-- tr content --}}
                            <tr>
                              <td class="border-0">
                                <div class="rounded shadow-1 d-flex justify-content-center align-items-center" style="height: 100px">
                                    <img class="rounded-4" src="/assets/img/profil.png" alt="#" style="width: 80px; height: 80px;">
                                </div>
                              </td>
                              <td class="border-0">
                                <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center" style="height: 100px">Amanda Manopo, S.Pd.</div>
                              </td>
                              <td class="text-center border-0 shadow-1">
                                <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">20223456</div>
                              </td>
                              <td class="text-center border-0 shadow-1">
                                <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">Admin</div>
                              </td>
                              <td class="text-center border-0">
                                <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center" style="height: 100px">
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
                                <div class="rounded shadow-1 d-flex justify-content-center align-items-center" style="height: 100px">
                                    <img class="rounded-4" src="/assets/img/profil.png" alt="#" style="width: 80px; height: 80px;">
                                </div>
                              </td>
                              <td class="border-0">
                                <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center" style="height: 100px">Amanda Manopo, S.Pd.</div>
                              </td>
                              <td class="text-center border-0 shadow-1">
                                <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">20223456</div>
                              </td>
                              <td class="text-center border-0 shadow-1">
                                <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">Admin</div>
                              </td>
                              <td class="text-center border-0">
                                <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center" style="height: 100px">
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
                                <div class="rounded shadow-1 d-flex justify-content-center align-items-center" style="height: 100px">
                                    <img class="rounded-4" src="/assets/img/profil.png" alt="#" style="width: 80px; height: 80px;">
                                </div>
                              </td>
                              <td class="border-0">
                                <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center" style="height: 100px">Amanda Manopo, S.Pd.</div>
                              </td>
                              <td class="text-center border-0 shadow-1">
                                <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">20223456</div>
                              </td>
                              <td class="text-center border-0 shadow-1">
                                <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">Admin</div>
                              </td>
                              <td class="text-center border-0">
                                <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center" style="height: 100px">
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
                  <div class="fasilitas-content">
                    <div>
                        <table class="table font-noto font-16">
                            {{-- tr judul --}}
                            <tr class="text-center">
                              <th class="border-0" style="width: 100px;">
                                <div class="bg-color-content rounded py-2 shadow-1">
                                  FOTO
                                </div>
                              </th>
                              <th class="border-0">
                                <div class="bg-color-content rounded py-2 shadow-1">
                                  NAMA PEGAWAI
                                </div>
                              </th>
                              <th class="border-0">
                                <div class="bg-color-content rounded py-2 shadow-1">
                                  NIP
                                </div>
                              </th>
                              <th class="border-0">
                                <div class="bg-color-content rounded py-2 shadow-1">
                                  JABATAN
                                </div>
                              </th>
                              <th class="border-0">
                                <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                              </th>
                            </tr>
                            {{-- tr content --}}
                            <tr>
                                <td class="border-0">
                                  <div class="rounded shadow-1 d-flex justify-content-center align-items-center" style="height: 100px">
                                      <img class="rounded-4" src="/assets/img/profil.png" alt="#" style="width: 80px; height: 80px;">
                                  </div>
                                </td>
                                <td class="border-0">
                                  <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center" style="height: 100px">Amanda Manopo, S.Pd.</div>
                                </td>
                                <td class="text-center border-0 shadow-1">
                                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">20223456</div>
                                </td>
                                <td class="text-center border-0 shadow-1">
                                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">Admin</div>
                                </td>
                                <td class="text-center border-0">
                                  <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center" style="height: 100px">
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
                                  <div class="rounded shadow-1 d-flex justify-content-center align-items-center" style="height: 100px">
                                      <img class="rounded-4" src="/assets/img/profil.png" alt="#" style="width: 80px; height: 80px;">
                                  </div>
                                </td>
                                <td class="border-0">
                                  <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center" style="height: 100px">Amanda Manopo, S.Pd.</div>
                                </td>
                                <td class="text-center border-0 shadow-1">
                                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">20223456</div>
                                </td>
                                <td class="text-center border-0 shadow-1">
                                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">Admin</div>
                                </td>
                                <td class="text-center border-0">
                                  <div class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center" style="height: 100px">
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
            <a href="{{ route('fasilitas.peminjaman.create') }}">
            <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
            </a>
      </div>
    </div>
  </main>
@endsection