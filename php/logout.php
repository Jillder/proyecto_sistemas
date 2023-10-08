<?php
session_start();

if (isset($_SESSION['usuario'])){
    session_destroy();
    header("location: ../rutas/login.php");
}else{
    header("location: ../rutas/login.php");
}
?>
