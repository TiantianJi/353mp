<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 2018-03-31
 * Time: 5:11 PM
 */
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$dbConnection = mysqli_connect('localhost', $username, $password, 'Main');
?>
<html>
<head>
    <title>add Employee</title>
</head>
<body>
<h3>ADD EMPLOYEE</h3>
<form id = "add_employee" name = "add_employee" method="post" action="insert_employee.php">
    SIN:<input type="number" name="employee_sin"/><br/>
    Name:<input type="text" name="employee_name"/><br/>
    Birthday<input type="date" name="employee_birthday"/><br/>
    Address<input type="text" name="employee_address"/></br>
    Gender
    <input type="checkbox" name="employee_gender"/>MALE</br>
    <input type="checkbox" name="employee_gender" checked/>FEMALE</br>
    Phone<input type="number" name="employee_phone"/></br>
    Salary<input type="number" name="employee_salary"/></br>
    <input type="submit" value="add"/>
</form>
</body>
</html>
