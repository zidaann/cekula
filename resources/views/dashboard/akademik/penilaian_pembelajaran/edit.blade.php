@extends('dashboard.main')
@section('content')
  <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
        <a href="#" class="text-white"><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Nilai Tugas</span>
      </div>
    </div>
    <div id="main" class="mx-3 px-4">
      <div>
        <div class="text-center font-noto font-20 fw-bold">Kelas 9A</div>
        <div class="text-center font-noto font-20 fw-bold">
          Bahasa Indonesia
        </div>
      </div>
      <div class="d-flex justify-content-between font-noto fw-bold mx-2">
        <div>Guru Mata Pelajaran</div>
        <div>Hilda Nathaniela</div>
      </div>
      <div>
        <table class="table font-noto font-16">
          <tr class="text-center">
            <th class="border-0">
              <div class="bg-color-content rounded py-2 shadow-1">
                NAMA MURID
              </div>
            </th>
            <th colspan="2" class="border-0">
              <div class="bg-color-content rounded py-2 shadow-1">NILAI</div>
            </th>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">90</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded py-2 shadow-1">
                <a href="#" class="text-black"
                  ><i class="bi bi-pencil-square"></i
                ></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">90</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded py-2 shadow-1">
                <a href="#" class="text-black"
                  ><i class="bi bi-pencil-square"></i
                ></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">90</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded py-2 shadow-1">
                <a href="#" class="text-black"
                  ><i class="bi bi-pencil-square"></i
                ></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">90</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded py-2 shadow-1">
                <a href="#" class="text-black"
                  ><i class="bi bi-pencil-square"></i
                ></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">90</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded py-2 shadow-1">
                <a href="#" class="text-black"
                  ><i class="bi bi-pencil-square"></i
                ></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">90</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded py-2 shadow-1">
                <a href="#" class="text-black"
                  ><i class="bi bi-pencil-square"></i
                ></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">90</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded py-2 shadow-1">
                <a href="#" class="text-black"
                  ><i class="bi bi-pencil-square"></i
                ></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border-0">
              <div class="rounded py-2 shadow-1 ps-2">Ahmad Jourji Zaidan</div>
            </td>
            <td class="text-center border-0 shadow-1">
              <div class="rounded py-2 shadow-1">90</div>
            </td>
            <td class="text-center border-0">
              <div class="rounded py-2 shadow-1">
                <a href="#" class="text-black"
                  ><i class="bi bi-pencil-square"></i
                ></a>
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