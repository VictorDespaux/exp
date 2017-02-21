<?php 

	require_once "db.php";

try{
	$sql = "INSERT INTO users (username,password) VALUES ('".$_POST["username"]."','".md5($_POST["password"])."')";
	$pdo->exec($sql);
	echo "<br>successfully registered";
	}
catch(PDOExecption $e)
	{
	echo "Connection failed: " . $e->getMessage();
	}




?>