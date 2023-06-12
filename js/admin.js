let botonusuario= document.getElementById("botonusuario");
    let botonproducto = document.getElementById("botonproducto");
    let botonusuarioproducto = document.getElementById("botonusuarioproducto");
    let botonrol = document.getElementById("botonrol");
    let botonjugadores = document.getElementById("botonjugadores");

    let usuariosdiv = document.getElementsByClassName("usuariosdiv")[0];
    let productosdiv = document.getElementsByClassName("productosdiv")[0];
    let usuarios_has_productosdiv = document.getElementsByClassName("usuarios_has_productosdiv")[0];
    let roldiv = document.getElementsByClassName("roldiv")[0];
    let jugadoresdiv = document.getElementsByClassName("jugadoresdiv")[0];
function user(){
    usuariosdiv.style.display = "flex";
    productosdiv.style.display = "none";
    usuarios_has_productosdiv.style.display = "none";
    roldiv.style.display = "none";
    jugadoresdiv.style.display = "none";

    botonusuario.style.border = "4px solid #030305";
    botonproducto.style.border = "0px";
    botonusuarioproducto.style.border = "0px";
    botonrol.style.border = "0px";
    botonjugadores.style.border = "0px";
}
function product(){
    
    usuariosdiv.style.display = "none";
    productosdiv.style.display = "flex";
    usuarios_has_productosdiv.style.display = "none";
    roldiv.style.display = "none";
    jugadoresdiv.style.display = "none";

    botonusuario.style.border = "0px";
    botonproducto.style.border = "4px solid #030305";
    botonusuarioproducto.style.border = "0px";
    botonrol.style.border = "0px";
    botonjugadores.style.border = "0px";
}
function userproduct(){
    usuariosdiv.style.display = "none";
    productosdiv.style.display = "none";
    usuarios_has_productosdiv.style.display = "flex";
    roldiv.style.display = "none";
    jugadoresdiv.style.display = "none";

    botonusuario.style.border = "0px";
    botonproducto.style.border = "0px";
    botonusuarioproducto.style.border = "4px solid #030305";
    botonrol.style.border = "0px";
    botonjugadores.style.border = "0px";
}
function rol(){
    usuariosdiv.style.display = "none";
    productosdiv.style.display = "none";
    usuarios_has_productosdiv.style.display = "none";
    roldiv.style.display = "flex";
    roldiv.style.height="65vh";
    jugadoresdiv.style.display = "none";
    

    botonusuario.style.border = "0px";
    botonproducto.style.border = "0px";
    botonusuarioproducto.style.border = "0px";
    botonrol.style.border = "4px solid #030305";
    botonjugadores.style.border = "0px";
}
function jugadores(){
    usuariosdiv.style.display = "none";
    productosdiv.style.display = "none";
    usuarios_has_productosdiv.style.display = "none";
    roldiv.style.display = "none";
    jugadoresdiv.style.display = "flex";

    botonusuario.style.border = "0px";
    botonproducto.style.border = "0px";
    botonusuarioproducto.style.border = "0px";
    botonrol.style.border = "0px";
    botonjugadores.style.border = "4px solid #030305";
}