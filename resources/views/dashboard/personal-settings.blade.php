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
        <div class="col">
          <div class="card shadow border-0 mb-0">
            <!-- Card header -->
            <div class="card-header border-0">
              <h1 class="mb-0">Sign In Info</h1>
                <p class="mb-0"> We'll use this info to help make sure only you can sign in to your account.</p>
            </div>
            <!-- Light table -->
            <div class="table-responsive" data-toggle="list">
              <table class="table align-items-center table-flush">
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class=" mr-3">
                        <div class="media-body">
                          <span class="name mb-0 text-sm" data-toggle="modal" data-target="#modal-form">Username</span>
                        </div>
                        </a>
                      </div>
                    </th>
                    <td class="budget">
                      IamPseudoX
                    </td>
                  </tr>


                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="mr-3">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Email Address</span>
                        </div>
                        </a>
                      </div>
                    </th>
                    <td class="budget">
                      samplemail@gmail.com
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Verified</span>
                      </span>
                    </td>
                  </tr><tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="mr-0"></a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Password</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      ********
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="mr-3">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Phone Number</span>
                        </div>
                        </a>
                      </div>
                    </th>
                    <td class="budget">
                      +63 9123456789
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="mr-3">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Linked Accounts</span>
                        </div>
                        </a>
                      </div>
                    </th>
                    <td class="facebook">
                      <a href="">usernamesc</a>
                    </td>
                    <td class="linkedin">
                      <a href="">usernamesc</a>
                    </td>
                    <td class="twitter">
                      <a href="">usernamesc</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->

          </div>
        </div>


      <!-- Footer -->
      @include('layouts.footer')
    </div>
  </div>
  </div>

   @extends('layouts.asset-js')
</body>

</html>
