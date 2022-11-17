<?php
session_start();

	include("conn.php");
	include("function.php");
	
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>LAMP Stack</title>
</head>
<body>
    <a href="logout.php">Logout</a>
	<h1>Dashboard</h1>

	<br>
	<h2>Hello, <span><?php echo $user_data['fullname']; ?><span></h2>

</body>
</html>