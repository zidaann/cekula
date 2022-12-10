{{-- <div class="mb-3">
  <label for="ID" class="form-label"> ID Ruangan </label>
  <input type="text" name="ID" id="ID" class="form-control input-bg select2" placeholder="Masukkan ID Ruangan">
</div> --}}

<div class="mb-3">
   <label for="nama_ruangan" class="form-label"> Nama Ruangan </label>
   <input type="text" name="nama" id="nama_ruangan" class="form-control input-bg " placeholder="Masukkan Nama Ruangan"
      autocomplete="off" value="{{ $fasilitas->nama }}">
</div>
<div class="mb-3">
   <label for="jumlah_ruangan" class="form-label"> Jumlah Ruangan </label>
   <div class="d-flex px-3">
      <div class="btn-number rounded " id="minusRuangan"><i class="bi bi-dash fs-6"></i></div>
      <input class="text-center mx-2 border-0 " id="jumlahRuangan" type="number" name="jumlah" min="1"
         placeholder="0" value="1" style="width:3rem;">
      <div class="btn-number rounded " id="plusRuangan"><i class="bi bi-plus fs-6"></i></div>
   </div>
</div>
<div class="mb-3">
   <input type="hidden" name="kategori" id="kategori" class="form-control input-bg "
      placeholder="Masukkan Nama Barang" autocomplete="off" value="Ruangan">
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
   <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">Simpan Data Fasilitas</button>
</div>
