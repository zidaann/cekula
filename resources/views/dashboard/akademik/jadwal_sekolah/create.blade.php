@extends('dashboard.main')

@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="{{ route('jadwal_sekolah.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Buat Jadwal Sekolah</span>
    </div>
  </div>
  
  <main >
      <div id="content-jadwal">
        <div class="container py-4">
          <div class="row justify-content-center ">
              <div class="col-md-10">
                  <form action="#" method="" enctype="multipart/form-data">
                      <div class="img-preview mb-3 rounded">
                          <label for ="image"><i class="bi bi-camera"></i></label>
                          <input type ="file" name="image" id="image" onchange="previewImage()">
                      </div>
                      <div class="mb-3">
                          <label for ="judul_jadwal"> Judul Jadwal </label>
                          <input type ="text" name="judul_jadwal" id="judul_jadwal" class="form-control" placeholder="Masukkan judul jadwal">
                      </div>
                      <div class="mb-3">
                          <label for ="tanggal_pelaksanaan"> Tanggal pelaksanaan </label>
                          <input type ="date" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" class="form-control" placeholder="HH/BB/TT">
                      </div>
                      <div class="mb-3">
                          <label for ="selesai_pelaksanaan"> Selesai pelaksanaan </label>
                          <input type ="date" name="selesai_pelaksanaan" id="selesai_pelaksanaan" class="form-control" placeholder="HH/BB/TT">
                      </div>
                      <div class="mb-3">
                          <label for ="deskripsi_pelaksanaan"> Deskripsi pelaksanaan </label>
                          <textarea class="form-control mt-2" placeholder="Masukkan deskripsi jadwal" id="deskripsi_pelaksanaan" name="deskripsi_pelaksanaan"></textarea>
                      </div>
                      <div class="d-grid gap-2 col-6 mx-auto">
                          <button class="btn-post border-0 btn" type="button">Posting jadwal</button>
                        </div>
                  </form>
              </div>
          </div>
      </div>
      </div>
  </main>
@endsection