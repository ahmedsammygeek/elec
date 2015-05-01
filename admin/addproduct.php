<?php  session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}

if (isset($_POST['submit'])) {
	$title = htmlspecialchars($_POST['title']);
	$content = htmlspecialchars($_POST['content']);

		if (empty($_FILES['file']['name']) || empty($title) || empty($content)) {
			// if user leave eny inputs empty without enter eny thing in this case 
			//go to inputs page again and show alert about this case (some data is an empty)
			header('location: product.php?msg=empty_data'); die();
		}
	//name of image
	$img_name=$_FILES['file']['name'];
	//function used to be sure this is image
	require '../classes/filevalidate.php';
	if (!validation($img_name,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: product.php?msg=error_data");die();
	}
	//function used to know file type
	require '../classes/filetype.php';
	$type=get_type($img_name);
	//to make random name
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$img_name=$randomstring.".$type" ;
	//put image in file "image"
	$up=move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$img_name);
	include 'connection.php';
	//connection with database (met)
	$query=mysqli_query($connect , "INSERT INTO products VALUES('' , '$title' , '$content' , '$img_name') ");
	if ($query) {
		//if sql request executed and data sent success
		//go to showslider.php
		header('location: showproduct.php?msg=data_inserted'); die();
	}
	else{
		//if sql request non executed 
		//go to input page again and show alert about this case (error ni insert)
		header('location: product.php?msg=error_data'); die();
	}

}


?>