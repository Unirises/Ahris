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

      Company: {{ $company[0]->company_name}}

        <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-circle-08 mr-2"></i> All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-user-friends"></i> Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-store-alt"></i> Suppliers</a>
                </li>
            </ul>
        </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <button type="button" class="btn btn-success mb-3">Add Contacts</button>
                        <button type="button" class="btn btn-secondary mb-3">Export</button>
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header">
                              <div class="row">
                                <div class="col-sm-3 pt-3">
                                    <span class="text-muted"> <a href="" id="edit-user"> </a> Edit </span>
                                  </div>
                                <div class="col-sm-3 pt-3">
                                    <span>Customers <span class="text-muted"> 0 </span>
                                  </div>
                                  <div class="col-sm-3 pt-3">
                                    <span>Suppliers <span class="text-muted"> 0 </span>
                                  </div>
                                  <div class="col-sm">
                                    <input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search">
                                  </div>
                              </div>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                              <table class="table align-items-center table-flush table-hover">
                                <thead class="thead-light">
                                  <tr>
                                    <th>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="table-check-all" type="checkbox">
                                        <label class="custom-control-label" for="table-check-all"></label>
                                      </div>
                                    </th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>You Owe Them</th>
                                    <th>They Owe You</th>
                                  </tr>
                                </thead>
                                <tbody>
                               
                                  @foreach ($contacts as $contact)
                                  <tr>
                                    <th>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="table-check-{{$contact->id}}" type="checkbox">
                                        <label class="custom-control-label" for="table-check-{{$contact->id}}"></label>
                                      </div>
                                    </th>
                                    <td class="table-user">
                                    <b>{{$contact->displayname}}</b>
                                    </td>
                                    <td>
                                      <span class="text-muted">{{$contact->email}}</span>
                                    </td>
                                    <td>
                                      <a href="#!" class="font-weight-bold"></a>
                                    </td>
                                    <td>
                                      <label class="custom-toggle">
                                        <p class="text-muted"> - </p>
                                      </label>
                                    </td>
                                  </tr>
                                  @endforeach
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>


                    {{-- Customers Tab Card --}}
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav mb-3" id="tabs_3" role="tablist">
                                  <li class="nav-item">
                                    
                                        <div class="custom-control custom-radio mb-3">
                                          <a class="nav-link" id="first-tab" href="#business" data-toggle="tab" role="tab" aria-selected="true">
                                            <input name="customer-radio-1" class="custom-control-input" id="customRadio1" type="radio">
                                            <label class="custom-control-label" for="customRadio1">Business</label>
                                          </a>
                                          </div>

                                    
                                  </li>
                                  <li class="nav-item">
                                      <div class="custom-control custom-radio mb-3">
                                        <a class="nav-link" id="first-tab" data-toggle="tab" href="#individual" role="tab" aria-selected="true">
                                            <input name="customer-radio-1" class="custom-control-input" id="customRadio2" type="radio">
                                            <label class="custom-control-label" for="customRadio2">Individual</label>
                                        </a>
                                          </div>
                                  
                                  </li>
                                </ul>
                                    {{-- Column for Business --}}
                                <div class="tab-content tab-space">
                                  <div class="tab-pane fade active show" id="business">
                                        @include('layouts.customer-business')
                                  </div>
                                  {{-- Column for Individual --}}
                                  <div class="tab-pane fade" id="individual">
                                         @include('layouts.customer-individual')
                                  </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    {{-- Suppliers Card Tab --}}
                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav mb-3" id="tabs_3" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link" id="first-tab" data-toggle="tab" href="#supplier_business" role="tab" aria-selected="true">
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="supplier-radio-1" class="custom-control-input" id="customRadio3" type="radio">
                                            <label class="custom-control-label" for="customRadio3">Business</label>
                                          </div>

                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="second-tab" data-toggle="tab" href="#supplier_individual" role="tab" aria-selected="">
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="supplier-radio-1" class="custom-control-input" id="customRadio4" type="radio">
                                            <label class="custom-control-label" for="customRadio4">Individual</label>
                                          </div>
                                    </a>
                                  </li>
                                </ul>
                                    {{-- Column for Business --}}
                                <div class="tab-content tab-space">
                                  <div class="tab-pane fade active show" id="supplier_business">
                                        @include('layouts.supplier-business')
                                  </div>
                                  {{-- Column for Individual --}}
                                  <div class="tab-pane fade" id="supplier_individual">
                                         @include('layouts.supplier-individual')
                                  </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
        </div>
    </div>

   @extends('layouts.asset-js')

</body>

</html>
