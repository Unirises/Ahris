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

    <div class="container mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                              <h1 class="mb-2">Chart of Accounts</h1>
                            </div>
                            @include('modals.add-account')
                            <div class="col-md-12 mb-3">
                                <button class="btn btn-icon btn-primary mb-1" data-toggle="modal" data-target="#addAccountModal" type="button">
                                    <span class="btn-inner--icon"><i class="fa fa-plus-square"></i></span>
                                    <span class="btn-inner--text">Add Account</span>
                                  </button>

                                  <button class="btn btn-icon btn-primary mb-1" data-toggle="modal" data-target="#exampleModal" type="button">
                                    <span class="btn-inner--icon"><i class="fa fa-file-pdf"></i></span>
                                    <span class="btn-inner--text">Print PDF</span>
                                  </button>

                                  <button class="btn btn-icon btn-outline-primary mb-1" data-toggle="modal" data-target="#exampleModal" type="button">
                                    <span class="btn-inner--icon"><i class="fa fa-plus-square"></i></span>
                                    <span class="btn-inner--text">Export</span>
                                  </button>


                            </div>
                            <div class="col text-left">
                              <button class="btn btn-icon btn-youtube mb-3" id="delete-aaccount" type="button">
                                  <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                  <span class="btn-inner--text">Delete</span>
                                </button>
                              <button class="btn btn-icon btn-facebook mb-3" id="delete-aaccount" type="button">
                                  <span class="btn-inner--icon"><i class="fa fa-file-archive"></i></span>
                                  <span class="btn-inner--text">Archive</span>
                                </button>
                              </div>
                        </div>

                        <div class="ct-example mb-5">
                            <ul class="nav nav-tabs-code" id="tooltip-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link" id="tooltip-component-tab" data-toggle="tab" href="#account-all" role="tab" aria-controls="account-all" aria-selected="true">All Accounts</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" id="tooltip-html-tab" data-toggle="tab" href="#account-assets" role="tab" aria-controls="account-assets" aria-selected="false">Assets</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" id="tooltip-html-tab" data-toggle="tab" href="#account-liabilities" role="tab" aria-controls="account-liabilities" aria-selected="false">Liabilities</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" id="tooltip-html-tab" data-toggle="tab" href="#account-equity" role="tab" aria-controls="account-equity" aria-selected="false">Equity</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" id="tooltip-html-tab" data-toggle="tab" href="#account-expenses" role="tab" aria-controls="account-expenses" aria-selected="false">Expenses</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" id="tooltip-html-tab" data-toggle="tab" href="#account-revenue" role="tab" aria-controls="account-revenue" aria-selected="false">Revenue</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" id="tooltip-html-tab" data-toggle="tab" href="#account-archive" role="tab" aria-controls="account-archive" aria-selected="false">Archive</a>
                              </li>
                            </ul>

                            <div class="tab-content">
                                <div id="account-all" class="tab-pane fade active show" role="tabpanel" aria-labelledby="tooltip-html-tab">
                                    <div class="card mt-3">
                                        <!-- Light table -->
                                        <div class="table-responsive" data-toggle="list" data-list-values="[&quot;name&quot;, &quot;budget&quot;, &quot;status&quot;, &quot;completion&quot;]">
                                          <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                              <tr>
                                                <th scope="col" class="sort" data-sort="code">Code</th>
                                                <th scope="col" class="sort" data-sort="name">Name</th>
                                                <th scope="col" class="sort" data-sort="type">Type</th>
                                                <th scope="col" class="sort" data-sort="tax-rate">Tax Rate</th>
                                                <th scope="col" class="sort" data-sort="ytd">YTD</th>
                                                <th scope="col"></th>
                                              </tr>
                                            </thead>

                                            <tbody class="list">

                                              @foreach ($accounts as $account)

                                              <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                      <input class="custom-control-input" id="table-check-all" type="checkbox">
                                                    <label class="custom-control-label" for="table-check-all">{{$account->code}}</label>

                                                    </div>
                                                  </th>
                                                <th scope="row">
                                                  <div class="media align-items-center">

                                                    <div class="media-body">
                                                      <span class="name mb-0 text-sm">{{$account->name}}</span>
                                                    </div>
                                                  </div>
                                                </th>
                                                <td class="budget">
                                                  {{$account->type}}
                                                </td>
                                                <td>{{$account->tax}}</td>

                                              </tr>
                                              @endforeach
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

                              <div id="account-assets" class="tab-pane fade active show" role="tabpanel" aria-labelledby="tooltip-html-tab">

                              </div>

                              <div id="account-liabilities" class="tab-pane fade active show" role="tabpanel" aria-labelledby="tooltip-html-tab">

                            </div>

                            <div id="account-equity" class="tab-pane fade active show" role="tabpanel" aria-labelledby="tooltip-html-tab">

                            </div>

                            <div id="account-expenses" class="tab-pane fade active show" role="tabpanel" aria-labelledby="tooltip-html-tab">
                            </div>

                            <div id="account-revenue" class="tab-pane fade active show" role="tabpanel" aria-labelledby="tooltip-html-tab">

                            </div>

                            <div id="account-archive" class="tab-pane fade active show" role="tabpanel" aria-labelledby="tooltip-html-tab">

                            </div>
                            </div>
                          </div>

                          {{-- TABLE --}}

                    </div>
                          {{-- END TABLE --}}

                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="row">
                            @include('layouts.new-tax-rate')
                            <div class="col">
                        <button class="btn btn-icon btn-primary mb-3"data-toggle="modal" data-target="#exampleModal" type="button">
                            <span class="btn-inner--icon"><i class="fa fa-plus-square"></i></span>
                            <span class="btn-inner--text">New Tax Rate</span>
                          </button>
                            </div>
                            <div class="col text-right">
                            <button class="btn btn-icon btn-youtube mb-3" type="button">
                                <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                <span class="btn-inner--text">Delete</span>
                              </button>
                            </div>
                        </div>
                        <div class="card">
                            <!-- Light table -->
                            <div class="table-responsive" data-toggle="list">
                              <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="tax-rate">Tax Rate</th>
                                    <th scope="col" class="sort" data-sort="accounts">Accounts using Tax Rate</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody class="list"><tr>
                                    <th scope="row">
                                      <div class="media align-items-center">
                                        <a href="#" class="mt-1 mr-3">
                                            <i class="fa fa-lock"></i>
                                        </a>
                                        <div class="media-body">
                                          <span class="name mb-0 text-sm">Joshua Alcantara</span>
                                        </div>
                                      </div>
                                    </th>
                                    <td class="tax-rate">
                                      15%
                                    </td>
                                    <td class="accounts">
                                        0
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
   @extends('layouts.asset-js')

</body>

</html>
