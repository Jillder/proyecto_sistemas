<?php
session_start();

if (isset($_SESSION['usuario'])){
    $btn = "Cuenta";
}else{
    $btn = "Login";
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Cabrera</title>
    <link rel="stylesheet" href="css/inicio..css">
    <link rel="stylesheet" href="css/botones.css">
</head>
<body style="background-color: black;"></body>
<body>
    <h2>
        <!-- botones-->
        <button id="la_cabrera" onclick="window.location.href = 'index.php';">La Cabrera</button>
        <div id="botones">
            <button id="ir_a_menu" onclick="window.location.href = 'rutas/menu.php';">Menu</button>
            <button id="ir_a_nosotros" onclick="window.location.href = 'rutas/nosotros.php';">Nosotros</button>
            <button id="ir_a_login" onclick="window.location.href = 'rutas/login.php';"><?php echo $btn ?></button>
            <a id="ir_a_reservas" href="php/verificar_sesion.php">Reservas</a>
        </div>
    </h2>

    <!-- imagenes -->
    <div id="fachada_txt">    
        <img id="fachada" src="imgs/fachada_restaurant.jpg" alt="fachada">

        <p id="txt_inicio">
            Calle XYZ Avenida XYZ <br>
            Telefono: XXXXXXXXXXX
        </p>
    </div>
</body>
</html>