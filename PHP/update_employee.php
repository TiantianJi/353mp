<?php
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$dbConnection = mysqli_connect('localhost', $username, $password, 'Main');

$employee_sin = $_GET['employee_sin'];
$employee_name = $_POST['employee_name'];
$employee_birthday = $_POST['employee_birthday'];
$employee_address = $_POST['employee_address'];
$employee_gender = $_POST['employee_gender'];
$employee_phone = $_POST['employee_phone'];
$employee_salary = $_POST['employee_salary'];
$query = "UPDATE employee SET employee_name'".$employee_name."', employee_birthday = '".$employee_birthday."',
    employee_address = '".$employee_address."', employee_gender = '".$employee_gender."', employee_phone = 
    '".$employee_phone."', employee_salary = '".$employee_salary."' WHERE employee_sin=";
$query = $query.$employee_id;
if (mysqli_query($query, $dbConnection))
    echo "EMPLOYEE MODIFIED SUCCESSFULLY!<br>";
else
    echo "EMPLOYEE MODIFIED FAILED!<br>"
?>
