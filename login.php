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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final year project until success</title>

    <!--ICONSCOUt CND-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--GOOGLE FONTS (MONTSERRAT)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;800;900&display=swap" rel="stylesheet">

<!--STYLESHEET-->>
    <link rel="stylesheet" href="./css/style.css"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/Login&signup.css">
   
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html"><h4>LAMP</h4></a>
            <ul class="nav__menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>

            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
 <!---========================================END OF NAVBAR
    ============-->

    <section class="container forms">
        <div class="form login">
            <div class="forms content">
                <h1>Login</h1>
                <!--<header>Login</header>-->

                <form method="post">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                       <input id="button" type="submit" value="Login">
                    </div>

                    <div class="form-link">
                        <span>Don't have an account?<a href="Signup.php" class="signup-link">Signup</a></span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo"><h4>LAMP</h4></a>
                <p>
                    
                </p>
            </div>

            <div class="footer__2">
                <h4>links</h4>
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul> 
            </div>
            <div class="footer__3">
                <h4>Primacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>
            
        </div>
    </footer>




<script src="./main.js"></script>

</body>
</html>









