<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $btn = "Cuenta";
    $nombre_completo = $_SESSION['nombre_completo'];
    $correo = $_SESSION['usuario'];
    $user = $_SESSION['user'];
} else {
    $btn = "Login";
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - La Cabrera</title>
    <link rel="stylesheet" href="../css/cuenta.css">
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

    <div class = "caja_trasera">
        <h1>Perfil de Usuario</h1>
        <table>
            <tr>
                <th>Usuario</th>
                <td><?php echo $user; ?></td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td><?php echo $nombre_completo; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $correo; ?></td>
            </tr>
        </table>
        <button id="btn_logout" onclick="window.location.href = '../php/logout.php';">Cerrar Sesion</button>
    </div>

</body>
</html>