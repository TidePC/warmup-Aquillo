<?php
	require_once 'conn.php';	
?>

<!DOCTYPE html>
<html>


<head>
<title>Sample Register</title>
</head>

<body>


<h1>Register</h1> 
<form action ="insert.php" method="POST">
	<label>Username: </label> <input type ="text" name="username"> <br>
	<label>Password: </label> <input type ="text" name="password"> <br>
	<input type="submit" name="register" value="Submit"> <a href="login.php">Login</a>
</form>
</body>

</html>

