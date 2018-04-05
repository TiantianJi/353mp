<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .btn {
    background-color: grey;
    border: none;
    color: white;
    padding: 12px 16px;
    margin: 25px;
    font-size: 20px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: RoyalBlue;
}
    body {
    font-size: 20px;
    background-color: white;
    background-image: url("logo.jpg");
    background-repeat: no-repeat;
    background-position: right bottom; 
    background-size:40%;
   
}

h1 {
    text-align: center;
    color: black;
    }

h3{ font-family: verdana;
    font-size: 20px;
    margin-top: 10px;
    text-align: center;}

</style>
    <title>Information check</title>
</head>
<body>
    <form action="/354/main.php">
    <button type="submit" class="btn"><i class="fa fa-home"></i> Home</button>
    <h1 style="display: inline;">Company Management System<h1>
    </form>

<!-- <input type="button" value="Delete" onclick="location.href='http://localhost:63343/PHP/Delete.php'">
<input type="button" value="Insert" onclick="location.href='http://localhost:63343/PHP/Insert.php'"> -->

<h3>
<form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for = '1'>From</label>
    <select name='1' id = '1' onchange="setSelect2(document.getElementById('1'))">
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
    <label for="2">Select 1</label>
    <select name="2" id = '2'>
        <option> ---------- </option>
    </select>
    <label for="4">Select 2</label>
    <select name="4" id = '4'>
        <option> ---------- </option>
    </select>
    <label for="Where">Where: </label>
    <select name="3" id="3">
        <option> ---------- </option>
    </select>
    <input type="text", id="Where" name="where"/><br>
    <button type="submit" class="btn" value="Search" name="submit"><i class="fa fa-search"></i> Search</button>
</form>
</h3>

</form>

</body>
</html>

<script>
    function setSelect2(sel) {
        if ('assigned' === sel.options[sel.selectedIndex].value){
            setAssigned(document.getElementById('2'));
            setAssigned(document.getElementById('3'));
            setAssigned(document.getElementById('4'));
        }else if ('changedBy' === sel.options[sel.selectedIndex].value){
            setchargedBy(document.getElementById('2'));
            setchargedBy(document.getElementById('3'));
            setchargedBy(document.getElementById('4'));
        }else if ('Department' === sel.options[sel.selectedIndex].value){
            setDepartment(document.getElementById('2'));
            setDepartment(document.getElementById('3'));
            setDepartment(document.getElementById('4'));
        }else if ('Dependent' === sel.options[sel.selectedIndex].value){
            setDependent(document.getElementById('2'));
            setDependent(document.getElementById('3'));
            setDependent(document.getElementById('4'));
        }else if ('Employees' === sel.options[sel.selectedIndex].value){
            setEmployees(document.getElementById('2'));
            setEmployees(document.getElementById('3'));
            setEmployees(document.getElementById('4'));
        }else if ('Location' === sel.options[sel.selectedIndex].value){
            setLocation(document.getElementById('2'));
            setLocation(document.getElementById('3'));
            setLocation(document.getElementById('4'));
        }else if ('manage' === sel.options[sel.selectedIndex].value){
            setmanage(document.getElementById('2'));
            setmanage(document.getElementById('3'));
            setmanage(document.getElementById('4'));
        }else if ('Project' === sel.options[sel.selectedIndex].value){
            setProject(document.getElementById('2'));
            setProject(document.getElementById('3'));
            setProject(document.getElementById('4'));
        }else if ('related' === sel.options[sel.selectedIndex].value){
            setrelated(document.getElementById('2'));
            setrelated(document.getElementById('3'));
            setrelated(document.getElementById('4'));
        }else if ('situated' === sel.options[sel.selectedIndex].value){
            setsituated(document.getElementById('2'));
            setsituated(document.getElementById('3'));
            setsituated(document.getElementById('4'));
        }else if ('SuperviseOf' === sel.options[sel.selectedIndex].value){
            setSuerviseOf(document.getElementById('2'));
            setSuerviseOf(document.getElementById('3'));
            setSuerviseOf(document.getElementById('4'));
        }else if ('workIn' === sel.options[sel.selectedIndex].value){
            setworkIn(document.getElementById('2'));
            setworkIn(document.getElementById('3'));
            setworkIn(document.getElementById('4'));
        }else if ('workOn' === sel.options[sel.selectedIndex].value){
            setworkOn(document.getElementById('2'));
            setworkOn(document.getElementById('3'));
            setworkOn(document.getElementById('4'));
        }
    }

    function setAssigned(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Project ID', 'PID');
        jsAddItemToSelect(objSelect, 'Place', 'Place');
    }

    function setchargedBy(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Project ID', 'PID');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber');
    }

    function setDepartment(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber');
        jsAddItemToSelect(objSelect, 'Department Name', 'DepartmentName');
    }

    function setDependent(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'SIN', 'DependentSIN');
        jsAddItemToSelect(objSelect, 'Name', 'DependentName');
        jsAddItemToSelect(objSelect, 'BirthDate', 'DBirthDate');
        jsAddItemToSelect(objSelect, 'Gender', 'DGender');
    }

    function setEmployees(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'SIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'Name', 'EName');
        jsAddItemToSelect(objSelect, 'birthDate', 'EbirthDate');
        jsAddItemToSelect(objSelect, 'address', 'Eaddress');
        jsAddItemToSelect(objSelect, 'gender', 'Egender');
        jsAddItemToSelect(objSelect, 'phoneNumber', 'EphoneNumber');
        jsAddItemToSelect(objSelect, 'salary', 'Esalary');
    }

    function setLocation(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Place', 'Place');
    }

    function setmanage(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber')
        jsAddItemToSelect(objSelect, 'Employee SIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'StarDate', 'StarDate');
    }

    function setProject(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'Project Name', 'PName');
    }

    function setrelated(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Dependent SIN', 'DependentSIN');
        jsAddItemToSelect(objSelect, 'Employee SIN', 'ESIN');
    }

    function setsituated(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Place', 'Place');
        jsAddItemToSelect(objSelect, 'DepartmentNumber', 'DepartmentNumber');
    }

    function setSuerviseOf(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'EmployeeSIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'SupervisorSIN', 'SSIN');
    }

    function setworkIn(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Employee SIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber');
    }

    function setworkOn(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'ESIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'hours', 'hours');
    }

    function jsSelectIsExitItem(objSelect, objItemValue) {
        var isExit = false;
        for (var i = 0; i < objSelect.options.length; i++) {
            if (objSelect.options[i].value == objItemValue) {
                isExit = true;
                break;
            }
        }
        return isExit;
    }

    function jsAddItemToSelect(objSelect, objItemText, objItemValue) {
        //判断是否存在
        if (jsSelectIsExitItem(objSelect, objItemValue)) {
        } else {
            var varItem = new Option(objItemText, objItemValue);
            objSelect.options.add(varItem);
        }
    }

    function jsRemoveItemFromSelect(objSelect) {
        var length = objSelect.options.length - 1;
        for(var i = length; i >= 0; i--){
            objSelect.options[i] = null;
        }
    }

</script>
<?php
    $dbConnection = mysqli_connect('localhost', 'root', '????', 'Main'); //根据电脑环境,自由配置

    if (isset($_POST['submit']))
    {
        $from = $_POST['1'];
        $condition = $_POST['3'];
        $where = $_POST['where'];
        if (empty($where))
        {
            $query = "SELECT * From ".$from;
        } else {
            $query = "SELECT * From ".$from." Where ".$condition. $where;
        }

        $select1 = $_POST['2'];
        $select2 = $_POST['4'];


        $result = $dbConnection->query($query);
        if ($result->num_rows > 0) {
            if (!empty($select2))
            {
                echo "<br>";
                while($row = $result->fetch_assoc()) {
                    echo $condition.$where."\t|\t";
                    echo $select1 .': '. $row[$select1]."|".$select2 .': '. $row[$select2]."<br>";
                }
            }
            else{
                // 输出数据
                echo "<br>";
                while($row = $result->fetch_assoc()) {
                    echo $condition.$where."\t|\t";
                    echo $select1 .': '. $row[$select1]."<br>";
                }
            }
        } else {
            echo "empty.";
        }
    }

?>
