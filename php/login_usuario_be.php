<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena='$contrasena'");

    if(mysqli_num_rows($verificar_login) > 0){
        $_SESSION['usuario'] = $correo;

        $row = mysqli_fetch_assoc($verificar_login);
        $_SESSION['nombre_completo'] = $row['nombre_completo'];
        $_SESSION['user'] = $row['usuario'];

        header("location: ../rutas/cuenta.php");
    }else{
        echo '
            <script>
                // alert("El correo o la contraseña son incorrectas o no existen");
                window.location = "../rutas/login.php";
            </script>
        ';
        exit();
    }

?>