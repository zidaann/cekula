@extends('dashboard.main')
@section('content')
  <div class="header-schedule">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Presensi Murid</span>
    </div>
  </div>

  <main class="mb-4">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-11">
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
                    NAMA MURID
                  </div>
                </th>
                <th class="border-0">
                  <div class="bg-color-content rounded py-2 shadow-1">
                    NIS
                  </div>
                </th>
                <th class="border-0">
                  <div class="bg-color-content rounded py-2 shadow-1">
                    JAM
                  </div>
                </th>
                <th class="border-0">
                  <div class="bg-color-content rounded py-2 shadow-1">
                    KETERANGAN
                  </div>
                </th>
                <th class="border-0">
                  <div class="bg-color-content rounded py-2 shadow-1">
                    KETERANGAN
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
                  <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center" style="height: 100px">Arya Dwi Rohman</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">201987111</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">07 : 32</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">Hadir</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">04/11/2022</div>
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
                  <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center" style="height: 100px">Arya Dwi Rohman</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">201987111</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">07 : 32</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">Hadir</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">04/11/2022</div>
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
                  <div class="rounded py-2 shadow-1 ps-2 w-100 d-flex align-items-center" style="height: 100px">Arya Dwi Rohman</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">201987111</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">07 : 32</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">Hadir</div>
                </td>
                <td class="text-center border-0 shadow-1">
                  <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center" style="height: 100px">04/11/2022</div>
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
          <div class="btn-add">
            <a href="#">
              <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
