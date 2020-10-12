<div class="col-md-4">
                  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-body px-lg-5 py-lg-5">
                              <div class="text-center text-muted mb-4">
                                <h1> Reset your Password </h1>
                                <small>Enter your username or email and we'll send you a link to recover your account.</small>
                              </div>
                            <form class="needs-validation" novalidate method="POST" action="{{ route('password.email') }}">
                                @csrf
                               <div class="form-row">
                                  <div class="col-md-12">
                                    <label class="form-control-label" for="validationCustomUsername"> Email </label>
                                    <input type="text" name="email" class="form-control is-valid @error('email') is-invalid @enderror" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required autofocus>
                              @error('email')
                                    <div class="invalid-feedback">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                    
                                  </div>
                                  
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-default my-4 col-md-12">{{ __('Send Password Reset Link') }}</button>
                                  <button type="button" class="btn col-md-12" data-dismiss="modal">Cancel</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<script>
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