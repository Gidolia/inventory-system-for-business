<?php
//error_reporting(E_ERROR | E_PARSE);
$host="localhost";
$username="eibo_staff";
$pass="987654321";
$db_name="eibo_staff";

/////////////////connection
$con=new MySQLi($host, $username, $pass, $db_name);

if($con->connect_error){
	die("connection failed: " . $con->connect_error);

}
date_default_timezone_set('Asia/Calcutta');
$time=date("h:i:sa");
$date=date("Y-m-d");
?>