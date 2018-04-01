<html>
<head>
    <title>Information check</title>
</head>
<body>
<form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for = '1'>From</label>
    <select name='1' id = '1' onchange="setSelect2(document.getElementById('1'))">
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

    <label for="2">Select</label>
    <select name="2" id = '2'>
        <option> ---------- </option>
    </select>

    <label for="Where">Condition: </label>
    <input type="text", id="Where" name="where"/>
    <input type="submit" value="Submit" name="submit"/>
</form>
</body>
</html>

<script>
    function setSelect2(sel) {
        if ('assigned' === sel.options[sel.selectedIndex].text){
            setAssigned(document.getElementById('2'));
        }else if ('changedBy' === sel.options[sel.selectedIndex].text){
            setchangedBy(document.getElementById('2'));
        }else if ('Department' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('Dependent' === sel.options[sel.selectedIndex].text){
            setDependent(document.getElementById('2'));
        }else if ('Employees' === sel.options[sel.selectedIndex].text){
            setEmployees(document.getElementById('2'));
        }else if ('Location' === sel.options[sel.selectedIndex].text){
            setLocation(document.getElementById('2'));
        }else if ('manage' === sel.options[sel.selectedIndex].text){
            setmanage(document.getElementById('2'));
        }else if ('Project' === sel.options[sel.selectedIndex].text){
            setProject(document.getElementById('2'));
        }else if ('related' === sel.options[sel.selectedIndex].text){
            setrelated(document.getElementById('2'));
        }else if ('situated' === sel.options[sel.selectedIndex].text){
            setsituated(document.getElementById('2'));
        }else if ('SuperviseOf' === sel.options[sel.selectedIndex].text){
            setSuerviseOf(document.getElementById('2'));
        }else if ('workIn' === sel.options[sel.selectedIndex].text){
            setworkIn(document.getElementById('2'));
        }else if ('workOn' === sel.options[sel.selectedIndex].text){
            setworkOn(document.getElementById('2'));
        }
    }

    function setAssigned(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'place', 'place');
    }

    function setchangedBy(objSelect) {
        alert(3);
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'DNumber', 'DNumber');
    }

    function setchangedBy(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'DNumber', 'DNumber');
    }

    function setDepartment(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'DepartmentNumber', 'DepartmentNumber');
        jsAddItemToSelect(objSelect, 'DepartmentName', 'DepartmentName');
    }

    function setDependent(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'DependentSIN', 'DependentSIN');
        jsAddItemToSelect(objSelect, 'dependentName', 'dependentName');
        jsAddItemToSelect(objSelect, 'dBirthDate', 'dBirthDate');
        jsAddItemToSelect(objSelect, 'dGender', 'dGender');
    }

    function setEmployees(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
        jsAddItemToSelect(objSelect, 'Name', 'Name');
        jsAddItemToSelect(objSelect, 'birthDate', 'birthDate');
        jsAddItemToSelect(objSelect, 'address', 'address');
        jsAddItemToSelect(objSelect, 'gender', 'gender');
        jsAddItemToSelect(objSelect, 'phoneNumber', 'phoneNumber');
        jsAddItemToSelect(objSelect, 'salary', 'salary');
    }

    function setLocation(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'place', 'place');
    }

    function setmanage(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'DNumber', 'DNumber')
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
        jsAddItemToSelect(objSelect, 'StarDate', 'StarDate');
    }

    function setProject(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PIN', 'PIN');
        jsAddItemToSelect(objSelect, 'PName', 'PName');
    }

    function setrelated(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'DependentSIN', 'DependentSIN');
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
    }

    function setsituated(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'place', 'place');
        jsAddItemToSelect(objSelect, 'DepartmentNumber', 'DepartmentNumber');
    }

    function setSuerviseOf(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'EmployeeSIN', 'EmployeeSIN');
        jsAddItemToSelect(objSelect, 'SupervisorSIN', 'SupervisorSIN');
    }

    function setworkIn(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
        jsAddItemToSelect(objSelect, 'DNumber', 'DNumber');
    }

    function setworkOn(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
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
        $from = $_POST['1'];
        $where = $_POST['where'];
        if (empty($where))
        {
            $query = "SELECT * From ".$from;
        } else {
            $query = "SELECT * From ".$from." Where ". $where;
        }

        $select = $_POST['2'];

        $result = $dbConnection->query($query);
        if ($result->num_rows > 0) {
            // 输出数据
            echo "<br>";
            while($row = $result->fetch_assoc()) {
                echo $select .': '. $row[$select]. "<br>";
            }
        } else {
            echo "empty.";
        }
    }


