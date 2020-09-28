<?php
/*******EDIT LINES 3-8*******/
session_start();

die();
if($_SESSION['log_in']!=1)
{
	header('Location: ./index.php');
}
require("./includes/common.php");
$DB_Server = "localhost"; //MySQL Server    
$DB_Username = "kjtrivedi"; //MySQL Username     
$DB_Password = "kjtrivedi";             //MySQL Password     
$DB_DBName = "KFIN";         //MySQL Database Name  
$DB_TBLName = "enquiry"; //MySQL Table Name   
$filename = "fts_database";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection   
$sql = "Select * from $DB_TBLName";
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = mysqli_query($con,$sql);
// Write data to file
$flag = false;
while ($row = mysql_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}   
?>