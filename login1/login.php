<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: https://buy.stripe.com/test_dR614Z1uNcP11Gw6op");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">

body {
    position: relative;
    background-image: url("da.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
	background-size: 1366px 657px;

	 margin-top: 40px;
	margin-left: 60px;

}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: green;
		border: none;
	}

	#box{
		
		background-color: orange;
		margin-top: 145px;
	margin-left: 660px;
		width: 350px;
		padding: 20px;
	}

	.headText {
    margin-left: 0.5rem;
    margin-top: 0.1rem;
    color: violet;
    position: absolute;
    left: 20px;
    transform: translate(10px, -50%);
    transition: 1000ms linear;
    font-weight: 100;
    font-size: 40px;
}

	/* navbar */



	</style>

<header>
        <nav id="navbar">   
            <h1 class="headText"><b><u>CUSTOMER LOGIN PORTAL</u></b></h1>
            
            
        </nav>
    </header>

	<div id="box">
		
		<form method="post" class="login-form">
			<div style="font-size: 20px;margin: 10px;color: black;"><b>LOGIN</b></div>

			<input id="text" placeholder="USER_NAME" type="text" name="user_name"><br><br>
			<input id="text" placeholder="PASSWORD" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>