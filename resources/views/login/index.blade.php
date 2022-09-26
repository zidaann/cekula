@extends('layouts.app')

@section('content')
    <div id="login">
        <div class="logo-login d-flex justify-content-center">
            <img src="/assets/svg/logo.svg" width="300" class="img-fluid">
        </div>        
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="" method="" class="justify-content-center">
                    @csrf
                    <div class="mb-3">
                      <input type="email" class="form-control" id="email" placeholder="Username">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" class="btn w-50 ">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection