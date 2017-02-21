<html>
<head>
	<title>JS</title>
	<link rel="stylesheet" type="text/css" href="css/dropdown-button.css">
</head>
<body id="jstests">
    <?php include "inc/header.php" ?>

    <h2>Buttons</h2>
    <p>Appuyer sur F12 et voit le premier 'console.log'</p>
	<button id="click">Click me !</button>
	<button id="hover">Hover me !</button>

	<h2>Dropdown menu JS</h2>
	<div class="dropdown">
		<button onclick="myFunction()" class="dropbtn">Dropdown &#8681;</button>
		<div id="myDropdown" class="dropdown-content">
		<a href="#">Link 1</a>
		<a href="#">Link 2</a>
		<a href="#">Link 3</a>
		</div>
	</div>

	
	<h2>Dropdown menu CSS</h2>
	<div class="dropdown">
		<button class="dropbtn">Dropdown &#8681;</button>
		<div class="dropdown-cntnt">
			<a href="#">Link 1</a>
			<a href="#">Link 2</a>
			<a href="#">Link 3</a>
		</div>
	</div>
	<script type="text/javascript" src="js/tries.js"></script>
</body>
</html>