<!DOCTYPE html>
<html>
<head>
	<title>PHP Tests</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<?php include "./inc/header.php" ?>

	<div style="text-align: center;">
		<?php echo "Hello, I'm a PHP inserted text<br>";
		$chiffre=10;
		echo $chiffre+10,"<br>";
		?>


		<?php 
		$x=5;
		function Test(){
			global $x;
			echo "",$x,"<br>";
		}
		Test();
		?>

		<?php 	
		function staticTest(){
			static $y=1;
			echo $y,"<br>";
			$y++;
		}
		staticTest(); //retourne 1
		staticTest(); // retourne 2
		?>



		<form action="welcome.php" method="post">
			Name: <input type="text" name="name"><br>
			E-mail: <input type="email" required name="email"><br>
			<input type="submit">
		</form>
		<br><br>



	</div>
</body>
</html>