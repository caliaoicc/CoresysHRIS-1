<?php
  session_start();
include 'includes/connection.php';


//creating employeeid
$letters = '';
$numbers = '';
foreach (range('A', 'Z') as $char) {
    $letters .= $char;
}
for($i = 0; $i < 10; $i++){
  $numbers .= $i;
}
$employee_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);



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

  $sql = "INSERT INTO tbl_employees (employeeID, firstName, lastName, middleInitial, birthdate, gender, contactNumber, address, dateHired, dateStarted, position, department, reportingTo) VALUES ('$employee_id', '$firstName', '$lastName', '$middleInitial', '$birthDate', '$gender', '$contactNumber', '$address', '$hiredDate', '$startDate', '$position', '$department', '$reportingTo')";
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
  $_SESSION['addSuccess']="Employee Successfully Added!";

header ('location: add_employee.php');
exit;

 ?>
