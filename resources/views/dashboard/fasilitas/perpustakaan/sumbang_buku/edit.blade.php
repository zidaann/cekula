@extends('dashboard.main')
@section('content')
   <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
         <a href="{{ route('tambah_sumbang.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
         <span class="text-white mx-auto">Edit Sumbang Buku</span>
      </div>
   </div>
   <main class="mb-4">
      <div class="container">
         <div class="row justify-content-center ">
            <div class="col-md-11">
               <div class="row d-flex justify-content-evenly px-5">
                  <form action="{{ route('tambah_sumbang.edit', $buku->slug) }}" method="post"
                     enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     @include('dashboard.fasilitas.perpustakaan.sumbang_buku._form.form')
                  </form>
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
