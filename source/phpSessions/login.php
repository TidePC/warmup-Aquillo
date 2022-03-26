<?php
	session_start();
	require_once 'conn.php';
		
	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM users WHERE username = :username";
		$query = $conn->prepare($sql);
		$query->execute([":username" => $username]); 
		
		$user = $query->fetch();
		
		if(!$user)
		{
			echo "no.";
		}
		else
		{
			if(password_verify($password, $user["password"]))
			{
				$_SESSION["username"] = $user["username"];
				header("Location: newsfeed_sample.php");
			}
			else
			{
				echo "no.";
			}
		}
	}
?>

<!DOCTYPE html>
<html>


<head>
<h1>Login</h1>
</head>

<body>

<form method= "POST">
	<label>Username: </label> <input type ="text" name="username"> <br>
	<label>Password: </label> <input type ="text" name="password"> <br>
	<input type="submit" name="login" value="Login"> <a href="register.php">Register</a>
</form>

</body>
</html>