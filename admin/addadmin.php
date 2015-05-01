<?php 
$args = array('name' =>FILTER_SANITIZE_STRING ,'password'=>FILTER_SANITIZE_STRING );
//this array to validate inputs recieved from admin to add new admin
$inputs=filter_input_array(INPUT_POST,$args);
// use post method to recieved data 
foreach ($inputs as $key_input => $input_value) {
	if (empty($input_value)) {
		// if left eny input empty 
		//go to input page and show alert about this case 
		header('location: admin.php?msg=empty_data'); die();
	}
}
extract($inputs);
//put elements in variables
$password=hash('ripemd160', "$password");
include 'connection.php';
//conection with databasemet
$query=mysqli_query($connect , "INSERT INTO admins VALUES('' , '$name' , '$password')");
if ($query) {
	//if sql request executed go to gallery (admins)
	header('location: showadmin.php?msg=data_inserted'); die();
}
else
{
	header('location: admin.php?msg=error_data'); die();
}



 ?>