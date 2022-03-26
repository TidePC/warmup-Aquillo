<?php

$name = "local";
$user = "root";
$password = "";
$opt = [
            PDO::ATTR_ERRMODE              =>  PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE   =>   PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES     =>  false
        ];

	try
	{
		$conn = new PDO("mysql:host=localhost;dbname=$name", $user, $password, $opt);
		//echo "Database Connection Set.";
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}	

?>