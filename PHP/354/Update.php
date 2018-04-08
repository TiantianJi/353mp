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
    <title>Update</title>
</head>
<body>
    <form action="/354/main.php">
    <button type="submit" class="btn"><i class="fa fa-home"></i> Home</button>
    <h1 style="display: inline;">Company Management System<h1>
    </form>
<h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Updata</label>
    <select name="From" id="From" onchange="setDW(document.getElementById('From'))">
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

    <label>New Data</label>
    <select name="NAtt" id="NAtt">
        <option> ---------- </option>
    </select>
    <input type="text" id="NCon" name="NCon" placeholder="Condition(e.g.=1)"/>
    <label>Where</label>
    <select name="where" id="where">
        <option> ---------- </option>
    </select>
    <input type="text" id="Con" name="Con" placeholder="Condition(e.g.=1)"><br>
    <button type="submit" class="btn" name="submit"><i class="fa fa-edit"></i> Update</button>
</form>
</h3>
</body>
</html>
<script>
    function setDW(sel) {
        if ('assigned' === sel.options[sel.selectedIndex].value){
            setAssigned(document.getElementById('NAtt'));
            setAssigned(document.getElementById('where'));
        }else if ('changedBy' === sel.options[sel.selectedIndex].value){
            setchargedBy(document.getElementById('NAtt'));
            setchargedBy(document.getElementById('where'));
        }else if ('Department' === sel.options[sel.selectedIndex].value){
            setDepartment(document.getElementById('NAtt'));
            setDepartmentWhere(document.getElementById('where'));
        }else if ('Dependent' === sel.options[sel.selectedIndex].value){
            setDependent(document.getElementById('NAtt'));
            setDependentWhere(document.getElementById('where'));
        }else if ('Employees' === sel.options[sel.selectedIndex].value){
            setEmployees(document.getElementById('NAtt'));
            setEmployeesWhere(document.getElementById('where'));
        }else if ('manage' === sel.options[sel.selectedIndex].value){
            setmanage(document.getElementById('NAtt'));
            setmanage(document.getElementById('where'));
        }else if ('Project' === sel.options[sel.selectedIndex].value){
            setProject(document.getElementById('NAtt'));
            setProjectWhere(document.getElementById('where'));
        }else if ('related' === sel.options[sel.selectedIndex].value){
            setrelated(document.getElementById('NAtt'));
            setrelated(document.getElementById('where'));
        }else if ('situated' === sel.options[sel.selectedIndex].value){
            setsituated(document.getElementById('NAtt'));
            setsituated(document.getElementById('where'));
        }else if ('SuperviseOf' === sel.options[sel.selectedIndex].value){
            setSuerviseOf(document.getElementById('NAtt'));
            setSuerviseOf(document.getElementById('where'));
        }else if ('workIn' === sel.options[sel.selectedIndex].value){
            setworkIn(document.getElementById('NAtt'));
            setworkIn(document.getElementById('where'));
        }else if ('workOn' === sel.options[sel.selectedIndex].value){
            setworkOn(document.getElementById('NAtt'));
            setworkOn(document.getElementById('where'));
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
        jsAddItemToSelect(objSelect, 'Department Name', 'DepartmentName');
    }

    function setDepartmentWhere(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber');
        jsAddItemToSelect(objSelect, 'Department Name', 'DepartmentName');
    }

    function setDependent(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Name', 'DependentName');
        jsAddItemToSelect(objSelect, 'BirthDate', 'DBirthDate');
        jsAddItemToSelect(objSelect, 'Gender', 'DGender');
    }

    function setDependentWhere(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect,'Dependent SIN', 'DependentSIN');
        jsAddItemToSelect(objSelect,'Employees SIN','ESIN')
        jsAddItemToSelect(objSelect, 'Name', 'DependentName');
        jsAddItemToSelect(objSelect, 'BirthDate', 'DBirthDate');
        jsAddItemToSelect(objSelect, 'Gender', 'DGender');
    }

    function setEmployees(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Name', 'EName');
        jsAddItemToSelect(objSelect, 'birthDate', 'EbirthDate');
        jsAddItemToSelect(objSelect, 'address', 'Eaddress');
        jsAddItemToSelect(objSelect, 'gender', 'Egender');
        jsAddItemToSelect(objSelect, 'phoneNumber', 'EphoneNumber');
        jsAddItemToSelect(objSelect, 'salary', 'Esalary');
    }

    function setEmployeesWhere(objSelect) {
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
        jsAddItemToSelect(objSelect, 'Project Name', 'PName');
    }

    function setProjectWhere(objSelect) {
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
        $From = $_POST['From'];
        $NAtt = $_POST['NAtt'];
        $NCon = $_POST['NCon'];
        $where = $_POST['where'];
        $Con = $_POST['Con'];
        try{
            if (empty($NAtt)||empty($NCon)||empty($where)||empty($Con))
            {
                throw new mysqli_sql_exception("Please fill all the information.");
            } else {
                $query = "UPDATE ". $From." SET ".$NAtt.$NCon." WHERE ".$where.$Con.";";
                $result = $dbConnection->query($query);
                if (!empty($result))
                {
                    echo "Update success.";
                }
                else
                    throw new mysqli_sql_exception("Update fail.");
            }
        }
        catch (mysqli_sql_exception $e)
        {
            echo $e->getMessage();
        }
    }
?>