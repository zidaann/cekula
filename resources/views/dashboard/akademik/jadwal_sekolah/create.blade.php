@extends('dashboard.main')

@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="{{ route('jadwal_sekolah.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Buat Jadwal Sekolah</span>
    </div>
  </div>
  
  <main class="mb-4">
      <div id="content-jadwal">
        <div class="container py-4">
          <div class="row justify-content-center ">
              <div class="col-md-10">
                  <form action="#" method="" enctype="multipart/form-data">
                    @csrf
                      {{-- <div class="img-preview mb-3 rounded">
                          <label for ="image"><i class="bi bi-camera"></i></label>
                          <input type ="file" name="image" id="image" onchange="previewImage()">
                      </div> --}}
                      @include('dashboard.akademik.jadwal_sekolah._form.form')
                  </form>
              </div>
          </div>
      </div>
      </div>
  </main>
@endsection