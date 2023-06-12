<?php

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    require_once("../Database/Database.php");

    $resultado = Database::login($user, $pass);
    
    if($resultado == null){
        header("Location: login.php");
        
    }else{
        if($resultado['id_rol'] == 1){
            session_start();
            $_SESSION['user'] = $resultado;
            header("Location: admin.php");
        }else if($resultado['id_rol'] == 2){
            session_start();
            $_SESSION['user'] = $resultado;
            header("Location: inicio.php");
        }else{
            header("Location: login.php");
        }

    }

?>