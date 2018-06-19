<<?php
    include 'includes/header.php';
 ?>
  <body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php
        include 'includes/navbar.php';
        include 'includes/sidebar.php';

     ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <h1>Employee Profile</h1>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select>
              <div class="form-check">
                <form>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Active Employees Only</label>
              </form>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <button class="btn btn-navbar" type="submit">
              <i class="fa fa-search"></i>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info-active">
                <h3 class="widget-user-username">Alexander Pierce</h3>
                <h5 class="widget-user-desc">Founder & CEO</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-6 border-center">
                    <div class="description-block">
                    <button type="button"  data-toggle="modal" data-target="#edit_currentPosition" class="btn btn-primary btn-block"><i class='fa fa-edit'></i> Update Image</button>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                      <button type="button"  data-toggle="modal" data-target="#updateProfile" class="btn btn-primary btn-block"><i class='fa fa-edit'></i> Update Profile</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-primary">
             <div class="card-header">
               <div class="row">
                 <div class="col-md-5">
                   <h3 class="card-title">Current Position</h3>
                 </div>
                 <div class="col-md-3 offset-md-4">
                    <button type="button"  data-toggle="modal" data-target="#edit_currentPosition" class="btn btn-block btn-sm"><i class='fa fa-edit'></i> Edit</button>
                 </div>
               </div>
             </div>
             <div class="card-body">
               <strong><i class="fa fa-book mr-1"></i> Department</strong>

               <p class="text-muted">
                 - Not Available -
               </p>
               <hr>
               <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>
               <p class="text-muted">Malibu, California</p>
               <hr>
               <strong><i class="fa fa-pencil mr-1"></i> Designation</strong>
               <p class="text-muted">
                 <span class="tag tag-danger">UI Design</span>
                 <span class="tag tag-success">Coding</span>
                 <span class="tag tag-info">Javascript</span>
                 <span class="tag tag-warning">PHP</span>
                 <span class="tag tag-primary">Node.js</span>
               </p>
               <hr>
               <strong><i class="fa fa-file-text-o mr-1"></i> Reporting To</strong>
               <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
             </div>
           </div>
          </div>
          <div class="col-md-4">
            <div class="card card-primary">
            <div class="card-header">
              <div class="row">
                <div class="col-md-5">
                  <h3 class="card-title">ID's</h3>
                </div>
                <div class="col-md-3 offset-md-4">
                     <button type="button"  data-toggle="modal" data-target="#edit_id" class="btn btn-block btn-sm"><i class='fa fa-edit'></i> Edit</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <strong><i class="fa fa-book mr-1"></i> Employee ID</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker mr-1"></i> SSS ID</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil mr-1"></i> PhilHealth ID</strong>

              <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o mr-1"></i> TIN ID</strong>

              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="card card-primary">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="card-title">Joining Details</h3>
                  </div>
                  <div class="col-md-3 offset-md-4">
                       <button type="button"  data-toggle="modal" data-target="#edit_joinDetails" class="btn btn-block btn-sm"><i class='fa fa-edit'></i> Edit</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-book mr-1"></i> Joined on</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fa fa-map-marker mr-1"></i> Confirmation Date</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fa fa-pencil mr-1"></i> Status</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>



              </div>
              <!-- /.card-body -->
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="card-title">Status</h3>
                  </div>
                  <div class="col-md-1 offset-md-6">
                     <button type="button"  data-toggle="modal" data-target="#edit_status" class="btn btn-block btn-sm"><i class='fa fa-edit'></i> Edit</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-book mr-1"></i> On Leave</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fa fa-map-marker mr-1"></i> Next Vacation Leave</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fa fa-pencil mr-1"></i> Active</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="fa fa-file-text-o mr-1"></i> Tenure</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                <hr>

                <strong><i class="fa fa-file-text-o mr-1"></i> Resignation Date</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>


              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!--Edit Current Position -->
  <div class="modal fade" id="edit_currentPosition">
      <div class="modal-dialog">
          <div class="modal-content">
            	<div class="modal-header">
                <h3 class="card-title">Current Position</h3>
              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span></button>
              	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
            	</div>
            	<div class="modal-body">
              	<form class="form-horizontal" method="POST" action="employee_edit.php">
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Department</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Location</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Designation</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Reporting To</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
            	</div>
            	<div class="modal-footer">
              	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              	</form>
            	</div>
          </div>
      </div>
  </div>
  <!--Edit Status -->
  <div class="modal fade" id="edit_status">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h3 class="card-title">Status</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="employee_edit.php">
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>On Leave</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-5 control-label"><i class="fa fa-book mr-1"></i>Next Vacation Leave</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Active</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Tenure</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Resignation Date</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
              </div>
          </div>
      </div>
  </div>
  <!--Edit IDs -->
  <div class="modal fade" id="edit_id">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h3 class="card-title">Identification Cards</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="employee_edit.php">
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Employee ID</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>SSS ID</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>PhilHealth ID</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>TIN ID</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
              </div>
          </div>
      </div>
  </div>
  <!--Edit Joining Details -->
  <div class="modal fade" id="edit_joinDetails">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h3 class="card-title">Joining Details</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="employee_edit.php">
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Joined On</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-5 control-label"><i class="fa fa-book mr-1"></i>Confirmation Date</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="edit_contact" class="col-sm-4 control-label"><i class="fa fa-book mr-1"></i>Status</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
              </div>
          </div>
      </div>
  </div>
  <!--Edit Update Profile -->
  <div class="modal fade" id="updateProfile">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h3 class="card-title">Employee Profile</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="employee_edit.php">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Employee ID</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="edit_contact" name="contact">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Last Name</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="edit_contact" name="contact">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>First Name</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="edit_contact" name="contact">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Middle Initial</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="edit_contact" name="contact">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Gender</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="gender" id="edit_gender">
                          <option selected id="gender_val">-Not Selected-</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Contact Number</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="edit_contact" name="contact">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Address</label>
                        <div class="col-sm-12">
                        <textarea class="form-control" name="address" id="edit_address"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Department</label>
                        <div class="col-sm-12">
                          <select class="form-control" name="gender" id="edit_gender">
                            <option selected id="gender_val">-Not Selected-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Position</label>
                        <div class="col-sm-12">
                          <select class="form-control" name="gender" id="edit_gender">
                            <option selected id="gender_val">-Not Selected-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="edit_contact" class="col-sm-12 control-label"><i class="fa fa-book mr-1"></i>Reporting To</label>
                        <div class="col-sm-12">
                          <select class="form-control" name="gender" id="edit_gender">
                            <option selected id="gender_val">-Not Selected-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
              </div>
          </div>
      </div>
  </div>

  <?php
   include 'includes/footer.php';
   ?>
  </div>

  <?php
   include 'includes/scripts.php';
   ?>

  </body>
  </html>
