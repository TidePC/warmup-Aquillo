<?php

	require_once 'conn.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$hash = password_hash($password, PASSWORD_DEFAULT);
	
	$sql = "INSERT INTO users(id, username, password) VALUES (NULL, :username, :password)";
	$query= $conn->prepare($sql);	
	$query->execute([":username" => $username, ':password' => $hash]);
	
	echo "Registered."

?>