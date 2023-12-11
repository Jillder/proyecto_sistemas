interface Platillo {
    nombre: string;
    precio: number;
}

let carrito: Platillo[] = [];

function agregarAlCarrito(platillo: Platillo) {
    carrito.push(platillo);
    actualizarCarrito();
}

function actualizarCarrito() {
    let platillosAgregadosSelect = document.getElementById('platillos-agregados') as HTMLSelectElement;
    let resumenPedidoSection = document.getElementById('resumen-pedido');
    let resumenLista = resumenPedidoSection?.querySelector('ul');
    let totalElement = document.getElementById('total');
    let total = 0;

    if (platillosAgregadosSelect && resumenLista) {
        platillosAgregadosSelect.innerHTML = '';
        resumenLista.innerHTML = '';

        carrito.forEach((platillo, index) => {
            let platilloOption = document.createElement('option');
            platilloOption.value = index.toString();
            platilloOption.textContent = platillo.nombre;
            platillosAgregadosSelect.appendChild(platilloOption);

            let listItem = document.createElement('li');
            listItem.textContent = `${platillo.nombre} - $${platillo.precio.toFixed(2)}`;
            resumenLista.appendChild(listItem);

            total += platillo.precio;
        });

        if (totalElement) {
            totalElement.textContent = total.toFixed(2);
        }
    }
}

function eliminarDelCarrito() {
    let platillosAgregadosSelect = document.getElementById('platillos-agregados') as HTMLSelectElement;
    let selectedIndex = platillosAgregadosSelect.selectedIndex;

    if (selectedIndex !== -1) {
        carrito.splice(selectedIndex, 1);
        actualizarCarrito();
    }
}

function realizarPago() {
    // Aquí implementar la lógica para procesar el pago
    alert('Pago realizado con éxito. ¡Gracias por tu compra!');
    carrito = []; 
    actualizarCarrito();
}
