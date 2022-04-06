<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="public/favicon.ico" sizes="any">
  <link rel="stylesheet" href="../style.css">
  <title>Insert</title>
</head>

<body>
    

<div>
    <a class="button" href="../index.php" style="background-color:yellow; font-weight: bold; border-radius:6px; border: solid 2px black">Back</a>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="orderform">
        <h3>Order table</h3>
        <br>
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
        <input type="submit" name="orderSubmit" form="orderform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="shoppingform">
        <h3>Shopping Table</h3>
        <label for="store_code">Store Code</label>
        <input type="text" name="store_code">
        <label for="total_price">Total Price</label>
        <input type="text" name="total_price">
        <br>
        <input type="submit" name="shopSubmit" form="shoppingform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="truckform">
        <h3>Truck Table</h3>
        <label for="availability_code">Availability Code</label>
        <input type="text" name="availability_code">
        <label for="truck_code">Truck Code</label>
        <input type="text" name="truck_code">
        <br>
        <input type="submit" name="truckSubmit" form="truckform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="tripform">
        <h3>Trip Table</h3>
        <label for="destination_code">Destination Code</label>
        <input type="text" name="destination_code">
        <label for="distance">Distance</label>
        <input type="text" name="distance">
        <label for="price">Price</label>
        <input type="text" name="price">
        <label for="source_code">Source Code</label>
        <input type="text" name="source_code">
        <label for="truck_id">Truck Id</label>
        <input type="text" name="truck_id">
        <br>
        <input type="submit" name="tripSubmit" form="tripform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="itemform">
        <h3>Item Table</h3> 
        <label for="department_code">Department Code</label>
        <input type="text" name="department_code">
        <label for="description">Description</label>
        <input type="text" name="description">
        <label for="item_image">Item Image</label>
        <input type="text" name="item_image">
        <label for="item_name">Item Name</label>
        <input type="text" name="item_name">
        <label for="made_in">Made in</label>
        <input type="text" name="made_in">
        <div>
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
        </div>
        <input type="submit" name="itemSubmit" form="itemform" value="Submit">
    </form>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="userform">
        <br>
        <h3>User Table</h3>
        <label for="address">Address</label>
        <input type="text" name="address">
        <label for="balance">Balance</label>
        <input type="text" name="balance">
        <label for="citycode">City Code</label>
        <input type="text" name="citycode">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="pw">Password</label>
        <input type="text" name="pw">
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone">
        <br>
        <!-- <input type="submit"> -->

        <input type="submit" name="userSubmit" form="userform" value="Submit">
    </form>
  
    <!-- <button type="submit" name="submit" form="searchform" value="Submit">Search</button> -->
</div>


<?php 

include('./db_connection.php');
    if( isset($_POST["orderSubmit"])) {
    $date_issued = $_POST["date_issued"];
    $date_received = $_POST["date_received"];
    $total_price = $_POST["total_price"];
    $user_id = $_POST["user_id"];
    $trip_id= $_POST["trip_id"];
    $receipt_id= $_POST["receipt_id"];
    $sql = "INSERT INTO `ordertb` (`date_issued`, `date_received`, `total_price`, `user_id`, `trip_id`, `receipt_id`) VALUES ( '$date_issued', '$date_received', '$total_price', '$user_id', '$trip_id', '$receipt_id');";
    if ($conn->query($sql) === TRUE) {
        echo "Order Insert Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

   if( isset($_POST["shopSubmit"])){
    $store_code = $_POST["store_code"];
    $total_price = $_POST["total_price"];
    $sql = "INSERT INTO `shoppingtb` (`store_code`, `total_price`) VALUES ('$store_code', '$total_price');";
    if ($conn->query($sql) === TRUE) {
        echo "Shopping Insert Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if( isset($_POST["truckSubmit"])){
    $availability_code = $_POST["availability_code"];
    $truck_code = $_POST["truck_code"];
    $sql = "INSERT INTO `trucktb` (`availability_code`, `truck_code`) VALUES ('$availability_code', '$truck_code');";
    if ($conn->query($sql) === TRUE) {
        echo "Truck Insert Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if( isset($_POST["tripSubmit"])){
    $destination_code = $_POST["destination_code"];
    $distance = $_POST["distance"];
    $price= $_POST["price"];
    $source_code = $_POST["source_code"];
    $truck_id = $_POST["truck_id"];
    $sql = "INSERT INTO `triptb` (`destination_code`, `distance`, `price`, `source_code`, `truck_id`) VALUES ('$destination_code', '$distance', '$price', '$source_code', '$truck_id');";
    if ($conn->query($sql) === TRUE) {
        echo "Trip Insert Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if( isset($_POST["itemSubmit"])) {
    $department_code = $_POST["department_code"];
    $description = $_POST["description"];
    $item_image = $_POST["item_image"];
    $item_name = $_POST["item_name"];
    $made_in= $_POST["made_in"];
    $price= $_POST["price"];
    $sql = "INSERT INTO `itemtb` (`department_code`, `item_image`, `item_name`, `made_in`, `price`) VALUES ( '$department_code', '$item_image', '$item_name', '$made_in', '$price');";
    if ($conn->query($sql) === TRUE) {
        echo "Item Insert Successful";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if( isset($_POST["userSubmit"])) {
    $address = $_POST["address"];
    $balance = $_POST["balance"];
    $citycode = $_POST["citycode"];
    $email = $_POST["email"];
    $name= $_POST["name"];
    $pw= $_POST["pw"];
    $telephone= $_POST["telephone"];
    $sql = "INSERT INTO `usertb` (`address`, `balance`, `citycode`, `email`, `name`, `pw`, `telephone`) VALUES ( '$address', '$balance', '$citycode', '$email', '$name', '$pw', '$telephone');";
    if ($conn->query($sql) === TRUE) {
        echo "User Insert Successful";
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