<!-- Modal -->
<div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        {{-- <style>
           #accountType select option[disabled] {
                color: rgb(250, 33, 33);
                font-weight: bold;
                background-color:#00F;
        }
        </style> --}}
        <div class="modal-body">
        <form action="{{route('add-account')}}" method="post">

          <div class="row">
            <div class="col-md-12">
              @csrf
              <div class="form-group">


                <label for="accountType">Account Type</label>
                <select name="account_type" id="accountType" class="form-control">
                  <option selected disabled hidden>Choose Account Type</option>
                  <option disabled>Assets</option>
                  <option value="Cash & Cash Equivalent" >Cash & Cash Equivalent</option>
                  <option value="Receivable" >Receivable</option>
                  <option value="Inventory" >Inventory</option>
                  <option value="Fixed Asset" >Fixed Asset</option>
                  <option value="Current Asset" >Current Asset</option>
                  <option value="Non-Current Asset" >Non-Current Asset</option>
                  <option  disabled>Liabilities</option>
                  <option value="Current Liability" >Current Liability</option>
                  <option value="Non-Current Liability" >Non-Current Liability</option>
                  <option disabled>EQUITY</option>
                  <option value="Equity" >Equity</option>
                  <option  disabled>REVENUE</option>
                  <option value="Revenue">Revenue</option>
                  <option value="Other Income" >Other Income</option>
                  <option disabled>EXPENSES</option>
                  <option value="Direct Cost" >Direct Cost</option>
                  <option value="General, Selling and Admin Expense" >General, Selling and Admin Expense</option>
                  <option value="Other Expnse Expense" >Other Expnse Expense</option>
                </select>
              </div>
                <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Code</label>
                    <input type="text" name="code" class="form-control" id="example3cols1Input">
                  </div>
                <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Name</label>
                    <input type="text" name="name" class="form-control" id="example3cols1Input">
                  </div>

            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Description</label>
                <input type="text" name="description" class="form-control" id="example3cols1Input">
              </div>
              <div class="form-group">
                <label for="tax">Tax</label>
                <select name="tax" id="tax" class="form-control">
                  {{-- <option selected disabled hidden>Choose Tax</option> --}}
                  @foreach ($tax_rates as $item)
                <option selected value="{{$item->id}},{{$item->name}}({{$item->tax_rate}}%)" >{{$item->name}} ({{$item->tax_rate}}%)</option>
                  @endforeach

                </select>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-youtube" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Add Account</button>
        </form>
        </div>
      </div>
    </div>
  </div>
