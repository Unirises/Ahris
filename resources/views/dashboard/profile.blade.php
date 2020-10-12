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
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(https://images.wallpaperscraft.com/image/mountains_moon_forest_139359_3840x2400.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">

            <h1 class="display-2 text-white">Hello {{$user->firstname}}</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--9" style="background-color: #e3e3e3">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
<!--             <img src="../../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top"> -->
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c2b838ed-cb66-49ec-8fe2-2e8c79162b42/dcrpkt3-e2ad25ae-b4e3-4b1f-869a-3b1c0ffca549.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvYzJiODM4ZWQtY2I2Ni00OWVjLThmZTItMmU4Yzc5MTYyYjQyXC9kY3Jwa3QzLWUyYWQyNWFlLWI0ZTMtNGIxZi04NjlhLTNiMWMwZmZjYTU0OS5qcGcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.pPDuBsKNzRoYxgKGNa6T12uajDRdR94QL9gGFMJJKhg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  {{$user->firstname.' '.$user->lastname}}
                </h5>
                <div class="h4 font-weight-300">
                  <i class="ni location_pin mr-2"></i>{{$user->city}}, {{$user->province}}
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>{{$user->job_title}}
                </div>
                {{-- <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div> --}}
                {{-- <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i> January 29, 1920
                </div> --}}
              </div>
            </div>
          </div>
          <!-- Progress track -->
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="row">
            <div class="col-lg-6">
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">

                  {{-- <a href="#!" id="save-user-profile" class="btn btn-sm btn-primary">Save</a> --}}
                <form action="/user/update/profile" method="post">
                  @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                  <button id="save-user-profile" class="btn btn-sm btn-primary" type="submit">Save</button>
                </div>
              </div>
            </div>
            <div class="card-body">

                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" name="firstname" class="form-control" placeholder="First name" value="<?=$user->firstname;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" name="lastname"  class="form-control" placeholder="Last name" value="<?=$user->lastname;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-number">Phone Number</label>
                        <input type="text" id="input-number" name="phonenumber" class="form-control" placeholder="Phone Number" value="<?=$user->phonenumber;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label disabled" for="input-email">Email address</label>
                        <input type="email" value="{{$user->email}}" name="email" id="input-email" class="form-control" placeholder="jesse@example.com" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Username</label>
                        <input type="text" id="input-email" name="username" class="form-control" value="{{$user->username}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Birthday</label>
                        <input type="date" id="input-email" name="birthday" class="form-control" value="{{$user->birthday}}">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Job Title</label>
                        <input type="text" id="input-email" name="jobtitle" class="form-control" placeholder="jesse@example.com" value="{{$user->job_title}}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Facebook</label>
                        <input type="text" id="input-email" name="facebook" class="form-control" placeholder="jesse@example.com" value="{{$user->facebook}}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">LinkedIn</label>
                        <input type="text" id="input-email" name="linkedin"  class="form-control" placeholder="jesse@example.com" value="{{$user->linkedin}}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Twitter</label>
                        <input type="text" id="input-email" name="twitter"  class="form-control" placeholder="jesse@example.com" value="{{$user->twitter}}">
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" name="address" class="form-control" placeholder="Home Address" value="{{$user->address}}" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" name="city" class="form-control" placeholder="City" value="{{$user->city}}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Province</label>
                        <input type="text" id="input-city" name="province" class="form-control" placeholder="Province" value="{{$user->province}}">
                      </div>
                    </div>
                    {{-- <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                      </div>
                    </div> --}}
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Zip code</label>
                        <input type="text" id="input-postal-code" name="zip_code" class="form-control" placeholder="Postal code" value="{{$user->zip_code}}">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea rows="4" class="form-control"  name="about_me"  placeholder="A few words about you ...">{{$user->about_me}}"</textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Footer -->
      {{-- @include('layouts.footer') --}}
    </div>
  </div>
   @extends('layouts.asset-js')
</body>

</html>
