<!DOCTYPE html>
<html>

<head>
  @extends('layouts.asset-css')
</head>

<body>
  @include('layouts.side-nav')
 <!-- Main content -->
  <div class="main-content" id="panel">
    @include('layouts.topnav')
    <!-- Header -->
    <!-- Page content -->
    <div class="container-fluid mt-4">
      <h1 class="mb-3"> User Control  </h1>
     <div class="card shadow">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-2 text-right">
              <form class="navbar-search navbar-search-light form-inline mr-sm-12" id="navbar-search-main">
                <div class="form-group mb-0">
                  <div class="input-group input-group-alternative input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control" placeholder="Search" type="text">
                  </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </form>
            </div>
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center shadow">
            <thead class="text-default">
              <tr>
                <th>User</th>
                <th>Created at</th>
                <th>Ban User</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="table-user">
                  <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                  <b>John Michael</b>
                </td>
                <td>
                  <span class="text-muted">10 / 09 / 2018</span>
                </td>
                <td>
                 <label class="custom-toggle custom-toggle-danger">
                    <input type="checkbox" checked>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Message User">
                    <i class="fas fa-envelope"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete User">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>

               <tr>
                <td class="table-user">
                  <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                  <b>John Michael</b>
                </td>
                <td>
                  <span class="text-muted">10 / 09 / 2018</span>
                </td>
                <td>
                 <label class="custom-toggle custom-toggle-danger">
                    <input type="checkbox" checked>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Message User">
                    <i class="fas fa-envelope"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete User">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>

               <tr>
                <td class="table-user">
                  <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                  <b>John Michael</b>
                </td>
                <td>
                  <span class="text-muted">10 / 09 / 2018</span>
                </td>
                <td>
                 <label class="custom-toggle custom-toggle-danger">
                    <input type="checkbox" checked>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Message User">
                    <i class="fas fa-envelope"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete User">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>

               <tr>
                <td class="table-user">
                  <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                  <b>John Michael</b>
                </td>
                <td>
                  <span class="text-muted">10 / 09 / 2018</span>
                </td>
                <td>
                 <label class="custom-toggle custom-toggle-danger">
                    <input type="checkbox" checked>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Message User">
                    <i class="fas fa-envelope"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete User">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>

               <tr>
                <td class="table-user">
                  <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                  <b>John Michael</b>
                </td>
                <td>
                  <span class="text-muted">10 / 09 / 2018</span>
                </td>
                <td>
                 <label class="custom-toggle custom-toggle-danger">
                    <input type="checkbox" checked>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                </td>
                <td class="table-actions">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Message User">
                    <i class="fas fa-envelope"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete User">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @extends('admin.asset-js')
</body>

</html>
