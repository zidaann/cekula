@extends('dashboard.main')
@push('script')
    <script type="text/javascript" src="/assets/js/sweetalert2.js"></script>
    <script>
      // alert hapus 
      function confirmDelete(id)
        {
          
          Swal.fire({
            title: 'Yakin Ingin Menghapus?',
            imageUrl: '/assets/img/alert/alert_hapus.png',
            imageWidth: 130,
            imageHeight: 150,
            imageAlt: 'Custom image',
            // showCancelButton: true,
            showCloseButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              // $('#jadwal-'+id).submit();
              document.getElementById('jadwal-' + id).submit();
            }
          })
        }

    </script>
@endpush
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Jadwal Sekolah</span>
    </div>
  </div>
  
  <main>
    <div class="container">
      <div class="row p-4 ">
      @if ($jadwals->count())
        @foreach ($jadwals as $jadwal)
        <div class="col-md-6 mb-3">
          <a href="{{ route('jadwal_sekolah.show', $jadwal->slug) }}" class="text-decoration-none">
             <div class="card border-0 py-3">
               <div class="text-center">
                 <img src="{{ asset('storage/'.$jadwal->pamflet) }}" class="card-img-top img-fluid mx-auto" >
               </div>
               <div class="card-body">
                 <div class="card-title fw-bold fs-5">{{ $jadwal->judul }}</div>
                 <p>{{ date('d F Y', strtotime($jadwal->tanggal_pelaksanaan)) }} - {{ date('d F Y', strtotime($jadwal->tanggal_selesai_pelaksanaan)) }} </p>
               </div>
               <div class="card-action d-flex align-items-center float-end">
                 <a href="{{ route('jadwal_sekolah.edit', $jadwal) }}" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                 {{-- <form action="{{ route('jadwal_sekolah.delete', $jadwal->id) }}" method="post" onclick="btnDelete(e)">
                  @csrf
                    <button type="submit" class="border-0 " onclick="btnDelete(e)"><i class="bi bi-trash"></i></button>
                </form> --}}
                
                  
                    <form id="jadwal-{{ $jadwal->id }}" action="{{ route('jadwal_sekolah.delete', $jadwal->id) }}" method="post">
                      @csrf
                      @method("DELETE")
                    </form>
                      <button onclick="confirmDelete( {{ $jadwal->id }} )" class="border-0"><i class="bi bi-trash"></i>
                      </button>
               </div>
             </div>
          </a>
         </div>
        @endforeach
        @else
        <div class="d-flex-justify-content-center align-items-center bg-white p-4 rounded text-center text-grey-600">
          Tidak ada jadwal sekolah
        </div>
        @endif
      </div>

      <div class="btn-add">
        <a href="{{ route('jadwal_sekolah.create') }}">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
    </div>
  </main>
@endsection