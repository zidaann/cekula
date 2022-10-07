@extends('layouts.app')

@include('components.navbar')
@section('content')
<div class="row">
    <div class="hero">
       <div class="container-fluid ">
          <div class="row px-5">
             <div class="col-md ">
                <h2>SELAMAT DATANG DI </h2>
                <h2>CEKULA</h2>
                <a href="{{ route('login') }}" class="hero-login">Login</a>
             </div>
          </div>
       </div>
       <div class="hero-image"></div>
       <div class="hero-image-responsive"></div>
    </div>
 </div>
@endsection