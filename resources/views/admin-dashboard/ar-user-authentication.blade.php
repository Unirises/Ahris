<?php
use App\Company;
use App\CurrentCompanyLog;

$user = Auth::user();
$company = Company::where('user_id',$user->id)->get();
$currentCompanyName = Session::get('companyName');
// $currentCompanyLog = CurrentCompanyLog::where('user_id',$user->id)->get()->toArray();
// $getCompanyLog
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Ahris PH">
  <title> Ahris PH | Admin Dashboard </title>
  @extends('layouts.asset-css')
</head>

<body>
    @include('modals.admin-add-user')
  @include('layouts.side-nav')
 <!-- Main content -->
  <div class="main-content" id="panel">
    @include('layouts.topnav')
        <div class="container-fluid mt-6">
            <div class="row">
                <div class="col-md-12">
                <h1> Users</h1>
                <span class="text-muted"> Showing 1 to 10 of 132 entries. </span> <a class="mt-2 ml-2" href="#"> Reset</a>
                </div>
            </div>
            <button type="button" class="btn btn-facebook btn-icon my-2" data-toggle="modal" data-target="#adminAddAccount">
                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                <span class="btn-inner--text">Add User</span>
              </button>

            <div class="row mt-4">
                <div class="col-md-2">
                <div class="form-group">
                    <select class="form-control border-0" id="exampleFormControlSelect1">
                      <option>Roles</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <select class="form-control border-0" id="exampleFormControlSelect2">
                      <option>Extra Permission</option>
                    </select>
                  </div>
                </div>
            </div>

            <div class="card">
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="email">Email</th>
                        <th scope="col" class="sort" data-sort="roles">Roles</th>
                        <th scope="col" class="sort" data-sort="extrapermission">Extra Permission</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                      <tr>
                        <th scope="row">
                            <span class="name mb-0 text-sm">{{$user->firstname.' '.$user->lastname}}</span>
                          <div class="media align-items-center">
                            <div class="media-body">
                              <span class="name mb-0 text-sm"></span>
                            </div>
                          </div>
                        </th>
                        <td class="email">
                            <span class="name mb-0 text-sm">{{$user->email}}</span>
                        </td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-success"></i>
                            <span class="status"></span>
                          </span>
                        </td>
                        <td>
                            <span class="name mb-0 text-sm"></span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                  <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                          <i class="fas fa-angle-left"></i>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          <i class="fas fa-angle-right"></i>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
        </div>
  </div>
  @extends('admin.asset-js')
</body>

</html>
