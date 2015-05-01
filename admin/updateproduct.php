<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$img=$_GET['img'];
}

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
	//class used to resize images
	require_once '../classes/ImageManipulator.php';
	//to make random name
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$img_name=$randomstring.".$type" ;
	$newName= time() . '_';
	$img=new ImageManipulator($_FILES['file']['tmp_name']);
	//resize image
	$newimg=$img->resample(100,100);
	//put image in file "image"
	$img->save('image/'.$img_name);
}

extract($inputs);
require 'connection.php';
$sql="UPDATE slider SET image='$img_name' WHERE id=$id ";
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: showslider.php?id=$id&msg=data_updated"); die();
}
else
{
	header("location: editslider.php?id=$id&msg=error_update"); die();
}

?>
