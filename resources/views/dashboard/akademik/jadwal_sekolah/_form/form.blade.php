<div class="mb-3 image-wrapper " >
    <label for ="image" class="label-image"><i class="bi bi-camera fs-5"></i></label>
    <img class="img-preview img-fluid text-center rounded mx-auto" >
    <input type="file" class="form-control d-none @error('pamflet') is-invalid @enderror" id="image" placeholder="Enter your image" name="pamflet" onchange="previewImage()">
    @error('pamflet')
        <div class="text-danger mt-2"> {{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
      <label for ="judul"> Judul Jadwal </label>
      <input type ="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul jadwal">
  </div>
  <div class="mb-3">
      <label for ="tanggal_pelaksanaan"> Tanggal pelaksanaan </label>
      <input type ="date" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" class="form-control" placeholder="HH/BB/TT">
  </div>
  <div class="mb-3">
      <label for ="tanggal_selesai_pelaksanaan"> Selesai pelaksanaan </label>
      <input type ="date" name="tanggal_selesai_pelaksanaan" id="tanggal_selesai_pelaksanaan" class="form-control" placeholder="HH/BB/TT">
  </div>
  <div class="mb-3">
      <label for ="deskripsi"> Deskripsi pelaksanaan </label>
      <textarea class="form-control mt-2" placeholder="Masukkan deskripsi jadwal" id="deskripsi" name="deskripsi"></textarea>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
      <button class="btn-post border-0 btn" type="submit">Posting jadwal</button>
</div>