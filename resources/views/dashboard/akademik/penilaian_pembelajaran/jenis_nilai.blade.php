@extends('dashboard.main')
@section('content')
    <div class="header-schedule">
        <div class="d-flex align-items-center px-4">
            <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
            <span class="text-white mx-auto">Penilaian Pembelajaran</span>
        </div>
    </div>
    <div class="main">
        <div class="px-5 mx-3">
            <div class="container d-flex px-2 justify-content-between font-16 font-noto fw-semibold">
                <div>Kelas 9A</div>
                <div>Bahasa Indonesia</div>
            </div>
        </div>
        <div class="container mt-4 font-noto font-16">
            <div class="row justify-content-center">
                <div class="col-11">
                    <a href="#" class="text-decoration-none w-100 d-flex justify-content-between btn btn-light bg-transparent">
                        <div>
                            <span>Nilai Tugas</span>
                        </div>
                        <div>
                            <span><i class="bi bi-chevron-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11">
                    <a href="#" class="text-decoration-none w-100 d-flex justify-content-between btn btn-light bg-transparent">
                        <div>
                            <span>Nilai Ujian Tengah Semester</span>
                        </div>
                        <div>
                            <span><i class="bi bi-chevron-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11">
                    <a href="#" class="text-decoration-none w-100 d-flex justify-content-between btn btn-light bg-transparent">
                        <div>
                            <span>Nilai Ujian Akhir Semester</span>
                        </div>
                        <div>
                            <span><i class="bi bi-chevron-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-add">
        <a href="#">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
@endsection