@extends('dashboard.main')
@section('styles')
  <link rel="stylesheet" href="/assets/css/tab-bar.css">
@endsection
@push('script')
  <script src="/assets/js/tab-bar.js"></script>
@endpush
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="{{ route('fasilitas.peminjaman.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Peminjaman Fasilitas</span>
      <a href="#" class="text-white "><i class="bi bi-clock-history"></i></a>
    </div>
  </div>
  <main class="mb-4">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-11">
          <div class="tabs-bar">
            <div class="fasilitas">
              <div class="tabs-head">
                <span class="tabs-toggle is-active">Barang</span>
                <span class="tabs-toggle">Ruangan</span>
              </div>
              <div class="tabs-body">
                <div class="tabs-content is-active">
                  <div class="row d-flex justify-content-evenly">
                    <form action="#" method="" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      @include('dashboard.fasilitas.peminjaman._form.barang')
                    </form>
                  </div>
                </div>
                <div class="tabs-content">
                  <div class="row d-flex justify-content-evenly">
                    <form action="#" method="" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
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
@push('script')
  <script src="/assets/js/tab-bar.js"></script>
@endpush
