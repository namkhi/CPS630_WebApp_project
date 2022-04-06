<?php
$connect = mysqli_connect("localhost", "root", "", "assignment1");
$form_data = json_decode(file_get_contents("php://input"));
$data = array();
$error = array();
 
if(empty($form_data->product))
{
    $error["product"] = "Select the product";
}
 
if(empty($form_data->rate))
{
    $error["rate"] = "A rating is required";
}
 
if(!empty($error))
{
    $data["error"] = $error;
}
else
{
    $product = mysqli_real_escape_string($connect, $form_data->product); 
    $rate = mysqli_real_escape_string($connect, $form_data->rate);
    $review = mysqli_real_escape_string($connect, $form_data->review);
    $query = "
      INSERT INTO reviews(name, rate, review) VALUES ('$product', '$rate', '$review')
    ";
    if(mysqli_query($connect, $query))
    {
      $data["message"] = "Data Inserted...";
    }
}
echo json_encode($data);
?>