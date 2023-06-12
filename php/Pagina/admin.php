<?php
require_once("../Database/Database.php");
$resultado0 = Database::getAllUsuarios();
$resultado1 = Database::getAllProductos();
$resultado2 = Database::getAllPedidos();
$resultado3 = Database::getAllRol();
$resultado4 = Database::getAllJugadores();

session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']['id_rol'] ==2){
      header('Location: inicio.php');
    }else{
      //Todo correcto
    }
  }else{
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon"
        href="../../Imagenes/emblema.png">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../../css/admin.css">
</head>
<body>
<nav class="navbar">
      <div class="user-profile">
        <a href="#" class="username" id="dropdownMenuLink"><?php echo "¡Hola " . $_SESSION['user']['nombre'] . "!" ?><i class="fas fa-caret-down"></i></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
          <a class="dropdown-item" href="inicio.php">Ir a inicio</a>
        </div>
      </div>
    </nav>
  </header>
    <div class="titulo1">
         <p id="titulo2">TABLAS</p>
    </div>
    <div class="botonesdiv">
        <p id="botonusuario" onclick="user()">Usuarios</p>
        <p id="botonproducto" onclick="product()">Productos</p>
        <p id="botonusuarioproducto" onclick="userproduct()">Pedidos</p>
        <p id="botonrol" onclick="rol()">Rol</p>
        <p id="botonjugadores" onclick="jugadores()">Jugadores</p>
    </div>
    <div class="usuariosdiv">
    <p class="encabezado">USUARIOS</p>
    <a href='../Usuarios/createUsuario.php' class="botonesphp" id="botonarriba">USUARIO NUEVO</a>
    <table class="container" id="usertable">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Apellido</h1></th>
                <th><h1>Numero</h1></th>
                <th><h1>Direccion</h1></th>
                <th><h1>Edad</h1></th>
                <th><h1>Correo electrónico</h1></th>
                <th><h1>Contraseña</h1></th>
                <th><h1>id_Rol</h1></th>
                <th><h1>Acciones</h1></th>
            </tr>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado0 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["apellido"] . "</td>";
    echo "<td>" . $fila["numero"] . "</td>";
    echo "<td>" . $fila["direccion"] . "</td>";
    echo "<td>" . $fila["edad"] . "</td>";
    echo "<td>" . $fila["correo_electronico"] . "</td>";
    echo "<td>" . $fila["contraseña"] . "</td>";
    echo "<td>" . $fila["id_rol"] . "</td>";
    echo "<td> <a class='botonesphp' href='../Usuarios/editUsuario.php?id=" . $fila['id'] . " '>Editar</a><a class='botonesphp' href='../Usuarios/deleteUsuario.php?id=" . $fila['id'] . "'>Eliminar</a>
    </td>";
    echo "</tr>";
  }
  
     ?>
        </tbody>
    </table>
    </div>
    <div class="productosdiv">
    <p class="encabezado">PRODUCTOS</p>
    <a href='../Productos/createProducto.php' class="botonesphp" id="botonarriba">PRODUCTO NUEVO</a>
    <table class="container" id="product">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Precio</h1></th>
                <th><h1>Stock</h1></th>
                <th><h1>Acciones</h1></th>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado1 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["precio"] . "</td>";
    echo "<td>" . $fila["stock"] . "</td>";
    echo "<td> <a class='botonesphp' href='../Productos/editProducto.php?id=" . $fila['id'] . " '>Editar</a><a class='botonesphp' href='../Productos/deleteProducto.php?id=" . $fila['id'] . "'>Eliminar</a>
                    </td>";
    echo "</tr>";
  }
  
     ?>
        </tbody>
    </table>
    </div>
    <div class="usuarios_has_productosdiv">
    <p class="encabezado">PEDIDOS</p>
    <a href='../Pedidos/createPedido.php' class="botonesphp" id="botonarriba">PEDIDO NUEVO</a>
    <table class="container">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>IDProducto</h1></th>
                <th><h1>IDUsuario</h1></th>
                <th><h1>Cantidad</h1></th>
                <th><h1>Fecha de Envio</h1></th>
                <th><h1>Fecha de Entrega</h1></th>
                <th><h1>Acciones</h1></th>
            </tr>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado2 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["id_producto"] . "</td>";
    echo "<td>" . $fila["id_usuario"] . "</td>";
    echo "<td>" . $fila["cantidad"] . "</td>";
    echo "<td>" . $fila["fecha_envio"] . "</td>";
    echo "<td>" . $fila["fecha_entrega"] . "</td>";
    echo "<td> <a class='botonesphp' href='../Pedidos/editPedido.php?id=" . $fila['id'] . " '>Editar</a><a class='botonesphp' href='../Pedidos/deletePedido.php?id=" . $fila['id'] . "'>Eliminar</a>
                    </td>";
    echo "</tr>";
  }
  
     ?>
        </tbody>
    </table>
    </div>
    <div class="roldiv">
    <p class="encabezadoRol">ROL</p>
    <a href='../Rol/createRol.php' class="botonesphp" id="botonarriba">ROL NUEVO</a>
    <table class="container">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>Nombre Rol</h1></th>
                <th><h1>Acciones</h1></th>
            </tr>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado3 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td> <a class='botonesphp' href='../Rol/deleteRol.php?id=" . $fila['id'] . "'>Eliminar</a>
    </td>";
    echo "</tr>";
  }
     ?>
        </tbody>
    </table>
</div>
<div class="jugadoresdiv">
    <p class="encabezado">JUGADORES</p>
    <a href='../Jugadores/createJugador.php' class="botonesphp" id="botonarriba">JUGADOR NUEVO</a>
    <table class="container">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Apellido</h1></th>
                <th><h1>Dorsal</h1></th>
                <th><h1>Posicion</h1></th>
                <th><h1>Acciones</h1></th>
            </tr>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado4 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["apellido"] . "</td>";
    echo "<td>" . $fila["dorsal"] . "</td>";
    echo "<td>" . $fila["posicion"] . "</td>";
    echo "<td> <a class='botonesphp' href='../Jugadores/editJugador.php?id=" . $fila['id'] . " '>Editar</a><a class='botonesphp' href='../Jugadores/deleteJugador.php?id=" . $fila['id'] . "'>Eliminar</a>
    </td>";
    echo "</tr>";
  }
  
     ?>
        </tbody>
    </table>
    </div>
</body>
<script src="../../js/admin.js"></script>
</html>