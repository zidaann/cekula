<div class="mb-3">
  <label for="judul_buku" class="form-label"> Judul Buku </label>
  <select name="judul_buku" id="judul_buku" class="select">
    <option selected disabled>Pilih Judul Buku</option>
    <option value="#">Jurus Menghitung Cepat</option>
    <option value="#">Jurus Algoritma Dasar</option>
    <option value="#">Jangkauan Rumus Algoritma</option>
  </select>
</div>
<div class="mb-3">
  <label for="kategori_buku" class="form-label"> Kategori Buku </label>
  <select name="kategori_buku" id="kategori_buku" class="select">
    <option selected disabled>Pilih Kategori Buku</option>
    <option value="#">Jurus Menghitung Cepat</option>
    <option value="#">Jurus Algoritma Dasar</option>
    <option value="#">Jangkauan Rumus Algoritma</option>
  </select>
</div>
<div class="mb-3">
  <label for="nama_peminjam" class="form-label"> Nama Peminjam </label>
  <select name="nama_peminjam" id="nama_peminjam" class="select">
    <option selected disabled>Pilih Nama Peminjam</option>
    <option value="#">Admad Jourji Zaidan</option>
    <option value="#">Wildan Rachmadoni</option>
  </select>
</div>
<div class="mb-3">
  <label for="tgl_peminjaman" class="form-label"> Tanggal Peminjaman </label>
  <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control input-bg">
</div>
<div class="mb-3">
  <label for="jumlah_peminjaman" class="form-label"> Jumlah Peminjaman</label>
  <input type="text" name="jumlah_peminjaman" id="jumlah_peminjaman" class="form-control input-bg" placeholder="Masukkan Jumlah Peminjaman">
</div>
<div class="mb-3">
  <label for="tgl_pengembalian" class="form-label"> Estimasi Pengembalian </label>
  <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="form-control input-bg">
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
