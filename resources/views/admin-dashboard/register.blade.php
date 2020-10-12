<!DOCTYPE html>
<html>

<head>
  @include('layouts.asset-css')
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
        <h1 class="text-white">Ahris PH </h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="{{url('/')}}">
                <h1 class="text-gray">Ahris PH </h1>
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>

        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
              <i class="fab fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-default py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <p class="text-lead text-white">Temporary</p>
              <h1 class="text-white">Create Admin Account</h1>
              
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
                <small>Temporary</small>
                {{-- {{$errors}} --}}
              </div>
            <form method="POST" action="/admin/create" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <label class="form-control-label" for="validationFirstName"></label>
                    {{-- <input class="form-control is-valid" name="firstName" id="validationFirstName" placeholder="First Name" type="text" required> --}}
                    <input class="form-control is-valid" name="firstname" id="validationFirstName" placeholder="First Name" type="text" required>
                      
                    {{-- <div class="valid-feedback">
                        Looks good!
                      </div> --}}
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control is-valid" name="lastname" placeholder="Last Name" type="text" required>
                  </div>
                </div>

                {{-- <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input class="form-control" name="phonenumber" placeholder="Phone Number" type="text" maxlength="11" required>
                  </div>
                </div> --}}

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="email" placeholder="Email" type="email" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                    </div>
                    <input class="form-control is-valid" name="password" placeholder="Password" type="password" required>
                  </div>
                </div>

                {{-- <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                    </div>
                    <input class="form-control is-valid" name="password_confirmation" placeholder="Confirm Password" type="password" required>
                  </div>
                </div> --}}

             

                {{-- <div class="form-group">
                    <p class="mb-0">Choose Country</p>
                  <select class="form-control" data-toggle="select" required>
                    <option>Ch</option>
                    <option>Badges</option>
                    <option>Buttons</option>
                    <option>Cards</option>
                    <option>Forms</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                    <option>Modals</option>
                  </select>
                </div> --}}

                <div class="form-group">
                <div class="row my-4">
                  <div class="col-12">
                    {{-- <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="invalidCheck" type="checkbox" required>
                      <label class="custom-control-label"  for="invalidCheck">
                        <span class="text-muted">I agree to the <a href="#">Terms of Service </a> &amp; <a href="#">Privacy Policy</a> of Ahris PH </span>
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Create account</button>
                </div>
              </form>
            </div>
          </div>
           {{-- <div class="row mt-3">
            <div class="col-12 text-center">
              <small class="text-white"> Already have an Account ? </small><a href="login" class="text-light"><small> Sign in</small></a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; <?php echo date("Y"); ?> <a href="#" class="font-weight-bold ml-1">Ahris PH</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="#" class="nav-link">About us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
   @include('layouts.asset-js')
   <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>