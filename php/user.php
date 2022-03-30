<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="signUp.css">
  <title>Successful Sign Up</title>
</head>

<body>
<?php include("navbar.php"); ?>
  
  <?php
    echo "<a>hello</a>";
    $conn = mysqli_connect("localhost", "root", "");
    $db_selected = mysqli_select_db($conn, "assignment1");

    if(!$conn){
        echo "Connection Failed " . "<br>";
    }
    else{
      echo "Connection Successful";
    }

    $conn = mysqli_connect("localhost", "root", "");
    $db_selected = mysqli_select_db($conn, "assignment1");

    $fullname = $_POST['fname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $address = $_POST['address'];
    $postal = $_POST['postal'];
    $telephone = $_POST['telephone'];
    $gender = $_POST['gender'];
    $payment = $_POST['payment'];
    $cardNumber = $_POST['cardNumber'];
    $cvc = $_POST['cvc'];
    $expiry = $_POST['expiry'];
    echo $fullname . $birthday . $email . $password . $address . $postal . $telephone . $gender;
    
    // $sql1 = "INSERT INTO usertb ('name', telephone, email, 'address', citycode, pw, balance)
    // VALUES ($fullname, $telephone, $email, $address, $postal, $password)";
     $sql = "INSERT INTO `usertb` (`user_id`, `name`, `telephone`, `email`, `address`, `citycode`, `pw`, `balance`) VALUES (NULL, '$fullname', '$telephone', '$email', '$address', '$postal', '$password', '0');";

    echo "<h2 style='color:black; margin: 50%;'> <3 Ontario <3 </h2>";
    
        // try{
        //     if ($conn->query($sql) === TRUE) {
        //         echo "Code Successful";
        //     }
        // }
        // catch(Exception $e) {echo "Error: " . $sql . "<br>" . $conn->error;
        // }
        try{
          if ($conn->query($sql) === TRUE) {
              echo "Code Successful";
          }
      }
      catch(Exception $e) {echo "Error: " . $sql . "<br>" . $conn->error;
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