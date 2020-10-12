@extends('layouts.auth-layout')
@section('content')
 <!-- Header -->
 <div class="header bg-gradient-default py-7 py-lg-8 pt-lg-9">
    <div class="container">
      <div class="header-body text-center mb-3">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            {{-- <h2 class="text-white"> Reset Password</h2> --}}
            <h1 class="text-white">Reset Password </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </div>
  <!-- Page content -->
  <div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small>{{ __('Reset Password') }}</small>
              {{-- {{$errors}} --}}
            </div>
          <form method="POST" action="{{ route('password.update') }}" role="form">
              @csrf
              <input type="hidden" name="token" value="{{ $token }}">
              <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" type="hidden" value="{{ $email ?? old('email') }}">

              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" type="password" required autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" name="password_confirmation" placeholder="Confirm Password" type="password">
                </div>
              </div>
             
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">{{ __('Reset Password') }}</button>
              </div>
            </form>
          </div>
        </div>
      
      </div>
    </div>
  </div>
@endsection
