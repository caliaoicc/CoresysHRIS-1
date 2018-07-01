<<?php
session_start();
    include 'includes/header.php';
    include 'includes/connection.php';
    $output = '';
        if (isset($_POST['search'])) {
          $searchq = $_POST['search'];


          $query = "SELECT * FROM tbl_employees WHERE lastName = '$searchq'";
          $results = mysqli_query($connection,$query);
          $count = mysqli_num_rows($results);
          if ($count == 0){
            $output .= '<div class="row">
              <div class="offset-md-5">
                <h3><br><br><br><br><br><br>No Search Result.</h3>
              </div>
            </div>';
          }else{
            while($row = mysqli_fetch_array($results)) {
              $firstName = $row['firstName'];
              $lastName = $row['lastName'];
              $position = $row['position'];
              $employeeID = $row['employeeID'];

              $output .= '
              <div class="form-group">
                <label for="exampleInputEmail1">Employee Name:&nbsp;' .$firstName . ' ' .$lastName . '</label>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Designation:&nbsp;' . $position . '</label>
              </div>
              ';
            }
          }
        }else{
          $output .= '                       <div class="form-group">
                      <label for="exampleInputEmail1">Employee Name:&nbsp; ---</label>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Designation:&nbsp; ---</label>
                    </div>';
        }
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
      <?php         if(isset($_SESSION['addUserSuccess'])){
                echo "
                <div class='alert alert-success alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fa fa-check'></i> Success!</h5>
                  ".$_SESSION['addUserSuccess']."
                </div>
                ";
                unset($_SESSION['addUserSuccess']);
              } ?>
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
                      <form method="post" action="add_user.php">
                      <select name="search" class="form-control select2" style="width: 100%;">
                        <option selected="selected">&nbsp;</option>
                        <?php
            $query = "SELECT * from tbl_employees";
            $results = mysqli_query($connection,$query);
            while ($rows = mysqli_fetch_assoc(@$results)){
            ?>
            <option value="<?php echo $rows['lastName'];?>"><?php echo $rows['firstName'] . ' ' . $rows['lastName'];?></option>
            <?php
            }
            ?>
                      </select>
                    </div>
                  </div>

                    </div>
                    <div class="row">

                      <!-- /.col -->
                      <div class="col-md-2 offset-md-10">
                        <button type="submit" class="btn btn-block btn-primary">Search</button>
                          <!-- /.input group -->
                      </div>
                        </form>
                      <!-- /.col -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>

<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"></h3>
    </div>
    <div class="card-body">
      <div class="row">

        <div class="col-md-12">
        <form method="POST" action="add_user_process.php">
<?php echo $output; ?>
          <div class="form-group">
            <label for="exampleInputEmail1">User ID:</label>
            <input type="hidden" class="form-control" id="employeeID" name="employeeID" value="<?php echo $employeeID;?>" placeholder="<?php echo $employeeID;?>" >
            <input type="text" class="form-control" id="userID" name="userID" placeholder="Enter User ID" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" >
          </div>
          <div class="form-group">
            <label>User Group</label>
            <select class="form-control select2" style="width: 100%;" >
              <option selected="selected">---</option>

            </select>
          </div>
        </div>

      </div>
      <div class="row">

        <div class="col-md-2 offset-md-10">
          <button type="submit" class="btn btn-block btn-primary">Create</button>
        </div>
        </form>
        <!-- /.col -->
      </div>

    </div>
  </div>

</div>
            </div>

          </div>
        </div>

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
