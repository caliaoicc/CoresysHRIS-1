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
              <h1>Add Employee</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Employee Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
              //creating employeeid
          		$letters = '';
          		$numbers = '';
          		foreach (range('A', 'Z') as $char) {
          		    $letters .= $char;
          		}
          		for($i = 0; $i < 10; $i++){
          			$numbers .= $i;
          		}
          		$employee_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);

               ?>
              <form  method="POST" action="add_employee_process.php">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Employee ID</label>
                        <?php
                        echo "<input type='text' class='form-control' name='employeeID' id='employeeID' value='$employee_id' disabled>";
                         ?>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Last Name">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="middleinitial">Middle Initial</label>
                        <input type="text" class="form-control" id="middleInitial" name="middleInitial" required placeholder="Middle Initial">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="lastname">Birthdate</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                          </div>
                          <input type="date" required name="birthDate" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="firstname">Gender</label>
                        <select class="form-control select2" name="gender" required style="width: 100%;">
                          <option selected="selected">Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="middleinitial">Contact Number</label>
                        <input type="text" class="form-control" id="contactNumber" name="contactNumber" required placeholder="Contact Number">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="middleinitial">Address</label>
                          <textarea class="form-control" name="address" id="address"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                          <label>Date Hired</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                          </div>
                          <input type="date" required name="hiredDate" class="form-control" required>
                        </div>
                      </div>
                        </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Date Started</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                        <input type="date" class="form-control" name="startDate" required >
                      </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Position</label>
                          <select class="form-control select2" name="position" required style="width: 100%;">
                            <option selected="selected">Test</option>

                          </select>
                        </div>
                          </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Department</label>
                            <select class="form-control select2" name="department" required style="width: 100%;">
                              <option selected="selected">Test</option>

                            </select>
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Reporting To</label>
                          <select class="form-control select2" name="reportingTo" required style="width: 100%;">
                            <option selected="selected">Test</option>

                          </select>
                        </div>
                    </div>
                      </div>
                      <div class="row">
                        <div class="form-group">
                            <label for="photo" class="col-sm-3 control-label">Photo</label>
                            <div class="col-md-4">
                              <input type="file" name="photo" id="photo">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-1 offset-md-11">
                        <div class="form-group">
                            <button type="submit" name="add" class="btn btn-block btn-primary">Submit</button>
                                    </div>
                        </div>
                      </div>
                  </div>
                </form>
                </div>
                <!-- /.card-body -->


            </div>
            <!-- /.card -->


          <!--/.col (right) -->
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
