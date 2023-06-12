<?php
class Database
{
    public static function conectar(){
        $driver = "mysql";
        $host = "127.0.0.1";
        $port = "3306";
        $user = "root";
        $password = "";
        $db = "pfc";

        $dns = "$driver:dbname=$db;host=$host;port=$port";

        try {
            $gbd = new PDO($dns, $user, $password);
        } catch (PDOException $e) {
            echo "Error: fallo en la conexión" . $e->getMessage();
        }
        return $gbd;
    }
    //-------------------------------SECCION USUARIOS---------------------------------------------------------------------
    public static function getAllUsuarios() {
        /*
            1. Conecta
            2. Realiza la query
        */
        $sql = "SELECT * FROM 5_usuarios";

        $resultado1 = self::conectar()->query($sql);

        return $resultado1;
    }
    public static function getUsuarioId($id) {
        $sql = "SELECT * FROM 5_Usuarios WHERE id = $id";
        $resultado = self::conectar()->query($sql);

        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
    //Funcion que inserta valores en la tabla
    //$Datos recibe los elementos de los ordenadores
    public static function saveUsuario($datos){
        $sql = "INSERT INTO 5_usuarios (nombre, apellido, numero, direccion, edad, correo_electronico, contraseña ,id_rol) VALUES ('$datos[0]', '$datos[1]', $datos[2],'$datos[3]', $datos[4], '$datos[5]', '$datos[6]', $datos[7])";
        self::conectar()->exec($sql);

    }
    public static function saveUsuario2($datos1){
        $sql = "INSERT INTO 5_usuarios (nombre, apellido, numero, direccion, edad, correo_electronico, contraseña, id_rol) VALUES ('$datos1[0]', '$datos1[1]', $datos1[2],'$datos1[3]', $datos1[4], '$datos1[5]', '$datos1[6]', 2)";
        self::conectar()->exec($sql);
    }
    public static function updateUsuario($datos) {
        $sql = "UPDATE pfc.5_usuarios SET nombre = '$datos[1]' , apellido = '$datos[2]', numero= $datos[3], direccion='$datos[4]', edad=$datos[5], correo_electronico = '$datos[6]', contraseña = '$datos[7]', id_rol= $datos[8] WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }
    public static function deleteUsuario($id) {
        $sql = "DELETE  FROM 5_usuarios WHERE id = $id";
        self::conectar()->exec($sql);

    }
    //-------------------------------SECCION PRODUCTOS---------------------------------------------------------------------
    public static function getAllProductos(){
        $sql = "SELECT * FROM 5_Productos";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    public static function getProductoId($id) {
        $sql = "SELECT * FROM 5_productos WHERE id = $id";
        $resultado = self::conectar()->query($sql);

        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    public static function saveProductos($datos){
        $sql = "INSERT INTO 5_productos (nombre, precio, stock) VALUES ('$datos[0]', $datos[1], $datos[2])";
        self::conectar()->exec($sql);

    }

    public static function updateProductos($datos) {
        $sql = "UPDATE 5_productos SET nombre = '$datos[1]' , precio = $datos[2], stock= '$datos[3]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);

    }
    public static function deleteProducto($id) {
        $sql = "DELETE  FROM 5_productos WHERE id = $id";
        self::conectar()->exec($sql);

    }

    //-------------------------------SECCION PEDIDOS---------------------------------------------------------------------
    public static function getAllPedidos(){
        $sql = "SELECT * FROM 5_Pedidos";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }
    public static function getPedidoId($id) {
        $sql = "SELECT * FROM 5_Pedidos WHERE id = $id";
        $resultado = self::conectar()->query($sql);

        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
    public static function savePedido($datos){
        $sql = "INSERT INTO 5_Pedidos (id_producto, id_usuario, cantidad, fecha_envio, fecha_entrega) VALUES ($datos[0], $datos[1], $datos[2], '$datos[3]', '$datos[4]')";
        self::conectar()->exec($sql);

    }
    public static function updatePedido($datos) {
        $sql = "UPDATE 5_Pedidos SET cantidad = $datos[1] WHERE id = $datos[0]";
        self::conectar()->exec($sql);

    }
    public static function deletePedido($id) {
        $sql = "DELETE  FROM 5_Pedidos WHERE id = $id";
        self::conectar()->exec($sql);

    }
    //-------------------------------SECCION ROL---------------------------------------------------------------------
    public static function getAllRol(){
        $sql = "SELECT * FROM 5_Rol";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }
    public static function saveRol($datos){
        $sql = "INSERT INTO 5_Rol (nombre) VALUES ('$datos[0]')";
        self::conectar()->exec($sql);
    }
    public static function deleteRol($id){
        $sql = "DELETE  FROM 5_rol WHERE id = $id";
        self::conectar()->exec($sql);

    }
    //-------------------------------SECCION JUGADORES---------------------------------------------------------------------
    public static function getAllJugadores() {
        $sql = "SELECT * FROM 5_Jugadores";
        $resultado1 = self::conectar()->query($sql);

        return $resultado1;
    }

    public static function getJugadorId($id){
        $sql = "SELECT * FROM 5_jugadores WHERE id = $id";
        $resultado = self::conectar()->query($sql);

        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
    public static function saveJugador($datos){
        $sql = "INSERT INTO 5_jugadores (nombre, apellido, dorsal, posicion) VALUES ('$datos[0]', '$datos[1]', $datos[2], '$datos[3]')";
        self::conectar()->exec($sql);

    }

    public static function updateJugador($datos){
        $sql = "UPDATE 5_jugadores SET nombre = '$datos[1]' , apellido = '$datos[2]', dorsal = $datos[3] , posicion = '$datos[4]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);

    }
    public static function deleteJugador($id){
        $sql = "DELETE  FROM 5_jugadores WHERE id = $id";
        self::conectar()->exec($sql);

    }

    /**--------------------------------SECCION LOGIN------------------------------ */
    public static function login($email, $password){

        $sql = "SELECT * FROM 5_usuarios WHERE correo_electronico='$email' AND contraseña='$password'";
        $user = self::conectar()->query($sql);

        if($user != null){
            return $user->fetch(PDO::FETCH_ASSOC);
        }else{
            return null;
        }
        
    }
}

?>