<?php
 session_start();
	
	include("conn.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted 
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !empty($fullname))
		{
			//save to database
			$user_id = random_num(12);
			$query = "insert into acc_users (user_id, email, password, fullname) values('$user_id','$email','$password','$fullname')";
			
			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter valid information!";
		}

	}

?>
<html>

 <head>
	<title>CyberRangeAcademy</title>
 </head>
 <body>

	<style>
		
		#text{
			
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;

		}
		#button{
			padding : 10px;
			width: 100px
			color: white:
			background-color: lightblue;
			border : none;

		}

		#box{
			background-color: grey;
			margin: auto;
			width: 300px;
			padding: 20px;

		}

	</style>
		
	<div id="box">

		<form method="post">
			<div style ="font-size: 20px; margin: 10px; color: white;">Signup</div>

			<input id="text" type="fullname" name="fullname" placeholder="Fullname" required><br><br>
			<input id="text" type="email" name="email" placeholder="Email" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>

			<input id="button" type="submit" value="Signup">

			<a href="login.php">Signin</a><br><br>
		</form>
	</div>	
 </body>
</html?