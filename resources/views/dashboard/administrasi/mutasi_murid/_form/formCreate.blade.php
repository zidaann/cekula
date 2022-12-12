<div class="mb-3">
  <label for="nama_murid" class="form-label"> Nama Murid </label>
  <select name="nama_murid" id="nama_murid" class="select">
    <option selected disabled>Pilih Nama Murid</option>
    <option value="#">Jourji</option>
    <option value="#">Wildam</option>
    <option value="#">Irfan</option>
  </select>
</div>
<div class="mb-3">
  <label for="tgl_mutasi" class="form-label"> Tanggal Mutasi </label>
  <input type="date" name="tgl_mutasi" id="tgl_mutasi" class="form-control bg-color-content border-0" placeholder="Masukkan tanggal mutasi">
</div>
<div class="mb-3">
  <label for="skl_tujuan" class="form-label"> Sekolah Tujuan </label>
  <input type="text" name="skl_tujuan" id="skl_tujuan" class="form-control" placeholder="Masukkan sekolah tujuan murid">
</div>
<div class="mb-3">
  <label for="alamat_skl_tujuan" class="form-label"> Alamat Sekolah Tujuan </label>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="alamat_skl_tujuan" name="alamat_skl_tujuan"></textarea>
    <label for="alamat_skl_tujuan" class="font-noto font-14 fw-normal">Masukkan alamat sekolah tujuan</label>
  </div>
</div>
<div class="mb-3">
  <label for="wali" class="form-label"> Nama Wali Murid </label>
  <input type="text" name="wali" id="wali" class="form-control" placeholder="Masukkan nama wali murid">
</div>
<div class="mb-3">
  <div class="row">
    <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
      <small class="text-danger"> Masukkan data ini dengan benar!</small>
    </div>
  </div>
</div>
<div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">Simpan Data Mutasi</button>
</div>
