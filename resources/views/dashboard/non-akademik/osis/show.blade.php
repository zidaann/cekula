@extends('dashboard.main')
@section('content')
   <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
         <a href="{{ route('kegiatan_osis.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
         <span class="text-white mx-auto">Detail Kegiatan</span>
      </div>
   </div>
   <main class="mb-4">
      <div class="container">
         <div class="row justify-content-center ">
            <div class="col-md-11">
               <div class="d-flex justify-content-center w-100">
                  <img src="{{ asset('storage/' . $kegiatan->pamflet) }}" alt="{{ $kegiatan->nama }}">
               </div>
               <div class="font-noto">
                  <div class="fw-semibold font-20">{{ $kegiatan->nama }}</div>
                  <div class="font-16 my-2 color-grey">
                     {{ date('d F Y', strtotime($kegiatan->tgl_mulai)) }} -
                     {{ date('d F Y', strtotime($kegiatan->tgl_selesai)) }}
                  </div>
                  <div class="font-16 my-2 color-grey">Lokasi : {{ $kegiatan->lokasi }}</div>
                  <p class="font-16" style="text-align: justify">
                     {!! $kegiatan->deskripsi !!}
                  </p>
                  <div class="font-16 color-grey">Penanggung Jawab : {{ $kegiatan->user->nama }}</div>
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
