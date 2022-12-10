<div class="mb-4 image-wrapper ">
  <label for="image" class="label-image"><i class="bi bi-camera fs-5"></i></label>
  {{-- @if ($beritaKelas->pamflet) --}}
  <div class="text-center">
    <img src="#" class="img-preview img-fluid text-center rounded mx-auto">
  </div>
  {{-- @else --}}
  <img class="img-preview img-fluid text-center rounded mx-auto">
  {{-- @endif --}}
  <input type="file" class="form-control d-none @error('#') is-invalid @enderror" id="image" placeholder="Enter your image" name="pamflet" onchange="previewImage()">
  {{-- @error('pamflet')
    <div class="text-danger mb-5"> {{ $message }}</div>
  @enderror --}}
</div>
<div class="mb-3">
  <label for="id" class="form-label"> ID Buku</label>
  <input type="text" name="id" id="id" class="form-control input-bg" placeholder="Masukkan ID Buku">
</div>
<div class="mb-3">
  <label for="kategori" class="form-label"> Kategori Buku </label>
  <select name="kategori" id="kategori" class="select">
    <option selected disabled>Pilih Kategori Buku</option>
    <option value="#">Novel</option>
    <option value="#">Ini</option>
    <option value="#">Itu</option>
  </select>
</div>
<div class="mb-3">
  <label for="judul" class="form-label"> Judul Buku</label>
  <input type="text" name="judul" id="judul" class="form-control input-bg" placeholder="Masukkan Judul Buku">
</div>
<div class="mb-3">
  <label for="nama_penulis" class="form-label"> Nama Penulis </label>
  <input type="text" name="nama_penulis" id="nama_penulis" class="form-control input-bg" placeholder="Masukkan Nama Penulis">
</div>
<div class="mb-3">
  <label for="nama_penerbit" class="form-label"> Nama Penerbit </label>
  <input type="text" name="nama_penerbit" id="nama_penerbit" class="form-control input-bg" placeholder="Masukkan Nama Penerbit">
</div>
<div class="mb-3">
  <label for="tahun_terbit" class="form-label"> Tahun Terbit </label>
  <input type="number" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan Tahun Terbit" class="form-control input-bg" min="1900" step="1">
</div>
<div class="mb-3">
  <label for="kota_terbit" class="form-label"> Kota Terbit </label>
  <input type="text" name="kota_terbit" id="kota_terbit" class="form-control input-bg" placeholder="Masukkan Nama Penerbit">
</div>
<div class="mb-3">
  <div class="row">
    <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
      <small class="text-danger"> Masukkan data ini dengan benar!</small>
    </div>
  </div>
</div>
<div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">Buat Data Buku</button>
</div>
