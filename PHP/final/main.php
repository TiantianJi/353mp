<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 16px;
    margin: 20px;
    font-size: 20px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: RoyalBlue;
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
</style>
    
</head>
<body>
    <h1>Company Management System<h1><br/>
<form>
  <button type="submit" class="btn" formaction="https://syc353.encs.concordia.ca/check.php"><i class="fa fa-search"></i> Search</button>
  <button type="submit" class="btn" formaction="https://syc353.encs.concordia.ca/Update.php"><i class="fa fa-edit"></i> Modify</button>
  <button type="submit" class="btn" formaction="https://syc353.encs.concordia.ca/Insert.php"><i class="fa fa-user-plus"></i> Add</button>
  <button type="submit" class="btn" formaction="https://syc353.encs.concordia.ca/Delete.php"><i class="fa fa-trash"></i> Delete</button>
</form>

</body>
</html>
