<?php
include('db_connection.php');

if(isset($_POST["action"])){
    $query = "SELECT * FROM reviews WHERE 1 ORDER BY `reviewID` DESC";

        if(isset($_POST["type"])){

            $type_filter = $_POST["type"];
            // echo $type_filter;
            
                $query = 
                "SELECT * FROM reviews WHERE 1 AND name ='".$type_filter."' ORDER BY `reviewID` DESC"
                ;
              
        }
        // if ($_POST["type"] == "undefined"){
        //     $query .= " AND name = '".$types."'";
        // }

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
            <div class="card apple phones" ondrop="drop(event)" ondragstart="dragStart(event)"  id="'.$row["name"].'" draggable="true" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">'.$row["name"].'</h5>
              <p class="card-text"> '.$row["review"].' </p>
              <!-- <a href="#" class="btn btn-primary">Add to cart</a> -->
            </div>
            <div class="card-footer">
              <a>Rating:'.(str_repeat('★', intval($row["rate"]))) .'</a>
            </div>
          </div>
            ';
        }
    }
    else
    {
        $output = '<h3> No Reviews Found </h3>';
    }
    echo $output;

}
?>