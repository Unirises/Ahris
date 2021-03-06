<h1 class="mb-2"> Customer Information </h1>
                                    <div class="card mb-4">
                                        <!-- Card body -->
                                        <div class="card-body">
                                          <!-- Form groups used in grid -->
                                         
                                          <div class="row">

                                            <div class="col-md-6">
                                              <form action="{{route('user-update-contacts')}}" method="post">
                                                @csrf
                                              <div class="form-group">
                                                <label class="form-control-label" for="example3cols1Input">Company Name</label>
                                                <input type="text" name="company_name" class="form-control" id="example3cols1Input" value="{{$contacts[0]['company_name']}}">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example3cols2Input">Email</label>
                                                <input type="text" name="email" class="form-control" id="example3cols2Input" value="{{$contacts[0]['email']}}">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6 col-md-3">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example4cols1Input">Display Name As</label>
                                                <input type="text" name="displayname" class="form-control" id="example4cols1Input" value="{{$contacts[0]['displayname']}}">
                                              </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example4cols2Input">Phone</label>
                                                <input type="text" name="phone" class="form-control" id="example4cols2Input" value="{{$contacts[0]['phone_number']}}">
                                              </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example4cols3Input">Mobile</label>
                                                <input type="text" name="mobile" class="form-control" id="example4cols3Input" value="{{$contacts[0]['mobile_number']}}">
                                              </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example4cols3Input">Fax</label>
                                                <input type="text" name="fax" class="form-control" id="example4cols3Input" value="{{$contacts[0]['fax']}}">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols1Input">Other</label>
                                                <input type="text" name="other" class="form-control" id="example2cols1Input" value="{{$contacts[0]['other']}}">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols2Input">Website</label>
                                                <input type="text" name="website" class="form-control" id="example2cols2Input" value="{{$contacts[0]['website']}}">
                                              </div>
                                            </div>
                                          </div>
                                          <h1 class="mb-2"> Address </h1>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols1Input">Street</label>
                                                <input type="text" name="address" class="form-control" id="example2cols1Input" value="{{$contacts[0]['street']}}">
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols2Input">Barangay</label>
                                                <input type="text" name="barangay" class="form-control" id="example2cols2Input" value="{{$contacts[0]['barangay']}}">
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label class="form-control-label" for="example2cols2Input">State / Province</label>
                                                  <input type="text" name="province" class="form-control" id="example2cols2Input" value="{{$contacts[0]['province']}}">
                                                </div>
                                              </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols1Input">City / Town</label>
                                                <input type="text" name="city" class="form-control" id="example2cols1Input" value="{{$contacts[0]['city']}}">
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols2Input">Zip Code</label>
                                                <input type="text" name="zip_code" class="form-control" id="example2cols2Input" value="{{$contacts[0]['zipcode']}}">
                                              </div>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <div class="form-group">
                                                  <label class="form-control-label" for="example2cols2Input">Country</label>
                                                  <input type="text" name="country" class="form-control" id="example2cols2Input">
                                                </div>
                                              </div> --}}
                                          </div>

                                          {{-- Add Person Column --}}
                                          <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                  <label class="form-control-label" for="example2cols1Input">Title</label>
                                                  <input type="text" name="title" class="form-control" id="example2cols1Input" value="{{$contact['person']->title}}">
                                                </div>
                                              </div>
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols1Input">First Name</label>
                                                <input type="text" name="first_name" class="form-control" id="example2cols1Input" value="{{$contact['person']->firstname}}">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols2Input"> Middle Name</label>
                                                <input type="text" name="middle_name" class="form-control" id="example2cols2Input" value="{{$contact['person']->middlename}}">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                  <label class="form-control-label" for="example2cols2Input">Last Name</label>
                                                  <input type="text" name="last_name" class="form-control" id="example2cols2Input" value="{{$contact['person']->lastname}}">
                                                </div>
                                              </div>
                                              <div class="col-md-2">
                                                <div class="form-group">
                                                  <label class="form-control-label" for="example2cols2Input">Suffix</label>
                                                  <input type="text" name="suffix" class="form-control" id="example2cols2Input" value="{{$contact['person']->suffix}}">
                                                </div>
                                              </div>
                                              <div class="col-md-2">
                                                <div class="form-group">
                                                  <label class="form-control-label" for="example2cols2Input">Email</label>
                                                  <input type="text"  name="email_add_person" class="form-control" id="example2cols2Input" value="{{$contact['person']->email}}" placeholder="Separate multiple emails with commas">
                                                </div>
                                              </div>
                                          </div>
                                          {{-- <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <p class="text-primary text-bold">
                                                        <a href="#"> Add Another Person </a>
                                                      </p>
                                                </div>
                                              </div>
                                        </div> --}}

                                        {{-- Tax Details Column --}}
                                        <h1 class="mb-2"> Tax Details </h1>
                                        <p class="text-muted"> All defaults can be overridden on individual transactions </p>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols1Input">Sales Settings</label>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <select name="sales_settings" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                  <option value="(None)" data-select2-id="1" selected >(None)</option>
                                                  <option value="Tax Inclusive" data-select2-id="2">Tax Inclusive</option>
                                                  <option value="Tax Exclusive" data-select2-id="3">Tax Exclusive</option>
                                                  <option value="No tax" data-select2-id="4">No tax</option>
                                                 
                                                    {{-- <option data-select2-id="6">Badges</option>
                                                    <option data-select2-id="7">Buttons</option>
                                                    <option data-select2-id="8">Cards</option>
                                                    <option data-select2-id="9">Forms</option>
                                                    <option data-select2-id="10">Modals</option> --}}
                                                  </select>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="sales_settings_account" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="3">Default Account</option>
                                                        <option data-select2-id="6">Sample Account</option>
                                                        {{-- <option data-select2-id="7">Buttons</option>
                                                        <option data-select2-id="8">Cards</option>
                                                        <option data-select2-id="9">Forms</option>
                                                        <option data-select2-id="10">Modals</option> --}}
                                                      </select>
                                                </div>
                                              </div>
                                          </div>
                                          {{-- Tax Columns --}}
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols1Input">Tax</label>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                  <input type="text" name="tax_1" value="{{$contact['tax']->tin_1}}" class="form-control" id="example2cols2Input" maxlength="14" placeholder="XXXXX-XXX-XXXX">
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <input type="text" name="tax_2" value="{{$contact['tax']->tin_2}}" class="form-control" id="example2cols2Input" maxlength="5" placeholder="XXXXX">
                                                </div>
                                              </div>
                                          </div>

                                        {{-- Financial column --}}
                                          <div class="row">
                                            <div class="col-md">
                                              <div class="form-group">
                                                <label class="form-control-label">Financial Details</label>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="form-group">
                                                <label class="form-control-label" for="example2cols2Input">Credit Limit Account</label>
                                                  <input type="number" value="{{$contact['tax']->credit_limit_account}}" name="credit_limit" class="form-control" id="example2cols2Input" placeholder="0.00">
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="example2cols2Input">Credit Limit Block</label>
                                                    <select name="credit_block" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                        <option value="Do not block sending invoices past credit limit" data-select2-id="3">Do not block sending invoices past credit limit</option>
                                                        <option value="Block sending invoices past credit limit" data-select2-id="4">block sending invoices past credit limit</option>
                                                    
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="col-md-3">
                                                {{-- <div class="form-group">
                                                    <label class="form-control-label" for="example2cols2Input"></label>
                                                    <select class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="3">Do not block sending invoices past credit limit</option>
                                                        <option data-select2-id="4">Block sending invoices past credit limit</option>
                                                    </select>
                                                </div> --}}
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-10">
                                                <div class="form-group">
                                                    <a href="/contacts"> Cancel </a>
                                                </div>
                                              </div>
                                              <div class="col-md-2">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary text-right">Save</button>
                                                </div>
                                                {{-- <input type="hidden" name="contact_type" value="customer"> --}}
                                                <input type="hidden" name="contact_id" value="{{$contact['id']}}">
                                                {{-- <input type="hidden" name="type" value="business"> --}}
                                              </form>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
