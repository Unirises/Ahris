     <?php 
 
     $user_ = Auth::user();?>
@extends('admin-dashboard.admin-layout')
@section('content')
    

        <div class="row">
                <div class="col-md-12">
                <h1> User Authentication</h1>
                <button type="button" class="btn btn-facebook btn-icon my-2" data-toggle="modal" data-target="#adminAddAccount">
                  <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                  <span class="btn-inner--text">Add User</span>
                </button>
                {{-- <span class="text-muted"> Showing 1 to 10 of 132 entries. </span> <a class="mt-2 ml-2" href="#"> Reset</a> --}}
                </div>
              
          </div>
          <div class="card">
          <div class="col-md mb-4">
    
                <!-- Light table -->
         
                <div class="table-responsive">
                  <table data-toggle="table" data-search="true"data-pagination="true"
                  class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" data-sortable="true" data-field="name">Name</th>
                        <th scope="col"  data-sortable="true" data-field="email">Email</th>
                        <th scope="col"  data-sortable="true" data-field="roles">Roles</th>
                        {{-- <th scope="col"  data-sortable="true" data-field="extrapermission">Extra Permission</th> --}}
                        <th scope="col" >Action</th>
                      </tr>
                    </thead>
                    <tbody class="list">

                      @foreach ($usersRecord as $user)
                      <tr>
                        <th scope="row">
                        <span class="name mb-0 text-sm"></span>
                          <div class="media align-items-center">
                            <div class="media-body">
                            <span class="name mb-0 text-sm">{{$user['firstname']}} {{$user['lastname']}}</span>
                            </div>
                          </div>
                        </th>
                        <td class="email">
                            <span class="name mb-0 text-sm">{{$user['email']}}</span>
                        </td>
                        <td>
                          {{$user['role']}}
                          {{-- @foreach ($user->roles as $role)
                           {{$role->display_name}}
                          @endforeach --}}

                          {{-- <span class="badge badge-dot mr-4">
                            <i class="bg-success"></i>
                            <span class="status"></span>
                          </span> --}}
                        </td>
                        {{-- <td>
                            <span class="name mb-0 text-sm">
  
                            
                             <?=//wordwrap($user['permission'],30,"<br />\n")?>
                            </span>
                        </td> --}}
                        <td>
                          <div class="row">
                            <button class="btn btn-primary btn-sm">Edit</button>
                            @if ($user['id'] != Auth::user()->id)
                              <button class="btn btn-warning btn-sm">Delete</button>
                            @endif
                          </div>
                        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- Card footer -->
                {{-- <div class="card-footer py-4">
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
                </div> --}}
              </div>
              </div>
@endsection