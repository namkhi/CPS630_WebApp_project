<?php
include('db_connection.php');

if(isset($_POST["action"])){
    $query = "SELECT * FROM itemtb WHERE 1";

        if(isset($_POST["type"])){

            $type_filter = $_POST["type"];
            // echo $type_filter;
            foreach ($type_filter as $types){
                $query .= "
                AND item_type = '".$types."'
                ";
            }       
        }

    $result = $conn->query($query);
    // $statement = $conn->prepare($query);
    // $statement->execute();
    // $result = $statement->fetchAll();
    // $total_row = $statement->rowCount();
    $output = '';
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            $output .= '
            <div class="card apple phones" id="'.$row["item_name"].'" style="width: 18rem;">
                <img src="'.$row['item_image'].'" draggable="false" class="card-img-top" alt="..." style="  object-fit: cover; object-position: 0 -20%;">
            <div class="card-body">
              <h5 class="card-title">'.$row["item_name"].'</h5>
              <p class="card-text"> '.$row["description"].' </p>
              <!-- <a href="#" class="btn btn-primary">Add to cart</a> -->
            </div>
            <div class="card-footer">
              <a>Price: $'.$row["price"].'</a>
              <button class="cartButton" ng-click="addToCart(&#39;'.$row["item_name"].'&#39;,&#39;'.$row["price"].'&#39;)" style="border-radius:5px; background-color:white;">Add to Cart</button>
            </div>
          </div>
            ';
        }
    }
    else
    {
        $output = '<h3> No Data Found </h3>';
    }
    echo $output;

}
?>