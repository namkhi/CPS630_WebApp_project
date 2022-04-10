<?php
include('db_connection.php');


if(isset($_POST["action"])){
    $storeInfo = mysqli_real_escape_string($_POST["storeInfo"]);
    $total = mysqli_real_escape_string($_POST["total"]);
    $sql = "INSERT INTO `shoppingtb` ( `store_code`, `total_price`) VALUES ('$storeInfo', '$total');";
    try{
        if ($conn->query($sql) === FALSE) {
            echo "Code Unsuccessful";
        }
    }
    catch(Exception $e) {echo "Error: " . $sql . "<br>" . $conn->error;
    }

// break
    $distance = mysqli_real_escape_string($_POST["distance"]);
    $source = mysqli_real_escape_string($_POST["source"]);
    $destination = mysqli_real_escape_string($_POST["destination"]);
    $price = ( 2 * $_POST["distance"]);
    // $sql = "INSERT INTO `triptb` ( `destination_code`, `distance`, `price`, `source_code`,`truck_id`) VALUES ('".$_POST["destination"]."', '".$_POST["distance"]."', '".$price."', '".$_POST["source"]. "','" . 3 . "');";
    $sql = "INSERT INTO `triptb` ( `destination_code`, `distance`, `price`, `source_code`,`truck_id`) VALUES ('$destination', '$distance', '$price', '$source','" . 3 . "');";
    try{
        if ($conn->query($sql) === FALSE) {
            echo "Code UNSuccessfultruip";
        }
    }
    catch(Exception $e) {echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = "SELECT trip_id FROM triptb ORDER BY trip_id DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $tripid;
    while($row = mysqli_fetch_assoc($result)) {
        $tripid = $row['trip_id'];
        $tripid = mysqli_real_escape_string($tripid);
    }
    echo $tripid;
  

    $sql = "SELECT `user_id` FROM usertb ORDER BY `user_id` DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $userid;
    while($row = mysqli_fetch_assoc($result)) {
        $userid = $row['user_id'];
        $userid = mysqli_real_escape_string($userid);
    }
    echo $userid;


// break
    $sql = "SELECT receipt_id FROM shoppingtb ORDER BY receipt_id DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $receipt;
    while($row = mysqli_fetch_assoc($result)) {
        $receipt = $row['receipt_id'];
        $receipt = mysqli_real_escape_string($receipt);
    }
    echo $receipt;

    $total= mysqli_real_escape_string($_POST["total"]);


    $sql = "INSERT INTO `ordertb` ( `date_issued`, `date_received`, `receipt_id`, `total_price`,`trip_id`,`user_id`) VALUES ('" . date("Y-m-d") ."', '". NULL . "', '" . $receipt . "', '".$total. "','" . $tripid . "', '". $userid . "');";
    try{
        if ($conn->query($sql) === FALSE) {
            echo "Code UNSuccessful";
        }
    }
    catch(Exception $e) {echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else
    {
        $output = '<h3> No Data Found </h3>';
    }
?>