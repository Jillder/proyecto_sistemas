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
    <title>Nosotros - La Cabrera</title>
    <link rel="stylesheet" href="../css/nosotros.css">
    <link rel="stylesheet" href="../css/botones.css">
</head>
<body style="background-color: black;"></body>
<body>
    <h2>
        <!-- botones-->
        <button id="la_cabrera" onclick="window.location.href = '../index.php';">La Cabrera</button>
        <div id="botones">
            <button id="ir_a_menu" onclick="window.location.href = '../rutas/menu.php';">Menú</button>
            <button id="ir_a_nosotros" onclick="window.location.href = '../rutas/nosotros.php';">Nosotros</button>
            <button id="ir_a_login" onclick="window.location.href = '../rutas/login.php';"><?php echo $btn ?></button>
            <a id="ir_a_reservas" href="../php/verificar_sesion.php">Reservas</a>
        </div>
    </h2>

    <div class="img_container">
        <img id="top_nosotros" src="../imgs/top_nosotros.jpg">
        <div class="nosotros_texto">
            <h2>Nosotros</h2>
        </div>
    </div>

    <img id="cocineros" src="../imgs/cocineros.jpg">

    <div id="parrafo1">
        <p>¡Bienvenido al magnífico mundo del sabor y el deleite! En nuestro restaurante estamos encantados de ofrecerte una experiencia gastronómica inigualable. Permítenos presentarte un lugar donde los ingredientes exquisitos se fusionan con técnicas culinarias de vanguardia, y donde cada plato es una obra maestra cuidadosamente elaborada para deleitar tus sentidos.</p>
        <p id="resaltado_p1">Compromiso con nuestros clientes</p>
        <p>Además de nuestra amplia selección de carnes a la parrilla, también ofrecemos una variedad de platos complementarios, como ensaladas frescas, guarniciones caseras y postres irresistibles. Queremos asegurarnos de que haya algo para todos en nuestro menú, ya sea que sea un amante de la carne o prefiera opciones vegetarianas o veganas.</p>
    </div>


</body>
</html>    