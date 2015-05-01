<?php 
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
require 'connection.php';
$query=mysqli_query($connect , "DELETE FROM messages WHERE id=$id ");
if ($query) {
	header("location: message.php?msg=data_deleted");die();
}
header("location: message.php?msg=error_delete"); die();

 ?>