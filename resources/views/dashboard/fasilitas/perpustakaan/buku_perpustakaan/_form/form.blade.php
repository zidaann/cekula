<div class="mb-4 image-wrapper ">
   <label for="image" class="label-image"><i class="bi bi-camera fs-5"></i></label>
   {{-- <input type="hidden" name="oldPamflet" value="{{ $beritaSekolah->pamflet }}"> --}}
   @if ($buku->cover)
      <div class="text-center">
         <img src="{{ asset('storage/' . $buku->cover) }}" class="img-preview img-fluid text-center rounded mx-auto">
      </div>
   @else
      <img class="img-preview img-fluid text-center rounded mx-auto">
   @endif
   <input type="file" class="form-control d-none @error('cover') is-invalid @enderror" id="image"
      placeholder="Enter your image" name="cover" onchange="previewImage()">
   @error('cover')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="id_buku" class="form-label"> ID Buku</label>
   <input type="text" name="id_buku" id="id_buku"
      class="form-control input-bg @error('id_buku') is-invalid @enderror" placeholder="Masukkan ID Buku"
      autocomplete="off" required value="{{ old('id_buku', $buku->id_buku) }}">
   @error('id_buku')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="kategori_id" class="form-label"> Kategori Buku </label>
   <select name="kategori_id" id="kategori_id" class="select @error('kategori_id') is-invalid @enderror" required>
      <option selected disabled>Pilih Kategori Buku</option>
      @foreach ($kategoris as $kategori)
         <option value="{{ $kategori->id }}" {{ $kategori->id == $buku->kategori_id ? 'selected' : '' }}>
            {{ $kategori->nama }}</option>
      @endforeach
   </select>
   @error('kategori_id')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="judul" class="form-label"> Judul Buku</label>
   <input type="text" name="judul" id="judul"
      class="form-control input-bg @error('judul') is-invalid @enderror" placeholder="Masukkan Judul Buku"
      autocomplete="off" required value="{{ $buku->judul }}">
   @error('judul')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="pengarang" class="form-label"> Nama Penulis </label>
   <input type="text" name="pengarang" id="pengarang"
      class="form-control input-bg @error('pengarang') is-invalid @enderror" placeholder="Masukkan Nama Penulis"
      autocomplete="off" required value="{{ $buku->pengarang }}">
   @error('pengarang')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="penerbit" class="form-label"> Nama Penerbit </label>
   <input type="text" name="penerbit" id="penerbit"
      class="form-control input-bg @error('penerbit') is-invalid @enderror" placeholder="Masukkan Nama Penerbit"
      autocomplete="off" required value="{{ $buku->penerbit }}">
   @error('penerbit')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="tahun_terbit" class="form-label"> Tahun Terbit </label>
   <input type="number" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan Tahun Terbit"
      class="form-control input-bg @error('tahun_terbit') is-invalid @enderror" min="1900" step="1" required
      autocomplete="off" value="{{ $buku->tahun_terbit }}">
   @error('tahun_terbit')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="kota_terbit" class="form-label"> Kota Terbit </label>
   <input type="text" name="kota_terbit" id="kota_terbit"
      class="form-control input-bg @error('kota_terbit') is-invalid @enderror" placeholder="Masukkan Nama Penerbit"
      autocomplete="off" required value="{{ $buku->kota_terbit }}">
   @error('kota_terbit')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="status_buku" class="form-label"> Status Buku </label>
   <select name="status_buku" id="status_buku" class="form-select @error('status_buku') is-invalid @enderror" required>
      <option selected disabled>Pilih Status Buku</option>
      <option value="Tambah Buku" {{ $buku->status_buku == 'Tambah Buku' ? 'selected' : '' }}>Tambah Buku</option>
      <option value="Sumbang Buku" {{ $buku->status_buku == 'Sumbang Buku' ? 'selected' : '' }}>Sumbang Buku</option>
   </select>
   @error('status_buku')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="id_penyumbang" class="form-label"> ID Penyumbang </label>
   <input type="text" name="id_penyumbang" id="id_penyumbang"
      class="form-control input-bg @error('id_penyumbang') is-invalid @enderror" placeholder="Masukkan Nama Penerbit"
      autocomplete="off" value="{{ $buku->id_penyumbang }}">
   @error('id_penyumbang')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="nama_penyumbang" class="form-label"> Nama Penyumbang </label>
   <input type="text" name="nama_penyumbang" id="nama_penyumbang"
      class="form-control input-bg @error('nama_penyumbang') is-invalid @enderror"
      placeholder="Masukkan Nama Penerbit" autocomplete="off" value="{{ $buku->nama_penyumbang }}">
   @error('nama_penyumbang')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="tgl_sumbang" class="form-label"> Tanggal Sumbang </label>
   <input type="date" name="tgl_sumbang" id="tgl_sumbang"
      class="form-control input-bg @error('tgl_sumbang') is-invalid @enderror" placeholder="Masukkan Nama Penerbit"
      autocomplete="off" value="{{ $buku->tgl_sumbang }}">
   @error('tgl_sumbang')
      <div class="text-danger mb-1"> {{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <div class="row">
      <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt=""
            class="img-fluid me-2" style="width:20px ;">
         <small class="text-danger"> Masukkan data ini dengan benar!</small>
      </div>
   </div>
</div>
<div class="d-grid gap-2 col-12 mx-auto">
   <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">{{ $submit }}</button>
</div>
