

// menu
$(document).ready(function() {
    $('.menuBtn').click(function() {
      $('.fullMenu').toggleClass('activar');
    }); 
});

function stateMenu() {
    var x = document.querySelector(".menuBtn__txt");
    if (x.innerHTML === "Menu") {
        x.innerHTML = "Cerrar";
    } else {
        x.innerHTML = "Menu";
    }
}
//EDAD
var birth = 1986;
var actual = new Date().getFullYear();
var edad = actual - birth;
document.getElementById('edad').innerHTML = edad;

//REFERENCIAS
function referencia(este){
    var foto = este.querySelector('.thumReferencia').src;
    var fotoModal = document.getElementById('fotoReferencia');
    var nombre = este.querySelector('.nombreReferido').innerHTML;
    var nombreModal = document.getElementById('nameReferenciaModal');
    var texto = este.querySelector('.referencia').textContent;
    var textoModal = document.getElementById('txtReferenciaModal');
     //PINTAR EN MODAL
     fotoModal.src = foto;
     nombreModal.innerHTML = nombre;
     textoModal.innerHTML = texto;
   }
//PORTAFOLIO
function verPieza(mostrar){
    document.querySelector('.verPiezas').classList.add("activar");
    var fotoR = mostrar.querySelector('.thumb').src;
    var fotoM = document.getElementById('piezaFull');
    var descriR = mostrar.querySelector('.descripcion').textContent;
    var descripM = document.getElementById('descipcionPieza');
    var titleR = mostrar.querySelector('.titulo').textContent;
    var titleM = document.getElementById('namePieza');
    var linkR = mostrar.querySelector('.link').textContent;
    var linkM = document.getElementById('linkPieza');
     //PINTAR EN MODAL
     fotoM.src = fotoR;
     descripM.innerHTML = descriR;
     titleM.innerText = titleR;
     linkM.href = linkR;
      //boton Ver
     if(linkR == ''){
        linkM.style.display = 'none';
     }else{
        linkM.style.display = 'block';
    };
}

function volver(){
     var btn =  document.getElementById('volverA').parentElement;
    btn.classList.remove("activar");
}

