<?php// header( "refresh:3;url=http://localhost:3000/index.php#!/" );?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" href="public/favicon.ico" sizes="any">
  <link rel="stylesheet" href="/css/signUp.css">  
  <title>Payment</title>
</head>

<body>
<h3> Thank you! You will be rerouted back to the homepage  in a bit... press the button if it has not routed</h3>
<a href="http://localhost:3000/index.php#!/"><button type="button" class="btn btn-warning">Return</button></a>

<?php 
    $conn = mysqli_connect("localhost", "root", "", "assignment1");;
    // $db_selected = mysqli_select_db($conn, "assignment1");
    $form_data = json_decode(file_get_contents("php://input"));
    $data = array();
    $error = array();
    
    $storeInfo = mysqli_real_escape_string($conn, $form_data->storeinfo);
    $total = mysqli_real_escape_string($conn, $form_data->total);
    $sql = "INSERT INTO `shoppingtb` ( `store_code`, `total_price`) VALUES ('$storeInfo', '$total');";
    try{
        if ($conn->query($sql) === FALSE) {
            echo "Code Unsuccessful";
        }
    }
    catch(Exception $e) {echo "Error: " . $sql . "<br>" . $conn->error;
    }

// break
  $distance = mysqli_real_escape_string($conn, $form_data->distance);
  $source = mysqli_real_escape_string($conn, $form_data->source);
  $destination = mysqli_real_escape_string($conn, $form_data->destination);
  $price= 2 * (mysqli_real_escape_string($conn, $form_data->price));
  
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
    }
    echo $tripid;
  

    $sql = "SELECT `user_id` FROM usertb ORDER BY `user_id` DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $userid;
    while($row = mysqli_fetch_assoc($result)) {
        $userid = $row['user_id'];
    }
    echo $userid;


// break
    $sql = "SELECT receipt_id FROM shoppingtb ORDER BY receipt_id DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $receipt;
    while($row = mysqli_fetch_assoc($result)) {
        $receipt = $row['receipt_id'];
    }
    echo $receipt;

    $date = date("Y-m-d");

    $sql = "INSERT INTO `ordertb` ( `date_issued`, `date_received`, `receipt_id`, `total_price`,`trip_id`,`user_id`) VALUES ('$date', '" . NULL . "', ' $receipt ', '$total',' $tripid ', '$userid');";
    try{
        if ($conn->query($sql) === FALSE) {
            echo "Code UNSuccessful";
        }
    }
    catch(Exception $e) {echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    


    $cardNumber = mysqli_real_escape_string($conn, $form_data->cardNumber);
    $salt = generateRandomSalt();
    $cardNumber = md5($cardNumber.$salt); 
    if(!$conn){
        echo "Connection Failed " . "<br>";
    }
//     if(empty($form_data->cardNumber))
// {
//     $error["product"] = "Select the product";
// }

  

    // $fullname = $_POST['fname'];
    // $address = $_POST['address'];
    // $postal = $_POST['postal'];
    // $payment = $_POST['payment'];
    // $cardNumber = md5($_POST['cardNumber']);
    $query = "
    INSERT INTO payment(cardNumber, salt) VALUES ('$cardNumber','$salt')
    ";
    if(mysqli_query($conn, $query))
    {
      $data["message"] = "Data Inserted...";
    }
  // echo json_encode($data);    
    // $sql = "INSERT INTO `payment` (`cardNumber`) VALUES ('$cardNumber');";

    //     try{
    //       if ($conn->query($sql) === TRUE) {
    //           // echo "Code Successful";
    //           echo "<h2 style='color:black; margin: 10%;'> Payment Recieved and your order is being prepared 😎👍</h2>";
    //       }
    //   }
    //   catch(Exception $e) {echo "Error: " . $sql . "<br>" . $conn->error;
    //   }
    function generateRandomSalt(){
      return substr(md5(microtime()), 0, 8);
    }                                        
?> 

<script>
          function toggleDropdown() {
              const e = document.querySelector(".submenu");
              if(e.style.display == "block"){
                  e.style.display = "none"
              } else {
                  e.style.display = "block"
              }
      
            }
            document.getElementById("submenudrop").addEventListener("click", toggleDropdown);


          
         </script>
   
</body>

</html>