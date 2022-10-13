@extends('dashboard.main')
@section('content')
    <div class="bg-succes h-100">
        {{-- Jadwal --}}
        <div class="mb-5">
            {{-- judul --}}
            <div class="justify-content-center d-flex mb-4">
                <div class="bg-color d-flex shadow-lg rounded-4 px-3 px-md-5 align-content-center pt-2">
                    <h5 class="align-text-bottom px-3 px-md-5 py-1 font-rubik color-user fs-5 text-center">Jadwal Sekolah dan Kelas</h5>
                </div>
            </div>
            {{-- Content --}}
            <div>
                <div class="row p-4 justify-content-around">
                    <div class="col-12 col-md-5 mb-3 bg-color-content rounded-4 shadow">
                        <div class="card w-100 bg-transparent border-0">
                            <div class="d-flex justify-content-center">
                                <img src="/assets/img/dashboard/img1.png" class="card-img-top w-75" >
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-noto fw-semibold">Kegiatan Tengah Semester</h5>
                                <p class="card-text font-noto">15 Oktober - 23 Oktober 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 mb-3 bg-color-content rounded-4 shadow">
                        <div class="card w-100 bg-transparent border-0">
                            <div class="d-flex justify-content-center">
                                <img src="/assets/img/dashboard/img2.png" class="card-img-top w-75" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-noto fw-semibold">Ulangan Tengah Semester</h5>
                                <p class="card-text font-noto">21 Desember - 28 Desember 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Berita --}}
       <div class="row px-4">
            <div class="mb-5">
                {{-- judul --}}
                <div class="justify-content-center d-flex mb-4">
                    <div class="bg-color d-flex shadow-lg rounded-4 px-3 px-md-5 align-content-center pt-2">
                        <h5 class="align-text-bottom px-3 px-md-5 py-1 font-rubik color-user fs-5 text-center">Berita Sekolah dan Kelas</h5>
                    </div>
                </div>
                {{-- Content --}}
                <div>
                    <div class="row justify-content-around">
                        <div class="col-12 col-md-5 mb-3 bg-color-content rounded-4 shadow">
                            <div class="card w-100 bg-transparent border-0">
                                <div class="d-flex justify-content-center">
                                    <img src="/assets/img/dashboard/img3.png" class="card-img-top w-75" alt="...">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title font-noto fw-semibold">Siswa-Siswi Berprestasi 2022</h5>
                                    <p class="card-text font-noto">15 Oktober - 23 Oktober 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 mb-3 bg-color-content rounded-4 shadow">
                            <div class="card w-100 bg-transparent border-0">
                                <div class="d-flex justify-content-center">
                                    <img src="/assets/img/dashboard/img2.png" class="card-img-top w-75" alt="...">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title font-noto fw-semibold">Penghargaan Smart School 2022</h5>
                                    <p class="card-text font-noto">21 Desember - 28 Desember 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        {{-- Ekstrakulikler --}}
        <div class="mb-5">
            {{-- judul --}}
            <div class="justify-content-center d-flex mb-4">
                <div class="bg-color d-flex shadow-lg rounded-4 px-3 px-md-5 align-content-center pt-2">
                    <h5 class="align-text-bottom px-3 px-md-5 py-1 font-rubik color-user fs-5 text-center">Ekstrakulikuler</h5>
                </div>
            </div>
            {{-- Content --}}
            <div>
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3 bg-color rounded-4 shadow g-0 m-3">
                        <div class="card w-100 bg-transparent border-0">
                            <div class="d-flex justify-content-center bg-color-content w-100 rounded-4 align-items-center" style="height: 150px;">
                                <img src="/assets/img/dashboard/img4.png" class="card-img-top w-100 h-100 " alt="...">
                            </div>
                            <div class="card-body text-center color-user">
                                <h5 class="card-title font-noto fw-semibold">Pramuka</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3 bg-color rounded-4 shadow g-0 m-3">
                        <div class="card w-100 bg-transparent border-0">
                            <div class="d-flex justify-content-center bg-color-content w-100 rounded-4 align-items-center img-fluid" style="height: 150px;">
                                <img src="/assets/img/dashboard/img5.png" class="card-img-top w-100 h-100" alt="...">
                            </div>
                            <div class="card-body text-center color-user">
                                <h5 class="card-title font-noto fw-semibold">PMR</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3 bg-color rounded-4 shadow g-0 m-3">
                        <div class="card w-100 bg-transparent border-0">
                            <div class="d-flex justify-content-center bg-color-content w-100 rounded-4 align-items-center" style="height: 150px;">
                                <img src="/assets/img/dashboard/img6.png" class="card-img-top w-100 h-100 img-fluid" alt="...">
                            </div>
                            <div class="card-body text-center color-user">
                                <h5 class="card-title font-noto fw-semibold">Kerohanian</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

