<html>
<head>
	<title>Slider</title>
	<link rel="stylesheet" type="text/css" href="css/image-slider.css">
	<link rel="stylesheet" type="text/css" href="css/big-picture.css">
</head>
<body id="image-slider">
	<?php include "inc/header.php" ?>

	<div class="horizontal">
		<button id="prev-slide-button" class="slide-button" onclick="prevSlide()"><</button>
		<button id="next-slide-button" class="slide-button" onclick="nextSlide()">></button>
		<img src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-290869.jpg" class="image-slider show">
		<img src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-260595.png" class="image-slider">
		<img src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-327940.jpg" class="image-slider">
		<img src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-113099.jpg" class="image-slider">
	</div>
	<script type="text/javascript" src="js/image-slider.js"></script>
</body>
</html>


