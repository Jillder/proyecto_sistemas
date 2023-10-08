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
    <title>Menu - La Cabrera</title>
    <link rel="stylesheet" href="../css/menu.css">
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
    <div class="grid_container">
        <div id="titulo_menu">Nuestro Menú</div>
        <div id="entradas">Entradas</div>
    </div>

    <div class="img_container">
        <img id="top_menu" src="../imgs/top_menu.jpg">
    </div>

        <!--imgs entradas-->
        <img id="chori_criollo_img" src="../imgs/chori_criollo.jpg" alt="Chorizo criollo de rueda">
        <img id="provoleta_img" src="../imgs/provoleta.jpg" alt="Provoleta">
        <img id="morcilla_img" src="../imgs/morcilla.jpg" alt="Morcilla">
        <img id="empanadas_img" src="../imgs/empanadas.jpg" alt="empanadas">

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
    <img id="aguacate_img" src="../imgs/aguacate.jpg" alt="Ensalada de aguacate, palmitos y tomate">
    <img id="caesar_img" src="../imgs/caesar.jpg" alt="Ensalada caesar">
    <img id="caprese_img" src="../imgs/caprese.jpg" alt="Ensalada caprese">
    <img id="rucula_img" src="../imgs/rucula.jpg" alt="Ensalada de rucula y queso parmesano">

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

    <img id="mixta_img" src="../imgs/mixta.jpg" alt="Ensalada mixta">
    <img id="huevos_plancha_img" src="../imgs/huevos_plancha.jpg" alt="Huevos a la plancha con morron asado">
    <img id="papas_huevos_img" src="../imgs/papas_huevos.jpg" alt="Papas criollas con huevos revueltos">
    <img id="papas_cebollas_img" src="../imgs/papas_cebollas.jpg">

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
    <img id="fussilli_img" src="../imgs/fussilli.jpg" alt="Fussilli caseros con oliva">
    <img id="ravioles_img" src="../imgs/ravioles.jpg" alt="Ravioles de mozzarela y jamon">

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
    <img id="bife_aged_img" src="../imgs/bife_aged.jpg" alt="Bife dry aged">
    <img id="bife_chorizo_img" src="../imgs/bife_chorizo.jpg" alt="Bife de chorizo large">
    <img id="asado_novillo_img" src="../imgs/asado_novillo.jpg" alt="Asado de novillo corte americano">
    <img id="brochette_lomo_img" src="../imgs/brochette_lomo.jpg" alt="Brochete de lomo envuelta en panceta">

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

    <img id="lomo_marinada_img" src="../imgs/lomo_marinada.jpg" alt="Lomo con marinada de verduras">
    <img id="ojo_bife_img" src="../imgs/ojo_bife.jpg" alt="Ojo de bife napolitano">
    <img id="mollejas_img" src="../imgs/mollejas.jpg" alt="Mollejas grilladas">
    <img id="entraña_img" src="../imgs/entraña.jpg" alt="Entraña">

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

    <img id="churrasquito_img" src="../imgs/churrasquito.jpg" alt="Churrasquito con panceta">
    <img id="matambrito_img" src="../imgs/matambrito.jpg" alt="Matambrito de cerdo">
    <img id="bondiola_img" src="../imgs/bondiola.jpg" alt="Bondiola de cerdo mechada">
    <img id="pamplona_img" src="../imgs/pamplona.jpg" alt="Pamplona de pollo rellena con queso">  
    
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
    <img id="helados_img" src="../imgs/helados.jpg" alt="Helados caseros">
    <img id="variados_img" src="../imgs/variados.jpg" alt="Postres variados">
    <img id="brulee_img" src="../imgs/brulee.jpg" alt="Creme brulee">
    <img id="flan_img" src="../imgs/flan.jpg" alt="Flan casero">

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