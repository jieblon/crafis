<?php 

$dbhost = "localhost";
$dbuser = "cra";
$dbpass = "p@ssw0rd";
$dbname = "cyberrange";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed");
}
?>
