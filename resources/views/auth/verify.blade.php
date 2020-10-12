@extends('layouts.auth-layout')

@section('content')
<div class="header bg-gradient-default py-7 py-lg-8 pt-lg-9">
    <div class="container">
      <div class="header-body text-center mb-3">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <h1 class="text-white"> Email Verification</h1>
            {{-- <h2 class="text-white">{{ __('Verify Your Email Address') }}</h2>
            <h1 class="text-white">A verification link has been sent to your email</h1> --}}
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
            <h5 class="card-title">{{ __('Verify Your Email Address') }}</h5>
            <div class="text-center text-muted mb-4">
              {{-- <small>{{ __('Verify Your Email Address') }}</small> --}}

              @if (session('resent'))
              <div class="alert alert-success" role="alert">
                  {{ __('A fresh verification link has been sent to your email address.') }}
              </div>
          @endif

          {{ __('Before proceeding, please check your email for a verification link.') }}
          {{ __('If you did not receive the email') }}.
            </div>

            <form method="POST" action="{{ route('verification.resend') }}" role="form">
              @csrf
              {{-- <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" placeholder="Email" type="email">
                </div>
              </div> --}}
           
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">{{ __('click here to request another') }}</button>
              </div>
            </form>
          </div>
        </div>
 
      </div>
    </div>
  </div>



@endsection
