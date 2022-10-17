@extends('dashboard.main')
@section('content')
    <div class="bg-form">
        <div class="justify-content-center d-flex mb-4 p-2">
            <div class="bg-color d-flex shadow-lg rounded-4 px-3 px-md-5 align-content-center pt-2 w-100">
                <div>
                    <a href="{{ route('presensi.pegawai.index') }}"><i class="bi bi-arrow-left text-white"></i></a>
                </div>
                <div class="d-flex justify-content-center w-100">
                    <div>
                        <h5 class="align-text-bottom py-1 font-rubik color-user fs-5 text-center">Edit Presensi Pegawai</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form action="#" class="font-noto">
                   @csrf
                   @method("PUT")
                   @include('dashboard.presensi.pegawai._form.form')
                </form>
            </div>
        </div>
    </div>
@endsection