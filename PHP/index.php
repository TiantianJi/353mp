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
    define('DB_HOST', '');
    define('DB_USER', '');
    define('DB_PASS', '');
    define('DB_NAME', '');

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
    //get the answer
<?php
    $query = "SELECT problem_title FROM table_name";
    // here we save mysqli_query in result
<<<<<<< HEAD
    $result = $dbConnection1->query($query);
    if ($result->num_rows > 0) {
    // 输出数据
        echo "<br>";
    while($row = $result->fetch_assoc()) {
        echo "t_user: " . $row["t_user"]. "<br>";
    }
    } else {
        echo "0 结果";
=======
    $result = mysqli_query($dbConnection, $query);
    $row = mysqli_fetch_array($result);
    // show the result in web page
    while($row){
        $problem_titile = $row['problem_title'];
        echo "<tr>";
        echo "<td>".$problem_titile."</td>";
        echo "</tr>";
>>>>>>> parent of f363a6c... PHP
    }
?>
</body>
</html>
