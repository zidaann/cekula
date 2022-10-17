@extends('dashboard.main')
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="{{ route('jadwal_sekolah.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Edit Presensi Murid</span>
    </div>
  </div>

<main id="presensi-murid" class=" py-4">
    <div class="container">
        <div class="row justify-content-center mx-3">
            <div class="col-md-9">
                <form action="" method="">
                    @csrf
                    @method("PUT")
                    @include('dashboard.presensi.murid._form.form')
                </form>
               </div>
        </div>
    </div>
</main>
@endsection