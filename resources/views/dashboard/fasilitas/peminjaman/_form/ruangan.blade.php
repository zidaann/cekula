<div class="mb-3">
    <label for ="id_ruangan" class="form-label"> ID Peminjaman Ruangan </label>
    <input type ="text" name="id_ruangan" id="id_ruangan" class="form-control input-bg" placeholder="Masukkan id peminjaman ruangan">
</div>
<div class="mb-3">
    <label for ="id_fasilitas" class="form-label"> ID Fasilitas </label>
    <input type ="text" name="id_fasilitas" id="id_fasilitas" class="form-control input-bg" placeholder="Masukkan ID Fasilitas">
</div>
<div class="mb-3">
    <label for ="fasilitas_ruangan" class="form-label d-block"> Fasilitas Ruangan</label>
    <select type="text" class="form-control select2 input-bg " name="peminjaman[]" multiple >
        <option disabled >Pilih Fasilitas</option>
        <option value="Kelas 7A">Kelas 7A</option>
        <option value="Kelas 8A">Kelas 8A</option>
      </select>
</div>
<div class="mb-3">
    <label for ="nama_peminjam" class="form-label"> Nama Peminjam </label>
    <input type ="text" name="nama_peminjam" id="nama_peminjam" class="form-control input-bg" placeholder="Masukkan Nama Peminjam">
</div>
<div class="mb-3">
    <label for ="id_peminjam" class="form-label"> ID Peminjam </label>
    <input type ="text" name="id_peminjam" id="id_peminjam" class="form-control input-bg" placeholder="Masukkan ID peminjam">
</div>
<div class="mb-3">
    <label for ="tgl_peminjaman" class="form-label"> Tanggal Peminjaman </label>
    <input type ="text" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control input-bg datepicker" placeholder="HH/BB/TTT">
</div>
<div class="mb-3">
    <label for ="jam_peminjaman" class="form-label"> Jam Peminjaman </label>
    <input type ="time" name="jam_peminjaman" id="jam_peminjaman" class="form-control input-bg " placeholder="00:00">
</div>
<div class="mb-3">
    <label for ="keterangan_peminjaman" class="form-label"> Keterangan Peminjaman </label>
    <input type ="text" name="keterangan_peminjaman" id="keterangan_peminjaman" class="form-control input-bg " placeholder="Masukkan Keterangan Peminjaman">
</div>
<div class="mb-3">
    <div class="row">
      <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
        <small class="text-danger"> Masukkan data ini dengan benar!</small>
      </div>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn-post border-0 btn" type="button">Simpan Peminjaman</button>
</div>
