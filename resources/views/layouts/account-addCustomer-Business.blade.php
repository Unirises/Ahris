<!-- Modal -->
<div class="modal fade" id="accountAddBusinessCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Customer Business</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('user-insert-contacts')}}" method="post">
            @csrf
           @include('layouts.contact-addCustomerBusiness')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-youtube" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
