<div class="card">
    <!-- Card header -->
    <div class="card-header">
      <div class="row">
        <div class="col-sm-3 pt-3">
            <span class="text-muted disabled" id="contact_edit_customer">  Edit </span>
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

            function contactEdit(){
              // this.id ="";
              // this.type = "";
              this.setEdit = function (id) {
                this.id =id;
              }
              this.getID = function () {
                return this.id;
              }
           
            }
            // document.getElementById('table-check-all').addEventListener('click',selectAll);
            document.getElementById('table-check-all-customer').onclick = function() {
              var checkboxes1 = document.querySelectorAll('input[name="check_contact_customer"]');
              for(let checkbox of checkboxes1){
                  checkbox.checked = this.checked;
              }
            };
            
            function selectAll() {
              alert(document.querySelectorAll('input[name="check_contact_customer"]:checked').length);

            }
          
           var test = new contactEdit();
            function editCheck(id) {
              var checkedBoxLength = document.querySelectorAll('input[name="check_contact_customer"]:checked').length;
              if(checkedBoxLength === 0){
                var btnEdit = document.getElementById("contact_edit_customer");
                btnEdit.classList.remove("btn");
                btnEdit.classList.remove("btn-secondary");
                btnEdit.classList.add("text-muted");
                btnEdit.classList.add("disabled");
                btnEdit.style.cursor = null;
              }
              else if (checkedBoxLength > 1) {
                var btnEdit = document.getElementById("contact_edit");
                btnEdit.classList.remove("btn");
                btnEdit.classList.remove("btn-secondary");
                btnEdit.classList.add("text-muted");
                btnEdit.classList.add("disabled");
                btnEdit.style.cursor = null;
                // alert("id: "+ id +" type:" +type +"number of box check: " +checkedBoxLength);
              }
              else{
              
                var btnEdit = document.getElementById("contact_edit");
                btnEdit.classList.remove("text-muted");
                btnEdit.classList.remove("disabled");
                btnEdit.classList.add("text-primary");
                // btnEdit.classList.add("btn-secondary");
                btnEdit.style.cursor = "pointer";
                test.setEdit(id);
              }

            }

            document.getElementById('contact_edit').onclick = function() {
              var checkedBoxLength = document.querySelectorAll('input[name="check_contact_customer"]:checked').length;
              if (checkedBoxLength === 1) {
           
              //  alert(test.getID());
                window.location.href = test.getID();
              }
            } 
        </script>
          @foreach ($contacts as $contact)
          @if ($contact->contact_type == 'customer')
          <tr>
            <th>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" name="check_contact_customer" id="table-check-customer-{{$contact->id}}" type="checkbox">
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
