@extends('dashboard.main')
@section('content')
    <div class="justify-content-center d-flex mb-4 p-2">
        <div class="bg-color d-flex shadow-lg rounded-4 px-3 px-md-5 align-content-center pt-2 w-100 justify-content-center">
            <h5 class="align-text-bottom py-1 font-rubik color-user fs-5 text-center">Presensi Pegawai</h5>
        </div>
    </div>
    <div>
        <div class="row ps-4 justify-content-start">
            <div class="col-12 col-md-4 mb-3 px-2">
                <div>
                    <div class="border-bottom pt-3">
                        <h5 class="font-noto fw-bold">
                            Yuliansyah
                        </h5>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-noto">04/11/2022</h6>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div class="mt-3">
                                <h6 class="font-noto text-primary">201987111</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('presensi.pegawai.edit') }}" class="mx-2 text-dark"><i class="bi bi-pencil"></i></a>
                                <form action="" method="">
                                    @csrf
                                    <button class="btn"><i class="bi bi-trash3"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 px-2">
                <div>
                    <div class="border-bottom pt-3">
                        <h5 class="font-noto fw-bold">
                            Ahmad Nur Jaka
                        </h5>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-noto">04/11/2022</h6>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div class="mt-3">
                                <h6 class="font-noto text-primary">201987111</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"><i class="bi bi-pencil"></i></a>
                                <form action="" method="">
                                    @csrf
                                    <button class="btn"><i class="bi bi-trash3"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 px-2">
                <div>
                    <div class="border-bottom pt-3">
                        <h5 class="font-noto fw-bold">
                            Deva Agustina
                        </h5>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-noto">04/11/2022</h6>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div class="mt-3">
                                <h6 class="font-noto text-primary">201987111</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"><i class="bi bi-pencil"></i></a>
                                <form action="" method="">
                                    @csrf
                                    <button class="btn"><i class="bi bi-trash3"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 px-2">
                <div>
                    <div class="border-bottom pt-3">
                        <h5 class="font-noto fw-bold">
                            Zein Muhammad
                        </h5>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-noto">04/11/2022</h6>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div class="mt-3">
                                <h6 class="font-noto text-primary">201987111</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"><i class="bi bi-pencil"></i></a>
                                <form action="" method="">
                                    @csrf
                                    <button class="btn"><i class="bi bi-trash3"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-add">
        <a href="{{ route('presensi.pegawai.create') }}">
          <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
        </a>
      </div>
@endsection