var timer = 7000;
imageInterval = setInterval(changeImage,timer);
var x = 0;
var imagesList = ["https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-163503.jpg",
"https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-59615.jpg",
"https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-59887.jpg"]
body = document.body;


function changeImage() {
	x+=1;
	if (x<imagesList.length) {
		body.style.backgroundImage = "url("+imagesList[x]+")";
		console.log("X en entré: "+x)
	}else if(x==imagesList.length){
		x=0;
		body.style.backgroundImage = "url("+imagesList[x]+")";
		console.log("X en entré: "+x)
	}
}


function nextSlide() {
	clearInterval(imageInterval);
	x+=1;
	if (x<imagesList.length) {
		body.style.backgroundImage = "url("+imagesList[x]+")";
		console.log("X en entré: "+x)
		imageInterval = setInterval(changeImage,timer);
	}else {
		x=0;
		body.style.backgroundImage = "url("+imagesList[x]+")";
		console.log("X en entré: "+x)
		imageInterval = setInterval(changeImage,timer);
	}
}

function prevSlide() {
	clearInterval(imageInterval);
	x-=1;
	
	if (x==(-1)) {
		x=imagesList.length-1;
		body.style.backgroundImage = "url("+imagesList[x]+")";
		console.log("X en entré: "+x)
		imageInterval = setInterval(changeImage,timer);
	}else if (x==0) {
		body.style.backgroundImage = "url("+imagesList[x]+")";
		console.log("X en entré: "+x)
		imageInterval = setInterval(changeImage,timer);
	}else{
		body.style.backgroundImage = "url("+imagesList[x]+")";
		console.log("X en entré: "+x)
		imageInterval = setInterval(changeImage,timer);
	}
}




