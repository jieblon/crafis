<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cyberrange";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed");
}
?>