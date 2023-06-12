let email, p, contrasena, p2, arriba, abajo, c1, input1, input2;
let formularios = document.forms;

input1 = document.getElementById("username");
input2 = document.getElementById("contra");
arriba = document.getElementsByClassName("text1")[0];
abajo = document.getElementsByClassName("text2")[0];

p = document.createElement("p");
p2 = document.createElement("p");

//Función que valida Email
//Si el email es uno de los admins el botón te llevará a la pagina de los admins, donde está toda la info
//Si no, te lleva a la pagina principal

/**
 *  _____t1______@_____t2_____.___t3___-
 * 
 * Tramo 1: no espacios, cualquier caracter, longitud >4
 * Arroba
 * Tramos 2: no espacios, solo letras min, mayus, numeros y puntos, longitud >4
 * Punto
 * Tramos 3: no espacios, solo letras y no numeros y longitud >1
 */
function validar() {
    let email = formularios[0]["elements"]["user"]["value"];
    let expresion = /^\S\w{4,}@\S[a-zA-Z0-9.]{4,}\.[a-zA-Z]{2,}$/;
    c1 = document.getElementsByClassName("email")[0];
    if (expresion.test(email)) {
        p.textContent = "Email válido";
        p.style.color = "green";
        p.style.fontSize = "13px";
        input1.style.borderBottom = "2px solid green";
        input1.style.borderRight = "2px solid green";
        arriba.appendChild(p);
    } else {
        p.textContent = "Email Inválido";
        p.style.color = "red";
        input1.style.borderBottom = "2px solid red";
        input1.style.borderRight = "2px solid red";
        p.style.fontSize = "13px";
        arriba.appendChild(p);
        c1.style.animation = "vibrar 0.3s"
    }
}
//Validar Contraseña
/*  Una Mayuscula
*    Una Minuscula
*    Dos digitos seguidos
*    Debe de tener un signo de los siguientes - _ . +
*    Longitud > 10
*/
function validar2() {
    let contrasena = formularios[0]["elements"]["pass"]["value"];
    let expresion = /(=?.*[A-Z]+)(=?.*[a-z]+)(=?.*\d{2})(=?.*[-_+.]+)/;
    c1 = document.getElementsByClassName("contraseña")[0];
    if (contrasena.length > 10) {
        if (expresion.test(contrasena)) {
            p2.textContent = "Contraseña válida";
            p2.style.color = "green";
            p2.style.fontSize = "13px";
            input2.style.borderBottom = "2px solid green";
            input2.style.borderRight = "2px solid green";
            abajo.appendChild(p2);
        } else {
            p2.textContent = "Contraseña Inválida";
            p2.style.color = "red";
            input2.style.borderBottom = "2px solid red";
            input2.style.borderRight = "2px solid red";
            p2.style.fontSize = "13px";
            abajo.appendChild(p2);
            c1.style.animation = "vibrar 0.3s"
        }
    } else {
        p2.textContent = "Debe contener más de 10 caracteres";
        p2.style.color = "red";
        input2.style.borderBottom = "2px solid red";
        input2.style.borderRight = "2px solid red";
        p2.style.fontSize = "13px";
        abajo.appendChild(p2);
        c1.style.animation = "vibrar 0.3s"
    }
}