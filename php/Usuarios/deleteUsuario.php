<?php

        $id = $_GET['id'];

        require_once('../Database/Database.php');
        Database::deleteUsuario($id);

        header('Location: ../Pagina/admin.php');
?>