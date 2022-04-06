<?php

//register.php
$connect = new PDO("mysql:host=localhost;dbname=assignment1", "root", "");
// include('database_connection.php');

$form_data = json_decode(file_get_contents('php://input'));

$message = '';
$validation_error = '';
$salt = generateRandomSalt();
$data[':salt'] = $salt;
$data[':telephone'] = $form_data->telephone;
$data[':address'] = $form_data->address;
$data[':citycode'] = $form_data->citycode;

if(empty($form_data->name))
{
 $error[] = 'Name is Required';
}
else
{
 $data[':name'] = $form_data->name;
}

if(empty($form_data->email))
{
 $error[] = 'Email is Required';
}
else
{
 if(!filter_var($form_data->email, FILTER_VALIDATE_EMAIL))
 {
  $error[] = 'Invalid Email Format';
 }
 else
 {
  $data[':email'] = $form_data->email;
 }
}

if(empty($form_data->password))
{
 $error[] = 'Password is Required';
}
else
{
    $data[':password'] = md5(($form_data->password).$salt);
    // $data[':password'] = password_hash($form_data->password, PASSWORD_DEFAULT);
}

if(empty($error))
{
 $query = "
 INSERT INTO usertb (name, telephone, email, address, citycode, pw, salt) VALUES (:name, :telephone, :email, :address, :citycode, :password, :salt)
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $message = 'Registration Completed';
 }
}
else
{
 $validation_error = implode(", ", $error);
}

$output = array(
 'error'  => $validation_error,
 'message' => $message
);

echo json_encode($output);


function generateRandomSalt(){
    //The recent versions of XAMPP for Windows runs PHP 7.x which are NOT compatible with mbcrypt.
    //return base64_encode(mcrypt_create_iv(12), MCRYPT_DEV_URANDOM);
    return substr(md5(microtime()), 0, 8);
  }


?>

