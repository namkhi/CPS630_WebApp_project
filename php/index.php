<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="icon" href="public/favicon.ico" sizes="any">
        <title>Jungle</title>
        <script> 
            $(function(){
                $('.dropdown').hover(function() {
                    $(this).addClass('open');
                },
                function() {
                    $(this).removeClass('open');
                });
            });
        </script>

    </head>
    <body>
    <?php 

    include('db_connection.php');
    if (isset($_POST["info"])){
    $orderid = $_POST["info"];
    
    $sql = "SELECT `date_received` FROM ordertb WHERE `order_id` = '".$orderid."';";
    $result = mysqli_query($conn,$sql);
    $date_received = "";
    while($row = mysqli_fetch_assoc($result)) {
        $date_received = $row['date_received'];
    }
    $status;
    if ($date_received == "0000-00-00"){
        $status = "In delivery";
    }
    else{
        $status = "Delivered";
    };
    echo '<h2 style="color:black; position:fixed;bottom:0; right:0;z-index:1;"><mark>The status of your current order is: '. $status . '</mark> </h2>'; 
}

    ?>
    <?php include("navbar.php"); ?>
      
           <div style="display: flex; justify-content: center; align-items: center;">
           <a href="dbOperations/insert.php"> <button type="button" style="display:inline-block;">Insert Data</button></a>
            <a href="dbOperations/select.php"> <button type="button" style="display:inline-block;">Select Data</button></a>
            <a href="dbOperations/update.php"> <button type="button" style="display:inline-block;">Update Data</button></a>
            <a href="dbOperations/delete.php"> <button type="button" style="display:inline-block;">Delete Data</button></a>
           </div>
           <section class="new-arrival">
            <div class=searchbar>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="searchform">
                    <input type="text" id="info" name="info" placeholder="Search Orders">
                    <input type="submit" name="submit" form="searchform" value="Submit">
                </form>

        
            </div>
         
            <div class="arrival-heading">
         
                <strong>Products</strong>
                <p>Clean Green, and Free Delivery on Orders over $25</p>
            </div>
         
              <div class="product-container">    
                <div class="product-box" id="apple">        
                    <div class="product-img">               
                    <img src="public/images/apple.png">
                    </div>            
                    <div class="product-details">
                        <a href="#" class="p-name">Shop Apple Products</a>   
                    </div>
                </div>

                
           
                <div class="product-box" id="samsung">           
                    <div class="product-img">             
                        <img src="public/images/samsung.jpg">
                    </div>
                 
                    <div class="product-details">
                        <a href="#" class="p-name">Shop Samsung Products</a>
                        <!-- <span class="p-price">$22.00</span> -->
                    </div>
                </div>



                <div class="product-box" id="accessories">
            
                <div class="product-img">              
                    <img src="public/images/phone_access.jpg">
                </div>
           
                <div class="product-details">
                    <a href="#" class="p-name">Shop All Accessories</a>
                </div>
                </div>


            
                <div class="product-box" id="phones">
       
                <div class="product-img">
                    <img src="public/images/allphones.jpg">
                </div>
                <div class="product-details">
                    <a href="#" class="p-name">Shop Phones</a>
                </div>
                </div>


                
                <div class="product-box" id="all">      
                <div class="product-img">
                    <img src="public/images/shopall.png">
                </div>
                <div class="product-details">
                    <a href="#" class="p-name">Shop All</a>
             
                </div>

              </div>

              
              </div>

             </div>

          </section>




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

<script src="index.js" type="module"></script>