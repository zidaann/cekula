<div class="mb-3">
  <label for="fasilitas" class="form-label"> Fasilitas </label>
  <select class="form-select select2 input-bg">
    <option selected>Pilihan</option>
    <option value="1">Aula</option>
    <option value="2">Kelas 7A</option>
    <option value="3">Kelas 8A</option>
    <option value="4">Kelas 9A</option>
  </select>
</div>
<div class="mb-3">
  <label for="nama_peminjam" class="form-label"> Nama Peminjam </label>
  <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control input-bg select2" placeholder="Pilih Nama Peminjam">
</div>
<div class="mb-3">
  <label for="tgl_peminjaman" class="form-label"> Tanggal Peminjaman </label>
  <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control input-bg datepicker" placeholder="HH/BB/TTT">
</div>
<div class="mb-3">
  <label for="jumlah_peminjaman" class="form-label"> Jumlah Peminjaman </label>
  <input type="number" name="jumlah_peminjaman" id="jumlah_peminjaman" class="form-control input-bg " placeholder="0" min="1">
</div>
<div class="mb-3">
  <label for="keterangan_peminjaman" class="form-label"> Keterangan Peminjaman </label>
  @error('keterangan_peminjaman')
    <p class="text-danger">{{ $message }}</p>
  @enderror
  <input type="hidden" name="keterangan_peminjaman" id="keterangan_peminjaman">
  <trix-editor input="keterangan_peminjaman"></trix-editor>
</div>
<div class="mb-3">
  <label for="tgl_pengembalian" class="form-label"> Estimasi Pengembalian </label>
  <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="form-control input-bg datepicker" placeholder="HH/BB/TTT">
</div>
<div class="mb-3">
  <div class="row">
    <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
      <small class="text-danger"> Masukkan data ini dengan benar!</small>
    </div>
  </div>
</div>
<div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">Simpan Peminjaman</button>
</div>
