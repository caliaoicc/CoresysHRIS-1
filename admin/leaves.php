<<?php
    include 'includes/header.php';
    include 'includes/connection.php';
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
            <h1>Leave Approval</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Search</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Employee Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
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
                  <!-- /.col -->
                </div>
                <div class="row">

                  <!-- /.col -->
                  <div class="col-md-6">
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
                  <div class="col-md-6">

                      <div class="form-check">
                        <form>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Include Completed Transactions</label>
                      </form>
                      </div>
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
                <?php
                $sql = "SELECT e.firstName, e.lastName, l.leaveType, t.duration, t.dateOfLeave, t.dateSubmitted, t.status, t.comment FROM tbl_employees e INNER JOIN tbl_leavetransaction t on e.employeeID = t.employeeID INNER JOIN tbl_leaves l on l.id = t.id ";
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
              echo "<table id='example1' class='table table-bordered table-striped'><thead><tr><th>Name</th><th>Leave Type</th><th>Duration</th><th>Date of Leave</th><th>Date Submitted</th><th>Status</th><th>Comment</th></tr></thead>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<tr><td>".$row['firstName'] . ' ' . $row['lastName']."</td><td>".$row["leaveType"]."</td><td>".$row["duration"]."</td><td>".$row["dateOfLeave"]."</td><td>".$row["dateSubmitted"]."</td><td>".$row["status"]."</td><td>".$row["comment"]."</td></tr>";
              }
              echo "</table>";
          } else {
              echo "0 results";
          } ?>
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
  <!-- /.content-wrapper -->
  <?php
   include 'includes/footer.php';
   ?>
  </div>

  <?php
   include 'includes/scripts.php';
   ?>
  </body>
  </html>
