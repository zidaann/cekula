@extends('dashboard.main')
@push('script')
    <script type="text/javascript" src="/assets/js/sweetalert2.js"></script>
    <script>
      
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
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
      {{-- @if ($jadwals->count()) --}}
        {{-- @foreach ($jadwals as $jadwal)
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
        @endforeach --}}
        <div class="justify-content-center ">
          <div class="col-12 col-md-12 p-2 justify-content-center ">
            <table class="table table-striped table-bordered" id="myTable">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Pamflet</th>
                      <th>Judul</th>
                      <th>Tanggal Pelaksanaan</th>
                      <th>Tanggal Selesai Pelaksanaan</th>
                      <th>Action</th>
                  </tr>
                  <tbody>
                    @foreach ($jadwals as $index => $jadwal)
                        <tr>
                          <td>{{ $index +1 }}</td>
                          <td> <img src="{{ asset('storage/'.$jadwal->pamflet) }}" class="card-img-top img-fluid mx-auto" style="width: 100px;"></td>
                          <td>{{ $jadwal->judul }}</td>
                          <td>{{ date('d F Y', strtotime($jadwal->tgl_mulai)) }}</td>
                          <td>{{ date('d F Y', strtotime($jadwal->tgl_selesai)) }}</td>
                          <td>
                            <div class="d-flex">
                              <a href="{{ route('jadwal_sekolah.show', $jadwal) }}" class="btn btn-sm btn-primary me-2"> <i class="bi bi-eye"></i></a>
                              <a href="{{ route('jadwal_sekolah.edit', $jadwal) }}" class="btn btn-sm btn-warning me-2"> <i class="bi bi-pencil-square"></i></a>
                              <form id="jadwal-{{ $jadwal->id }}" action="{{ route('jadwal_sekolah.delete', $jadwal->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                              </form>
                                <button onclick="confirmDelete( {{ $jadwal->id }} )" class="border-0 bg-danger text-white btn btn-sm"><i class="bi bi-trash"></i>
                                </button>
                            </div>
                          </td>
                        </tr>
                        
                    @endforeach
                  </tbody>
              </thead>
          </table>
        </div>
        </div>
        {{-- @else
        <div class="d-flex-justify-content-center align-items-center bg-white p-4 rounded text-center text-grey-600">
          Tidak ada jadwal sekolah
        </div>
        @endif --}}
      </div>

      <div class="btn-add">
        <a href="{{ route('jadwal_sekolah.create') }}">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
    </div>
  </main>
@endsection