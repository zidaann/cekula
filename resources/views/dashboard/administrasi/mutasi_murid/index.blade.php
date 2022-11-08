@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
        <span class="text-white mx-auto">Data Mutasi Murid</span>
      </div>
    </div>
    <div id="main" class="mx-3 px-4">
        <div class="mb-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                <form class="d-flex align-items-center" role="search">
                    <input
                    class="form-control me-2 input-bg"
                    type="search"
                    placeholder="Cari nama murid"
                    aria-label="Search"
                    />
                    <i class="bi bi-search" style="margin-left: -40px;"></i>
                </form>
                </div>
            </div>
        </div>
      <div>
        <table class="table font-noto font-16">
          <tr class="text-center">
            <th class="border-0">
              <div class="bg-color-content rounded py-2 shadow-1">
                NAMA MURID
              </div>
            </th>
            <th class="border-0">
              <div class="bg-color-content rounded py-2 shadow-1">
                NISN
              </div>
            </th>
            <th class="border-0">
              <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
            </th>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">201989238</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded d-flex justify-content-around py-2 shadow-1">
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
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">201989238</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded d-flex justify-content-around py-2 shadow-1">
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
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">201989238</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded d-flex justify-content-around py-2 shadow-1">
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
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">201989238</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded d-flex justify-content-around py-2 shadow-1">
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
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">201989238</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded d-flex justify-content-around py-2 shadow-1">
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
        <a href="{{ route('jadwal_sekolah.create') }}">
        <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
    </div>
@endsection