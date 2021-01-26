// menu
$(document).ready(function() {
    $(".menu").click(function() {
        $(".full-menu").toggleClass("activar");
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