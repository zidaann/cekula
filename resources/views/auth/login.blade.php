@extends('layouts.app')

@section('content')
    <div id="login">
        <div class="logo-login d-flex justify-content-center">
            <img src="/assets/svg/logo.svg" width="300" class="img-fluid">
        </div>        
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="{{ route('login') }}" method="post" class="justify-content-center">
                    @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="{{ old('username') }}">
                      @error('username')
                          <div class="text-danger mt-2">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-2">
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" > 
                      {{-- <span class="input-group-text" id="showHide">
                        <i class="bi bi-eye"></i>
                      </span> --}}
                      @error('password')
                          <div class="text-danger mt-2">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="text-end">
                     <small class="passAlert
                        passAlert" onclick="passAlert()">Lupa password ?</small>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn w-50 btn-login">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection