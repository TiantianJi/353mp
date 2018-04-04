<html>
<head>
    <title>Delete</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Delete </label>
    <label>From</label>
    <select name="From" id="From" onchange="setWhere(document.getElementById('From'))">
        <option value="none"> ---------- </option>
        <option value="assigned">assigned</option>
        <option value="changedBy">changedBy</option>
        <option value="Department">Department</option>
        <option value="Dependent">Dependent</option>
        <option value="Employees">Employees</option>
        <option value="Location">Location</option>
        <option value="manage">manage</option>
        <option value="Project">Project</option>
        <option value="related">related</option>
        <option value="situated">situated</option>
        <option value="SuperviseOf">SuperviseOf</option>
        <option value="workIn">workIn</option>
        <option value="workOn">workOn</option>
    </select>

    <label>Where</label>
    <select name="where" id='where'>
        <option value="none"> ---------- </option>
    </select>
    <input type="text", id="Condition" name="Condition"/>
    <input type="submit", value="Submit" name="submit"/>
</form>
</body>
</html>
<script>
    function setWhere(sel) {
        if ('assigned' === sel.options[sel.selectedIndex].text){
            setAssigned(document.getElementById('where'));
        }else if ('changedBy' === sel.options[sel.selectedIndex].text){
            setchangedBy(document.getElementById('where'));
        }else if ('Department' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('where'));
        }else if ('Dependent' === sel.options[sel.selectedIndex].text){
            setDependent(document.getElementById('where'));
        }else if ('Employees' === sel.options[sel.selectedIndex].text){
            setEmployees(document.getElementById('where'));
        }else if ('Location' === sel.options[sel.selectedIndex].text){
            setLocation(document.getElementById('where'));
        }else if ('manage' === sel.options[sel.selectedIndex].text){
            setmanage(document.getElementById('where'));
        }else if ('Project' === sel.options[sel.selectedIndex].text){
            setProject(document.getElementById('where'));
        }else if ('related' === sel.options[sel.selectedIndex].text){
            setrelated(document.getElementById('where'));
        }else if ('situated' === sel.options[sel.selectedIndex].text){
            setsituated(document.getElementById('where'));
        }else if ('SuperviseOf' === sel.options[sel.selectedIndex].text){
            setSuerviseOf(document.getElementById('where'));
        }else if ('workIn' === sel.options[sel.selectedIndex].text){
            setworkIn(document.getElementById('where'));
        }else if ('workOn' === sel.options[sel.selectedIndex].text){
            setworkOn(document.getElementById('where'));
        }
    }

    function setAssigned(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'Project ID', 'PID');
        jsAddItemToSelect(objSelect, 'Place', 'Place');
    }

    function setchangedBy(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'PID', 'PID');
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
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    $dbConnection = mysqli_connect('localhost', $username, $password, 'Main'); //根据电脑环境,自由配置

    if (isset($_POST['submit']))
    {
        $From = $_POST['From'];
        $Where = $_POST['where'];
        $Condition = $_POST['Condition'];
        $query = '';

        if (empty($Condition) or empty($Where))
        {
            $query = "DELETE FROM ".$From;
            $dbConnection->query($query);
        } else {
            $query = "DELETE FROM ".$From." WHERE ".$Where.$Condition;
            $result = $dbConnection->query($query);
            if (empty($result))
            {
                echo "Error,  a foreign key constraint fails.";
            }
        }
    }