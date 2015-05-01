<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}


$id=$_GET['id'];
//get the id of this row we need to delete and put it in this variable($id)
$image=$_GET['img'];
//get the name of this id we need to delete and put it in this variable($id)
if(file_exists("image/$image"))  {
	//if this image exist in this file 
	unlink("image/$image");
	//remove it 
}
include 'connection.php';
//connection with database(met)
//delete from table (products)
$query=mysqli_query($connect , "DELETE FROM products WHERE id='$id'");
if ($query) {
	//if rows doesnt=0 go to gellery slider and show alert about deleted 
	header('location: showproduct.php?msg=deleted'); die();
}
else
{
	header('location: showproduct.php?msg=error_delete'); die();
}
 ?>