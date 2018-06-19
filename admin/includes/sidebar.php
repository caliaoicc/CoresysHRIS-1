  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CoreSys Solutions</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-users nav-icon"></i>
              <p>
                Employee Profile
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="profile.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_employee.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Employee</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-calendar nav-icon"></i>
              <p>Time-in/Time-out</p>
            </a>
          </li>
            <li class="nav-header">MANAGE</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-folder-open-o nav-icon"></i>
              <p>
                Leave Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="leaves.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Leave Approval</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="leave_view.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Leave View</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-clock-o nav-icon"></i>
              <p>
                Time Sheets
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="timesheet_approval.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Approval</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="timesheet_view.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="utilization.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Utilization</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">ADMIN</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-user nav-icon"></i>
              <p>
                Administrator
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_user.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>
