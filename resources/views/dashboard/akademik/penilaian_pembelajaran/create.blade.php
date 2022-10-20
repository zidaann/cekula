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
      @include('dashboard.akademik.penilaian_pembelajaran._form.form')
    </div>
    <div class="btn-add">
        <a href="{{ route('jadwal_sekolah.create') }}">
        <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
    </div>
@endsection