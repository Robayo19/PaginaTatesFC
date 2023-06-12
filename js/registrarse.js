let div, p1, body, a, formularios;
body = document.getElementsByTagName("body")[0];
var main = document.getElementsByTagName("main")[0];
formularios = document.forms;

function validarEmail() {
    let email = formularios[0]["elements"]["correo_electronico"]["value"];
    let expresion = /^\S\w{4,}@\S[a-zA-Z0-9.]{4,}\.[a-zA-Z]{2,}$/;
    c1 = document.getElementById("inputemail");

    if (expresion.test(email)) {
        document.getElementById("equis").style.visibility = "hidden";
        c1.style.border = "2px solid green";
    } else {
        c1.style.border = "2px solid red";
        c1.style.animation = "vibrar 0.3s"
        document.getElementById("equis").style.visibility = "visible";
    }
}
function validarContra1() {
    let contrasena = formularios[0]["elements"]["contraseña"]["value"];
    let expresion = /(=?.*[A-Z]+)(=?.*[a-z]+)(=?.*\d{2})(=?.*[-_+.]+)/;
    c1 = document.getElementById("inputpassword");
    if (contrasena.length > 10) {
        if (expresion.test(contrasena)) {
            document.getElementById("equis2").style.visibility = "hidden";
            c1.style.border = "2px solid green";
        } else {
            c1.style.border = "2px solid red";
            c1.style.animation = "vibrar 0.3s";
            document.getElementById("equis2").style.visibility = "visible";
        }
    } else {
        c1.style.border = "2px solid red";
        c1.style.animation = "vibrar 0.3s"
        document.getElementById("equis2").style.visibility = "visible";
    }
}
function validarContra2() {
    let contra1 = formularios[0]["elements"]["contraseña"]["value"];
    let contra2 = formularios[0]["elements"]["pass2"]["value"];
    let span = document.getElementById("mal");
    c1 = document.getElementById("inputpassword2");
    if (contra1 != contra2) {
        span.style.visibility = "visible"
        span.style.animation = "vibrar 0.3s"
        span.style.color = "red"
        c1.style.border = "2px solid red";
    } else {
        c1.style.border = "2px solid green";
        span.style.visibility = "hidden";
    }
}
function validarnum() {
    let valor = formularios[0]["elements"]["numero"]["value"];
    let expresion = /^\d{9}$/;
    c1 = document.getElementById("numeros");
    if (expresion.test(valor)) {
        document.getElementById("equis5").style.visibility = "hidden";
        c1.style.border = "2px solid green";
    } else {
        c1.style.border = "2px solid red";
        c1.style.animation = "vibrar 0.3s"
        document.getElementById("equis5").style.visibility = "visible";
    }
}

function validarEdad() {
    let correcto = false;
    let edad = formularios[0]["elements"]["edad"]["value"];
    c1 = document.getElementById("fecha");
    if (parseInt(edad) >= 18) {
        document.getElementById("equis6").style.visibility = "hidden";
        c1.style.border = "2px solid green";
        correcto = true;
    } else {
        c1.style.border = "2px solid red";
        c1.style.animation = "vibrar 0.3s";
        document.getElementById("equis6").style.visibility = "visible";
        correcto = false;
    }
    return correcto;
}
function verifica() {
    let email = formularios[0]["elements"]["correo_electronico"]["value"];
    let expresion = /^\S\w{4,}@\S[a-zA-Z0-9.]{4,}\.[a-zA-Z]{2,}$/;

    let contra1 = formularios[0]["elements"]["contraseña"]["value"];
    let expresion1 = /(=?.*[A-Z]+)(=?.*[a-z]+)(=?.*\d{2})(=?.*[-_+.]+)/;

    let contra2 = formularios[0]["elements"]["pass2"]["value"];

    let num = formularios[0]["elements"]["numero"]["value"];
    let expresion3 = /^\d{9}$/;

    if (expresion.test(email) && expresion1.test(contra1) && contra1 == contra2 && expresion3.test(num) && validarFecha() ) {
        document.getElementById("boton").setAttribute("type", "submit");
        document.getElementById("boton").style.backgroundColor = "#fff";
        document.getElementById("boton").style.color = "rgb(4, 35, 61)";
    } else {
        alert("Algun campo no es correcto");
        document.getElementById("boton").style.backgroundColor = "red";
    }
}