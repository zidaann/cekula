<div class="mb-3">
   <label for="tingkat_kelas" class="form-label"> Tingkat Kelas </label>
   <select name="tingkat_kelas" id="tingkat_kelas" class="select @error('tingkat_kelas')
      is-invalid
   @enderror">
      <option selected disabled>Pilih Tingkat Kelas</option>
      <option value="7">Kelas 7</option>
      <option value="8">Kelas 8</option>
      <option value="9">Kelas 9</option>
   </select>
   @error('tingkat_kelas')
      <div class="text-danger">{{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="nama_kelas" class="form-label"> Nama Kelas </label>
   <input type="text" name="nama_kelas" id="nama_kelas"
      class="form-control input-bg @error('nama_kelas')
   is-invalid
@enderror"
      placeholder="Masukkan nama kelas (7A, 7B, 7C, ...)" autocomplete="off">
   @error('nama_kelas')
      <div class="text-danger">{{ $message }}</div>
   @enderror
</div>
<div class="mb-3">
   <label for="user_id" class="form-label"> Wali Kelas </label>
   <select name="user_id" id="user_id" class="select @error('user_id')
      is-invalid
   @enderror">
      <option selected disabled>Pilih Wali Kelas</option>
      @foreach ($waliKelas as $wali)
         <option value="{{ $wali->id }}">{{ $wali->nama }}</option>
      @endforeach

   </select>
   @error('user_id')
      <div class="text-danger">{{ $message }}</div>
   @enderror
</div>
{{-- <div class="mb-3">
   <div class="row">
      <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt=""
            class="img-fluid me-2" style="width:20px ;">
         <small class="text-danger"> Masukkan data ini dengan benar!</small>
      </div>
   </div>
</div> --}}
<div class="d-grid gap-2 col-12 mx-auto">
   <button class="btn-blue font-noto fw-semibold font-16 py-2" type="submit">Buat Kelas</button>
</div>
