@extends('dashboard.main')
@push('script')
    <script>
      // =======================  HIDE ILUSTRATION =======================
      $(".toggleClass").click(function(e) {
          e.preventDefault();
          $(".ilustration_class").slideToggle("hide");
      });
    </script>
@endpush
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Jadwal Kelas</span>
    </div>
  </div>
  
  <main id="jadwal_kelas" class=" py-4">
    <div class="container">
        <div class="row  mx-3">
            <div class="col-md-4 mb-3 px-3 toggleClass"  data-bs-toggle="collapse" href="#detail_kelas-7" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                <div class="card border-0 py-3 bg-white">
                    <img src="/assets/img/dashboard/jadwal_kelas/kelas7.png" class="card-img-top img-fluid" width="50">
                    <div class="card-body">
                      <div class="card-title fw-bold fs-5">Kelas 7</div>
                    </div>
                    <div class="card-description d-flex align-items-center justify-content-between px-3">
                      <span><i class="bi bi-file-earmark-text"></i> 3 Kelas</span>
                      <span><i class="bi bi-people"></i> 90 Murid</span>
                    </div>
                  </div>
                  
            </div>
            <div class="col-md-4 mb-3 px-3 toggleClass" data-bs-toggle="collapse" href="#detail_kelas-8" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                <div class="card border-0 py-3 bg-white">
                    <img src="/assets/img/dashboard/jadwal_kelas/kelas8.png" class="card-img-top img-fluid" width="50">
                    <div class="card-body">
                      <div class="card-title fw-bold fs-5">Kelas 8</div>
                    </div>
                    <div class="card-description d-flex align-items-center justify-content-between px-3">
                      <span><i class="bi bi-file-earmark-text"></i> 3 Kelas</span>
                      <span><i class="bi bi-people"></i> 90 Murid</span>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-3 px-3 toggleClass" data-bs-toggle="collapse" href="#detail_kelas-9" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
                <div class="card border-0 py-3 bg-white">
                    <img src="/assets/img/dashboard/jadwal_kelas/kelas9.png" class="card-img-top img-fluid" width="50">
                    <div class="card-body">
                      <div class="card-title fw-bold fs-5">Kelas 9</div>
                    </div>
                    <div class="card-description d-flex align-items-center justify-content-between px-3">
                      <span><i class="bi bi-file-earmark-text"></i> 3 Kelas</span>
                      <span><i class="bi bi-people"></i> 90 Murid</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="accordion accordion-flush bg-transparent border-0" id="accordionExample">
            <div class="accordion-item bg-transparent border-0">
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row mt-5 px-4" id="detail_kelas-7">
                    {{-- @foreach ($jadwals as $item) --}}
                    {{-- @foreach ($jadwals as $jadwal) --}}
                        {{-- @if ($item->kelas->tingkat_kelas == '7') --}}
                        {{-- @if ($jadwals->kelas->nama_kelas == $item->nama_kelas) --}}
                        @foreach ($kelas as $item)
                            @if ($item->tingkat_kelas == '7')
                            <div class="card-kelas col-md-10 p-3 px-4 mb-3 btn btn-light bg-white">
                              <a href="{{ route('jadwal_kelas.show', $item) }}" class="d-flex justify-content-between text-decoration-none text-dark">
                                <span>Kelas {{ $item->nama_kelas }}</span>
                                <span><i class="bi bi-chevron-right"></i></span>
                              </a>
                            </div>
                            @endif
                        @endforeach
                        
                        {{-- @endif --}}
                        {{-- @endif --}}
                    {{-- @endforeach --}}
                    {{-- @endforeach --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-0">
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row mt-5 px-4" id="detail_kelas-8">
                    @foreach ($kelas as $item)
                        @if ($item->tingkat_kelas == '8')
                        <div class="card-kelas col-md-10 p-3 px-4 mb-3 btn btn-light bg-white">
                          <a href="{{ route('jadwal_kelas.show', $item) }}" class="d-flex justify-content-between text-decoration-none text-dark">
                            <span>Kelas {{ $item->nama_kelas }}</span>
                            <span><i class="bi bi-chevron-right"></i></span>
                          </a>
                        </div>
                        @endif
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-0">
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row mt-5 px-4" id="detail_kelas-9">
                    @foreach ($kelas as $item)
                        @if ($item->tingkat_kelas == '9')
                        <div class="card-kelas col-md-10 p-3 px-4 mb-3 btn btn-light bg-white">
                          <a href="{{ route('jadwal_kelas.show', $item) }}" class="d-flex justify-content-between text-decoration-none text-dark">
                            <span>Kelas {{ $item->nama_kelas }}</span>
                            <span><i class="bi bi-chevron-right"></i></span>
                          </a>
                        </div>
                        @endif
                    @endforeach

                  </div>
                </div>
              </div>
            </div>
        </div>


        <div class="row mt-5 ilustration_class " >
            <div class="col-12 col-sm-12 py-4 text-center " >
              <img src="/assets/img/dashboard/jadwal_kelas/ilustrasi_kelas.png" class="img-fluid" width="300">
              <h6>Pilih kelas terlebih dahulu</h6>
            </div>
        </div>
        <div class="btn-add">
          <a href="{{ route('jadwal_kelas.create') }}">
            <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
          </a>
        </div>
    </div>
</main>
@endsection