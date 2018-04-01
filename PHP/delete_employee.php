<?php// this page should be in the result page of checking, which means after manager checked the user it could remove the employee
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 2018-04-01
 * Time: 11:58 AM
 */
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$dbConnection = mysqli_connect('localhost', $username, $password, 'Main');
?>
<html>
<head>
    <title>
        DELETE EMPLOYEE
    </title>
</head>
<body>
<?php
$employee_id=$_GET['employee_id'];
$query = "DELETE FROM employee WHERE SIN = employee_id";
if (mysqli_query($query, $dbConnection))
    echo "EMPLOYEE REMOVE SUCCESSFUL!<br>";
else
    echo "EMPLOYEE REMOVE FAILED!<br>"
?>
</body>
</html>
