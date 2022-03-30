<?php
include('db_connection.php');

if(isset($_POST["action"])){
    $query = "SELECT * FROM itemtb WHERE NOT item_type = 'accessories'";


    $result = $conn->query($query);

    $output = '';
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            $output .= '
            <div class="card apple phones" ondrop="drop(event)" ondragstart="dragStart(event)"  id="'.$row["item_name"].'" draggable="true" style="width: 18rem;">
                <img src="'.$row['item_image'].'" draggable="false" class="card-img-top" alt="..." style="  object-fit: cover; object-position: 0 -20%;">
            <div class="card-body">
              <h5 class="card-title">'.$row["item_name"].'</h5>
              <p class="card-text"> '.$row["description"].' </p>
              <!-- <a href="#" class="btn btn-primary">Add to cart</a> -->
            </div>
            <div class="card-footer">
              <a>Price: $'.$row["price"].'</a>
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