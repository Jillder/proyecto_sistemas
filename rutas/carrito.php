<?php
session_start();

if (isset($_SESSION['usuario'])){
    $btn = "Cuenta";
    $flag = true;
}else{
    $btn = "Login";
    $Flag = false;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="../css/carrito.css">
</head>
<body>
    <header>
        <h1>Carrito de Compras</h1>
    </header>

    <section id="carrito">
        <!-- Aquí se mostrarán los platillos agregados al carrito -->
        <select id="platillos-agregados" onchange="eliminarDelCarrito()">
        </select>
    </section>

    <section id="resumen-pedido">
        <h2>Resumen del Pedido</h2>
        <ul>
            <!-- Aquí se mostrarán los platillos con sus precios -->
        </ul>
        <p>Total: $<span id="total">0.00</span></p>
        <button onclick="realizarPago()">Realizar Pago</button>
    </section>

    <script src="../js/carrito.js"></script>
</body>
</html>
