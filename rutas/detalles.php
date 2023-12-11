<?php
session_start();

if (isset($_SESSION['usuario'])){
    $btn = "Cuenta";
    $flag = true;
}else{
    $btn = "Login";
    $flag = false;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Imagen</title>
    <link rel="stylesheet" href="../css/detalles.css">
</head>
<body>
        <script>
            <?php if ($flag): ?>
                console.log("xd");
                var button = document.createElement("button");
                button.id = "carrito";
                button.innerHTML = "Carrito";
                button.onclick = function() {
                    window.location.href = '../rutas/carrito.php';
                };
                document.body.appendChild(button);
            <?php endif; ?>
        </script>

    <script src="../js/carrito.js"></script>
    <script src="../js/detalles.js"></script>

    <div id="detalles-container">
        <h1 id="nombre-imagen"></h1>
        <img id="imagen" alt="Imagen">
        <p id="descripcion"></p>
        <p id="precio"></p>
        <button onclick="agregarPlatilloAlCarrito()">Agregar al Carrito</button>
    </div>

    <script>
        function agregarPlatilloAlCarrito() {
            var nombrePlatillo = document.getElementById('nombre-imagen').textContent;
            var precioPlatillo = document.getElementById('precio').textContent;
            var precionumerico =parseFloat(precioPlatillo.replace('Precio: $', '').replace(',', ''));
            var Platillo = { nombre: nombrePlatillo, precio: precionumerico };

            agregarAlCarrito(Platillo);
            console.log(Platillo);
        }
    </script>

</body>
</html>
