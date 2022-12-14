<div class="mb-2">
    <label for="identitas"><h5>No. Identitas Pegawai</h5></label>
    <input class="form-control" type="text" name="identitas" id="identitas" placeholder="Masukkan nomor identitas">
</div>
<div class="mb-2">
    <label for="nama"><h5>Nama Pegawai</h5></label>
    <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan nama pegawai">
</div>
<div class="mb-2">
    <label for="tgl_hadir"><h5>Tanggal Kehadiran</h5></label>
    <input class="form-control" type="date" name="tgl_hadir" id="tgl_hadir" placeholder="HH-BB-TTTT">
</div>
<div class="mb-2">
    <h5>Keterangan Kehadiran</h5>
    <input type="radio" class="btn-check" name="kehadiran" id="hadir" value="hadir">
    <label for="hadir" class="btn btn-outline-primary">Hadir</label>
    <input type="radio" class="btn-check" name="kehadiran" id="izin" value="izin">
    <label for="izin" class="btn btn-outline-primary">Izin</label>
    <input type="radio" class="btn-check" name="kehadiran" id="sakit" value="sakit">
    <label for="sakit" class="btn btn-outline-primary">Sakit</label>
</div>
<div class="mt-2 d-flex justify-content-center">
    <button type="submit" class="btn-blue px-5 py-2 border-0 rounded-2">Simpan Kehadiran</button>
</div>