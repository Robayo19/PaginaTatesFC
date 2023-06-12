<?php

        $id = $_GET['id'];

        require_once('../Database/Database.php');
        Database::deleteRol($id);

        header('Location: ../Pagina/admin.php');
?>