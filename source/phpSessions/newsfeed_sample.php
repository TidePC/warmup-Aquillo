<?php
	session_start();
	require_once 'conn.php';
	echo "<h1>Hello " . $_SESSION["username"] . ".</h1>"; 
	echo "<a href='logout.php'>Logout</a>";	
	require_once 'read.php';	
?>

<!DOCTYPE html>
<html>
<head>
	<title>SAMPLE PAGE</title>
</head>

<body>
<?php
		
?>
<h1>News Feed</h1>

</br>

<form action= "create.php "method="POST">
	<input type="text" name="message" placeholder="Say something...">
	<input type = "submit" name="submit" value ="Submit">
</form>

</body>
</html>
