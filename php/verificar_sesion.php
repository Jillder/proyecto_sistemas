<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor, inicia sesion primero");
                window.location = "../rutas/login.php";
            </script>
        ';
        session_destroy();
    }else{
        header("location: https://sorestaurante.simplybook.me/v2/");
        session_destroy();
        exit();
    }

?>