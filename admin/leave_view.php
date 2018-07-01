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
            <h1>Leave View</h1>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Search</h3>
              </div>
              <div class="card-body">

      <?php
      $sql = "SELECT * FROM tbl_leaves";
      $result = $connection->query($sql);

      if ($result->num_rows > 0) {
    echo "<table id='example1' class='table table-bordered table-striped'><thead><tr><th>Leave Type</th><th>Leave Count</th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["leaveType"]."</td><td>".$row["leaveCount"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
} ?>
              

              </div>
              <!-- /.card-body -->


            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-flat btn-primary">Export</button>
              <button type="button" class="btn btn-flat btn-primary">Print</button>

            </div>
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
