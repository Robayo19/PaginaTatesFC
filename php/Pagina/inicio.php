<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Vera, Juan Robayo y David Chavarría">
    <meta name="description" content="Página web oficial de TATES FC">
    <meta name="keywords"
        content="TATES, FUTBOL, FUTBOL7, BALON, JUGADORES, ENTRENADOR, PORTERO, TATESFC, IMF, IMF SMART EDUCATION, PROYECTO, ESTADIO, BOTAS">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/inicio.css">
    <link rel="stylesheet" href="../../fontawesome-free-6.2.1-web/css/all.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/emblema.png">
    <title>TATES FC</title>
</head>

<body>
    <nav>
        <a href="inicio.php" id="inc">
            <li><i class="fa-solid fa-house"></i><br>Inicio</li>
        </a>
        <a href="plantilla.php">
            <li><i class="fa-solid fa-futbol"></i><br>Plantilla</li>
        </a>
        <a href="tienda.php">
            <li><i class="fa-solid fa-shop"></i><br>Tienda TFC</li>
        </a>
        <a href="pruebasacceso.php">
            <li><i class="fa-brands fa-wpforms"></i><br>Pruebas de acceso</li>
        </a>
        <div class="dropdown">
            <button class="dropbtn"><i class="fa-solid fa-user"></i><br>
                <?php
                session_start();
                if(isset($_SESSION['user'])){
                    if($_SESSION['user']['id_rol'] ==2){
                        echo "¡ Hola " . $_SESSION['user']['nombre'] . " !" ;
                        echo "</button>";
                        echo"<div class='dropdown-content'>";
                        echo "<a href='logout.php'>Cerrar Sesion</a>";
                        echo "</div>";
                    }else{
                        echo "¡ Hola " . $_SESSION['user']['nombre'] . " !" ;
                        echo "</button>";
                        echo"<div class='dropdown-content'>";
                        echo "<a href='logout.php'>Cerrar Sesion</a>";
                        echo "<a href='admin.php'>Ir a Admin</a>";
                        echo "</div>";
                    }
                  }else{
                    echo "¡ Inicia Sesión !";
                    echo "</button>";
                    echo"<div class='dropdown-content'>";
                    echo "<a href='login.php'>Crea tu cuenta</a>";
                    echo "</div>";
                  }
                ?>
    </nav>
    
    <header>
        <div class="imgContainer">
            <img class="foto1" src="https://madridfutbol7.es/wp-content/uploads/2022/08/Tates-FC-Madridfutbol7.jpg"
                alt="TATES FC">
        </div>
        </div>
        <div class="bloque1">
            <div class="caja1">
                <h1>CLASIFICACION DEL EQUIPO</h1>
            </div>
        </div>
    </header>
    <div class="flex-container">
        <table id="Clasificacion">
            <thead>
                <tr>
                    <th>Posición</th>
                    <th>Equipo</th>
                    <th>Puntos</th>
                    <th>Ganados</th>
                    <th>Empatados</th>
                    <th>Perdidos</th>
                    <th>G.F</th>
                    <th>G.C</th>
                    <th>D.G</th>
                    <th>Último partido</th>
                    <th>Próximo rival</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tates FC</td>
                    <td>38</td>
                    <td>12</td>
                    <td>2</td>
                    <td>0</td>
                    <td>82</td>
                    <td>31</td>
                    <td>51</td>
                    <td>V</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Host Partners</td>
                    <td>32</td>
                    <td>10</td>
                    <td>2</td>
                    <td>2</td>
                    <td>49</td>
                    <td>23</td>
                    <td>26</td>
                    <td>V</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Aston Birra</td>
                    <td>30</td>
                    <td>9</td>
                    <td>3</td>
                    <td>2</td>
                    <td>46</td>
                    <td>27</td>
                    <td>19</td>
                    <td>V</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Bayern del Tiétar</td>
                    <td>27</td>
                    <td>9</td>
                    <td>0</td>
                    <td>5</td>
                    <td>53</td>
                    <td>35</td>
                    <td>18</td>
                    <td>D</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Da Breis</td>
                    <td>27</td>
                    <td>8</td>
                    <td>3</td>
                    <td>3</td>
                    <td>49</td>
                    <td>31</td>
                    <td>19</td>
                    <td>V</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>FC Albufeira</td>
                    <td>25</td>
                    <td>8</td>
                    <td>1</td>
                    <td>5</td>
                    <td>58</td>
                    <td>43</td>
                    <td>15</td>
                    <td>D</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>7</td>
                    <td>Lito FC</td>
                    <td>23</td>
                    <td>7</td>
                    <td>2</td>
                    <td>5</td>
                    <td>56</td>
                    <td>52</td>
                    <td>4</td>
                    <td>D</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>8</td>
                    <td>Eiches FC</td>
                    <td>19</td>
                    <td>6</td>
                    <td>1</td>
                    <td>7</td>
                    <td>57</td>
                    <td>51</td>
                    <td>6</td>
                    <td>E</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>9</td>
                    <td>Rayo Vayacaño</td>
                    <td>19</td>
                    <td>6</td>
                    <td>1</td>
                    <td>7</td>
                    <td>62</td>
                    <td>67</td>
                    <td>-5</td>
                    <td>D</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>10</td>
                    <td>Bunker Brokers</td>
                    <td>17</td>
                    <td>5</td>
                    <td>2</td>
                    <td>7</td>
                    <td>46</td>
                    <td>57</td>
                    <td>-11</td>
                    <td>V</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>11</td>
                    <td>Verlangas FC</td>
                    <td>13</td>
                    <td>4</td>
                    <td>1</td>
                    <td>9</td>
                    <td>37</td>
                    <td>58</td>
                    <td>-21</td>
                    <td>D</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Jagger de Múnich</td>
                    <td>9</td>
                    <td>3</td>
                    <td>0</td>
                    <td>11</td>
                    <td>29</td>
                    <td>50</td>
                    <td>-21</td>
                    <td>D</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>13</td>
                    <td>Inter Atocha</td>
                    <td>9</td>
                    <td>2</td>
                    <td>3</td>
                    <td>9</td>
                    <td>38</td>
                    <td>71</td>
                    <td>-33</td>
                    <td>E</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>14</td>
                    <td>Superbebientes</td>
                    <td>7</td>
                    <td>1</td>
                    <td>4</td>
                    <td>9</td>
                    <td>0</td>
                    <td>2</td>
                    <td>-2</td>
                    <td>D</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>15</td>
                    <td>Jontus FC</td>
                    <td>7</td>
                    <td>2</td>
                    <td>1</td>
                    <td>11</td>
                    <td>34</td>
                    <td>75</td>
                    <td>-41</td>
                    <td>V</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="cosas">

        <a href="https://www.instagram.com/tates.fc/?hl=es">
            <img class="redes" src="../../Imagenes/insta.png" alt="Instagram">
        </a>
        <a href="https://twitter.com/fctates">
            <img class="redes" src="https://cdn-icons-png.flaticon.com/512/4096/4096132.png" alt="Twitter">
        </a>
        <a href="https://www.youtube.com/@madridfutbol7574">
            <img class="redes" src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-5-2.png"
                alt="Youtube">
        </a>
    </div>
</body>
<footer>
    <div>
        <p id="ptr">PATROCINADORES</p>
        <div class="patro">
            <img class="patrocinadores" src="https://mercadona.es/web-display-img.png" alt="Mercadona">
            <img class="patrocinadores"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Burger_King_logo_%281999%29.svg/2024px-Burger_King_logo_%281999%29.svg.png"
                alt="Burger King">
            <img id="foto3" class="patrocinadores" src="../../Imagenes/aguardiente.png" alt="Aguardiente Antioqueño">
        </div>

    </div>
    <div class="mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.2809767285867!2d-3.6801488842823917!3d40.46904856037911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228eb37e45ebd%3A0x9bfa83f7479125e0!2sColegio%20Nuestra%20Se%C3%B1ora%20del%20Recuerdo!5e0!3m2!1ses!2ses!4v1680277686820!5m2!1ses!2ses"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <address><i class="fa-solid fa-location-dot"></i> Estamos en el campo de futbol El Recuerdo</address>
    </div>
</footer>


<script>
    for (let i = 0; i < 165; i++) {
        let td = document.getElementsByTagName("td")[i];
        if (td.innerHTML == "V") {
            td.style.color = "lightgreen"
        } else if (td.innerHTML == "D") {
            td.style.color = "red"
        } else if (td.innerHTML == "E") {
            td.style.color = "yellow"
        }
    }
</script>

</html>