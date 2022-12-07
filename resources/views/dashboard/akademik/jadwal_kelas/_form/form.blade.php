  <div class="mb-3">
    <label for ="kelas_id" class="form-label"> Nama Kelas </label>
    <select class="form-select" aria-label="Default select example" name="kelas_id" required>
      <option selected disabled >Pilih Kelas</option>
      @foreach ($kelas as $item)
      <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label for ="hari_id" class="form-label"> Nama Hari </label>
    <select class="form-select" aria-label="Default select example" name="hari_id" required>
      <option selected disabled >Pilih Hari</option>
      @foreach ($haris as $hari)
        <option value="{{ $hari->id }}">{{ $hari->nama }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for ="mapel_id" class="form-label"> Nama Mapel </label>
    <select class="form-select" aria-label="Default select example" name="mapel_id" required>
      <option selected disabled >Pilih Mapel</option>
      @foreach ($mapels as $mapel)
      <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for ="jam_masuk" class="form-label"> Jam Mata Pelajaran </label>
    <div class="row">
      <div class="col-4 d-flex">
        <input type="time" name="jam_masuk" id="jam_masuk" class="form-control" name="jam_masuk" required placeholder="{{ Date('H:i') }}">
        <div class="mx-3 d-flex align-items-center">-</div>
        <input type="time" name="jam_selesai" id="jam_selesai" class="form-control" name="jam_keluar" required placeholder="{{ Date('H:i') }}">
      </div>
    </div>
  </div>
  <div class="mb-3">
    <label for ="pegawai_id" class="form-label">Nama Guru Mata pelajaran </label>
    <select class="form-select" aria-label="Default select example" name="pegawai_id" required>
      <option selected disabled >Pilih Guru Mapel</option>
      @foreach ($pegawais as $pegawai)
        <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <div class="row">
      <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
        <small class="text-danger"> Masukkan data ini dengan benar!</small>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
      <button class="btn-post border-0 btn" type="submit">Buat jadwal</button>
  </div>