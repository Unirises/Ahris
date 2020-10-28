<!-- Modal -->
<div class="modal fade" id="adminAddAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <style>
           #accountType select option[disabled] {
                color: rgb(250, 33, 33);
                font-weight: bold;
                background-color:#00F;
        }
        </style>
        <div class="modal-body">
        <form action="{{route('add-account')}}" method="post">

          <div class="row">
            <div class="col-md-12">
              @csrf
                <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Name</label>
                    <input type="text" name="code" class="form-control" id="example3cols1Input">
                  </div>
                <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Email</label>
                    <input type="email" name="name" class="form-control" id="example3cols1Input">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Password</label>
                    <input type="password" name="code" class="form-control" id="example3cols1Input">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Password Confirmation</label>
                    <input type="password" name="code" class="form-control" id="example3cols1Input">
                  </div>
            </div>
            <div class="col-md-12">
                <h5>User Role Permissions</h5>
                <h5>Roles</h5>
            </div>
                <div class="form-group">
                <div class="custom-control custom-checkbox mb-3 ml-2">
                    <input class="custom-control-input" id="customCheck1" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">Super Admin</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox mb-3 ml-6">
                    <input class="custom-control-input" id="customCheck2" type="checkbox">
                    <label class="custom-control-label" for="customCheck2">Admin</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox mb-3 ml-6">
                    <input class="custom-control-input" id="customCheck3" type="checkbox">
                    <label class="custom-control-label" for="customCheck3">Member</label>
                  </div>
                </div>

                <div class="col-md-12">
                    <h5>Permissions</h5>
                </div>
                    <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ml-2">
                        <input class="custom-control-input" id="customCheck4" type="checkbox">
                        <label class="custom-control-label" for="customCheck4">Manage News</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox mb-3 ml-4">
                        <input class="custom-control-input" id="customCheck5" type="checkbox">
                        <label class="custom-control-label" for="customCheck5">Manage Pages</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox mb-3 ml-4">
                        <input class="custom-control-input" id="customCheck6" type="checkbox">
                        <label class="custom-control-label" for="customCheck6">Manage Menu Items</label>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ml-2">
                        <input class="custom-control-input" id="customCheck7" type="checkbox">
                        <label class="custom-control-label" for="customCheck7">Manage Users</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-3 ml-4">
                            <input class="custom-control-input" id="customCheck8" type="checkbox">
                            <label class="custom-control-label" for="customCheck8">Manage Roles</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-3 ml-4">
                            <input class="custom-control-input" id="customCheck9" type="checkbox">
                            <label class="custom-control-label" for="customCheck9">Manage Permissions</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-3 ml-2">
                            <input class="custom-control-input" id="customCheck10" type="checkbox">
                            <label class="custom-control-label" for="customCheck10">File Manager</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-3 ml-4">
                            <input class="custom-control-input" id="customCheck11" type="checkbox">
                            <label class="custom-control-label" for="customCheck11">Logs</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-3 ml-4">
                            <input class="custom-control-input" id="customCheck12" type="checkbox">
                            <label class="custom-control-label" for="customCheck12">Backups</label>
                        </div>
                    </div>
                </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save and Back</button>
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>
