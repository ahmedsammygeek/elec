<?php


if(!isset($_POST['name']) || empty($_POST['name'])) {
    header('location: contact.php?msg=name');
    die();
}

if(!isset($_POST['email']) || empty($_POST['email'])) {
    header('location: contact.php?msg=email');
    die();
}

if(filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)) {
    header('location: contact.php?msg=email_inv');
    die();
}

if(!isset($_POST['message']) || empty($_POST['message'])) {
    header('location: contact.php?msg=message');
    die();
}


$name = filter_input(INPUT_POST, 'name' , FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message' , FILTER_SANITIZE_STRING);
$time=date("Y-m-d & H:i:s");


require 'admin/connection.php';


$insert = mysqli_query($connect , "INSERT INTO messages VALUES(''  , '$name' , '$email' , '$message' , '$time')");
if ($inser) {
    
}



?>