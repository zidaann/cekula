<div class="mb-4 image-wrapper " >
    <label for ="image" class="label-image"><i class="bi bi-camera fs-5"></i></label>
    {{-- <input type="hidden" name="oldPamflet" value="{{ $jadwalSekolah->pamflet }}"> --}}
    @if ($jadwalSekolah->pamflet)
    <div class="text-center">
        <img src="{{ asset('storage/'.$jadwalSekolah->pamflet  ) }}" class="img-preview img-fluid text-center rounded mx-auto" >
    </div>
    @else
        <img class="img-preview img-fluid text-center rounded mx-auto" >
    @endif
    <input type="file" class="form-control d-none @error('pamflet') is-invalid @enderror" id="image" placeholder="Enter your image" name="pamflet" onchange="previewImage()" value="{{ old('pamflet', $jadwalSekolah->pamflet) }}">
    @error('pamflet')
        <div class="text-danger mb-5"> {{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
      <label for ="judul"> Judul Jadwal </label>
      <input type ="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan judul jadwal" value="{{ old('judul', $jadwalSekolah->judul) }}" autocomplete="off">
      @error('judul')
        <div class="text-danger mb-5"> {{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for ="tgl_mulai"> Tanggal pelaksanaan </label>
      <input type ="date" name="tgl_mulai" id="tgl_mulai" class="form-control  @error('tgl_mulai') is-invalid @enderror" placeholder="HH/BB/TT" value="{{ old('tgl_mulai', $jadwalSekolah->tgl_mulai) }}">
      @error('tgl_mulai')
        <p class="text-danger">{{ $message }}</p>
      @enderror
  </div>
  <div class="mb-3">
      <label for ="tgl_selesai"> Selesai pelaksanaan </label>
      <input type ="date" name="tgl_selesai" id="tgl_selesai" class="form-control @error('tgl_selesai') is-invalid @enderror" placeholder="HH/BB/TT" value="{{ old('tgl_selesai', $jadwalSekolah->tgl_selesai) }}">
      @error('tgl_selesai')
        <p class="text-danger">{{ $message }}</p>
      @enderror
  </div>
  <div class="mb-3">
        <label for ="deskripsi"> Deskripsi Berita </label>
        @error('deskripsi')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="hidden" name="deskripsi" id="deskripsi" value="{{ old('deskripsi', $jadwalSekolah->deskripsi) }}">
        <trix-editor input="deskripsi" ></trix-editor>
  </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn-post border-0 btn" type="submit">{{ $submit }}</button>
    </div>