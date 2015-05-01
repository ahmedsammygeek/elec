<?php session_start() ;
if (isset($_POST['submit'])) {
	$args = array('userid' =>FILTER_SANITIZE_STRING ,'password' =>FILTER_SANITIZE_STRING);
	$inputs=filter_input_array(INPUT_POST,$args);
	foreach ($inputs as $key_input => $value_input) {
		if (empty($value_input)) {
			header('location: login.php?msg=data_empty'); die();
		}
	}

	extract($inputs);
	$password=hash('ripemd160', "$password");
	include 'connection.php';
	$query=mysqli_query($connect , "SELECT * FROM admins WHERE name = '$userid' && password= '$password' ");
	while ($result=mysqli_fetch_assoc($query)) {
		extract($result);
	}
	$num=mysqli_num_rows($query);
	if ($num == 1) {
		$_SESSION['logged']='true';

		header('location: product.php');
		die();
	}
	else
	{
		header('location: login.php?msg=data_error'); die();
	}

}





?>