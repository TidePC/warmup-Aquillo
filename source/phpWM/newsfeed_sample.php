<!DOCTYPE html>
<html>
<head>
	<title>SAMPLE PAGE</title>
</head>

<body>

<h1>News Feed</h1>

<?php
	require_once 'conn.php';	
?>

</br>

<form action= "create.php "method="POST">
	<input type="text" name="message" placeholder="Say something...">
	<input type = "submit" name="submit" value ="Submit">
</form>

</body>
</html>
