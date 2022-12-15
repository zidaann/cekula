<div class="mb-4 image-wrapper ">
   <label for="image" class="label-image"><i class="bi bi-camera fs-5"></i></label>
   @if ($kegiatan->pamflet)
      <div class="text-center">
         <img src="{{ asset('storage/' . $kegiatan->pamflet) }}"
            class="img-preview img-fluid text-center rounded mx-auto">
      </div>
   @else
      <img class="img-preview img-fluid text-center rounded mx-auto">
   @endif
   <input type="file" class="form-control d-none @error('pamflet') is-invalid @enderror" id="image"
      placeholder="Enter your image" name="pamflet" onchange="previewImage()">
   {{-- @error('pamflet')
      <div class="text-danger mb-5"> {{ $message }}</div>
   @enderror --}}
</div>
<div class="mb-3">
   <label for="nama"> Nama Kegiatan </label>
   <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
      placeholder="Masukkan nama kegiatan" autocomplete="off" value="{{ old('nama', $kegiatan->nama) }}">
   @error('nama')
      <div class="text-danger "> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="tgl_mulai"> Tanggal Mulai </label>
   <input type="date" name="tgl_mulai" id="tgl_mulai"
      class="form-control bg-color-content border-0 @error('tgl_mulai') is-invalid @enderror" placeholder="HH/BB/TT"
      value="{{ old('tgl_mulai', $kegiatan->tgl_mulai) }}">
   @error('tgl_mulai')
      <p class="text-danger">{{ $message }}</p>
   @enderror
</div>
<div class="mb-3">
   <label for="tgl_selesai"> Tanggal Selesai </label>
   <input type="date" name="tgl_selesai" id="tgl_selesai"
      class="form-control bg-color-content border-0 @error('tgl_selesai') is-invalid @enderror" placeholder="HH/BB/TT"
      value="{{ old('tgl_selesai', $kegiatan->tgl_selesai) }}">
   @error('tgl_selesai')
      <p class="text-danger">{{ $message }}</p>
   @enderror
</div>
<div class="mb-3">
   <label for="lokasi"> Lokasi </label>
   <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror"
      placeholder="Masukkan lokasi pelaksanaan" autocomplete="off" value="{{ old('lokasi', $kegiatan->lokasi) }}">
   @error('lokasi')
      <div class="text-danger "> {{ $message }}</div>
   @enderror
</div>

<div class="mb-3">
   <label for="penanggung_jawab"> Penanggung Jawab </label>
   <select name="user_id" id="user_id" class="select @error('user_id')
      is-invalid
   @enderror">
      <option selected disabled>Pilih Penanggung Jawab</option>
      @foreach ($pembinaOsis as $pembina)
         <option value="{{ $pembina->id }}" {{ $pembina->id == $kegiatan->user_id ? 'selected' : '' }}>
            {{ $pembina->nama }}</option>
      @endforeach
   </select>
   @error('user_id')
      <div class="text-danger "> {{ $message }}</div>
   @enderror
</div>

<div class="mb-3">
   <label for="deskripsi"> Deskripsi Berita </label>
   <input type="hidden" name="deskripsi" id="deskripsi" value="{{ old('deskripsi', $kegiatan->deskripsi) }}">
   <trix-editor input="deskripsi"></trix-editor>
   @error('deskripsi')
      <p class="text-danger">{{ $message }}</p>
   @enderror
</div>

<div class="d-grid gap-2 col-12 mx-auto">
   <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">{{ $submit }}</button>
</div>
