<html>
<head>
    <title>Insert</title>
</head>
<body>
<input type="button" value="Check" onclick="location.href='http://localhost:63343/PHP/check.php'">
<input type="button" value="Delete" onclick="location.href='http://localhost:63343/PHP/Delete.php'">
<input type="button" value="Update" onclick="location.href='http://localhost:63343/PHP/Update.php'">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <select name='select' id = 'select' onchange="divChange(document.getElementById('select'))">
        <option value="none"> ---------- </option>
        <option value="Department">Department</option>
        <option value="Dependent">Dependent</option>
        <option value="Employees">Employees</option>
        <option value="Location">Location</option>
        <option value="Project">Project</option>
        <option value="assigned">Project assigned Location</option>
        <option value="chargedBy">Project chargedBy Department</option>
        <option value="manage">Employee manage Department</option>
        <option value="related">Dependent related Employee</option>
        <option value="situated">Department situated Location</option>
        <option value="SuperviseOf">Supervisor SuperviseOf Employee</option>
        <option value="workIn">Employee workIn Department</option>
        <option value="workOn">Employee workOn Project</option>
    </select>

    <div id="input">
    </div>

    <input type="submit" value="Submit" name="submit"/>
</form>
</body>
</html>

<script>
    function divChange(sel) {
        document.getElementById("input").innerHTML="";
        if ('assigned' === sel.options[sel.selectedIndex].value){
            addText('text','Project ID','PID');
            addText('text','Place','Place');
        }else if ('changedBy' === sel.options[sel.selectedIndex].value){
            addText('text','Project ID','PID');
            addText('text','Department Number','DepartmentNumber');
        }else if ('Department' === sel.options[sel.selectedIndex].value){
            addText('text','Department Number', 'DepartmentNumber');
            addText('text','Department Name', 'DepartmentName');
        }else if ('Dependent' === sel.options[sel.selectedIndex].value){
            addText('text','SIN', 'DependentSIN');
            addText('text','Name', 'DependentName');
            addText('text','BirthDate', 'DBirthDate');
            addText('text','Gender', 'DGender');
        }else if ('Employees' === sel.options[sel.selectedIndex].value){
            addText('text','SIN', 'ESIN');
            addText('text','Name', 'EName');
            addText('text','birthDate', 'EbirthDate');
            addText('text','address', 'Eaddress');
            addText('text','gender', 'Egender');
            addText('text','phoneNumber', 'EphoneNumber');
            addText('text','salary', 'Esalary');
        }else if ('Location' === sel.options[sel.selectedIndex].value){
            addText('text','Place', 'Place');
        }else if ('manage' === sel.options[sel.selectedIndex].value){
            addText('text','Department Number', 'DepartmentNumber');
            addText('text','Employee SIN', 'ESIN');
            addText('text','StarDate', 'StarDate');
        }else if ('Project' === sel.options[sel.selectedIndex].value){
            addText('text','PID', 'PID');
            addText('text','Project Name', 'PName');
        }else if ('related' === sel.options[sel.selectedIndex].value){
            addText('text','Dependent SIN', 'DependentSIN');
            addText('text','Employee SIN', 'ESIN');
        }else if ('situated' === sel.options[sel.selectedIndex].value){
            addText('text','Place', 'Place');
            addText('text','DepartmentNumber', 'DepartmentNumber');
        }else if ('SuperviseOf' === sel.options[sel.selectedIndex].value){
            addText('text','EmployeeSIN', 'ESIN');
            addText('text','SupervisorSIN', 'SSIN');
        }else if ('workIn' === sel.options[sel.selectedIndex].value){
            addText('text','Employee SIN', 'ESIN');
            addText('text','Department Number', 'DepartmentNumber');
        }else if ('workOn' === sel.options[sel.selectedIndex].value){
            addText('text','PID', 'PID');
            addText('text','ESIN', 'ESIN');
            addText('text','hours', 'hours');
        }
    }

    function addText(type, defaultName,name) {
        var TemO=document.getElementById("input");
        var newInput = document.createElement("input");
        newInput.type=type;
        newInput.name=name;
        newInput.placeholder=defaultName;
        TemO.appendChild(newInput);
    }
</script>
<?php
    $dbConnection = mysqli_connect('localhost', 'root', '????', 'Main'); //根据电脑环境,自由配置

    if (isset($_POST['submit']))
    {
        try{
            $from = $_POST['select'];
            if ('assigned' === $from){
                $PID = $_POST['PID'];
                $Place = $_POST['Place'];
                if (empty($PID)||empty($Place))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$PID.",".$Place.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('changedBy' === $from){
                $PID = $_POST['PID'];
                $Departmentnumber = $_POST['DepartmentNumber'];
                if (empty($PID)||empty($Departmentnumber))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$PID.",".$Departmentnumber.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('Department' === $from){
                $Departmentnumber = $_POST['DepartmentNumber'];
                $DepartmentName = $_POST['DepartmentName'];
                if (empty($Departmentnumber)||empty($DepartmentName))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$Departmentnumber.",".$DepartmentName.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('Dependent' === $from){
                $DependentSIN = $_POST['DependentSIN'];
                $DependentName = $_POST['DependentName'];
                $DBirthDate = $_POST['DBirthDate'];
                $DGender = $_POST['DGender'];
                if (empty($DependentSIN)||empty($DependentName)||empty($DBirthDate)||empty($DGender))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$DependentSIN.",".$DependentName.","."$DBirthDate".","."$DGender".")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('Employees' === $from){
                $ESIN = $_POST['ESIN'];
                $EName= $_POST['EName'];
                $EbirthDate= $_POST['EbirthDate'];
                $Eaddress= $_POST['Eaddress'];
                $Egender= $_POST['Egender'];
                $EphoneNumber= $_POST['EphoneNumber'];
                $Esalary= $_POST['Esalary'];
                if (empty($ESIN)||empty($EName)||empty($EbirthDate)||empty($Eaddress)||empty($Egender)||empty($EphoneNumber)||empty($Esalary))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$ESIN.",".$EName.","."$EbirthDate".","."$Eaddress".","."$Egender".","."$EphoneNumber".","."$Esalary".")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('Location' === $from){
                $Place = $_POST['Place'];
                if (empty($Place))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$Place.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('manage' === $from){
                $DepartmentNumber = $_POST['DepartmentNumber'];
                $ESIN= $_POST['ESIN'];
                $StarDate= $_POST['StarDate'];
                if (empty($DepartmentNumber)||empty($ESIN)||empty($StarDate))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$DepartmentNumber.",".$ESIN.","."$StarDate".")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('Project' === $from){
                $PID = $_POST['PID'];
                $PName= $_POST['PName'];
                if (empty($PID)||empty($PName))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$PID.",".$PName.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('related' === $from){
                $DependentSIN= $_POST['DependentSIN'];
                $ESIN= $_POST['ESIN'];
                if (empty($DependentSIN)||empty($ESIN))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$DependentSIN.",".$ESIN.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('situated' === $from){
                $Place = $_POST['Place'];
                $Departmentnumber = $_POST['DepartmentNumber'];
                if (empty($Place)||empty($Departmentnumber))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$Place.",".$Departmentnumber.");";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('SuperviseOf' === $from){
                $ESIN= $_POST['ESIN'];
                $SSIN= $_POST['SSIN'];
                if (empty($ESIN)||empty($SSIN))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$ESIN.",".$SSIN.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('workIn' === $from){
                $ESIN= $_POST['ESIN'];
                $DepartmentNumber = $_POST['DepartmentNumber'];
                if (empty($ESIN)||empty($DepartmentNumber))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$ESIN.",".$DepartmentNumber.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }else if ('workOn' === $from){
                $PID = $_POST['PID'];
                $ESIN= $_POST['ESIN'];
                $hours= $_POST['hours'];
                if (empty($Place)||empty($Departmentnumber)||empty($hours))
                {
                    throw new mysqli_sql_exception("Please fill all the information.");
                } else {
                    $query = "INSERT INTO ".$from." VALUE(".$Place.",".$Departmentnumber.",".$hours.")";
                    $result = $dbConnection->query($query);
                    if (empty($result))
                    {
                        throw new mysqli_sql_exception("Error, Cannot insert.");
                    } else {
                        echo "Insert succeed.";
                    }
                }
            }
        }
        catch (mysqli_sql_exception $e)
        {
            echo $e->getMessage();
        }

    }
?>
