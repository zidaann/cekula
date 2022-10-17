@extends('dashboard.main')
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Buat Presensi Murid</span>
    </div>
  </div>

<main id="presensi-murid" class=" py-4">
    <div class="container">
        <div class="row justify-content-center mx-3">
            <div class="col-md-9">
                <form action="" method="">
                    @csrf
                    @include('dashboard.presensi.murid._form.form')
                </form>
               </div>
        </div>
    </div>
</main>
@endsection