<?php

        $id = $_GET['id'];

        require_once('../Database/Database.php');
        Database::deleteJugador($id);

        header('Location: ../Pagina/admin.php');
?>