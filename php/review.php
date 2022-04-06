<?php 
    if (isset($_POST["product"]) &&  isset($_POST["rate"]) && isset($_POST["review"])){
        $name = $_POST["product"];
         $rate = $_POST["rate"];
        $review = $_POST["review"];
            echo $name . $rate . $review;
            }  


            ?>
             
 