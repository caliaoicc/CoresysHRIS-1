<?php
include 'includes/connection.php';


  $searchq = $_POST['search'];
  $employeeID = $_POST['employeeID'];
  $sssID = $_POST['sssID'];
  $philhealthID = $_POST['philhealthID'];
  $tinID = $_POST['tinID'];



  $sql = "UPDATE tbl_employees SET employeeID = '$employeeID', sssID = '$sssID', philhealthID = '$philhealthID', tinID = '$tinID'
  WHERE lastName = '$searchq'";
  $res = mysqli_query($connection,$sql);
  if ($res) {
    echo 'Success';
  }else{
    echo 'Failed';

  }






 ?>
