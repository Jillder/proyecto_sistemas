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
    <title>Menu - La Cabrera</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/botones.css">
</head>
<body style="background-color: black;"></body>
<body>
    <script>
        function mostrarDetalles(id) {
            window.location.href = './detalles.php?id=' + id;
        }
    </script>

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
    <div class="grid_container">
        <div id="titulo_menu">Nuestro Menú</div>
        <div id="entradas">Entradas</div>
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
    </div>

    <div class="img_container">
        <img id="top_menu" src="../imgs/top_menu.jpg">
    </div>

        <!--imgs entradas-->
    <div class = "entradas_container">
        <img id="chori_criollo_img" src="../imgs/chori_criollo.jpg" alt="Chorizo criollo de rueda" onclick = "mostrarDetalles(1)">
        <img id="provoleta_img" src="../imgs/provoleta.jpg" alt="Provoleta" onclick = "mostrarDetalles(2)">
        <img id="morcilla_img" src="../imgs/morcilla.jpg" alt="Morcilla" onclick = "mostrarDetalles(3)">
        <img id="empanadas_img" src="../imgs/empanadas.jpg" alt="empanadas" onclick = "mostrarDetalles(4)">
    </div>

    <div id="nombres_entradas">
        <div class="nombres_e">
            <p>Chorizo criollo de cuerda</p>
        </div>
        <div class="nombres_e">
            <p>Provoleta</p>
        </div>
        <div class="nombres_e">
            <p>Morcilla Criolla</p>
        </div>
        <div class="nombres_e">
            <p>Empanadas de carne</p>
        </div>
        <div class="clearfix"></div>
    </div>


    <div id="guarniciones">Guarniciones y ensaladas</div>

        <!--imgs guarniciones-->
    <div class = "guarniciones_container">
    <img id="aguacate_img" src="../imgs/aguacate.jpg" alt="Ensalada de aguacate, palmitos y tomate" onclick = "mostrarDetalles(5)">
    <img id="caesar_img" src="../imgs/caesar.jpg" alt="Ensalada caesar" onclick = "mostrarDetalles(6)">
    <img id="caprese_img" src="../imgs/caprese.jpg" alt="Ensalada caprese" onclick = "mostrarDetalles(7)">
    <img id="rucula_img" src="../imgs/rucula.jpg" alt="Ensalada de rucula y queso parmesano" onclick = "mostrarDetalles(8)">
    </div>

    <div id="nombres_guarniciones">
        <div class="nombres_g">
            <p>Ensalada de aguacate</p>
        </div>
        <div class="nombres_g">
            <p>Ensalada Caesar</p>
        </div>
        <div class="nombres_g">
            <p>Ensalada Caprese</p>
        </div>
        <div class="nombres_g">
            <p>Ensalada de rucula</p>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="guarniciones_container">
    <img id="mixta_img" src="../imgs/mixta.jpg" alt="Ensalada mixta" onclick = "mostrarDetalles(9)">
    <img id="huevos_plancha_img" src="../imgs/huevos_plancha.jpg" alt="Huevos a la plancha con morron asado" onclick = "mostrarDetalles(10)">
    <img id="papas_huevos_img" src="../imgs/papas_huevos.jpg" alt="Papas criollas con huevos revueltos" onclick = "mostrarDetalles(11)">
    <img id="papas_cebollas_img" src="../imgs/papas_cebollas.jpg" onclick = "mostrarDetalles(12)">
    </div>

    <div id="nombres_guarniciones">
        <div class="nombres_g">
            <p>Ensalada mixta</p>    
        </div>
        <div class="nombres_g">
            <p>Huevos a la plancha</p>
        </div>
        <div class="nombres_g">
            <p>Papas con huevos</p>
        </div>
        <div class="nombres_g">
            <p>Papas con cebollas</p>
        </div>
        <div class="clearfix"></div>
    </div>


    <div id="pastas">Pastas caseras</div>

    <!--imgs pastas caseras-->
    <div class="pastas_container">
    <img id="fussilli_img" src="../imgs/fussilli.jpg" alt="Fussilli caseros con oliva" onclick = "mostrarDetalles(13)">
    <img id="ravioles_img" src="../imgs/ravioles.jpg" alt="Ravioles de mozzarela y jamon" onclick = "mostrarDetalles(14)">
    </div>

    <div id="nombres_pastas">
        <div class="nombres_p">
            <p>Fussilli con oliva</p>
        </div>
        <div class="nombres_p">
            <p>Ravioles</p>
        </div>
        <div class="clearfix"></div>
    </div>


    <div id="grillados">Grillados</div>

    <!--imgs grillados-->
    <div class="grillados_container">
    <img id="bife_aged_img" src="../imgs/bife_aged.jpg" alt="Bife dry aged" onclick = "mostrarDetalles(15)">
    <img id="bife_chorizo_img" src="../imgs/bife_chorizo.jpg" alt="Bife de chorizo large" onclick = "mostrarDetalles(16)">
    <img id="asado_novillo_img" src="../imgs/asado_novillo.jpg" alt="Asado de novillo corte americano" onclick = "mostrarDetalles(17)">
    <img id="brochette_lomo_img" src="../imgs/brochette_lomo.jpg" alt="Brochete de lomo envuelta en panceta" onclick = "mostrarDetalles(18)">
    </div>

    <div id="nombres_grillados">
        <div class="nombres_gri">
            <p>Bife Dry Aged</p>
        </div>
        <div class="nombres_gri">
            <p>Bife de chorizo</p>
        </div>
        <div class="nombres_gri">
            <p>Asado de novillo</p>
        </div>
        <div class="nombres_gri">
            <p>Brochette de lomo</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="grillados_container">
    <img id="lomo_marinada_img" src="../imgs/lomo_marinada.jpg" alt="Lomo con marinada de verduras" onclick = "mostrarDetalles(19)">
    <img id="ojo_bife_img" src="../imgs/ojo_bife.jpg" alt="Ojo de bife napolitano" onclick = "mostrarDetalles(20)">
    <img id="mollejas_img" src="../imgs/mollejas.jpg" alt="Mollejas grilladas" onclick = "mostrarDetalles(21)">
    <img id="entraña_img" src="../imgs/entraña.jpg" alt="Entraña" onclick = "mostrarDetalles(22)">
    </div>

    <div id="nombres_grillados">
        <div class="nombres_gri">
            <p>Lomo con marinada</p>
        </div>
        <div class="nombres_gri">
            <p>Ojo de bife</p>
        </div>
        <div class="nombres_gri">
            <p>Mollejas grilladas</p>
        </div>
        <div class="nombres_gri">
            <p>Entraña</p>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="grillados_container">
    <img id="churrasquito_img" src="../imgs/churrasquito.jpg" alt="Churrasquito con panceta" onclick = "mostrarDetalles(23)">
    <img id="matambrito_img" src="../imgs/matambrito.jpg" alt="Matambrito de cerdo" onclick = "mostrarDetalles(24)">
    <img id="bondiola_img" src="../imgs/bondiola.jpg" alt="Bondiola de cerdo mechada" onclick = "mostrarDetalles(25)">
    <img id="pamplona_img" src="../imgs/pamplona.jpg" alt="Pamplona de pollo rellena con queso" onclick = "mostrarDetalles(26)">  
    </div>
    
    <div id="nombres_grillados">
        <div class="nombres_gri">
            <p>Churrasquito</p>    
        </div>
        <div class="nombres_gri">
            <p>Matambrito</p>    
        </div>
        <div class="nombres_gri">
            <p>Bondiola</p>    
        </div>
        <div class="nombres_gri">
            <p>Pamplona</p>    
        </div>
        <div class="clearfix"></div>
    </div>


    <div id="postres">Postres</div>

    <!--imgs postres-->
    <div class="postres_container">
    <img id="helados_img" src="../imgs/helados.jpg" alt="Helados caseros" onclick = "mostrarDetalles(27)">
    <img id="variados_img" src="../imgs/variados.jpg" alt="Postres variados" onclick = "mostrarDetalles(28)">
    <img id="brulee_img" src="../imgs/brulee.jpg" alt="Creme brulee" onclick = "mostrarDetalles(29)">
    <img id="flan_img" src="../imgs/flan.jpg" alt="Flan casero" onclick = "mostrarDetalles(30)">
    </div>
    

    <div id="nombres_postres">
        <div class="nombres_pos">
            <p>Helados caseros</p>
        </div>
        <div class="nombres_pos">
            <p>Postres variados</p>
        </div>
        <div class="nombres_pos">
            <p>Creme brulee</p>
        </div>
        <div class="nombres_pos">
            <p>Flan Casero</p>
        </div>
        <div class="clearfix"></div>
    </div>

</body>
</html>