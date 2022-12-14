@extends('dashboard.main')
@section('content')
  <div class="header-schedule">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Sunting Kegiatan OSIS</span>
    </div>
  </div>
  <main>
    <div id="content-jadwal">
      <div class="container py-4">
        <div class="row justify-content-center ">
          <div class="col-md-9">
            <form action="#" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              @include('dashboard.non-akademik.osis._form.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
