@extends('dashboard.main')
@section('styles')
   <link rel="stylesheet" href="/assets/css/tab-bar.css">
   <script type="text/javascript" src="/assets/js/sweetalert2.js"></script>
   <script>
      $(document).ready(function() {
         $('#myTable').DataTable();
      });
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
               document.getElementById('buku-' + id).submit();
            }
         })
      }
   </script>
@endsection
@push('script')
   <script src="/assets/js/tab-bar.js"></script>
@endpush
@section('content')
   <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
         <a href="{{ route('tambah_buku.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
         <span class="text-white mx-auto">Buku Perpustakaan</span>
      </div>
   </div>
   <main class="mb-4">
      <div class="container">
         <div class="row justify-content-center ">
            <div class="col-md-11">
               <div class="row justify-content-center">
                  <div class="col-12">
                     <form class="d-flex align-items-center" role="search">
                        <input class="form-control me-2 input-bg" type="search" placeholder="Masukkan Judul Buku"
                           aria-label="Search" />
                        <i class="bi bi-search" style="margin-left: -35px"></i>
                        <div class="ms-2">
                           <button type="button" class="btn d-flex font-noto font-16" data-bs-toggle="modal"
                              data-bs-target="#filter-modal">
                              <i class="bi bi-funnel me-2"></i> Filter
                           </button>
                        </div>
                     </form>
                  </div>
                  {{-- Modal --}}
                  <div class="modal fade" id="filter-modal" tabindex="-1" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="d-flex">
                              <div class="me-auto w-100 d-flex justify-content-center align-items-center">
                                 <div class="rounded-pill"
                                    style="width: 47px;
                      height: 5px; background: #8F9BB3;">&nbsp;
                                 </div>
                              </div>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body font-noto">
                              <div class="d-flex font-16 modal-header">
                                 <span class="fw-semibold me-auto">Filter</span>
                                 <form action="{{ route('tambah_buku.filter') }}" method="get">
                                    <button class="text-decoration-none color-grey btn btn-light"
                                       type="submit">SELESAI</button>
                              </div>
                              <div class="fw-semibold font-12 my-2 mx-3">Kategori</div>
                              <div class="px-3" style="height: 130px; overflow-y: scroll;">
                                 @foreach ($kategoris as $kategori)
                                    <input type="radio" class="btn-check" name="kategori" id="{{ $kategori->nama }}"
                                       value="{{ $kategori->id }}">
                                    <label for="{{ $kategori->nama }}"
                                       class="btn btn-outline-primary">{{ $kategori->nama }}</label>
                                 @endforeach

                                 </form>

                              </div>
                              <div class="fw-semibold font-12 my-2 mx-3">Urutkan</div>
                              <div class="px-3">
                                 @foreach ($sorts as $sort)
                                    <input type="radio" class="btn-check" name="sort" id="{{ $sort['id'] }}"
                                       value="{{ $sort['id'] }}">
                                    <label for="{{ $sort['id'] }}"
                                       class="btn btn-outline-primary">{{ $sort['nama'] }}</label>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- Daftar Buku --}}
                  <div class="col-11 mt-5">
                     <div class="row">
                        @if ($filterBuku->count())
                           @foreach ($filterBuku as $buku)
                              <div class="col-4 px-5 font-noto font-12 " style="height: 180px;">
                                 <div class="d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . $buku->cover) }}" alt="{{ $buku->judul }}"
                                       style="height: 85px;">
                                 </div>
                                 <div class="text-center mt-2" style="height:35px; overflow: hidden">{{ $buku->judul }}
                                 </div>
                                 <div class="d-flex justify-content-end">
                                    <a href="{{ route('tambah_buku.edit', $buku->slug) }}" class="text-black mx-1">
                                       <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form id="buku-{{ $buku->id }}"
                                       action="{{ route('tambah_buku.delete', $buku->id) }}" method="post">
                                       @csrf
                                       @method('DELETE')
                                    </form>
                                    <button onclick="confirmDelete( {{ $buku->id }} )"
                                       class="border-0 bg-transparent"><i class="bi bi-trash"></i>
                                    </button>
                                 </div>
                              </div>
                           @endforeach
                        @else
                           <div class="text-secondary text-center">Tidak ada buku</div>
                        @endif


                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
   <div class="btn-add">
      <a href="{{ route('tambah_buku.create') }}">
         <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
      </a>
   </div>
@endsection
@push('script')
   <script src="/assets/js/tab-bar.js"></script>
@endpush
