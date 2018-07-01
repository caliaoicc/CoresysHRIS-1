<?php
include 'includes/connection.php';


  $employeeID = $_POST['employeeID'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $middleInitial = $_POST['middleInitial'];
  $birthDate = $_POST['birthDate'];
  $gender = $_POST['gender'];
  $contactNumber = $_POST['contactNumber'];
  $address = $_POST['address'];
  $hiredDate = $_POST['hiredDate'];
  $startDate = $_POST['startDate'];
  $position = $_POST['position'];
  $department = $_POST['department'];
  $reportingTo = $_POST['reportingTo'];

  $sql = "INSERT INTO tbl_employees (employeeID, firstName, lastName, middleInitial, birthdate, gender, contactNumber, address, dateHired, dateStarted, position, department, reportingTo) VALUES ('$employeeID', '$firstName', '$lastName', '$middleInitial', '$birthDate', '$gender', '$contactNumber', '$address', '$hiredDate', '$startDate', '$position', '$department', '$reportingTo')";
  $res = mysqli_query($connection,$sql);
  if ($res) {
    echo 'Success';
  }else{
    echo 'Failed';

  }

  if (!mysqli_query($connection,$sql))
  {
      die('Error: ' . mysqli_error($con));
  }
  $_SESSION['addSuccess']="Employee Added Successfully!";

header('location: add_employee.php');


 ?>
