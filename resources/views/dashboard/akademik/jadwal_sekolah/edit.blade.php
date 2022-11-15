@extends('dashboard.main')

@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="{{ route('jadwal_sekolah.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Edit Jadwal Sekolah</span>
    </div>
  </div>
  
  <main >
      <div id="content-jadwal" >
        <div class="container py-4">
          <div class="row justify-content-center ">
              <div class="col-md-10">
                  <form action="{{ route('jadwal_sekolah.edit', $jadwalSekolah) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    @include('dashboard.akademik.jadwal_sekolah._form.form')
                  </form>
              </div>
          </div>
      </div>
      </div>
  </main>
@endsection