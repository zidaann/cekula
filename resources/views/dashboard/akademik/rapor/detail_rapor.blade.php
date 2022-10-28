@extends('dashboard.main')
@section('styles')
    <style>
        form i{
            margin-left: -35px;
        }

        a:hover{
            color: #797F8F;
        }

    </style>
@endsection
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Rapor Murid</span>
    </div>
  </div>
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="text-center font-noto fw-bold fs-4 text-grey-700">Kelas 7A</div>
      <div class="row justify-content-center mt-3">
        <div class="col-md-8">
          <form class="d-flex align-items-center" role="search">
            @csrf
            <input
              class="form-control me-2 input-bg"
              type="search"
              placeholder="Cari nama murid"
              aria-label="Search"
            />
            <i class="bi bi-search"></i>
          </form>
        </div>
      </div>
      
      <div class="col-md-10 ">
        <div class="row mt-5 p-3">
          <a href="#" class="d-flex justify-content-between text-decoration-none text-grey-700 p-2 align-items-center mb-2">
            <h6>Ahmad Jourji Zaidan</h6>
            <span><i class="bi bi-chevron-right"></i></span>
          </a>
          <a href="#" class="d-flex justify-content-between text-decoration-none text-grey-700 p-2 align-items-center mb-2">
            <h6>Daryl Mahardikasiandi</h6>
            <span><i class="bi bi-chevron-right"></i></span>
          </a>
          <a href="#" class="d-flex justify-content-between text-decoration-none text-grey-700 p-2 align-items-center mb-2">
            <h6>Zaydan Muhammad El-Farrih</h6>
            <span><i class="bi bi-chevron-right"></i></span>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection