@extends('dashboard.main')
@push('script')
    <script>
        function confirmDelete(id)
        {  
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
              document.getElementById('jadwal-' + id).submit();
            }
          })
        }
    </script>
@endpush
@section('content')
    {{-- <div class="justify-content-center d-flex mb-4 p-2">
        <div class="bg-color d-flex shadow-lg rounded-4 px-3 px-md-5 align-content-center pt-2 w-100">
            <div>
                <a href="{{ route('jadwal_kelas.index') }}"><i class="bi bi-arrow-left text-white"></i></a>
            </div>
            <div class="d-flex justify-content-center w-100">
                <div>
                    <h5 class="align-text-bottom py-1 font-rubik color-user fs-5 text-center"></h5>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="header-schedule">
        <div class="d-flex align-items-center px-4">
            <a href="{{ route('jadwal_kelas.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
            <span class="text-white mx-auto">Jadwal Kelas {{ $kelas->nama_kelas }}</span>
        </div>
      </div>
    <div>
        <div class="row p-4 justify-content-around">
        @foreach ($hari as $h)
        <div class="col-12 col-md-3 mx-1 mb-4">
            <!-- hari -->
            <div class="bg-color-content rounded-3 shadow mb-4">
                <h3 class="py-2 px-5 text-center font-noto font-24">
                    {{ $h->nama }}
                </h3>
            </div>
            <!-- jadwal -->
            <div>
                <div class="border-bottom pt-3">
                @foreach ($jadwalKelas as $jadwal)
                @if ($h->id == $jadwal->hari->id )
                <div class="py-2 border-bottom">
                    <h5 class="font-noto fw-bold font-16">
                        {{$jadwal->mapel->nama}}
                    </h5>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-noto font-15">Jam Pelajaran:</h6>
                        <h6 class="font-noto font-15">{{ \Carbon\Carbon::parse($jadwal->jam_masuk)->format('H:i') }} - {{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-noto font-15">Guru Mapel:</h6>
                        <h6 class="font-noto font-15">{{ $jadwal->pegawai->nama }}</h6>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="{{ route('jadwal_kelas.edit', $jadwal->id) }}" class="mx-3 text-dark"><i class="bi bi-pencil"></i></a>
                        {{-- <form action="{{ route('jadwal_kelas.delete', $jadwal->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="text-dark border-0 bg-transparent"><i class="bi bi-trash3"></i></button>
                        </form> --}}
                        <form id="jadwal-{{ $jadwal->id }}" action="{{ route('jadwal_kelas.delete', $jadwal->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                          </form>
                            <button onclick="confirmDelete( {{ $jadwal->id }} )" class="text-dark border-0 bg-transparent"><i class="bi bi-trash"></i>
                            </button>
                    </div>
                </div>
                @endif
                @endforeach
                
                    
                </div>
            </div>
        </div>
        @endforeach
        
           
                        
            
            
            
                      
            
            
            
             
            {{-- <div class="col-12 col-md-3 mb-3 ">
                <div class="bg-color-white rounded-3 shadow mb-4">
                    <h3 class="py-2 px-5 text-center font-noto font-24">Selasa</h3>
                </div>
                <div>
                    
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 ">
                <div class="bg-color-content rounded-3 shadow mb-4">
                    <h3 class="py-2 px-5 text-center font-noto dont-24">Rabu</h3>
                </div>
                <div>
                    
                </div>
            </div> --}}
        </div>
        {{-- <div class="row p-4 justify-content-around">
            <div class="col-12 col-md-3 mb-3">
                <div class="bg-color-white rounded-3 shadow mb-4">
                    <h3 class="py-2 px-5 text-center font-noto font-24">Kamis</h3>
                </div>
                <div>
                    
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <div class="bg-color-content rounded-3 shadow mb-4">
                    <h3 class="py-2 px-5 text-center font-noto font-24">Jumat</h3>
                </div>
                <div>
                    
                </div>
            </div>
        </div> --}}
    </div>
@endsection