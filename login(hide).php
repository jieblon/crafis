<?php
 session_start();
	
	include("conn.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted 
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{
			//read from database
			$query = "select * from acc_users where email = '$email' limit 1";
			
			$result = mysqli_query($con, $query);

			if($result)
			{
					if($result && mysqli_num_rows($result) > 0)
					{
						$user_data = mysqli_fetch_assoc($result);

						if($user_data['password'] === $password)
						{

							$_SESSION['user_id'] = $user_data['user_id'];
							header("Location: dashboard.php");
							die;
						}
					}
			}
			 echo "Wrong email or password!";
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
			<div style ="font-size: 20px; margin: 10px; color: white;">Login</div>

			<input id="text" type="email" name="email" placeholder="Email" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>

			<input id="button" type="submit" value="Login">

			<a href="registration.php">Signup</a><br><br>
		</form>
	</div>	
 </body>
</html?