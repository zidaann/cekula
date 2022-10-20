@extends('dashboard.main')
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Berita Kelas</span>
    </div>
  </div>
  
  <main>
    <div class="container">
      <div class="row p-4 ">
        <div class="col-md-6 mb-3">
          <div class="card border-0 py-3">
            <img src="/assets/img/dashboard/jadwal_sekolah/ilustrasi.png" class="card-img-top img-fluid" >
            <div class="card-body">
              <div class="card-title fw-bold fs-5">Siswa-Siswi Berprestasi</div>
              <p>15 Oktober - 23 Oktober 2022</p>
            </div>
            <div class="card-action d-flex align-items-center float-end">
              <a href="{{ route('berita.kelas.edit') }}" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
              <form action="#" method="post" >
                @csrf
                  <button type="submit" class="border-0"><i class="bi bi-trash"></i></button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card border-0 py-3">
            <img src="/assets/img/dashboard/jadwal_sekolah/ilustrasi.png" class="card-img-top img-fluid" >
            <div class="card-body">
              <div class="card-title fw-bold fs-5">Penghargaan Smart School 2022</div>
              <p>21 Desember - 28 Oktober 2022</p>
            </div>
            <div class="card-action d-flex align-items-center float-end">
              <a href="{{ route('berita.kelas.edit') }}" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
              <form action="#" method="post" >
                @csrf
                  <button type="submit" class="border-0"><i class="bi bi-trash"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="btn-add">
        <a href="{{ route('berita.sekolah.create') }}">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
    </div>
  </main>
@endsection