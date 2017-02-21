timer = 3000;
imageInterval = setInterval(changeImage,timer);
var x = 0;

var imageClass = document.getElementsByClassName('image-slider');




function changeImage(){
	imageClass[x].className = 'image-slider';
	x+=1;
	if (x<imageClass.length) {
		imageClass[x].className = 'image-slider show';
	}else{
		x=0;
		imageClass[x].className = 'image-slider show';
	}
}


function nextSlide() {
	clearInterval(imageInterval);
	imageClass[x].className = 'image-slider';
	x+=1;
	if (x<imageClass.length) {
		imageClass[x].className = 'image-slider show';
		imageInterval = setInterval(changeImage,timer);
	}else{
		x=0;
		imageClass[x].className = 'image-slider show';
		imageInterval = setInterval(changeImage,timer);
	}
}

function prevSlide () {
	clearInterval(imageInterval);
	imageClass[x].className = 'image-slider';
	x-=1;
	if (x==(-1)) {
		x=imageClass.length-1;
		imageClass[x].className = 'image-slider show'
		imageInterval = setInterval(changeImage,timer);
	}else if (x==0) {
		imageClass[x].className = 'image-slider show'
		imageInterval = setInterval(changeImage,timer);
	}else{
		imageClass[x].className = 'image-slider show'
		imageInterval = setInterval(changeImage,timer);
	}
}




