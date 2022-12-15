@extends('dashboard.main')
@push('script')
   <script type="text/javascript" src="/assets/js/sweetalert2.js"></script>
   <script>
      // alert hapus 
      function confirmDelete(id) {
         Swal.fire({
            title: 'Yakin Ingin Menghapus?',
            imageUrl: '/assets/img/alert/alert_hapus.png',
            imageWidth: 130,
            imageHeight: 150,
            imageAlt: 'Custom image',
            showCancelButton: true,
            showCloseButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya',
            // cancelButtonText: 'No, cancel!'
         }).then((result) => {
            if (result.isConfirmed) {
               Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
               )
               // $('#berita-'+id).submit();
               document.getElementById('kegiatan-' + id).submit();
            }
         })
      }
   </script>
@endpush
@section('content')
   <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
         <span class="text-white mx-auto">Kegiatan Osis</span>
      </div>
   </div>
   <main class="mb-4">
      <div class="container">
         <div class="row justify-content-center ">
            <div class="col-md-11">
               <div class="row">
                  @if ($kegiatans->count())
                     @foreach ($kegiatans as $kegiatan)
                        <div class="col-12 col-md-6 mb-3">
                           <a href="{{ route('kegiatan_osis.show', $kegiatan) }}" class="text-decoration-none">
                              <div class="card border-0 py-3 box-shadow">
                                 <div class="text-center">
                                    <img src="{{ asset('storage/' . $kegiatan->pamflet) }}"
                                       class="card-img-top img-fluid mx-auto" style="height: 200px;">
                                 </div>
                                 <div class="card-body">
                                    <div class="card-title fw-bold fs-5">{{ $kegiatan->nama }}</div>
                                    <p>{{ date('d F Y', strtotime($kegiatan->tgl_mulai)) }} -
                                       {{ date('d F Y', strtotime($kegiatan->tgl_selesai)) }}</p>
                                    <p>Lokasi : {{ $kegiatan->lokasi }}</p>
                                 </div>
                                 @if (!auth()->user()->status == 'Murid' || auth()->user()->status == 'Administrator')
                                    <div class="card-action d-flex align-items-center float-end">
                                       <a href="{{ route('kegiatan_osis.edit', $kegiatan->slug) }}"
                                          class="text-dark me-2"><i class="bi bi-pencil-square"></i></a>
                                       <form id="kegiatan-{{ $kegiatan->id }}"
                                          action="{{ route('kegiatan_osis.delete', $kegiatan->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                       </form>
                                       <button onclick="confirmDelete( {{ $kegiatan->id }} )" class="border-0"><i
                                             class="bi bi-trash"></i>
                                       </button>
                                    </div>
                                 @endif
                              </div>
                           </a>
                        </div>
                     @endforeach
                  @else
                     <div class="text-secondary text-center">Tidak ada kegiatan osis</div>
                  @endif

               </div>
            </div>
         </div>
      </div>
   </main>
   <div class="btn-add">
      <a href="{{ route('kegiatan_osis.create') }}">
         <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
      </a>
   </div>
@endsection
