@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Sumbang Buku</span>
      <a href="#" class="text-white "><i class="bi bi-clock-history"></i></a>
    </div>
  </div>
  <div id="main" class="mx-3 px-4">
    <div class="row px-4 d-flex justify-content-center">
      <div class="col-12 mt-3">
        <table class="table font-noto font-16" style="border-spacing: 30px;">
          {{-- tr judul --}}
          <tr class="text-center">
            <th class="border-0" width="30%">
              <div class="bg-color-content rounded py-2 shadow-1">
                NAMA
              </div>
            </th>
            <th class="border-0">
              <div class="bg-color-content rounded py-2 shadow-1">
                ID PENYUMBANG
              </div>
            </th>
            <th class="border-0" width="20%">
              <div class="bg-color-content rounded py-2 shadow-1">
                JUDUL BUKU
              </div>
            </th>
            <th class="border-0" width="12%">
              <div class="bg-color-content rounded py-2 shadow-1">
                ID BUKU
              </div>
            </th>
            <th class="border-0" width="10%">
              <div class="bg-color-content rounded py-2 shadow-1">
                TANGGAL
              </div>
            </th>
            <th class="border-0" width="8%">
              <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
            </th>
          </tr>
          {{-- tr content --}}
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                Zada Alfaraz
              </div>
            </td>
            <td class="border-0 text-center">
              <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">
                202089212
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                Man's Searching For Meaning
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                0001000052
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14 px-2">
                02/08/2022
              </div>
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
                Zada Alfaraz
              </div>
            </td>
            <td class="border-0 text-center">
              <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">
                202089212
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                Man's Searching For Meaning
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                0001000052
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14 px-2">
                02/08/2022
              </div>
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
                Zada Alfaraz
              </div>
            </td>
            <td class="border-0 text-center">
              <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">
                202089212
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                Man's Searching For Meaning
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                0001000052
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14 px-2">
                02/08/2022
              </div>
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
                Zada Alfaraz
              </div>
            </td>
            <td class="border-0 text-center">
              <div class="rounded py-2 shadow-1 w-100 font-14 text-center color-blue">
                202089212
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                Man's Searching For Meaning
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                0001000052
              </div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14 px-2">
                02/08/2022
              </div>
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
    <div class="btn-add">
      <a href="#">
        <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
      </a>
    </div>
  </div>
@endsection
