<!DOCTYPE html>
<html>

<head>
  <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  {{-- <script src="{{asset('assets/js/jquery.loading.min.js')}}"></script> --}}
  @extends('layouts.asset-css')
</head>

<body>
  @include('layouts.user-sidenav')

 <!-- Main content -->
  <div class="main-content" id="panel">
    @include('layouts.user-topnav')

    <div class="container mt-5 mb-5">
    

        <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-circle-08 mr-2"></i> Overview </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-user-friends"></i> Taxes Settings </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-store-alt"></i> Reports</a>
                </li>
            </ul>
        </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <div class="card">
                            <!-- Card body -->
                            <div class="card-body">
                              <form>
                                <div class="row input-daterange datepicker align-items-center">
                                  <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="example-month-input" class="col-form-label form-control-label">Month</label>
                                          <input class="form-control" type="month" value="2018-11" id="example-month-input">
                                      </div>
                                  </div>
                                  <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="example-month-input" class="col-form-label form-control-label">Month</label>
                                          <input class="form-control" type="month" value="2018-11" id="example-month-input">
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                        <button type="button" class="btn btn-default mt-3">Generate</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>

                        <div class="row">
                            <div class="col-6">
                              <h1 class="mb-2">Summary</h1>
                            </div>
                            <div class="col-6 text-right">
                              <a href="#" class="btn btn-sm btn-outline-success btn-round btn-icon">
                                <span class="btn-inner--text">Export</span>
                              </a>
                            </div>
                          </div>

                          {{-- TABLE --}}
                          <div class="card">
                            <!-- Light table -->
                            <div class="table-responsive" data-toggle="list" data-list-values="[&quot;name&quot;, &quot;budget&quot;, &quot;status&quot;, &quot;completion&quot;]">
                              <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="budget">Tax Rate</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody class="list">
                             
                                  <tr>
                                    <th scope="row">
                                      <div class="media align-items-center">
                                        <a  class="mt-1 mr-3">
                                            <i class="fa fa-lock"></i>
                                        </a>
                                        <div class="media-body">
                                          <span class="name mb-0 text-sm">Joshua Alcantara</span>
                                        </div>
                                      </div>
                                    </th>
                                    <td class="budget">
                                      15%
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
                            <button class="btn btn-icon btn-youtube mb-3" id="delete-tax" type="button">
                                <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                <span class="btn-inner--text">Delete</span>
                              </button>
                            </div>
                        </div>
                        <div class="card">
                            <!-- Light table -->
                            <div class="table-responsive">
                              <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                  <tr>
                                    <th>
                                      <div class="custom-control custom-checkbox">
                                        <script>
                                          $('#delete-tax').click(function () {
                                          
                                           var checkboxes = document.querySelectorAll('input[name="tax_name"]:checked');
                                           const arrayCheck = [];
                                              for(let checkbox of checkboxes){
                                                arrayCheck.push(checkbox.value);
                                              }
                                            
                                              var dataString = JSON.stringify(arrayCheck);
                                              // alert();
                                              $.post("{{route('delete-tax')}}",{ 
                                                id: dataString,
                                                _token: "{{csrf_token()}}",
                                            }, function(res) {
                                                if (res) {
                                                  window.location.href= '{{URL::previous()}}';
                                                }
                                              });
                                              // alert(arrayCheck);
                                          });
                                        </script>
                                        <input class="custom-control-input" id="tax-check" type="checkbox">
                                        <label class="custom-control-label" for="tax-check"></label>
                                      </div>
                                    </th>
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="tax-rate">Tax Rate</th>
                                    <th scope="col" class="sort">Accounts using Tax Rate</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody class="list">
                            
                                  <tr>
                                    <th>
                                      <a  class="mt-1 mr-3">
                                        <i class="fa fa-lock"></i>
                                    </a>
                                    </th>
                                    <th scope="row">
                                      <div class="media align-items-center">
                        
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
                                  @foreach ($tax_rate as $tax)
                                  <tr>

                                    <th>
                                      @if ($tax->number_of_accounts_using == 0)
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" name="tax_name" value="{{$tax->id}}" id="table-check-{{$tax->id}}" type="checkbox">
                                          <label class="custom-control-label" for="table-check-{{$tax->id}}"></label>
                                        </div>
                                
                                      @else
                                      <a href="#" class="mt-1 mr-3">

                                        <i class="fa fa-lock"></i>
                                    </a>
                                      @endif
                                    </th>
                                    <th scope="row">
                                      <div class="media align-items-center">
                                     
                                        <div class="media-body">
                                          
                                        <span class="name mb-0 text-sm">{{$tax->name}}</span>
                                        </div>
                                      </div>
                                    </th>
                                    <td class="tax-rate">
                                      {{$tax->tax_rate}}%
                                    </td>
                                    <td class="accounts">
                                      {{$tax->number_of_accounts_using}}
                                      </td>
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


                    <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">

                        {{-- <button type="button" class="btn btn-secondary mb-3">Export</button> --}}

                    </div>
                </div>
            </div>

   @extends('layouts.asset-js')

</body>

</html>
