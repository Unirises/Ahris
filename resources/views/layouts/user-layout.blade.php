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
            <div class="card">
                
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                        <div class="row">
                            <h3 class="mb-0 mr-1">Contacts</h3>|
                            <a href="#!" class="btn btn-sm btn-primary">Export</a>
                        </div>
                    </div>
                    <div class="col text-left">
                    
                      </div>
                    <div class="col text-right">
                      <a href="#!" class="btn btn-sm btn-primary">Add Contacts <span class="fa fa-plus"></span></a>
                    </div>
                   
                  </div>
                </div>
               
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">All <span class="badge badge-info">4</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="#">Customer <span class="badge badge-info">4</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Supplier <span class="badge badge-info">4</span></a>
                        </li>
                      </ul>
                    </div>
                     <div class="card-body">
 
                <div class="table-responsive">
                  <!-- Projects table -->
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="name">Contact</th>
                          <th scope="col" class="sort" data-sort="budget">Email</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                          {{-- <th scope="col">Users</th> --}}
                          <th scope="col" class="sort" data-sort="completion">Completion</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <th scope="row">
                            <div class="media align-items-center">
                              <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                              </a>
                              <div class="media-body">
                                <span class="name mb-0 text-sm">Argon Design System</span>
                              </div>
                            </div>
                          </th>
                          <td class="budget">
                            $2500 USD
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i>
                              <span class="status">pending</span>
                            </span>
                          </td>
                          {{-- <td>
                            <div class="avatar-group">
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                              </a>
                            </div>
                          </td> --}}
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="completion mr-2">60%</span>
                              <div>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <div class="media align-items-center">
                              <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="../../assets/img/theme/angular.jpg">
                              </a>
                              <div class="media-body">
                                <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                              </div>
                            </div>
                          </th>
                          <td class="budget">
                            $1800 USD
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-success"></i>
                              <span class="status">completed</span>
                            </span>
                          </td>
                          {{-- <td>
                            <div class="avatar-group">
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                              </a>
                            </div>
                          </td> --}}
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="completion mr-2">100%</span>
                              <div>
                                <div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <div class="media align-items-center">
                              <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="../../assets/img/theme/sketch.jpg">
                              </a>
                              <div class="media-body">
                                <span class="name mb-0 text-sm">Black Dashboard</span>
                              </div>
                            </div>
                          </th>
                          <td class="budget">
                            $3150 USD
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-danger"></i>
                              <span class="status">delayed</span>
                            </span>
                          </td>
                          {{-- <td>
                            <div class="avatar-group">
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                              </a>
                              <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                              </a>
                            </div>
                          </td> --}}
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="completion mr-2">72%</span>
                              <div>
                                <div class="progress">
                                  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td >
                            <div class="dropdown">
                              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div>
                          </td>
                   
                        </tr>

                        
                      
                      
                      </tbody>
                    </table>
                  </div>
                </div>
            </div> 
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