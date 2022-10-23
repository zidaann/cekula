@extends('dashboard.main')
@section('content')
<div class="header-schedule">
  <div class="d-flex align-items-center px-4">
      <a href="{{ route('fasilitas.peminjaman.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Peminjaman Fasilitas</span>
  </div>
</div>
  
  <main>
    <div class="container">
        <div class="row justify-content-center ">
          <div class="col-md-11">
            <div class="fasilitas-bar">
              <div class="fasilitas">
                <div class="fasilitas-head">
                  <span class="fasilitas-toggle is-active">Barang</span>
                  <span class="fasilitas-toggle">Ruangan</span>
                </div>
                <div class="fasilitas-body">
                  <div class="fasilitas-content is-active">
                    <div class="row d-flex justify-content-evenly">
                        <form action="#" method="" enctype="multipart/form-data">
                            @csrf
                              @include('dashboard.fasilitas.peminjaman._form.barang')
                        </form>
                    </div>
                  </div>
                  <div class="fasilitas-content">
                    <div class="row d-flex justify-content-evenly">
                        <form action="#" method="" enctype="multipart/form-data">
                            @csrf
                              @include('dashboard.fasilitas.peminjaman._form.ruangan')
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    </div>
  </main>
@endsection