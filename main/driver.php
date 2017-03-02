<?php



$newUser = new User();
$newUser->username = $_POST['username'];
$newUser->password = $_POST['password'];
$newUser->first_name = $_POST[''];
$newUser->last_name = $_POST[''];
$newUser->employeeCode = $_POST[''];
$newUser->employerCode = $_POST[''];


$newUser->create();

echo "done";

?>