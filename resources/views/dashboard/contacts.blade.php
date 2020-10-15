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
                        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#accountAddBusinessCustomer">Add Contacts</button>
                        <button type="button" class="btn btn-secondary mb-3">Export</button>
                        @include('layouts.contacts-allUsers')
                    </div>

                    {{-- Customers Tab Card --}}
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="row">
                            <div class="col-md-12">
                                @include('layouts.account-addCustomer-Business')
                                @include('layouts.account-addCustomer-Individual')
                                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#accountAddBusinessCustomer">Add Business Customer</button>
                                <button type="button" class="btn btn-default mb-3" data-toggle="modal" data-target="#accountAddIndividualCustomer">Add Individual Customer</button>
                                <button type="button" class="btn btn-secondary mb-3">Export</button>
                                @include('layouts.contacts-allCustomer')
                                    {{-- Column for Business --}}
                            </div>
                          </div>
                    </div>
                    {{-- Suppliers Card Tab --}}
                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                        <div class="row">
                            <div class="col-md-12">
                                @include('layouts.account-addSupplier-Business')
                                @include('layouts.account-addSupplier-Individual')
                                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#accountAddBusinessSupplier">Add Business Supplier</button>
                                <button type="button" class="btn btn-default mb-3" data-toggle="modal" data-target="#accountAddIndividualSupplier">Add Individual Supplier</button>
                                <button type="button" class="btn btn-secondary mb-3">Export</button>
                                @include('layouts.contacts-allSupplier')

                            </div>
                          </div>
                    </div>
                </div>
        </div>
    </div>

   @extends('layouts.asset-js')

</body>

</html>
