<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="public/favicon.ico" sizes="any">
  <link rel="stylesheet" href="../style.css">
  <title>Update</title>
</head>

<body>
    

<div>
    <a class="button" href="../index.php" style="background-color:yellow; font-weight: bold; border-radius:6px; border: solid 2px black">Back</a>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="orderform">
        <h3>Update table</h3>
        <p>Please write the 'WHERE' condition for selection in the condition textfield in each form. For example, "order_id = 1"</p>
        <label for="order_id">Order Id</label>
        <input type="text" name="order_id">
        
        <label for="date_issued">Date Issued</label>
        <input type="text" name="date_issued">
        <label for="date_received">Date Received</label>
        <input type="text" name="date_received">
        <label for="total_price">Total Price</label>
        <input type="text" name="total_price">
        <br>
        <label for="user_id">User id</label>
        <input type="text" name="user_id">
        <label for="trip_id">Trip id</label>
        <input type="text" name="trip_id">
        <label for="receipt_id">Receipt id</label>
        <input type="text" name="receipt_id">
        <br>
        <label for="condition">Condition</label>
        <input type="text" name="condition">
        <br>
        <input type="submit" name="orderSubmit" form="orderform" value="Submit">

    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="shoppingform">
        <h3>Shopping Table</h3>
        <label for="receipt_id">Receipt Id</label>
        <input type="text" name="receipt_id">
        <label for="store_code">Store Code</label>
        <input type="text" name="store_code">
        <label for="total_price">Total Price</label>
        <input type="text" name="total_price">
        <br>
        <label for="condition">Condition</label>
        <input type="text" name="condition">
        <br>
        <input type="submit" name="shopSubmit" form="shoppingform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="truckform">
        <h3>Truck Table</h3>
        <label for="truck_id">Truck Id</label>
        <input type="text" name="truck_id">
        <label for="availability_code">Availability Code</label>
        <input type="text" name="availability_code">
        <label for="truck_code">Truck Code</label>
        <input type="text" name="truck_code">
        <br>
        <label for="condition">Condition</label>
        <input type="text" name="condition">
        <br>
        <input type="submit" name="truckSubmit" form="truckform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="tripform">
        <h3>Trip Table</h3>
        <label for="trip_id">Trip Id</label>
        <input type="text" name="trip_id">
        <label for="destination_code">Destination Code</label>
        <input type="text" name="destination_code">
        <label for="distance">Distance</label>
        <input type="text" name="distance">
        <label for="price">Price</label>
        <input type="text" name="price">
        <br>
        <label for="source_code">Source Code</label>
        <input type="text" name="source_code">
        <label for="truck_id">Truck Id</label>
        <input type="text" name="truck_id">
        <br>
        <label for="condition">Condition</label>
        <input type="text" name="condition">
        <br>
        <input type="submit" name="tripSubmit" form="tripform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="itemform">
        <h3>Item Table</h3> 
        <label for="item_id">Item Id</label>
        <input type="text" name="item_id">
        <label for="department_code">Department Code</label>
        <input type="text" name="department_code">
        <label for="description">Description</label>
        <input type="text" name="description">
        <label for="item_image">Item Image</label>
        <input type="text" name="item_image">
        <br>
        <label for="item_name">Item Name</label>
        <input type="text" name="item_name">
        <label for="made_in">Made in</label>
        <input type="text" name="made_in">
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
        <br>
        <label for="condition">Condition</label>
        <input type="text" name="condition">
        <br>
        <input type="submit" name="itemSubmit" form="itemform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="userform">
        <br>
        <h3>User Table</h3>
        <label for="user_id">User Id</label>
        <input type="text" name="user_id">
        <label for="address">Address</label>
        <input type="text" name="address">
        <label for="balance">Balance</label>
        <input type="text" name="balance">
        <label for="citycode">City Code</label>
        <input type="text" name="citycode">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="pw">Password</label>
        <input type="text" name="pw">
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone">
        <br>
        <label for="condition">Condition</label>
        <input type="text" name="condition">
        <br>
        <!-- <input type="submit"> -->
        <input type="submit" name="userSubmit" form="userform" value="Submit">
    </form>
  
</div>


<?php 

include('./db_connection.php');
    if( isset($_POST["orderSubmit"])) {
    $order_id = $_POST["order_id"];
    $date_issued = $_POST["date_issued"];
    $date_received = $_POST["date_received"];
    $total_price = $_POST["total_price"];
    $user_id = $_POST["user_id"];
    $trip_id= $_POST["trip_id"];
    $receipt_id= $_POST["receipt_id"];
    $condition = $_POST["condition"];
    $sql = "UPDATE `ordertb` SET `order_id` = '$order_id' , `date_issued` = '$date_issued', `date_received` = '$date_received', `total_price` = '$total_price', `user_id` = '$user_id', `trip_id` = '$trip_id', `receipt_id` = '$receipt_id' WHERE $condition;";
    if ($conn->query($sql) === TRUE) {
        echo "Order Update Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

   if( isset($_POST["shopSubmit"])){
    $receipt_id = $_POST["receipt_id"];
    $store_code = $_POST["store_code"];
    $total_price = $_POST["total_price"];
    $condition = $_POST["condition"];
    $sql = "UPDATE `shoppingtb` SET `receipt_id` = '$receipt_id' , `store_code` = '$store_code', `total_price` = '$total_price', `total_price` = '$total_price' WHERE $condition;";
    if ($conn->query($sql) === TRUE) {
        echo "Shopping Update Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if( isset($_POST["truckSubmit"])){
    $truck_id = $_POST["truck_id"];
    $availability_code = $_POST["availability_code"];
    $truck_code = $_POST["truck_code"];
    $condition = $_POST["condition"];
    $sql = "UPDATE `trucktb` SET `truck_id` = '$truck_id' , `availability_code` = '$availability_code', `truck_code` = '$truck_code' WHERE $condition;";
    if ($conn->query($sql) === TRUE) {
        echo "Truck Update Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if( isset($_POST["tripSubmit"])){
    $trip_id = $_POST["trip_id"];
    $destination_code = $_POST["destination_code"];
    $distance = $_POST["distance"];
    $price= $_POST["price"];
    $source_code = $_POST["source_code"];
    $truck_id = $_POST["truck_id"];
    $condition = $_POST["condition"];
    $sql = "UPDATE `triptb` SET `trip_id` = '$trip_id' , `destination_code` = '$destination_code', `distance` = '$distance', `price` = '$price', `source_code` = '$source_code', `truck_id` = '$truck_id' WHERE $condition;";
    if ($conn->query($sql) === TRUE) {
        echo "Trip Update Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if( isset($_POST["itemSubmit"])) {
    $item_id = $_POST["item_id"];
    $department_code = $_POST["department_code"];
    $description = $_POST["description"];
    $item_image = $_POST["item_image"];
    $item_name = $_POST["item_name"];
    $made_in= $_POST["made_in"];
    $price= $_POST["price"];
    $condition = $_POST["condition"];
    $sql = "UPDATE `itemtb` SET `item_id` = '$item_id' , `department_code` = '$department_code', `description` = '$description', `item_image` = '$item_image', `item_name` = '$item_name', `made_in` = '$made_in', `price` = '$price' WHERE $condition;";
    // $sql = "INSERT INTO `itemtb` (`department_code`, `item_image`, `item_name`, `made_in`, `price`) VALUES ( '$department_code', '$item_image', '$item_name', '$made_in', '$price');";
    if ($conn->query($sql) === TRUE) {
        echo "Item Update Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if( isset($_POST["userSubmit"])) {
    $user_id = $_POST["user_id"];
    $address = $_POST["address"];
    $balance = $_POST["balance"];
    $citycode = $_POST["citycode"];
    $email = $_POST["email"];
    $name= $_POST["name"];
    $pw= $_POST["pw"];
    $telephone= $_POST["telephone"];
    $condition = $_POST["condition"];
    $sql = "UPDATE `usertb` SET `user_id` = '$user_id' , `address` = '$address', `balance` = '$balance', `citycode` = '$citycode', `email` = '$email', `name` = '$name', `pw` = '$pw', `telephone` = '$telephone' WHERE $condition;";
    // $sql = "INSERT INTO `usertb` (`address`, `balance`, `citycode`, `email`, `name`, `pw`, `telephone`) VALUES ( '$address', '$balance', '$citycode', '$email', '$name', '$pw', '$telephone');";
    if ($conn->query($sql) === TRUE) {
        echo "User Update Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


  <!-- <script>
          function toggleDropdown() {
              const e = document.querySelector(".submenu");
              if(e.style.display == "block"){
                  e.style.display = "none"
              } else {
                  e.style.display = "block"
              }
      
            }
            document.getElementById("submenudrop").addEventListener("click", toggleDropdown);
         </script> -->
</body>