<?php
include 'includes/connection.php';


  $employeeID = $_POST['employeeID'];
  $sssID = $_POST['sssID'];
  $philhealthID = $_POST['philhealthID'];
  $tinID = $_POST['tinID'];

  $department = $_POST['department'];
  $location = $_POST['location'];
  $reportingTo = $_POST['reportingTo'];

  $dateHired = $_POST['dateHired'];
  $dateStarted = $_POST['dateStarted'];



  $sql = "UPDATE tbl_employees SET employeeID = '$employeeID', sssID = '$sssID', philhealthID = '$philhealthID', tinID = '$tinID',
  department = '$department', location = '$location', reportingTo = '$reportingTo', dateHired = '$dateHired', dateStarted = '$dateStarted'";
  $res = mysqli_query($connection,$sql);
  if ($res) {
    echo 'Success';
  }else{
    echo 'Failed';

  }






 ?>
