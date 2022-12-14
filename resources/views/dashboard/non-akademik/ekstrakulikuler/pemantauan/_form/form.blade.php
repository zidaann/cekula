<div class="mb-4 image-wrapper ">
  <label for="image" class="label-image"><i class="bi bi-camera fs-5"></i></label>
  {{-- @if ($beritaSekolah->pamflet)
      <div class="text-center">
         <img src="{{ asset('storage/' . $beritaSekolah->pamflet) }}"
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
  <label for="nama_ekstra"> Nama Ekstrakulikuler </label>
  <input type="text" name="nama_ekstra" id="nama_ekstra" class="form-control @error('nama_ekstra') is-invalid @enderror" placeholder="Masukkan nama ekstrakulikuler" autocomplete="off">
  {{-- @error('nama_ekstra')
    <div class="text-danger "> {{ $message }}</div>
  @enderror --}}
</div>
<div class="mb-3">
  <label for="nama_guru" class="form-label"> Nama Guru </label>
  <select class="form-select select input-bg" name="nama_guru" id="nama_guru">
    <option selected disabled>Pilih Nama Guru</option>
    <option value="1">Jourji, S.Pd.</option>
    <option value="2">Wildan, S.Kom.</option>
  </select>
</div>
<div class="mb-3">
  <label for="hari"> Hari Pelaksanaan </label>
  <input type="text" name="hari" id="hari" class="form-control @error('hari') is-invalid @enderror" placeholder="Masukkan nama ekstrakulikuler" autocomplete="off">
  {{-- @error('hari')
     <div class="text-danger "> {{ $message }}</div>
   @enderror --}}
</div>
<div class="mb-3">
  <label for="jam_mulai" class="form-label"> Jam Pelaksanaan </label>
  <div class="row">
    <div class="col-5 d-flex">
      <input type="time" name="jam_mulai" id="jam_mulai" class="form-control" name="jam_mulai" required placeholder="{{ Date('H:i') }}">
      <div class="mx-3 d-flex align-items-center">-</div>
      <input type="time" name="jam_selesai" id="jam_selesai" class="form-control" required placeholder="{{ Date('H:i') }}">
    </div>
  </div>
</div>


<div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">Simpan</button>
</div>
