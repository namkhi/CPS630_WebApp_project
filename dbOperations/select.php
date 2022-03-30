<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="public/favicon.ico" sizes="any">
  <link rel="stylesheet" href="../style.css">
  <title>Select</title>
  <style>
      table, th, tr,td {
        border: 1px solid gray;  
        border-collapse: collapse;
      
      }
</style>
</head>

<body>
    

<div>
    <a class="button" href="../index.php" style="background-color:yellow; font-weight: bold; border-radius:6px; border: solid 2px black">Back</a>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="selectform">
        <label for="table">Select from: </label>
            <select id="table" name="table">
                <option value="itemtb">Item Table</option>
                <option value="ordertb">Order Table</option>
                <option value="shoppingtb">Shopping Table</option>
                <option value="triptb">Trip Table</option>
                <option value="trucktb">Truck Table</option>
                <option value="usertb">User Table</option>
            </select>
        <input type="submit" name="selectSubmit" form="selectform" value="Submit">
    </form>
   
</div>

<?php 

include('../db_connection.php');
    if( isset($_POST["selectSubmit"])) {
    $table = $_POST["table"];
    // $sqlCol = "SELECT * FROM assignment_1.COLUMNS WHERE TABLE_NAME = $table";
    echo "<h2>Data records from <mark>{$table}</mark></h2>";
    $sqlCol = "SHOW COLUMNS FROM $table;";
    $result1 = mysqli_query($conn, $sqlCol); 
    
    echo "<br>";
    echo "<table style='border:solid 1px black;'>";

    while($row = $result1->fetch_assoc()){
        $columns[] = $row['Field'];
    }
    echo "<tr>";
    foreach($columns as $value){
        echo "<th> {$value} </th>";
        
    }
    echo "</tr>";
    

    $sql = "SELECT * FROM $table;";
    $result = mysqli_query($conn, $sql); 
   
    while ($row = mysqli_fetch_assoc($result)) { 
        echo "<tr>";
        foreach ($row as $field => $value) { 
            echo "<td>" . $value . "</td>"; 
        }
    echo "</tr>";
    }
    echo "</table>";
}

?>


</body>