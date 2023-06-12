<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Vera, Juan Robayo y David Chavarría">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/emblema.png">

    <title>TATES FC</title>
</head>

<body>
    <main>
        <div class="izquierda">
            <div class="preguntacontainer">
                <p id="pregunta">¡BIENVENIDO!</p>
                <img src="../../Imagenes/camisetalocal.jpg" id="portada">

            </div>

            <div class="registrar">
                <p id="register">Registrarse</p>
                <a href="registro.php" id="p2">No estoy registrado aún</a>
            </div>
        </div>

        <div class="derecha">
            <div class="login">
                <p>INICIAR SESIÓN</p>
            </div>

            <form action="comprobar.php" method="post">
                <div class="email">
                    <input type="text" name="user" id="username" placeholder="Email" onblur="validar()">
                    <span class="text1"></span>
                </div>
                
                <div class="contraseña">
                    <input type="password" name="pass" id="contra" placeholder="Contraseña" onblur="validar2()">
                    <p id="pide">Debe contener al menos: Una mayuscula, una minúscula, dos numeros seguidos,
                        algún caracter raro("- _ . +")
                    </p>
                    <span class="text2"></span>
                </div>
                    <button type="submit" id="boton">LOGIN</button>
            </form>
            <div class="check">
                <a href="" id="link">¿Has olvidado la contraseña?</a>
            </div>
    </main>
</body>
<script src="../../js/login.js"></script>

</html>