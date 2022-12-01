<div class="mb-3">
  <label for="penanggung_jawab" class="form-label"> Penanggung Jawab </label>
  <input type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control select2" placeholder="Pilih Nama Penanggung Jawab" multiple>
</div>
<div class="mb-3">
  <label for="tgl_pemasukan" class="form-label"> Tanggal Pemasukan </label>
  <input type="date" name="tgl_pemasukan" id="tgl_pemasukan" class="form-control bg-color-content border-0 datepicker" placeholder="HH/BB/TTTT">
</div>
<div class="mb-3">
  <label for="keterangan" class="form-label"> Keterangan Pemasukan </label>
  <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Tulis keterangan pemasukan">
</div>
<div class="mb-3">
  <label for="total_pembayaran" class="form-label"> Total Pembayaran </label>
  <div class="input-group">
    <span class="input-group-text border-0 bg-color-content">Rp.</span>
    <input type="text" name="total_pembayaran" id="total_pembayaran" class="form-control">
  </div>
</div>
<div class="mb-3">
  <label for="bukti" class="form-label" style="cursor: pointer"> Bukti Pemasukan </label>
  <input type="file" name="bukti" id="bukti" class="form-control">
</div>
<div class="mb-3">
  <div class="row">
    <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
      <small class="text-danger"> Masukkan data ini dengan benar!</small>
    </div>
  </div>
</div>
<div class="d-grid gap-2 col-12 py-2 justify-content-center mx-auto btn-blue rounded">
  <button class="border-0 d-flex bg-transparent font-rubik font-16 fw-semibold text-white" type="button">
    <div class="pe-3">Lanjutkan Pembayaran</div>
  </button>
</div>
@push('script')
  <script>
    function FileSelected(e) {
      file = document.getElementById('fu').files[document.getElementById('fu').files.length - 1];
      document.getElementById('fileName').innerHtml = file.name;
    }
  </script>
@endpush
