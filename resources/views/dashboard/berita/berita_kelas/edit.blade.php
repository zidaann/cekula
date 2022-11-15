@extends('dashboard.main')

@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Edit Berita Kelas</span>
    </div>
  </div>
  
  <main class="mb-4">
      <div id="content-jadwal">
        <div class="container py-4">
          <div class="row justify-content-center ">
              <div class="col-md-10">
                  <form action="{{ route('jadwal_sekolah.edit', $jadwalSekolah) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                      @include('dashboard.berita.berita_kelas._form.form')
                  </form>
              </div>
          </div>
      </div>
      </div>
  </main>
@endsection