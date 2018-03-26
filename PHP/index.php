<html>
<head>
    <title>PHP测试</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!--the echo of PHP can let the code become text
    // like System.out.println() in Java. the attribute action is telling which xxx.php dealing with this page. PHP_SELF
    // means I let it to be solved in this file
    // now let us to design this table-->
    <label for="username">UserName:</label> <!--lable is a tag fot input. It would not show anything to user but when user
    // click the content in lable, it will be actived. Attribute for can combine tag lable to an element(id)-->
    <input type="text", id="username" name="username"/><br/>
    <label for="info">Information:</label>
    <input type="text" id="info" name="info"/><br/>
    <input type="submit" value="Submit" name="submit"/>
    <label for="">

</form>
<?php
    //login
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '????');
    define('DB_NAME', 'Main');

    $dbConnection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (isset($_POST['submit'])) {//when user click submit, the form will be saved in $_POST. isset means only user click
        // the button 'Submit', then the inner code can be executed
        $user = $_POST['username'];
        $info = $_POST['info'];
        //$query = "INSERT INTO TABLE_NAME (t_user, t_info) VALUES ('$user', '$info')";
        //$query = "CREATE TABLE USERINFO(t_user VARCHAR, t_info VARCHAR)";
        $query = "INSERT INTO USERINFO(t_user, t_info) VALUES ('$user', '$info')";
        mysqli_query($dbConnection, $query);
        echo "<p>Submit successfully</p>";
    }

    mysqli_close($dbConnection);

?>
<?php
    //login
    define('DB_HOST1', 'localhost');
    define('DB_USER1', 'root');
    define('DB_PASS1', '????');
    define('DB_NAME1', 'Main');

    $dbConnection1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASS1, DB_NAME1);
    $query = "SELECT * FROM USERINFO";
    // here we save mysqli_query in result
    $result = mysqli_query($dbConnection1, $query);
    $row = mysqli_fetch_array($result);
    // show the result in web page
    $t_user = $row['t_user'];
    echo sizeof($row['t_user']);
    for ($i = 0; $i <sizeof($t_user);$i++)
    {
        echo "<tr>";
        echo "<td>".$t_user."</td>";
        echo "</tr>";
    }

    mysqli_close($dbConnection1);
?>
</body>
</html>
