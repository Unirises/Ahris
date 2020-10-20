<!-- Modal -->
<div class="modal fade" id="taxRateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Tax Rate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('add-tax')}}" method="post">
              @csrf
                <div class="form-group">
                    <label class="form-control-label" for="example3cols1Input">Display Name</label>
                    <input type="text" name="name" class="form-control" id="example3cols1Input">
                  </div>
            <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Tax Rate %</label>
                <input type="text" name="tax_rate" class="form-control" id="example3cols1Input" placeholder="%">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-youtube" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Add Tax Rate</button>
        </form>
        </div>
      </div>
    </div>
  </div>
