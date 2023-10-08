<?php
session_start();

if (isset($_SESSION['usuario'])){
    $btn = "Cuenta";
    header("location: cuenta.php");
}else{
    $btn = "Login";
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - La Cabrera</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/botones.css">
</head>
<body>
    <h2>
        <!-- botones-->
        <button id="la_cabrera" onclick="window.location.href = '../index.php';">La Cabrera</button>
        <div id="botones">
            <button id="ir_a_menu" onclick="window.location.href = '../rutas/menu.php';">Menu</button>
            <button id="ir_a_nosotros" onclick="window.location.href = '../rutas/nosotros.php';">Nosotros</button>
            <button id="ir_a_login" onclick="window.location.href = '../php/switch_btn_login.php';"><?php echo $btn; ?></button>
            <a id="ir_a_reservas" href="../php/verificar_sesion.php">Reservas</a>
        </div>
    </h2>
    <main>
        

        <div class="all_container">

            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión</p>
                    <button id="btn_login">Iniciar Sesión</button>
                </div>
                <div class="caja_trasera_register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>

            <!-- formulario de login y registro-->
            <div class="container_log_reg">

                <form action="../php/login_usuario_be.php" method="POST" class="formulario_login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo" autofocus>
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <form action="../php/registro_usuario_be.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="texto" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>

        </div>

    </main>
    <script src="../js/login.js"></script>
</body>
</html>