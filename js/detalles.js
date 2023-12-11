var urlParams = new URLSearchParams(window.location.search);
var id = urlParams.get('id');
function llenarDetalles() {
    var detallesContainer = document.getElementById('detalles-container');
    var nombreImagen = document.getElementById('nombre-imagen');
    var imagen = document.getElementById('imagen');
    var descripcion = document.getElementById('descripcion');
    var precio = document.getElementById('precio');
    switch (id) {
        case '1':
            nombreImagen.textContent = 'Chorizo criollo de cuerda';
            imagen.src = '../imgs/chori_criollo.jpg';
            descripcion.textContent = 'Nuestro chorizo criollo de cuerda es cuidadosamente elaborado con los ingredientes más frescos y auténticos, siguiendo recetas transmitidas de generación en generación. La presentación en forma de cuerda no solo resalta su calidad artesanal, sino que también permite un ahumado y curado perfecto, brindando un sabor inigualable a cada bocado.';
            precio.textContent = 'Precio: $40.00';
            break;
        case '2':
            nombreImagen.textContent = 'Provoleta';
            imagen.src = '../imgs/provoleta.jpg';
            descripcion.textContent = 'Descubre la exquisitez de la provoleta en cada bocado con [Nombre de tu Marca]. Nuestra provoleta, cuidadosamente elaborada con queso provolone de la más alta calidad, se funde en una deliciosa combinación de sabores y texturas.';
            precio.textContent = 'Precio: $25.00';
            break;
        case '3':
            nombreImagen.textContent = 'Morcilla Criolla';
            imagen.src = '../imgs/morcilla.jpg';
            descripcion.textContent = 'Desde la morcilla clásica hasta opciones con toques especiales, nuestra selección de morcillas satisface todos los paladares. Descubre nuevas dimensiones de sabor con nuestras variantes ahumadas, picantes o con hierbas aromáticas.';
            precio.textContent = 'Precio: $20.00';
            break;
        case '4':
            nombreImagen.textContent = 'Empanadas de carne';
            imagen.src = '../imgs/empanadas.jpg';
            descripcion.textContent = 'Nuestras empanadas destacan por su relleno generoso de carne sazonada con especias y condimentos seleccionados. Cada bocado es una mezcla perfecta de texturas y sabores que despiertan los sentidos.';
            precio.textContent = 'Precio: $5.00';
            break;
        case '5':
            nombreImagen.textContent = 'Ensalada de aguacate';
            imagen.src = '../imgs/aguacate.jpg';
            descripcion.textContent = 'Nuestra ensalada combina aguacate con una variedad de ingredientes frescos, como hojas verdes, tomates cherry y aderezo especial. Cada componente se elige para realzar y equilibrar los sabores, creando una experiencia gustativa única.';
            precio.textContent = 'Precio: $7.00';
            break;
        case '6':
            nombreImagen.textContent = 'Ensalada caesar';
            imagen.src = '../imgs/caesar.jpg';
            descripcion.textContent = 'Creada con ingredientes frescos y un aderezo clásico, esta ensalada es una experiencia gastronómica que combina la frescura de las hojas verdes con la riqueza de sabores característicos de la cocina internacional.';
            precio.textContent = 'Precio: $10.00';
            break;
        case '7':
            nombreImagen.textContent = 'Ensalada caprese';
            imagen.src = '../imgs/caprese.jpg';
            descripcion.textContent = 'Nuestra Ensalada Caprese cuenta con mozzarella de búfala de alta calidad, cremosa y suave, que se combina de manera perfecta con los tomates para crear una textura deliciosa.';
            precio.textContent = 'Precio: $10.00';
            break;
        case '8':
            nombreImagen.textContent = 'Ensalada de rucula y queso parmesano';
            imagen.src = '../imgs/rucula.jpg';
            descripcion.textContent = ' Esta combinación única de sabores ofrece una experiencia culinaria que equilibra la intensidad de la rúcula con la riqueza y la complejidad del queso parmesano.';
            precio.textContent = 'Precio: $20.00';
            break;
        case '9':
            nombreImagen.textContent = 'Ensalada mixta';
            imagen.src = '../imgs/mixta.jpg';
            descripcion.textContent = 'Utilizamos una selección cuidada de hojas verdes frescas, que incluyen lechuga, espinacas y otras variedades, para proporcionar una base crujiente y nutritiva.';
            precio.textContent = 'Precio: $7.00';
            break;
        case '10':
            nombreImagen.textContent = 'Huevos a la plancha con morron asado';
            imagen.src = '../imgs/huevos_plancha.jpg';
            descripcion.textContent = 'Esta combinación simple pero deliciosa destaca la frescura de los huevos y la dulzura ahumada de los morrones asados.';
            precio.textContent = 'Precio: $8.00';
            break;
        case '11':
            nombreImagen.textContent = 'Papas criollas con huevos revueltos';
            imagen.src = '../imgs/papas_huevos.jpg';
            descripcion.textContent = 'Utilizamos huevos frescos y los revolvemos con precisión para lograr una mezcla cremosa y suave, resaltando la frescura y riqueza de este clásico desayuno.';
            precio.textContent = 'Precio: $8.00';
            break;
        default:
            detallesContainer.innerHTML = '<p>ID de imagen no válido...</p>';
            break;
    }
}
llenarDetalles();
function agregarAlCarrito() {
    alert('Producto agregado al carrito.');
}
