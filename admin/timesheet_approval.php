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
            <h1>Time Sheets</h1>
          </div>
        </div>
      </div>
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
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Date Started</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 offset-md-10">
                    <button type="button" class="btn btn-block btn-primary">Search</button>
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
                <div class="card-tools">
                  <div class="input-group input-group-sm" >
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></th>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Reason</th>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-success">Approved</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td>219</td>
                    <td>Alexander Pierce</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-warning">Pending</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td>657</td>
                    <td>Bob Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-primary">Approved</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td>175</td>
                    <td>Mike Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-danger">Denied</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                </table>
              </div>

            </div>
          </div>

        </div>
        <div class="row">
      <div class="col-md-1">
          <button type="button" class="btn btn-block btn-primary">Approve</button>
        </div>
          <div class="col-md-1">

          <button type="button" class="btn btn-block btn-primary">Decline</button>
        </div>
          <div class="col-md-1">
          <button type="button" class="btn btn-block btn-primary">Forward</button>
      </div>
</div>
      </div>
    </section>

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
