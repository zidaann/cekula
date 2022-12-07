<div class="mb-3">
  <label for="ID" class="form-label"> ID Barang </label>
  <input type="text" name="ID" id="ID" class="form-control input-bg select2" placeholder="Masukkan ID Barang">
</div>
<div class="mb-3">
  <label for="nama_barang" class="form-label"> Nama Barang </label>
  <input type="text" name="nama_barang" id="nama_barang" class="form-control input-bg select2" placeholder="Masukkan Nama Barang">
</div>
<div class="mb-3">
  <label for="jumlah_barang" class="form-label"> Jumlah Barang </label>
  <div class="d-flex px-3">
    <div class="btn-number rounded" id="minus"><i class="bi bi-dash fs-6"></i></div>
    <input class="text-center mx-2 border-0 jumlah-fasilitas" type="text" name="jumlah_barang" id="jumlah_barang" min="0" placeholder="0" value="0" style="width:3rem;">
    <div class="btn-number rounded" id="plus"><i class="bi bi-plus fs-6"></i></div>
  </div>
</div>
<div class="mb-3">
  <div class="row">
    <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
      <small class="text-danger"> Masukkan data ini dengan benar!</small>
    </div>
  </div>
</div>
<div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">Simpan Data Fasilitas</button>
</div>
