@extends('dashboard.main')

@push('script')
    <script>
      let fasilitas = document.querySelectorAll(".fasilitas-toggle"),
    contents = document.querySelectorAll(".fasilitas-content");
fasilitas.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        contents.forEach((content) => {
            content.classList.remove("is-active");
        });
        fasilitas.forEach((tab) => {
            tab.classList.remove("is-active");
        });

        contents[index].classList.add("is-active");
        fasilitas[index].classList.add("is-active");
    });
});
    </script>
@endpush
@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center justify-content-center">
      <span class="text-white">Fasilitas Peminjaman</span>
    </div>
  </div>
  
  <main>
    <div class="container">
        <div class="row justify-content-center ">
          <div class="col-md-11">
            <div class="fasilitas-bar">
              <div class="fasilitas">
                <div class="fasilitas-head">
                  <span class="fasilitas-toggle is-active">Barang</span>
                  <span class="fasilitas-toggle">Ruangan</span>
                </div>
                <div class="fasilitas-search">
                  <div class="row justify-content-center">
                    <div class="col-md-10">
                      <form class="d-flex align-items-center" role="search">
                        <input
                          class="form-control me-2 input-bg"
                          type="search"
                          placeholder="Cari nama peminjam"
                          aria-label="Search"
                        />
                        <i class="bi bi-search"></i>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="fasilitas-body">
                  <div class="fasilitas-content is-active">
                    <div class="row d-flex justify-content-evenly">
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fasilitas-content">
                    <div class="row d-flex justify-content-evenly">
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-5 mb-3 px-2 box-shadow">
                        <div>
                          <div class="border-bottom pt-3">
                            <h5 class="font-noto fw-bold">Yuliansyah</h5>
                            <div class="d-flex justify-content-between">
                              <h6 class="font-noto small">04/11/2022</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <small class="font-noto small">Bola Basket</small>
                              <small class="color-blue">Sudah dikembalikan</small>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="mt-3">
                                <h6 class="font-noto color-blue small">
                                  201987111
                                </h6>
                              </div>
                              <div class="d-flex align-items-center">
                                <a href="#" class="mx-2 text-dark"
                                  ><i class="bi bi-pencil"></i
                                ></a>
                                <form action="" method="">
                                  <button class="btn">
                                    <i class="bi bi-trash3"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        

        <div class="btn-add">
            <a href="{{ route('fasilitas.peminjaman.create') }}">
            <img src="/assets/img/dashboard/btn_add.png" class="img-fluid">
            </a>
      </div>
    </div>
  </main>
@endsection