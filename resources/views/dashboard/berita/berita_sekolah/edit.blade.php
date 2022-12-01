@extends('dashboard.main')

@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="{{ route('berita_sekolah.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Edit Berita Sekolah</span>
    </div>
  </div>
  
  <main class="mb-4">
      <div id="content-jadwal">
        <div class="container py-4">
          <div class="row justify-content-center ">
              <div class="col-md-10">
                  <form action="{{ route('berita_sekolah.edit', $beritaSekolah) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                      @include('dashboard.berita.berita_sekolah._form.form')
                  </form>
              </div>
          </div>
      </div>
      </div>
  </main>
@endsection