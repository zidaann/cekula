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
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              // $('#berita-'+id).submit();
              document.getElementById('berita-' + id).submit();
            }
          })
        }

    </script>
@endpush
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Berita Sekolah</span>
    </div>
  </div>
  
  <main>
    <div class="container">
      <div class="row p-4 ">
        {{-- @if ($beritas->count()) --}}
          {{-- @foreach ($beritas as $berita)
          <div class="col-md-6 mb-3">
            <a href="{{ route('berita_sekolah.show', $berita->slug) }}" class="text-decoration-none">
               <div class="card border-0 py-3">
                 <div class="text-center">
                   <img src="{{ asset('storage/'.$berita->pamflet) }}" class="card-img-top img-fluid mx-auto" >
                 </div>
                 <div class="card-body">
                   <div class="card-title fw-bold fs-5">{{ $berita->judul }}</div>
                   <p>{{ date('d F Y', strtotime($berita->tanggal_pelaksanaan)) }} - {{ date('d F Y', strtotime($berita->tanggal_selesai_pelaksanaan)) }} </p>
                 </div>
                 <div class="card-action d-flex align-items-center float-end">
                   <a href="{{ route('berita_sekolah.edit', $berita) }}" class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                      <form id="berita-{{ $berita->id }}" action="{{ route('berita_sekolah.delete', $berita->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                      </form>
                        <button onclick="confirmDelete( {{ $berita->id }} )" class="border-0"><i class="bi bi-trash"></i>
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
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai </th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                      @foreach ($beritas as $index => $berita)
                          <tr>
                            <td>{{ $index +1 }}</td>
                            <td> @if (!$berita->pamflet)
                              <img src="/assets/img/no_image.png" class="card-img-top img-fluid mx-auto" style="width: 100px;">    
                              @else 
                              <img src="{{ asset('storage/'.$berita->pamflet) }}" class="card-img-top img-fluid mx-auto" style="width: 100px;">
                              @endif</td>
                            <td>{{ $berita->judul }}</td>
                            <td>{{ date('d F Y', strtotime($berita->tgl_mulai)) }}</td>
                            <td>{{ date('d F Y', strtotime($berita->tgl_selesai)) }}</td>
                            <td>
                              <div class="d-flex">
                                <a href="{{ route('berita_sekolah.show', $berita) }}" class="btn btn-sm btn-primary me-2"> <i class="bi bi-eye"></i></a>
                                <a href="{{ route('berita_sekolah.edit', $berita) }}" class="btn btn-sm btn-warning me-2"> <i class="bi bi-pencil-square"></i></a>
                                <form id="berita-{{ $berita->id }}" action="{{ route('berita_sekolah.delete', $berita->id) }}" method="post">
                                  @csrf
                                  @method("DELETE")
                                </form>
                                  <button onclick="confirmDelete( {{ $berita->id }} )" class="border-0 bg-danger text-white btn btn-sm"><i class="bi bi-trash"></i>
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
      </div>
      <div class="btn-add">
        <a href="{{ route('berita_sekolah.create') }}">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
    </div>
  </main>
@endsection