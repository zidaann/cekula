<div class="mb-3">
  <label for="nama_murid" class="form-label"> Nama Murid </label>
  <select name="nama_murid" id="nama_murid" class="select">
    <option selected disabled>Pilih Nama Murid</option>
    <option value="#">Jourji</option>
    <option value="#">Aan</option>
    <option value="#">Wildan</option>
  </select>
</div>
<div class="mb-3">
  <label for="keterangan" class="form-label"> Keterangan </label>
  <select name="keterangan" id="keterangan" class="select">
    <option selected disabled>Pilih Keterangan</option>
    <option value="#">Hadir</option>
    <option value="#">Izin</option>
    <option value="#">Sakit</option>
  </select>
</div>
<div class="mb-3">
  <label for="waktu_presensi" class="form-label"> Waktu Presensi </label>
  <input type="time" name="waktu_presensi" id="waktu_presensi" class="form-control" required placeholder="{{ Date('H:i') }}">
</div>
<div class="mb-3">
  <label for="tgl_presensi" class="form-label "> Tanggal Presensi </label>
  <input type="date" name="tgl_presensi" id="tgl_presensi" class="form-control input-bg" placeholder="{{ Date('DD/MM/YY') }}">
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
