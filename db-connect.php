<?php
$host     = "localhost";
$username = "root";
$password = "";
$dbname   = "haven_db";

$con = mysqli_connect($host, $username, $password, $dbname);
if(!$con){
	die('Could not connect: '.mysqli_connect_error());
}
?>