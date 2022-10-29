<div class="mb-3">
    <label for ="judul_buku" class="form-label"> Judul Buku </label>
    <select type="text" class="form-control input-bg select2 " name="judul_buku[]" multiple >
        <option disabled >Pilih Buku</option>
        <option value="Filosofi Teras">Filosofi Teras</option>
        <option value="Bumi Manusia">Bumi Manusia</option>
      </select>
</div>
<div class="mb-3">
    <label for ="kategori_buku" class="form-label"> Kategori Buku </label>
    <input type ="text" name="kategori_buku" id="kategori_buku" class="form-control input-bg" readonly>
</div>
<div class="mb-3">
    <label for ="nama_peminjam" class="form-label"> Nama Peminjam </label>
    <select type="text" class="form-control input-bg select2 " name="nama_peminjam[]" multiple >
        <option value="Zaydan Muhammad">Zaydan Muhammad</option>
        <option value="Aliyah Jurji Aisyah">Aliyah Jurji Aisyah</option>
      </select>
</div>
<div class="mb-3">
    <label for ="tgl_peminjaman" class="form-label"> Tanggal Peminjaman </label>
    <input type ="text" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control input-bg-grey datepicker" placeholder="HH/BB/TT">
</div>
<div class="mb-3">
    <label for ="jam_peminjaman" class="form-label"> Jam Peminjaman </label>
    <input type ="time" name="jam_peminjaman" id="jam_peminjaman" class="form-control input-bg-grey" placeholder="00:00">
</div>
<div class="mb-3">
    <label for ="jumlah_peminjaman" class="form-label"> Jumlah Peminjaman </label>
    <input type ="number" name="jumlah_peminjaman" id="jumlah_peminjaman" class="form-control input-bg-grey" min="1" >
</div>