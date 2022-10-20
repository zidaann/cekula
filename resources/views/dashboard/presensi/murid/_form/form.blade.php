<div class="mb-3">
    <label for ="no_id" class="form-label "> No. Identitas Murid </label>
    <input type ="text" name="no_id" id="no_id" class="form-control input-bg" placeholder="Masukkan nomor identitas murid">
</div>
<div class="mb-3">
    <label for ="name" class="form-label"> Nama Murid </label>
    <input type ="text" name="name" id="name" class="form-control input-bg" placeholder="Masukkan nama murid">
</div>
<div class="mb-3">
    <p class="font-noto fw-bold">Tingkat Kelas</p>
    <input type="radio" class="btn-check" name="kelas" id="kelas_7" value="Kelas 7">
    <label for="kelas_7" class="btn btn-outline-primary">Kelas 7</label>
    <input type="radio" class="btn-check" name="kelas" id="kelas_8" value="Kelas 8">
    <label for="kelas_8" class="btn btn-outline-primary">Kelas 8</label>
    <input type="radio" class="btn-check" name="kelas" id="kelas_9" value="Kelas 9">
    <label for="kelas_9" class="btn btn-outline-primary">Kelas 9</label>
</div>
<div class="mb-3">
    <p class="font-noto fw-bold">Nama Kelas</p>
    <input type="radio" class="btn-check" name="jenis_kelas" id="kelas_a" value="Kelas A">
    <label for="kelas_a" class="btn btn-outline-primary">Kelas A</label>
    <input type="radio" class="btn-check" name="jenis_kelas" id="kelas_b" value="Kelas B">
    <label for="kelas_b" class="btn btn-outline-primary">Kelas B</label>
    <input type="radio" class="btn-check" name="jenis_kelas" id="kelas_c" value="Kelas C">
    <label for="kelas_c" class="btn btn-outline-primary">Kelas C</label>
</div>

<div class="mb-3">
    <label for ="tgl_kehadiran" class="form-label "> Tanggal Kehadiran </label>
    <input type ="text" name="tgl_kehadiran" id="datepicker" class="form-control input-bg">
</div>
<div class="mb-3">
    <label for ="kd_kehadiran" class="form-label"> Kode Kehadiran </label>
    <input type ="text" name="kd_kehadiran" id="kd_kehadiran" class="form-control input-bg" onclick="date()">
</div>
<div class="mb-3">
    <div class="row">
      <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
        <small class="text-danger"> Masukkan data ini dengan benar!</small>
      </div>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
      <button class="btn-post border-0 btn" type="button">Simpan kehadiran</button>
</div>