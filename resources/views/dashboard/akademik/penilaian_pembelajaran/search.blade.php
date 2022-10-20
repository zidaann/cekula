@extends('dashboard.main')
@section('content')
    <div class="header-schedule">
        <div class="d-flex align-items-center px-4">
            <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
            <span class="text-white mx-auto">Penilaian Pembelajaran</span>
    </div>
    </div>
    <div class="d-flex justify-content-center">
        <span class="font-24 font-noto fw-semibold pb-4">Kelas 9A</span>
    </div>
    <div>
        <div class="fasilitas-search">
            <div class="row justify-content-center">
                <div class="col-md-10">
                <form class="d-flex align-items-center " role="search">
                    <input class="form-control me-2 input-bg-grey" type="search" placeholder="Cari nama murid" aria-label="Search">
                    <i class="bi bi-search"></i>
                </form>
            </div>
        </div>
    <div class="container mt-4 font-noto font-16">
        <div class="row justify-content-center">
            <div class="col-11">
                <a href="#" class="text-decoration-none w-100 d-flex justify-content-between btn btn-light bg-transparent">
                    <div>
                        <span>Ahmad Jourji Zaidan</span>
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
                        <span>Ahmad Jourji Zaidan</span>
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
                        <span>Ahmad Jourji Zaidan</span>
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
                        <span>Ahmad Jourji Zaidan</span>
                    </div>
                    <div>
                        <span><i class="bi bi-chevron-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="btn-add">
        <a href="{{ route('jadwal_sekolah.create') }}">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
@endsection