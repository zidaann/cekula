@extends('dashboard.main')
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="{{ route('jadwal_kelas.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Edit Jadwal Kelas</span>
    </div>
  </div>
<main>
    <div id="content-jadwal">
        <div class="container py-4">
          <div class="row justify-content-center ">
              <div class="col-md-9">
                  <form action="{{ route('jadwal_kelas.edit', $jadwal->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    {{-- @include('dashboard.akademik.jadwal_kelas._form.form') --}}
                    <div class="mb-3">
                      <label for ="mapel_id" class="form-label"> Nama Mapel </label>
                      <select class="form-select" aria-label="Default select example" name="mapel_id" required >
                        <option selected disabled >Pilih Mapel</option>
                        @foreach ($mapels as $mapel)
                        <option value="{{ $mapel->id }}" {{ $jadwal->mapel->id == $mapel->id ? 'selected' : '' }}>{{ $mapel->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for ="jam_masuk" class="form-label"> Jam Mata Pelajaran </label>
                      <div class="row">
                        <div class="col-4 d-flex">
                          <input type="time" name="jam_masuk" id="jam_masuk" class="form-control" name="jam_masuk" required placeholder="{{ Date('H:i') }}" value="{{ old('jam_masuk', $jadwal->jam_masuk) }}">
                          <div class="mx-3 d-flex align-items-center">-</div>
                          <input type="time" name="jam_selesai" id="jam_selesai" class="form-control" name="jam_keluar" required placeholder="{{ Date('H:i') }}" value="{{ old('jam_selesai', $jadwal->jam_selesai) }}">
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for ="pegawai_id" class="form-label">Nama Guru Mata pelajaran </label>
                      <select class="form-select" aria-label="Default select example" name="pegawai_id" required>
                        <option selected disabled >Pilih Guru Mapel</option>
                        @foreach ($pegawais as $pegawai)
                          <option value="{{ $pegawai->id }}" {{ $jadwal->pegawai->id == $pegawai->id ? 'selected' : '' }}>{{ $pegawai->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn-post border-0 btn" type="submit">{{ $submit }}</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
</main>
@endsection