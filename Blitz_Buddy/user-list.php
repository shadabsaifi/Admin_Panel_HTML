<?php include 'header.php';?>
    <div class="sellerListPage ExplorerListPage">
        <div class="layout-content">
            <div class="layout-content-body">
                <div class="title-bar">
                    <h1 class="title-bar-title">
                      <span class="d-ib">Seller Management</span>
                    </h1>
                </div>
                <div class="row gutter-xs">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                    <button type="button" class="card-action card-reload" title="Reload"></button>

                                </div>
                                <strong>Seller list</strong>
                            </div>
                            <div class="card-body">
                                <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Email ID</th>
                                            <th>Mobile</th>
                                            <th>View profile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>mohit</td>
                                            <td>sales1@gmail.com</td>
                                            <td>986561234</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm btn-labeled" type="button" data-toggle="modal" data-target="#viewSeller">
                                                    <span class="btn-label">
                                                     <span class="icon icon-eye icon-lg icon-fw"></span>
                                                    </span>
                                                    View Profile
                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm btn-labeled" type="button" data-toggle="modal" data-target="#deleteUser">
                                                    <span class="btn-label">
                                                     <span class="icon icon-bank icon-lg icon-fw"></span>
                                                    </span>
                                                    Block
                                                </button>
                                                <button class="btn btn-success btn-sm btn-labeled" type="button" data-toggle="modal" data-target="#unblockUser">
                                                    <span class="btn-label">
                                                     <span class="icon icon-check icon-lg icon-fw"></span>
                                                    </span>
                                                    Unblock
                                                </button>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include 'footer.php';?>
    <div id="viewSeller" tabindex="-1" role="dialog" class="modal fade">
     <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Seller full detail</h4>
          </div>
          <div class="modal-body provider-detail">
           <div class="row">
            <div class="col-md-6">
              <div class="card text-center">
                <div class="card-image">
                  <div class="overlay">
                  </div>
                </div>
                <div class="card-avatar text-left">
                  <a class="card-thumbnail rounded" style="width: 150px;height: 160px;overflow: hidden;" href="#">
                    <img class="img-responsive" src="img/8447261358.jpg" alt="Instagram">
                  </a>
                </div>
                <div class="card-body">
                  <h3 class="card-title text-left">Seller name</h3>
                  <p class="card-text text-left">
                    <span class="app-users">
                     <span class="icon icon-map-marker"></span>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel harum sequi,
                      
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <ul class="media-list">
                        <li class="media">
                          <div class="media-middle media-body">
                            <h4 class="m-y-0">Phone number</h4>
                            <small>987862254</small>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-middle media-body">
                            <h4 class="m-y-0">Country</h4>
                            <small>India</small>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-middle media-body">
                            <h4 class="m-y-0">City</h4>
                            <small>Delhi</small>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-middle media-body">
                            <h4 class="m-y-0">Email</h4>
                            <small>seller@gmail.com</small>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
           </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>      
    </div>
    <div id="addUser" tabindex="-1" role="dialog" class="modal fade">
     <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Add new Sales representative</h4>
          </div>
          <div class="modal-body provider-detail">
           <div class="row">
            <div class="col-xs-12">
             <form class="form form-horizontal">
                  <div class="form-group">
                      <div class="col-md-8">
                          <label for="" class="control-label">Email ID</label>
                          <input id="" class="form-control" type="text">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-8">
                          <label for="" class="control-label">
                          <a href="#">Generate password</a></label>
                          <input id="" class="form-control" type="text">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class=" col-sm-8  col-md-8 ">
                          <button class="btn btn-primary " type="submit">Save</button>
                      </div>
                  </div>
              </form>  
             </div> 
           </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>      
    </div>
    <div id="unblockUser" tabindex="-1" role="dialog" class="modal fade">
     <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <span class="text-success icon icon-times-circle icon-5x"></span>
              <h3 class="text-success">Sure</h3>
              <h4>Are you want to unblock this item?</h4>
              <div class="m-t-lg">
                <button class="btn btn-success" data-dismiss="modal" type="button">Continue</button>
                <button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>      
    </div>
    <div id="deleteUser" tabindex="-1" role="dialog" class="modal fade">
     <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <span class="text-danger icon icon-times-circle icon-5x"></span>
              <h3 class="text-danger">Danger</h3>
              <h4>Are you want to delete this item</h4>
              <div class="m-t-lg">
                <button class="btn btn-danger" data-dismiss="modal" type="button">Continue</button>
                <button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>      
    </div>

    