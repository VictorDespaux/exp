console.log("Salut Victor, je suis du Javascript");

nom = "Voici une string par la variable 'nom'";

console.log(nom)


//calcul = prompt("Veuillez entrer quelquechose");
//document.write("Voici ce que vous avez entré: "+calcul)


document.getElementById("click");
i=0
click.onclick=function(){i++;alert(i)}


document.getElementById("hover");
hover.onmouseover=function(){hover.style.position = 'absolute';hover.style.top = ((Math.random() * 100) + 1);hover.style.left = ((Math.random() * 100) + 1);console.log("hovered")}




/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}