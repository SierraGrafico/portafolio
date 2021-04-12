

// menu
$(document).ready(function() {
    $('.menuBtn').click(function() {
      $('.fullMenu').toggleClass('activar');
    }); 
});

function stateMenu() {
    var x = document.querySelector(".menuTxt");
    if (x.innerHTML === "Menu") {
        x.innerHTML = "Cerrar";
    } else {
        x.innerHTML = "Menu";
    }
}
//edad
var birth = 1986;
var actual = new Date().getFullYear();
var edad = actual - birth;
document.getElementById('edad').innerHTML = edad;