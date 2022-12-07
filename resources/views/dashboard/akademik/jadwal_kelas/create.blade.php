@extends('dashboard.main')
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="{{ route('jadwal_kelas.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Buat Jadwal Kelas</span>
    </div>
  </div>
<main>
    <div id="content-jadwal">
        <div class="container py-4">
          <div class="row justify-content-center ">
              <div class="col-md-9">
                  <form action="{{ route('jadwal_kelas.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                      @include('dashboard.akademik.jadwal_kelas._form.form')
                  </form>
              </div>
          </div>
      </div>
    </div>
</main>
@endsection