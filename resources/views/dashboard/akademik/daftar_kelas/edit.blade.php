@extends('dashboard.main')
@section('content')
   <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
         <a href="{{ route('daftar_kelas.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
         <span class="text-white mx-auto">Sunting Kelas</span>
      </div>
   </div>
   <main class="mb-4">
      <div class="container">
         <div class="row justify-content-center ">
            <div class="col-md-11">
               <div class="row d-flex justify-content-evenly px-5">
                  <form action="{{ route('daftar_kelas.edit', $kelas->id) }}" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     @include('dashboard.akademik.daftar_kelas._form._edit')
                  </form>
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
