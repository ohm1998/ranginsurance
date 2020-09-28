<?php 

require './admin/includes/common.php';

extract($_POST);

$date_curr = date("d/m/Y");
if(isset($liabilities))
{
	$liabilities = '';
}
if(!isset($name,$phone,$nationality,$email,$city,$eabout,$salary,$loan_amt,$cmp_name,$years_curr_job))
{
	$error = 1;
	echo $error;
	die();
}
else
{

	$res = mysqli_query($con,"INSERT INTO `enquiry`( `NAME`, `PHONE`, `EMAIL`, `NATIONALITY`, `CITY`, `EABOUT`, `SALARY`, `LOAN_AMT`, `CMP_NAME`, `YEARS_CURR_JOB`, `LIABILITIES`, `ENQ_DATE`) VALUES ('$name','$phone','$email','$nationality','$city','$eabout','$salary','$loan_amt','$cmp_name','$years_curr_job','liabilities','$date_curr')");
	$error = 0;
	if (mysqli_connect_error()) 
	{	
		$error = 1;
	    die("Connection failed! ".mysqli_connect_error());
	}
	else
	{
		$error=0;
	}

}  
 /* $str = json_encode($post);
  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,'./PHPMailer/mailMe.php');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($curl_handle, CURLOPT_POST, true);  // Tell cURL you want to post something
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, "var1=2");
  curl_setopt($curl_handle,CURLOPT_POST,1);
  //curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $postvars);
  $buffer = curl_exec($curl_handle);
  curl_close($curl_handle);
  if (empty($buffer))
  {
      print "Nothing returned from url.<p>";
  }
  else
  {
      print $buffer;
  }*/
/*$data_json = json_encode($_POST);
$url = './PHPMailer/mailMe.php'
$cha = curl_init();
curl_setopt($cha, CURLOPT_URL, $url);
curl_setopt($cha, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
curl_setopt($cha, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($cha, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($cha, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($cha);
curl_close($cha);

echo $response;*/
/*$str = json_encode($_POST);

header('Location: ./PHPMailer/mailMe.php?q='.$str);*/
echo $error;

?>