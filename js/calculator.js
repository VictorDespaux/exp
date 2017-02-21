var maxLength = 20;

function ajoutNombre(button){
	if (document.calculator.display.value.length >= maxLength) {document.calculator.display.value = "Sorry, too long :(   Press 'C'";}
	else {document.calculator.display.value += button;}
}


function egal(){
	if (document.calculator.display.value.length >= maxLength) {document.calculator.display.value = "Sorry, too long :(   Press 'C'";}
	else{document.calculator.display.value = eval(document.calculator.display.value);}
}

function reinit(){
  document.calculator.display.value = '';
}


