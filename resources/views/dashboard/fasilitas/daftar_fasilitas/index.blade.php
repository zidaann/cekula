@extends('dashboard.main')
@section('styles')
   <link rel="stylesheet" href="/assets/css/tab-bar.css">
   <style>
      th {
         text-align: center !important;
      }
   </style>
@endsection
@push('script')
   <script src="/assets/js/tab-bar.js"></script>
   <script>
      $(document).ready(function() {
         $('#tableBarang').DataTable();
      });
      $(document).ready(function() {
         $('#tableRuangan').DataTable();
      });


      function confirmDeleteBarang(id) {
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
               document.getElementById('barang-' + id).submit();
            }
         })
      }

      function confirmDeleteRuangan(id) {
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
               document.getElementById('ruangan-' + id).submit();
            }
         })
      }
   </script>
@endpush
@section('content')
   <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
         <span class="text-white mx-auto">Daftar Fasilitas</span>
      </div>
   </div>
   <main class="mb-4">
      <div class="container">
         <div class="row justify-content-center ">
            <div class="col-md-11">
               <div class="tabs-bar">
                  <div class="fasilitas">
                     <div class="tabs-head">
                        <span class="tabs-toggle is-active">Barang</span>
                        <span class="tabs-toggle">Ruangan</span>
                     </div>
                     {{-- <div class="tabs-search mt-3">
                        <div class="row justify-content-center">
                           <div class="col-md-10">
                              <form class="d-flex align-items-center" role="search">
                                 <input class="form-control me-2 input-bg" type="search" placeholder="Cari nama"
                                    aria-label="Search" />
                                 <i class="bi bi-search"></i>
                              </form>
                           </div>
                        </div>
                     </div> --}}
                     <div class="py-1"></div>
                     <div class="tabs-body">
                        <div class="tabs-content is-active">
                           <div>
                              <table class="table font-noto font-16">
                                 <tr class="text-center">
                                    <th class="border-0" width="50%">
                                       <div class="bg-color-content rounded py-2 shadow-1">
                                          NAMA BARANG
                                       </div>
                                    </th>
                                    <th class="border-0" width="15%">
                                       <div class="bg-color-content rounded py-2 shadow-1">
                                          JUMLAH
                                       </div>
                                    </th>
                                    <th class="border-0" width="9%">
                                       <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                                    </th>
                                 </tr>
                                 @foreach ($barangs as $barang)
                                    <tr>
                                       <td class="border-0">
                                          <div
                                             class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                                             {{ $barang->nama }}
                                          </div>
                                       </td>
                                       <td class="text-center border-0 shadow-1">
                                          <div
                                             class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                                             {{ $barang->jumlah }}</div>
                                       </td>
                                       <td class="text-center border-0">
                                          <div
                                             class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-14">
                                             <a href="{{ route('barang.edit', $barang->id) }}" class="text-black">
                                                <i class="bi bi-pencil-square"></i>
                                             </a>
                                             <form id="barang-{{ $barang->id }}"
                                                action="{{ route('daftar_fasilitas.delete', $barang->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                             </form>
                                             <button onclick="confirmDeleteBarang( {{ $barang->id }} )"
                                                class="border-0 bg-transparent">
                                                <i class="bi bi-trash"></i>
                                             </button>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                              </table>
                           </div>
                        </div>
                        <div class="tabs-content">
                           <div>
                              <table class="table font-noto font-16">
                                 <tr class="text-center">
                                    <th class="border-0" width="50%">
                                       <div class="bg-color-content rounded py-2 shadow-1">
                                          NAMA RUANGAN
                                       </div>
                                    </th>
                                    <th class="border-0" width="15%">
                                       <div class="bg-color-content rounded py-2 shadow-1">
                                          JUMLAH
                                       </div>
                                    </th>
                                    <th class="border-0" width="9%">
                                       <div class="bg-color-content rounded py-2 shadow-1">OPSI</div>
                                    </th>
                                 </tr>
                                 @foreach ($ruangans as $ruangan)
                                    <tr>
                                       <td class="border-0">
                                          <div
                                             class="rounded py-2 shadow-1 d-flex ps-2 align-items-center font-16 fw-bold">
                                             {{ $ruangan->nama }}
                                          </div>
                                       </td>
                                       <td class="text-center border-0 shadow-1">
                                          <div
                                             class="rounded py-2 shadow-1 d-flex align-items-center justify-content-center text-center font-14">
                                             {{ $ruangan->jumlah }}</div>
                                       </td>
                                       <td class="text-center border-0">
                                          <div
                                             class="rounded d-flex justify-content-around py-2 shadow-1 align-items-center font-14">
                                             <a href="{{ route('ruangan.edit', $ruangan->id) }}" class="text-black">
                                                <i class="bi bi-pencil-square"></i>
                                             </a>
                                             <form id="ruangan-{{ $ruangan->id }}"
                                                action="{{ route('daftar_fasilitas.delete', $ruangan->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                             </form>
                                             <button onclick="confirmDeleteRuangan( {{ $ruangan->id }} )"
                                                class="border-0 bg-transparent">
                                                <i class="bi bi-trash"></i>
                                             </button>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                              </table>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="btn-add">
                  <a href="{{ route('daftar_fasilitas.create') }}">
                     <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
@push('script')
   <script src="/assets/js/tab-bar.js"></script>
@endpush
