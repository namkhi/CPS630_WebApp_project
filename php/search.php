<?php
include('db_connection.php');
$orderid = $_POST["info"];


echo $orderid;
$sql = "SELECT `date_received` FROM ordertb WHERE `order_id` = '".$orderid."';";
$result = mysqli_query($conn,$sql);
$userid = "";
while($row = mysqli_fetch_assoc($result)) {
    $userid = $row['user_id'];
}
echo $userid;




?> 

