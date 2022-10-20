@extends('dashboard.main')
@section('content')
    <div class="header-schedule">
        <div class="d-flex align-items-center px-4">
            <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
            <span class="text-white mx-auto">Penilaian Pembelajaran</span>
    </div>
    </div>
    <div class="d-flex justify-content-center">
        <span class="font-16 font-noto fw-semibold pb-4">Ahmad Jourji Zaidan</span>
    </div>
    <div class="mt-1 h-100 mx-5">
        <table class="table">
            <thead>
              <tr>
                <th>Nama Mata Pelajaran</th>
                <th>Nilai Tugas</th>
                <th>Nilai Ujian</th>
                <th>Nilai Akhir</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th>2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th>3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="btn-add">
        <a href="{{ route('jadwal_sekolah.create') }}">
        <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
    </div>
@endsection