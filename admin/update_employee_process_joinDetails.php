<?php
include 'includes/connection.php';



  $dateHired = $_POST['dateHired'];
  $dateStarted = $_POST['dateStarted'];



  $sql = "UPDATE tbl_employees SET dateHired = '$dateHired', dateStarted = '$dateStarted'";
  $res = mysqli_query($connection,$sql);
  if ($res) {
    echo 'Success';
  }else{
    echo 'Failed';

  }




header('location: profile.php');

 ?>
