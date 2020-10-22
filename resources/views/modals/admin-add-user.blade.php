<!-- Modal -->
<div class="modal fade" id="adminAddAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      
        <div class="modal-body">
        <form action="{{route('add-account')}}" method="post">

          <div class="row">
            <div class="col-md">
              @csrf
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlSelect2">User Role Permissions</label>
                <select name="roles" class="form-control" id="exampleFormControlSelect2">
                  <option selected hidden disabled>Choose a role for new user</option>
                  <option value="1">Super Administrator</option>
                  <option value="2">Administrator</option>
                  <option value="3">User</option>
                </select>
              </div>
                <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">First Name</label>
                    <input type="text" name="firstname" class="form-control" id="example3cols1Input">
                  </div>
                <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="example3cols1Input">
                  </div>
                <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Email</label>
                    <input type="email" name="email" class="form-control" id="example3cols1Input">
                  </div>
                  
            </div>
              <div class="col-md">
                <div class="form-group">
                  <label class="form-control-label" for="example3cols1Input">Password</label>
                  <input type="password" name="password" class="form-control" id="example3cols1Input">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="example3cols1Input">Password Confirmation</label>
                  <input type="password" name="password_confirmation" class="form-control" id="example3cols1Input">
                </div>
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Add</button>
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>
