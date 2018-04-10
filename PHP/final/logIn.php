<html>
<head>
    <style>
    .button {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
body {
    font-size: 20px;
    text-align: center;
    background-color: white;
    background: url(login.jpg) fixed;
}

h1 {
    margin-top: 100px;
    text-align: center;
    color: black;
    }

h3{ color: black;
    text-align: center;
    font-family: verdana;}

p {
    font-family: verdana;
    font-size: 20px;
    text-align: center;
}



</style>
    <title>Login page</title>
</head>
<body>

    <h1>Company Management System<h1><br/>
    
    <h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!--user need to key in the username and password of database.-->
    <label for = "username">UserName:</label>
    <input type="text", id="username" name="username"/><br/><br>
    <label for = "Password">Password :</label>
    <input type="password", id="Password" name="Password"><br/><br>
    <input type="submit" class="button" value="log in" name="Submit" />
    
</form>
</h3>
</body>

</html>
<?php
    if (isset($_POST['Submit'])) // if user press the submit button isset will return true.
    {
        LogIn(); //run LogIn function.
    }

    function LogIn() //check whether the username and password is empty. If yes, throw exception.
    {
        try{
            if (empty($_POST['username']))
            {
                throw new mysqli_sql_exception("UserName is empty.");
            } elseif (empty($_POST['Password']))
            {
                throw new mysqli_sql_exception("Password is empty.");
            }else{
                LogInDB(); // If user name and password is not empty, run LogInDB().
            }
        } catch (mysqli_sql_exception $x)
        {
            echo $x->getMessage();
        }
    }

    function LogInDB() // this function will check the validation of username and password, if invalid, throw exception.
    {
        define('DB_HOST', 'syc353.encs.concordia.ca');//根据电脑环境,自由配置
        define('DB_USER', $_POST['username']);
        define('DB_PASS', $_POST['Password']);
        define('DB_NAME', '``');//根据电脑环境,自由配置
        try{
            $dbConnection = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$dbConnection) {
                throw new mysqli_sql_exception;
            }else{
                echo "<script>window.location.href='https://syc353.encs.concordia.ca/main.php';</script>";
            }
        }catch (mysqli_sql_exception $e)
        {
            die("UserName or Password wrong.");
        }

    }
?>
