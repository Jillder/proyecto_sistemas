<?php
    session_start();

    if (isset($_SESSION['usuario'])){
        header("location: ../rutas/cuenta.php");
    }else{
        header("location: ../rutas/login.php");
    }


?>