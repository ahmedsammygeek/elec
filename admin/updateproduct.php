<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$img=$_GET['img'];
}
$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['content']);

if (empty($_FILES['file']['name'])) {
	$img_name=$img;	
}
else{
	if (file_exists('image/'.$img)) {
		unlink('image/'.$img);
	}
	$img_name=$_FILES['file']['name'];
	//function used to be sure this is image
	require '../classes/filevalidate.php';
	if (!validation($img_name,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: editslider.php?id=$id&msg=error_data");die();
	}
	//function used to know file type
	require '../classes/filetype.php';
	$type=get_type($img_name);
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$img_name=$randomstring.".$type" ;
	//put image in file "image"
	$up=move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$img_name);
}

require 'connection.php';
$query=mysqli_query($connect , "UPDATE products SET image='$img_name',content='$content',title='$title' WHERE id=$id ");
if ($query) {
	header("location: showproduct.php?id=$id&msg=data_updated"); die();
}
else
{
	header("location: editproduct.php?id=$id&msg=error_update"); die();
}

?>
