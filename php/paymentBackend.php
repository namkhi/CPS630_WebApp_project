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
  <title>Successful Sign Up</title>
</head>

<body>

<?php 
include("navbar.php"); 
  
    $conn = mysqli_connect("localhost", "root", "");
    $db_selected = mysqli_select_db($conn, "assignment1");

    if(!$conn){
        echo "Connection Failed " . "<br>";
    }
    else{
      // echo "Connection Successful";
    }

    $conn = mysqli_connect("localhost", "root", "");
    $db_selected = mysqli_select_db($conn, "assignment1");

    // $fullname = $_POST['fname'];
    // $address = $_POST['address'];
    // $postal = $_POST['postal'];
    // $payment = $_POST['payment'];
    $cardNumber = md5($_POST['cardNumber']);
  
     $sql = "INSERT INTO `payment` (`cardnumber`) VALUES ('$cardNumber');";

        try{
          if ($conn->query($sql) === TRUE) {
              // echo "Code Successful";
              echo "<h2 style='color:black; margin: 10%;'> Payment successfully inserted </h2>";
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