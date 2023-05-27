document.getElementById("btn_iniciar-sesion").addEventListener("click", IniciodeSesion);
document.getElementById("btn_Registrarese").addEventListener("click", registro);
window.addEventListener("resize", anchoPagina);


//Declaracion de variables
var contenedor_Registro_IniciodeSesion = document.querySelector(".contenedor_Registro-IniciodeSesion");
var formulario_IniciodeSesion = document.querySelector(".formulario_IniciodeSesion");
var formulario_Registro = document.querySelector(".formulario_Registro");
var caja_trasera_IniciodeSesion = document.querySelector(".caja_trasera-IniciodeSesion");
var caja_trasera_Registro = document.querySelector(".caja_trasera-Registro");


function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_IniciodeSesion.style.display = "block";
        caja_trasera_Registro.style.display = "block";
    }else{
        caja_trasera_Registro.style.display = "block";
        caja_trasera_Registro.style.opacity = "1";
        caja_trasera_IniciodeSesion.display = "none";
        formulario_IniciodeSesion.style.display = "block";
        formulario_Registro.style.display = "none";
        contenedor_Registro_IniciodeSesion.style.left = "0px";
    }
}

anchoPagina();

function IniciodeSesion(){
    if(window.innerWidth > 850){
        formulario_Registro.style.display = "none";
        contenedor_Registro_IniciodeSesion.style.left = "10px";
        formulario_IniciodeSesion.style.display = "block";
        caja_trasera_Registro.style.opacity = "1";
        caja_trasera_IniciodeSesion.style.opacity = "0";
    }else{
        formulario_Registro.style.display = "none";
        contenedor_Registro_IniciodeSesion.style.left = "0px";
        formulario_IniciodeSesion.style.display = "block";
        caja_trasera_Registro.style.display = "block";
        caja_trasera_IniciodeSesion.style.display = "none";
    }

}
function registro(){

    if(window.innerWidth > 850){
        formulario_Registro.style.display = "block";
        contenedor_Registro_IniciodeSesion.style.left = "410px";
        formulario_IniciodeSesion.style.display = "none";
        caja_trasera_Registro.style.opacity = "0";
        caja_trasera_IniciodeSesion.style.opacity = "1";
    }else{
        formulario_Registro.style.display = "block";
        contenedor_Registro_IniciodeSesion.style.left = "0px";
        formulario_IniciodeSesion.style.display = "none";
        caja_trasera_Registro.style.display = "none";
        caja_trasera_IniciodeSesion.style.display = "block";
        caja_trasera_IniciodeSesion.style.opacity = "1";
    }
}
