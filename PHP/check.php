<html>
<head>
    <title>Information check</title>
</head>
<body>
<form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
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

    <select name="2" id = '2'>
        <option> ---------- </option>

    </select>
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
            setDepartment(document.getElementById('2'));
        }else if ('Employees' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('Location' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('manage' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('Project' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('related' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('situated' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('SuperviseOf' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('workIn' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }else if ('workOn' === sel.options[sel.selectedIndex].text){
            setDepartment(document.getElementById('2'));
        }
    }

    function setAssigned(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'place', 'place');
    }

    function setchangedBy(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'DNumber', 'DNumber');
    }

    function setchangedBy(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'DNumber', 'DNumber');
    }

    function setDepartment(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'DepartmentNumber', 'DepartmentNumber');
        jsAddItemToSelect(objSelect, 'DepartmentName', 'DepartmentName');
    }

    function setDependent(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'DependentSIN', 'DependentSIN');
        jsAddItemToSelect(objSelect, 'dependentName', 'dependentName');
        jsAddItemToSelect(objSelect, 'dBirthDate', 'dBirthDate');
        jsAddItemToSelect(objSelect, 'dGender', 'dGender');
    }

    function setEmployees(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
        jsAddItemToSelect(objSelect, 'Name', 'Name');
        jsAddItemToSelect(objSelect, 'birthDate', 'birthDate');
        jsAddItemToSelect(objSelect, 'address', 'address');
        jsAddItemToSelect(objSelect, 'gender', 'gender');
        jsAddItemToSelect(objSelect, 'phoneNumber', 'phoneNumber');
        jsAddItemToSelect(objSelect, 'salary', 'salary');
    }

    function setLocation(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'place', 'place');
    }

    function setmanage(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'DNumber', 'DNumber')
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
        jsAddItemToSelect(objSelect, 'StarDate', 'StarDate');
    }

    function setProject(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PIN', 'PIN');
        jsAddItemToSelect(objSelect, 'PName', 'PName');
    }

    function setrelated(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'DependentSIN', 'DependentSIN');
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
    }

    function setsituated(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'place', 'place');
        jsAddItemToSelect(objSelect, 'DepartmentNumber', 'DepartmentNumber');
    }

    function setEmployeeSIN(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'EmployeeSIN', 'EmployeeSIN');
        jsAddItemToSelect(objSelect, 'SupervisorSIN', 'SupervisorSIN');
    }

    function setworkIn(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'SIN', 'SIN');
        jsAddItemToSelect(objSelect, 'DNumber', 'DNumber');
    }

    function setworkOn(objSelect) {
        jsRemoveSelectedItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, 'PIN', 'PIN');
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

    function jsRemoveSelectedItemFromSelect(objSelect) {
        var length = objSelect.options.length - 1;
        for(var i = length; i >= 0; i--){
            if(objSelect[i].selected == true){
                objSelect.options[i] = null;
            }
        }
    }

</script>
<?php
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    $dbConnection = mysqli_connect('localhost', $username, $password, 'Main');

    if (isset($_POST['submit']))
    {
        $from = $_POST['1'];
        $query = "SELECT * From ".$from;
        $select = $_POST['2'];

        $result = $dbConnection->query($query);
        if ($result->num_rows > 0) {
            // 输出数据
            echo "<br>";
            while($row = $result->fetch_assoc()) {
                echo $select .': '. $row[$select]. "<br>";
            }
        } else {
            echo "0 结果";
        }
    }


