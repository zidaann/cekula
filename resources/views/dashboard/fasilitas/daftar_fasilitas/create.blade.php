@extends('dashboard.main')
@section('styles')
  <link rel="stylesheet" href="/assets/css/tab-bar.css">
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type=number] {
      -moz-appearance: textfield;
    }

    #jumlah_barang::placeholder {
      text-align: center;
    }

    #jumlah_barang::-webkit-input-placeholder {
      text-align: center;
    }

    #jumlah_barang:-moz-placeholder {
      text-align: center;
    }

    .btn-number {
      border: 1px solid #9FC3F9;
      color: #9FC3F9;
      background: transparent;
      padding: 1px 8px 2px 8px;
      cursor: pointer;
    }

    .btn-number:hover,
    .btn-number:focus {
      border: 1px solid #9FC3F9;
      color: white;
      background: #9FC3F9;
      padding: 1px 8px 2px 8px;
    }
  </style>
@endsection
@push('script')
  <script src="/assets/js/tab-bar.js"></script>
  <script>
    let plus = document.querySelector('#plus');
    let minus = document.querySelector('#minus');
    let jumlah_barang = document.querySelector('.jumlah-fasilitas');
    let a = 1
    plus.addEventListener('click', () => {
      jumlah_barang.value = parseInt(jumlah_barang.value) + 1
    });
    minus.addEventListener('click', () => {
      if (jumlah_barang.value <= 0) {
        jumlah_barang.value = 0;
      } else {
        jumlah_barang.value = parseInt(jumlah_barang.value) - 1
      }
    });
  </script>
@endpush
@section('content')
  <div class="header-schedule shadow-1">
    <div class="d-flex align-items-center px-4">
      <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
      <span class="text-white mx-auto">Daftar Fasilitas</span>
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
                      @include('dashboard.fasilitas.daftar_fasilitas._form.barang')
                    </form>
                  </div>
                </div>
                <div class="tabs-content">
                  <div class="row d-flex justify-content-evenly">
                    <form action="#" method="" enctype="multipart/form-data">
                      @csrf
                      @include('dashboard.fasilitas.daftar_fasilitas._form.ruangan')
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
  <div class="btn-add">
    <a href="#">
      <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
    </a>
  </div>
@endsection
@push('script')
  <script src="/assets/js/tab-bar.js"></script>
@endpush
