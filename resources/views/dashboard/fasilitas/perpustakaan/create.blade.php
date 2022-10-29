@extends('dashboard.main')
@section('styles')
    <style>
        a:hover{
            color: #797F8F;
        }
        .btn-pinjam{
            background-color: #A6AAB4;
            color: white;
        }
        .btn-pinjam:hover{
            background: rgb(159, 195, 249);
            background: linear-gradient(180deg,rgba(159, 195, 249, 1) 0%,rgba(131, 219, 224, 1) 100%);
            color: white !important;
        }
    </style>
@endsection
@section('content')
<div class="pb-5">
    <div class="header-schedule">
        <div class="d-flex align-items-center justify-content-center">
          <span class="text-white">Peminjaman Buku</span>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 ">
           <form action="" method="" >
                @csrf 
                @include('dashboard.fasilitas.perpustakaan._form.form')
                
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-pinjam border-0 font-noto fw-bold" type="button">Simpan Pinjaman</button>
                </div>
           </form>
          </div>
        </div>
    </div>
</div>

@endsection