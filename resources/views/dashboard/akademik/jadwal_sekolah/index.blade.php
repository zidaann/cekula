@extends('dashboard.main')
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Jadwal Sekolah</span>
    </div>
  </div>
  
  <main>
    <div class="container">
      <div class="row p-4 ">
        @foreach ($jadwals as $jadwal)
        <div class="col-md-6 mb-3">
         <a href="{{ route('jadwal_sekolah.show') }}" class="text-decoration-none">
            <div class="card border-0 py-3">
              <div class="text-center">
                <img src="{{ asset('storage/'.$jadwal->pamflet) }}" class="card-img-top img-fluid mx-auto" >
              </div>
              <div class="card-body">
                <div class="card-title fw-bold fs-5">{{ $jadwal->judul }}</div>
                <p>{{ date('d F Y', strtotime($jadwal->tanggal_pelaksanaan)) }} - {{ date('d F Y', strtotime($jadwal->tanggal_selesai_pelaksanaan)) }} </p>
              </div>
              <div class="card-action d-flex align-items-center float-end">
                <a href="{{ route('jadwal_sekolah.edit') }}" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                <form action="#" method="post" class="delete_jadwal">
                  @csrf
                    <button type="submit" class="border-0"><i class="bi bi-trash"></i></button>
                </form>
              </div>
            </div>
         </a>
        </div>
        @endforeach
        
      </div>

      <div class="btn-add">
        <a href="{{ route('jadwal_sekolah.create') }}">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
    </div>
  </main>
@endsection