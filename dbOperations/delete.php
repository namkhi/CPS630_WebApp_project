<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="public/favicon.ico" sizes="any">
  <link rel="stylesheet" href="../style.css">
  <title>Delete</title>
</head>

<body>
    

<div>
    <a class="button" href="../index.php" style="background-color:yellow; font-weight: bold; border-radius:6px; border: solid 2px black">Back</a>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="deleteform">
        <label for="table">Delete from: </label>
            <select id="table" name="table">
                <option value="itemtb">Item Table</option>
                <option value="ordertb">Order Table</option>
                <option value="shoppingtb">Shopping Table</option>
                <option value="triptb">Trip Table</option>
                <option value="trucktb">Truck Table</option>
                <option value="usertb">User Table</option>
            </select>
        <label for="key">Primary Key: </label>
        <input type="text" name="key">
        <input type="submit" name="deleteSubmit" form="deleteform" value="Submit">
    </form>
   
</div>

<?php 

include('./db_connection.php');
    if( isset($_POST["deleteSubmit"])) {
    $table = $_POST["table"];
    $key = $_POST["key"];
    $primary;
    switch($table) {
        case 'itemtb':
            $primary = 'item_id';
            break;
        case 'ordertb':
            $primary = 'order_id';
            break;
        case 'shoppingtb':
            $primary = 'receipt_id';
            break;
        case 'triptb':
            $primary = 'trip_id';
            break;
        case 'trucktb':
            $primary = 'truck_id';
            break;
        case 'usertb':
            $primary = 'user_id';
            break;
        }

    $sql = "DELETE FROM $table WHERE $primary = $key;";
    if ($conn->query($sql) === TRUE) {
        echo "Record Delete Successful from table: $table at key: $key";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>


</body>