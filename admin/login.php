<?php 

require './includes/common.php';

$res = mysqli_query($con,"SELECT `SR`, `UNAME`, `PASS` FROM `admin` WHERE UNAME='".$_POST['uname']."'");
if (mysqli_connect_error()) {
    die("Connection failed! ".mysqli_connect_error());
} 	
$res = mysqli_fetch_array($res);

$pass = md5($_POST['pass']);

if($res['PASS']==$pass)
{
	session_start();
	$_SESSION['log_in']=0;
	$_SESSION['uname']=$res['UNAME'];
	$_SESSION['log_in']=1;
	header('Location: ./admin.php');
}
else
{
	header("Location: ./index.php");
}
?>