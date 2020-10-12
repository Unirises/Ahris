<div class="col-md-4">
                  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-body px-lg-5 py-lg-5">
                              <div class="text-center text-muted mb-4">
                                <h1> Update your Account </h1>
                                <small>Username & Password</small>
                              </div>
                              <form class="needs-validation" method="#">
                                @csrf
                               <div class="form-row">
                                  <div class="col-md-12">
                                    <label class="form-control-label" for="validationCustomUsername">Username</label>
                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                      Please choose a username.
                                    </div>
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <label class="form-control-label" for="validationCustomUsername">Password</label>
                                    <input type="password" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                      Pease enter your password
                                    </div>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-default my-4 col-md-12">Update Account</button>
                                  <button type="button" class="btn col-md-12" data-dismiss="modal">Cancel</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>