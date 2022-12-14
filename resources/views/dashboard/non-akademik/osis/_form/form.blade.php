<div class="mb-4 image-wrapper ">
  <label for="image" class="label-image"><i class="bi bi-camera fs-5"></i></label>
  {{-- @if ($beritaKelas->pamflet)
      <div class="text-center">
         <img src="{{ asset('storage/' . $beritaKelas->pamflet) }}"
            class="img-preview img-fluid text-center rounded mx-auto">
      </div>
   @else
      <img class="img-preview img-fluid text-center rounded mx-auto">
   @endif --}}
  <input type="file" class="form-control d-none @error('pamflet') is-invalid @enderror" id="image" placeholder="Enter your image" name="pamflet" onchange="previewImage()">
  {{-- @error('pamflet')
      <div class="text-danger mb-5"> {{ $message }}</div>
   @enderror --}}
</div>
<div class="mb-3">
  <label for="nama_kegiatan"> Nama Kegiatan </label>
  <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control @error('nama_kegiatan') is-invalid @enderror" placeholder="Masukkan nama kegiatan" autocomplete="off">
  {{-- @error('nama_kegiatan')
    <div class="text-danger "> {{ $message }}</div>
  @enderror --}}
</div>
<div class="mb-3">
  <label for="tgl_mulai"> Tanggal Mulai </label>
  <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control bg-color-content border-0 @error('tgl_mulai') is-invalid @enderror" placeholder="HH/BB/TT">
  {{-- {{ old('tgl_mulai', date('Y-m-d')) }} --}}
  {{-- @error('tgl_mulai')
    <p class="text-danger">{{ $message }}</p>
  @enderror --}}
</div>
<div class="mb-3">
  <label for="tgl_selesai"> Tanggal Selesai </label>
  <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control bg-color-content border-0 @error('tgl_selesai') is-invalid @enderror" placeholder="HH/BB/TT">
  {{-- @error('tgl_selesai')
    <p class="text-danger">{{ $message }}</p>
  @enderror --}}
</div>
<div class="mb-3">
  <label for="lokasi"> Lokasi </label>
  <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror" placeholder="Masukkan lokasi pelaksanaan" autocomplete="off">
  {{-- @error('nama_kegiatan')
     <div class="text-danger "> {{ $message }}</div>
   @enderror --}}
</div>
<div class="mb-3">
  <label for="deskripsi"> Deskripsi Berita </label>
  {{-- @error('deskripsi')
    <p class="text-danger">{{ $message }}</p>
  @enderror --}}
  <input type="hidden" name="deskripsi" id="deskripsi">
  <trix-editor input="deskripsi"></trix-editor>
</div>
<div class="mb-3">
  <label for="penanggung_jawab"> Penanggung Jawab </label>
  <input type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control @error('penanggung_jawab') is-invalid @enderror" placeholder="Masukkan nama penanggung jawab" autocomplete="off">
  {{-- @error('penanggung_jawab')
     <div class="text-danger "> {{ $message }}</div>
   @enderror --}}
</div>
<div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">Simpan</button>
</div>
