// menu
$(document).ready(function() {
    $(".menu").click(function() {
        $(".fullMenu").toggleClass("activar");
    });
    $(".verRedes").click(function() {
        $(".redesMenu").toggle();
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