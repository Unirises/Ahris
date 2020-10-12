<!DOCTYPE html>
<html>

<head>
  @extends('layouts.asset-css')
</head>

<body>
  @include('layouts.user-sidenav')
 <!-- Main content -->
  <div class="main-content" id="panel">
    @include('layouts.user-topnav')
    <!-- Page content -->
      <!-- UserName Modal -->
     @include('modals.updateUserandPass')
      <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-xl-8 order-xl-1">
                <div class="row">
                  <div class="col-lg-6">
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h3 class="mb-0">Create Company (Temporary)</h3>
                      </div>
                      <div class="col-4 text-right">
                      <form action="/user/create/company" method="post">
                        @csrf
                        <button type="submit" id="save-user-profile" class="btn btn-sm btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
               
                      {{-- <h6 class="heading-small text-muted mb-4">User information</h6> --}}
                      {{-- <div class="pl-lg-4">
                   
                      </div> --}}
                      {{-- <hr class="my-4" /> --}}
                      <!-- Address -->
                      {{-- <h6 class="heading-small text-muted mb-4">Contact information</h6> --}}
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="form-control-label" for="input-address">Company Name</label>
                              <input id="input-address" name="company_name" class="form-control" placeholder="company Name" type="text">
                            </div>
                          </div>
                        </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    </form>
                        {{-- <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-city">City</label>
                              <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-country">Country</label>
                              <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-country">Postal code</label>
                              <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                            </div>
                          </div>
                        </div> --}}
                      </div>
                      {{-- <hr class="my-4" />
                      <!-- Description -->
                      <h6 class="heading-small text-muted mb-4">About me</h6>
                      <div class="pl-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">About Me</label>
                          <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful premium dashboard for Bootstrap 4.</textarea>
                        </div>
                      </div> --}}
                    </form>
                  </div>
                </div>
              </div>


      <!-- Footer -->
      {{-- @include('layouts.footer') --}}
    </div>
  </div>
  </div>

   @extends('layouts.asset-js')
</body>

</html>