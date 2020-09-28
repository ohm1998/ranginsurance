<?php
$servername = "localhost";
$username = "kjtrivedi";
$password = "kjtrivedi";
$dbname = "KFIN";

$con = mysqli_connect("localhost", "kjtrivedi", "kjtrivedi","KFIN");
if (mysqli_connect_error()) {
    die("Connection failed! ".mysqli_connect_error());
} 
?>