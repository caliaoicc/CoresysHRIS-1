<?php
session_start();
include 'includes/connection.php';


  $employeeID = $_POST['employeeID'];
  $userID = $_POST['userID'];
  $password = $_POST['password'];

  $sql = "INSERT INTO tbl_login (employeeID,username,user_password) VALUES ('$employeeID','$userID', '$password')";
  $res = mysqli_query($connection,$sql);

  if ($res) {
    echo 'Success';
  }else{
    echo 'Failed';

  }


  if (!mysqli_query($connection,$sql))
  {
      die('Error: ' . mysqli_error($connection));
  }
  $_SESSION['addUserSuccess']="User Successfully Added!";

header ('location: add_user.php');
exit;

 ?>
