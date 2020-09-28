<?php  
if(isset($_SEESION))
{
	header('Location: ./login.php');
}

require './includes/common.php';

print_r($_POST);

foreach ($_POST['del'] as $key => $value) 
{
	$res = mysqli_query($con,"DELETE FROM `enquiry` WHERE SR='".$key."'");
	if (mysqli_connect_error($con)) 
	{
    	die("Connection failed! ".mysqli_connect_error());
	}
}
header("Location: ./admin.php");

?>