<html>
	<head>
		<title>Calculatrice</title>
	</head>
	<body id="calculator">
		<?php include "inc/header.php" ?>

		<h1 style="text-align: center;">Calculatrice</h1>

		<div style="text-align:center">
			<form name="calculator">
				<div style="display:inline-block;float:left;">
					<input type="text" name="display" readonly id="input" />
					<br>
						<input type="button" onclick="ajoutNombre('7')" value="7" />
						<input type="button" onclick="ajoutNombre('8')" value="8" />
						<input type="button" onclick="ajoutNombre('9')" value="9" />
						<input type="button" onclick="ajoutNombre('/')" value="/" />
						<br>
						<input type="button" onclick="ajoutNombre('4')" value="4" />
						<input type="button" onclick="ajoutNombre('5')" value="5" />
						<input type="button" onclick="ajoutNombre('6')" value="6" />
						<input type="button" onclick="ajoutNombre('*')" value="*" />
						<br>
						<input type="button" onclick="ajoutNombre('1')" value="1" />
						<input type="button" onclick="ajoutNombre('2')" value="2" />
						<input type="button" onclick="ajoutNombre('3')" value="3" />
						<input type="button" onclick="ajoutNombre('-')" value="-" />
						<br>
						<input type="button" onclick="ajoutNombre('0')" value="0" />
						<input type="button" onclick="ajoutNombre('+')" value="+" />
						<input type="button" onclick="reinit()" value="C" style="background-color:pink;color:white" />
						<input type="button" onclick="egal()" value="=" style="background-color:orange;color:white;" />
					</div>
			</form>

		</div>

		<script type="text/javascript" src="js/calculator.js"></script>
	</body>
</html>