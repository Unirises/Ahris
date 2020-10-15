<div class="card">
    <!-- Card header -->
    <div class="card-header">
      <div class="row">
        <div class="col-sm-3 pt-3">
            <span class="text-muted"> <a href="" id="edit-user"> </a> Edit </span>
          </div>
        <div class="col-sm-3 pt-3">
        <span>Customers: <span class="text-muted"> {{$contact_count['customer_count']}}</span>
          </div>
          <div class="col-sm-3 pt-3">
            <span>Suppliers: <span class="text-muted"> {{$contact_count['supplier_count']}} </span>
          </div>
          <div class="col-sm">
            <input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search">
          </div>
      </div>
    </div>
<div class="col-md">
    <div class="table-responsive">
      <table data-toggle="table"
      {{-- data-search="true" --}}
      data-pagination="true"
      class="table align-items-center table-flush table-hover">
        <thead class="thead-light">
          <tr>
            <th>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="table-check-all" type="checkbox">
                <label class="custom-control-label" for="table-check-all"></label>
              </div>
            </th>
            <th  data-sortable="true" data-field="Contact">Contact</th>
            <th  data-sortable="true" data-field="Email">Email</th>
            <th>You Owe Them</th>
            <th>They Owe You</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($contacts as $contact)
          <tr>
            <th>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="table-check-{{$contact->id}}" type="checkbox">
                <label class="custom-control-label" for="table-check-{{$contact->id}}"></label>
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
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
