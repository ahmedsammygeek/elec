<?php 
if (isset($_GET['msg'])) {
	$id=$_GET['msg'];
	//get the id of row we need to delete an put it variable ($id)
}
include 'connection.php';
//connection with database (met)
$query=mysqli_query($connect , "DELETE FROM admins WHERE id='$id' ");
if ($query) {
	header('location: showadmin.php?msg=deleted'); die();
}
else
{
	header('location: showadmin.php?msg=error_delete'); die();
}
 ?>