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

table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
     }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

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
    <button type="submit" class="btn" name="query1" value="query1"><i class="fa fa-search"></i>all employee with highest to lowest salary</button>
    <button type="submit" class="btn" name="query2" value="query2"><i class="fa fa-search"></i>all employee working on more than 1 project or zero project</button>
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
        }else if ('chargedBy' === sel.options[sel.selectedIndex].value){
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
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'Project ID', 'PID');
        jsAddItemToSelect(objSelect, 'Place', 'Place');
    }

    function setchargedBy(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'Project ID', 'PID');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber');
    }

    function setDepartment(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber');
        jsAddItemToSelect(objSelect, 'Department Name', 'DepartmentName');
    }

    function setDependent(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'SIN', 'DependentSIN');
        jsAddItemToSelect(objSelect, 'Employees SIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'Name', 'DependentName');
        jsAddItemToSelect(objSelect, 'BirthDate', 'DBirthDate');
        jsAddItemToSelect(objSelect, 'Gender', 'DdGender');
    }

    function setEmployees(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
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
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'Place', 'Place');
    }

    function setmanage(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber')
        jsAddItemToSelect(objSelect, 'Employee SIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'StartDate', 'StartDate');
    }

    function setProject(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'Project Name', 'PName');
        jsAddItemToSelect(objSelect, 'Stage', 'Stage');
    }

    function setrelated(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'Dependent SIN', 'DependentSIN');
        jsAddItemToSelect(objSelect, 'Employee SIN', 'ESIN');
    }

    function setsituated(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'Place', 'Place');
        jsAddItemToSelect(objSelect, 'DepartmentNumber', 'DepartmentNumber');
    }

    function setSuerviseOf(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'EmployeeSIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'SupervisorSIN', 'SSIN');
    }

    function setworkIn(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'Employee SIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'Department Number', 'DepartmentNumber');
    }

    function setworkOn(objSelect) {
        jsRemoveItemFromSelect(objSelect);
        jsAddItemToSelect(objSelect, '', '');
        jsAddItemToSelect(objSelect, 'ALL', '*');
        jsAddItemToSelect(objSelect, 'PID', 'PID');
        jsAddItemToSelect(objSelect, 'ESIN', 'ESIN');
        jsAddItemToSelect(objSelect, 'Hours', 'Hours');
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

    if (isset($_POST['query1']))
    {
        $query = "SELECT Ename, Esalary FROM Employees ORDER BY Esalary DESC";
        $result = $dbConnection->query($query);
        echo "<br>";
        echo "<table>";
        echo "<tr>"."<th>Name</th>"."<th>Salary</th>"."</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th>".$row["Ename"]."</th>"."<th>".$row["Esalary"]."</th>";
            echo "</tr>";
        }
    }

    if (isset($_POST['query2']))
    {
        $query = "SELECT Ename FROM Employees WHERE ESIN NOT IN(SELECT ESIN FROM workOn) OR ESIN = (SELECT ESIN FROM workOn GROUP BY ESIN HAVING COUNT(*) > 1);";
        $result = $dbConnection->query($query);
        echo "<br>";
        echo "<table>";
        echo "<tr>"."<th>Name</th>"."</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th>".$row["Ename"]."</th>"."</th>";
            echo "</tr>";
        }
    }

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
        try{
            if ($result->num_rows > 0) {
                if ($select1==='*')
                {
                    if ($from === "Department"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Department Number</th>"."<th>Department Name</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["DepartmentNumber"]."</th>"."<th>".$row["DepartmentName"]."</th>";
                            echo "</tr>";
                        }
                    }else if ($from === "Dependent"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>SIN</th>"."<th>ESIN</th>"."<th>Name</th>"."<th>BirthDate</th>"."<th>Gender</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["DependentSIN"]."</th>"."<th>".$row["ESIN"]."</th>"."<th>".$row["DependentName"]."<th>".$row["DBirthDate"]."</th>"."<th>".$row["DdGender"]."</th>"."</th>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }else if ($from === "Employees"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>SIN</th>"."<th>Name</th>"."<th>birthDate</th>"."<th>address</th>"."<th>Gender</th>"."<th>phoneNumber</th>"."<th>salary</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["ESIN"]."</th>"."<th>".$row["EName"]."</th>"."<th>".$row["EbirthDate"]."<th>".$row["Eaddress"]."</th>"."<th>".$row["Egender"]."</th>"."<th>".$row["EphoneNumber"]."</th>"."<th>".$row["Esalary"]."</th>"."</th>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }else if ($from === "Location"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Place</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["Place"]."</th>"."</th>";
                            echo "</tr>";
                        }
                    }else if ($from === "Project"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>PID</th>"."<th>Project Name</th>"."<th>Stage</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["PID"]."</th>"."<th>".$row["PName"]."</th>"."<th>".$row["Stage"]."</th>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }else if ($from === "assigned"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Project ID</th>"."<th>Place</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["PID"]."</th>"."<th>".$row["Place"]."</th>";
                            echo "</tr>";
                        }
                    }else if ($from === "chargedBy"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Project ID</th>"."<th>Department Number</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["PID"]."</th>"."<th>".$row["DepartmentNumber"]."</th>";
                            echo "</tr>";
                        }
                    }else if ($from === "manage"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Department Number</th>"."<th>Employee SIN</th>"."<th>StartDate</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["DepartmentNumber"]."</th>"."<th>".$row["ESIN"]."</th>"."<th>".$row["StartDate"]."</th>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }else if ($from === "related"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Dependent SIN</th>"."<th>Employee SIN</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["DependentSIN"]."</th>"."<th>".$row["ESIN"]."</th>";
                            echo "</tr>";
                        }
                    }else if ($from === "situated"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Place</th>"."<th>Department Number</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["Place"]."</th>"."<th>".$row["DepartmentNumber"]."</th>";
                            echo "</tr>";
                        }
                    }else if ($from === "SuperviseOf"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Employee SIN</th>"."<th>Supervisor SIN</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["ESIN"]."</th>"."<th>".$row["SSIN"]."</th>";
                            echo "</tr>";
                        }
                    } else if ($from === "workIn"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>Employee SIN</th>"."<th>Department Number</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["ESIN"]."</th>"."<th>".$row["DepartmentNumber"]."</th>";
                            echo "</tr>";
                        }
                    } else if ($from === "workOn"){
                        echo "<br>";
                        echo "<table>";
                        echo "<tr>"."<th>PID</th>"."<th>Employee SIN</th>"."<th>Hours</th>"."</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$row["PID"]."</th>"."<th>".$row["ESIN"]."</th>"."<th>".$row["Hours"]."</th>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }

                else if (!empty($select2)) {
                    echo "<br>";
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th>".$condition.$where."</th>";
                        echo "<th>".$select1 .': '. $row[$select1]."</th>"."<th>".$select2 .': '. $row[$select2]."</th>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    // 输出数据
                    echo "<br>";
                    echo "<table>";

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th>".$condition.$where."</th>";
                        echo "<th>".$select1 .': '. $row[$select1]."</th>";
                        echo "</tr>";
                    }

                    echo "</table>";
                }
            } else {
                throw new mysqli_sql_exception('empty');
            }

        }
        catch (mysqli_sql_exception $e)
        {
            echo $e->getMessage();
        }

    }

?>
