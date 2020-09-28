<?php
		$subject = "New Enquiry!";
		//$message = 'Click on the given link';
	//	$headers = "MIME-Version: 1.0" . "\r\n";
	//	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	//	$headers .= 'From: Admin<mail@techpantomath.com>' . "\r\n";
		//$headers .= 'Cc: Admin@example.com' . "\r\n";
		print_r($_POST);
		 /*$str = " <br><b> Enquiry Details</b>".'<br>';
    $str = $str.nl2br("\r\n <b>Name</b>: '.$_POST['name'] \n");
    $str = $str. nl2br("hello \n hello");
    $str = $str.' <b>Phone:</b> '.$_POST['phone'].'<br>';
    $str = $str.'\r\n <b>Email: </b>'.$_POST['email'].'<br>';
    $str = $str.'<br /> <b>Nationality: </b>'.$_POST['nationality'].'<br />';
    $str = $str.'<br> <b>City: </b>'.$_POST['city'].'<br>';
    $str = $str.'<br><b>Enquiry About: </b>'.$_POST['eabout'].'<br>';
    $str = $str.'<br> <b>Salary: </b>'.$_POST['salary'].'<br>';
    $str = $str.'<br> <b>Loan Amount: </b>'.$_POST['loan_amt'].'<br>';
    $str = $str.'<br> <b>Company Name: </b>'.$_POST['cmp_name'].'<br>';
    $str = $str.'<br> <b>Years In Current Job: </b>'.$_POST['years_curr_job'].'<br>';
    $str = $str.'<br> <b>Liabilities: </b>'.$_POST['liablities'].'<br>';
    $mail->Body    = ''.$str;
    $mail->AltBody = ''.$str;
    $message = $str;*/
    $message = print_r($_POST,true);
		$from = "financethesolution.com";
		$headers = "From:" . $from;
		$to= "financethesolution@gmail.com"; 
		if(mail($to,$subject,$message,$headers)){
			echo 'We have sent the msg';
		}
		else die("error in sending mail...try again!");
?>