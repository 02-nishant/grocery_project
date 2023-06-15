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

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

body {
    position: relative;
    background-image: url("cc.jpg");
	/* background: white; */
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
	background-size: 900px 700px;
    
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
		margin-top: 100px;
	margin-left: 900px;
		width: 350px;
		padding: 20px;
	}

	</style>

	<h1 style= " margin-left:900px ; margin-top: 80px; color:red;" ><b><u> BE A MEMBER WITH US. </b></u></h1>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;"><b>SIGNUP</b></div>

			<input id="text" placeholder="USER_NAME" type="text" name="user_name"><br><br>
			<input id="text" placeholder="PASSWORD" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>