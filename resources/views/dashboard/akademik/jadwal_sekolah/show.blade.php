@extends('dashboard.main')
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="{{ route('jadwal_sekolah.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Jadwal Sekolah</span>
    </div>
  </div>
  <main>
    <div class="mx-5 px-5 pb-5">
        {{-- judul --}}
        <div>
            <p class="font-rubik font-20">{{ $jadwalSekolah->judul }}</p>
        </div>
        {{-- image --}}
        <div>
            <img src="{{ asset('storage/'.$jadwalSekolah->pamflet) }}" alt="#" class="img-fluid " width="400">
        </div>
        {{-- tanggal --}}
        <div class="d-flex align-items-center">
            <div>
                <a href="#" class="font-noto font-16 text-decoration-none" style="color: black;">Jadwal Sekolah</a>
            </div>
            <div>
                <i class="bi bi-dot" style="color: #C5DBFB; font-size: 50px;"></i>
            </div>
            <div class="font-noto font-16">
                {{ date('d F Y', strtotime($jadwalSekolah->tanggal_pelaksanaan)) }} - {{ date('d F Y', strtotime($jadwalSekolah->tanggal_selesai_pelaksanaan)) }}
            </div>
        </div>
        <div class="font-noto font-16">
            <div>
                {!! $jadwalSekolah->deskripsi !!}
            </div>
        </div>
    </div>
  </main>
@endsection