<?php
include 'includes/connection.php';




  $department = $_POST['department'];
  $location = $_POST['location'];
  $reportingTo = $_POST['reportingTo'];



  $sql = "UPDATE tbl_employees SET department = '$department', location = '$location', reportingTo = '$reportingTo'";
  $res = mysqli_query($connection,$sql);
  if ($res) {
    echo 'Success';
  }else{
    echo 'Failed';

  }




header('location: profile.php');

 ?>
