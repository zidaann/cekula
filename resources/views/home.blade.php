@extends('layouts.app')

@include('components.navbar')

@section('loadImage')
    <link rel="preload" as="image" href="/assets/svg/ilustrasi_home.svg">
    <link rel="preload" as="image" href="/assets/img/home_mobile.png">   
@endsection
@section('content')
<div id="beranda" class="d-flex align-items-center">
   <!-- tulisan -->
   <div class="container row ps-0 ms-0 ps-lg-5 ms-lg-5 justify-content-center justify-content-md-start" id="tulisan_beranda">
     <div class="font-noto text-uppercase text-center text-sm-start text-md-start col-12 col-sm-12 col-md-8 w-100">SELAMAT DATANG DI</div>
     <div class="font-rubik text-uppercase text-center text-sm-start text-md-start col-12 col-sm-12 col-md-8" style="color: #83dbe0">Cekula</div>
     <div class="font-noto text-uppercase col-12 col-md-8 d-flex justify-content-center justify-content-sm-start justify-content-md-start">
      <a href="{{ route('login') }}" class="hero-login mx-2 text-decoration-none font-rubik font-20 text-white">Masuk</a>
     </div>
   </div>
 </div>
 <div id="tentang">
   <div class="row px-5 bg-color-content d-flex align-items-center justify-content-center overflow-scroll" style="height: 30%">
     <div class="d-flex col-12 justify-content-center">
       <img src="/assets/svg/cekula.svg" alt="Cekula" loading="lazy" />
     </div>
     <p class="d-flex col-11 font-noto font-24 container justify-content-center text-center">
       Cekula merupakan sebuah aplikasi berbasis mobile dan website yang di tujukan untuk sekolah tingkat SMP/MTs/sederajat untuk memudahkan manajemen sarana dan prasarana sekolah.
     </p>
   </div>
   <div style="height: 70%" class="overflow-scroll" id="wave">
     <div class="font-40 font-rubik text-center text-uppercase py-3">Visi & Misi</div>
     <div class="row justify-content-around mx-5">
       <div class="col-12 col-md-5">
         <div class="text-center font-rubik" style="font-size: 2rem">Visi</div>
         <p class="font-noto text-center text-md-start font-20">Menjadi perusahaan IT yang unggul dan terpercaya dalam menyediakan layanan dan solusi IT yang kreatif, inovatif, dan terbaik bagi customer</p>
       </div>
       <div class="col-12 col-md-5">
         <div class="text-center font-rubik" style="font-size: 2rem">Misi</div>
         <p class="font-noto text-center text-md-start font-20">
           Memberikan layanan dan solusi berbasis teknologi informasi yang inovatif dan berkualitas, mengembangkan aplikasi yang sesuai kebutuhan dan keinginan pelanggan, selalu menjaga amanah yang diberikan klien agar dapat saling
           menguntungkan dan mencapai tujuan masing-masing, serta menerapkan budaya kerja yang profesional, produktif, kompeten, dan terintegritas
         </p>
       </div>
     </div>
   </div>
 </div>
 <div id="berita_beranda" class="overflow-scroll">
   <div class="container my-4 d-flex align-items-center justify-content-between">
     <div class="font-rubik font-24 d-flex align-items-center">
       <i class="bi bi-card-text"></i>&nbsp;
       <div class="ms-2">Berita Terbaru</div>
     </div>
     <div class="pt-3">
       <a href="#" class="color-blue font-noto font-16 text-decoration-none">Lihat Semua <i class="bi bi-chevron-right"></i></a>
     </div>
   </div>
   <div class="mt-2 container">
     <div class="row justify-content-between">
       <div class="col-12 col-md-5 mb-3 bg-color-content box-shadow p-4" style="border-top: 5px solid #76c5ca; border-radius: 0px 0px 20px 20px">
         <div class="d-flex justify-content-center mb-2" style="height: 50%">
           <img src="/assets/img/dashboard/img2.png" alt="#" class="w-100 h-100"/>
         </div>
         <div style="height: 50%">
           <h6 class="font-noto fw-semibold font-16" style="height: 25%">Penghargaan Smart School 2022</h6>
           <p class="font-noto font-12 overflow-hidden" style="height: 65%">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
           </p>
           <div class="d-flex justify-content-between align-items-center pb-3" style="height: 10%">
             <div class="font-noto font-14">21 November 2022</div>
             <div>
               <a href="#">
                 <button class="btn-capsule py-1 px-5">Lihat</button>
               </a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-12 col-md-5 mb-3 bg-color-content box-shadow p-4" style="border-top: 5px solid #76c5ca; border-radius: 0px 0px 20px 20px">
         <div class="d-flex justify-content-center mb-2" style="height: 50%">
           <img src="/assets/img/dashboard/img3.png" alt="#" class="w-100 h-100"/>
         </div>
         <div style="height: 50%">
           <h6 class="font-noto fw-semibold font-16" style="height: 25%">Penghargaan Smart School 2022</h6>
           <p class="font-noto font-12 overflow-hidden" style="height: 65%">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
           </p>
           <div class="d-flex justify-content-between align-items-center pb-3" style="height: 10%">
             <div class="font-noto font-14">21 November 2022</div>
             <div>
               <a href="#">
                 <button class="btn-capsule py-1 px-5">Lihat</button>
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <footer>
   <div id="footer_landingPage">
     <div class="row p-3" id="wave2">
       <div class="col-12 col-md-3 text-white my-2">
         <img src="/assets/img/cekula_putih.png" alt="Cekula"/>
         <h6 class="font-rubik font-24 mt-3">Alamat Kantor</h6>
         <p class="font-noto fw-semibold font-16">Gedung A10, Jl. Ketintang Wiyata, Ketintang, Gayungan, Kota Surabaya, Jawa Timur (60231)</p>
       </div>
       <div class="col-12 col-md-3 text-white my-2">
         <h6 class="font-rubik font-30 mb-4">Pelajari</h6>
         <div>
           <div class="my-1"><a href="#" class="text-decoration-none text-white font-noto fw-semibold font-16">Tentang</a></div>
           <div class="my-1"><a href="#" class="text-decoration-none text-white font-noto fw-semibold font-16">Berita</a></div>
           <div class="my-1"><a href="#" class="text-decoration-none text-white font-noto fw-semibold font-16">PPDB</a></div>
           <div class="my-1"><a href="#" class="text-decoration-none text-white font-noto fw-semibold font-16">Panduan</a></div>
         </div>
       </div>
       <div class="col-12 col-md-3 text-white my-2">
         <h6 class="font-rubik font-30 mb-4">Ikuti Kami</h6>
         <div class="font-noto fw-semibold font-16">
           <div class="my-1">
             <a href="#" class="text-decoration-none text-white font-noto fw-semibold font-16"><img src="/assets/img/sosmed/ig.png" alt="Instagram" />&nbsp; @cekula.id</a>
           </div>
           <div class="my-1">
             <a href="#" class="text-decoration-none text-white font-noto fw-semibold font-16"><img src="/assets/img/sosmed/fb.png" alt="Facebook" />&nbsp; @cekula</a>
           </div>
           <div class="my-1">
             <a href="#" class="text-decoration-none text-white font-noto fw-semibold font-16"><img src="/assets/img/sosmed/linkedin.png" alt="LinkedIn" />&nbsp; Cekula</a>
           </div>
           <div class="my-1">
             <a href="#" class="text-decoration-none text-white font-noto fw-semibold font-16"><img src="/assets/img/sosmed/yt.png" alt="YouTube" />&nbsp; Cekula</a>
           </div>
         </div>
       </div>
       <div class="col-12 col-md-3 text-white my-2">
         <h6 class="font-rubik font-30 mb-4">Hubungi Kami</h6>
         <div class="font-noto fw-semibold font-16">
           <div class="my-1"><i class="bi bi-envelope"></i>&nbsp; cekula@gmail.com</div>
           <div class="my-1"><i class="bi bi-telephone-fill"></i>&nbsp; 082277770000</div>
         </div>
       </div>
     </div>
   </div>
   <div class="py-3 text-center text-white font-noto font-14" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), linear-gradient(90deg, #9fc3f9 -4.4%, #83dbe0 100%)">
     ©Cekula 2022. Hak Cipta Dilindungi Oleh Undang-Undang
   </div>
</footer>
@endsection