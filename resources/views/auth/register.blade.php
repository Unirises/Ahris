@extends('layouts.auth-layout')
@section('content')
   <!-- Header -->
   <div class="header bg-gradient-default py-7 py-lg-8 pt-lg-9">
    <div class="container">
      <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <h1 class="text-white">Try AhrisPH FREE for 30 Days!</h1>
            <p class="text-lead text-white">Unlimited Users , No Credit Card Required!</p>
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
    <!-- Table -->
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary border-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small>Sign up with credentials</small>
              {{-- {{$errors}} --}}
            </div>
          <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
              @csrf
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                  </div>
                  <label class="form-control-label" for="validationFirstName"></label>
                  {{-- <input class="form-control is-valid" name="firstName" id="validationFirstName" placeholder="First Name" type="text" required> --}}
                  <input class="form-control is-valid" name="firstname" id="validationFirstName" placeholder="First Name" type="text" required>
                  @error('firstname')
                    <div class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                    </div>
                  @enderror  
                  </div>
                 
              </div>
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                  </div>
                  <input class="form-control is-valid" name="lastname" placeholder="Last Name" type="text" required>
                  @error('lastname')
                    <div class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                    </div>
                  @enderror 
                </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                  </div>
                  <input class="form-control" name="phonenumber" placeholder="Phone Number" type="text" maxlength="11" required>
                  @error('phonenumber')
                  <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                  </div>
                @enderror 
                </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" type="email" value="{{ old('email') }}" required>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                  </div>
                  <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" type="password" required>
                  @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                  </div>
                  <input class="form-control is-valid" name="password_confirmation" placeholder="Confirm Password" type="password" required>
                </div>
              </div>

              <div class="form-group">
              <div class="row my-4">
                <div class="col-12">
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="invalidCheck" type="checkbox" required>
                    <label class="custom-control-label"  for="invalidCheck">
                      <span class="text-muted">I agree to the <a href="#">Terms of Service </a> &amp; <a href="#">Privacy Policy</a> of Ahris PH </span>
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4"> {{ __('Register') }}</button>
              </div>
            </form>
          </div>
        </div>
         <div class="row mt-3">
          <div class="col-12 text-center">
            <small class="text-white"> Already have an Account ? </small><a href="login" class="text-light"><small> Sign in</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
