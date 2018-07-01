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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Find Employee</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Employee Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Employee ID</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>Leave Type</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Date range:</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fa fa-calendar"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control float-right" id="reservation">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <div class="row">

                  <!-- /.col -->
                  <div class="col-md-2 offset-md-10">
                    <button type="button" class="btn btn-block btn-primary">Search</button>
                      <!-- /.input group -->
                  </div>
                  <!-- /.col -->
                </div>


                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <div class="col-md-6">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Employee Name:</label>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Designation:</label>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">User ID:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">User ID:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>Leave Type</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="row">

                  <!-- /.col -->
                  <div class="col-md-2 offset-md-10">
                    <button type="button" class="btn btn-block btn-primary">Search</button>
                      <!-- /.input group -->
                  </div>
                  <!-- /.col -->
                </div>


                <!-- /.row -->
              </div>
            </div>

            <!-- /.card -->

            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Search</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Leave Type</th>
                    <th>Duration</th>
                    <th>Date of Leave</th>
                    <th>Date Submitted</th>
                    <th>Status</th>
                    <th>Comment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                      <td>X</td>
                        <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                      <td>X</td>
                        <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                      <td>X</td>
                        <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                      <td>X</td>
                        <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                      <td>X</td>
                        <td>X</td>
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                      <td>X</td>
                        <td>X</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->


            </div>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-block btn-primary">Approve</button>
            <button type="button" class="btn btn-flat btn-primary">Decline</button>
            <button type="button" class="btn btn-block btn-primary">Forward</button>
          </div>

        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
