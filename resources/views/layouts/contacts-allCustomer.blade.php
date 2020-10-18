<?php 
use Illuminate\Support\Facades\Crypt;

?>
<div class="card">
    <!-- Card header -->
    <div class="card-header">
      <div class="row">
        <div class="col-sm-3 pt-3">
            <span class="text-muted disabled" id="contact_edit_customer">  Edit </span>
<script>

            document.getElementById('contact_edit_customer').onclick = function() {
                    var checkedBoxLength = document.querySelectorAll('input[name="check_contact_customer"]:checked').length;
                    if (checkedBoxLength === 1) {
                      var checkedBox = document.querySelector('input[name="check_contact_customer"]:checked').value;
                      window.location.href = checkedBox;
                    }
                  } 
</script>
           

          </div>
        <div class="col-sm-3 pt-3">
        <span>Customers: <span class="text-muted"> {{$contact_count['customer_count']}}</span>
          </div>
          <div class="col-sm-3 pt-3">
            <span>Suppliers: <span class="text-muted"> {{$contact_count['supplier_count']}} </span>
          </div>
          {{-- <div class="col-sm">
            <input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search">
          </div> --}}
      </div>
    </div>
<div class="col-md">
    <div class="table-responsive">
      <table data-toggle="table"
      data-search="true"
      data-pagination="true"
      class="table align-items-center table-flush table-hover">
        <thead class="thead-light">
          <tr>
            <th>
              <div class="custom-control custom-checkbox">
               
                <input class="custom-control-input" id="table-check-all-customer" type="checkbox">
                <label class="custom-control-label" for="table-check-all-customer"></label>
              </div>
            </th>
            <th  data-sortable="true" data-field="Contact">Contact</th>
            <th  data-sortable="true" data-field="Email">Email</th>
            <th>You Owe Them</th>
            <th>They Owe You</th>
          </tr>
        </thead>
        <tbody>
          <script>
            function editCheckCustomer() {
              var checkedBoxLength = document.querySelectorAll('input[name="check_contact_customer"]:checked').length;
              if(checkedBoxLength === 0){
                var btnEdit = document.getElementById("contact_edit_customer");
                btnEdit.classList.remove("text-primary");
                btnEdit.classList.add("text-muted");
                btnEdit.classList.add("disabled");
                document.getElementById('table-check-all').checked = false;
                btnEdit.style.cursor = null;
              }
              else if(checkedBoxLength > 1){
                var btnEdit = document.getElementById("contact_edit_customer");
                btnEdit.classList.remove("text-primary");
                btnEdit.classList.add("text-muted");
                btnEdit.classList.add("disabled");
                btnEdit.style.cursor = null;
              }
              else{
                var btnEdit = document.getElementById("contact_edit_customer");
                btnEdit.classList.remove("text-muted");
                btnEdit.classList.remove("disabled");
                btnEdit.classList.add("text-primary");
                btnEdit.style.cursor = "pointer";
              }
            }
            document.getElementById('contact_edit_customer').onclick = function() {
              var checkedBoxLength = document.querySelectorAll('input[name="check_contact_customer"]:checked').length;
                    if (checkedBoxLength === 1) {
                      var checkedBox = document.querySelector('input[name="check_contact_customer"]:checked').value;
                      window.location.href = checkedBox;
                    }
            } 
        </script>
          @foreach ($contacts as $contact)
          @if ($contact->contact_type == 'customer')
          <?php $encryptedContactID = Crypt::encryptString($contact->id);
          $url = URL::to('/')."/contacts/edit/".$encryptedContactID;
          ?>
          <tr>
            <th>
              <div class="custom-control custom-checkbox">
              <input class="custom-control-input" value="{{$url}}" onclick="editCheckCustomer()" name="check_contact_customer" id="table-check-customer-{{$contact->id}}" type="checkbox">
                <label class="custom-control-label" for="table-check-customer-{{$contact->id}}"></label>
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
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
