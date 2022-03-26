<?php

	require_once 'conn.php';
	
	$message = $_POST['message'];

	$sql = "INSERT INTO phpwm(id, message, posting_time) VALUES (NULL, :message, current_timestamp())";
	
	$query = $conn->prepare($sql);
	
	$query->execute([':message' => $message]);
	
	echo "Success."

?>