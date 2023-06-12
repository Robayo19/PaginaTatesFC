<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Vera, Juan Robayo y David Chavarría">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/register.css">
    <link rel="stylesheet" href="../../fontawesome-free-6.2.1-web/css/all.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/emblema.png">
    <title>TATES FC</title>
</head>

<body>
    <img src="../../Imagenes/emblema.png" id="imagen">
    <main>
        <p class="titulo">REGISTRO</p>
        <form action = "../Usuarios/saveUsuario2.php" method= "POST">
            <div class="persona">
                <div class="nombre">
                    <i class="fa-solid fa-user"></i>
                    <input type="text"  name="nombre" placeholder="Nombre" id="inputnombre">
                </div>
                <div class="apellido">
                    <i class="fa-solid fa-user"></i>
                    <input type="text"  name="apellido" placeholder="Apellidos" id="inputapellido">
                </div>
            </div>
            <div class="numero">
                <i class="fa-sharp fa-solid fa-phone"></i>
                <input type="text" placeholder="Número: XXX XXX XXX" name="numero" id="numeros" onblur="validarnum()">
                <img src="../../Imagenes/equis.png" id="equis5">
            </div>
            <div class="direccion">
            <i class="fa-sharp fa-solid fa-location-dot"></i>
                <input type="text" name="direccion" placeholder="Dirección" id="inputdireccion">
                <img src="../../Imagenes/equis.png" id="equis4">
            </div>
            <div class="fecha">
                <i class="fa-solid fa-calendar-days"></i>
                <input type="text" name="edad" id="fecha" placeholder="Escribe tu edad (+18 años)" onblur="validarEdad()">
                <img src="../../Imagenes/equis.png" id="equis6">
            </div>
            <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" placeholder="Email" name="correo_electronico" id="inputemail" onblur="validarEmail()">
                <img src="../../Imagenes/equis.png" id="equis">
            </div>
            <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="contraseña" placeholder="Contraseña" id="inputpassword" onblur="validarContra1()">
                <img src="../../Imagenes/equis.png" id="equis2">
                <p id="pide">Debe contener al menos: Una mayuscula, una minúscula, dos numeros seguidos,
                    algún caracter raro("- _ . +")
                </p>
            </div>
            <div class="password2">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="pass2" placeholder="Confirma Contraseña" id="inputpassword2" onblur="validarContra2()">
                <img src="../../Imagenes/equis.png" id="equis3">
                <span id="mal">Las contraseñas<br> no coinciden</span>
            </div>
            <div class="check">
                <input type="checkbox">
                <p>Estoy de acuerdo con <a href="https://policies.google.com/?hl=es" id="link2"><strong>Privacidad y
                            términos</strong></a></p>
            </div>
            <button id="boton" onmouseover="verifica()">REGISTRARSE</button>
        </form>
        
    </main>
</body>
<script src="../../js/registrarse.js"></script>

</html>