var carrito = [];
function agregarAlCarrito(platillo) {
    carrito.push(platillo);
    actualizarCarrito();
}
function actualizarCarrito() {
    var platillosAgregadosSelect = document.getElementById('platillos-agregados');
    var resumenPedidoSection = document.getElementById('resumen-pedido');
    var resumenLista = resumenPedidoSection === null || resumenPedidoSection === void 0 ? void 0 : resumenPedidoSection.querySelector('ul');
    var totalElement = document.getElementById('total');
    var total = 0;
    if (platillosAgregadosSelect && resumenLista) {
        platillosAgregadosSelect.innerHTML = '';
        resumenLista.innerHTML = '';
        carrito.forEach(function (platillo, index) {
            var platilloOption = document.createElement('option');
            platilloOption.value = index.toString();
            platilloOption.textContent = platillo.nombre;
            platillosAgregadosSelect.appendChild(platilloOption);
            var listItem = document.createElement('li');
            listItem.textContent = "".concat(platillo.nombre, " - $").concat(platillo.precio.toFixed(2));
            resumenLista.appendChild(listItem);
            total += platillo.precio;
        });
        if (totalElement) {
            totalElement.textContent = total.toFixed(2);
        }
    }
}
function eliminarDelCarrito() {
    var platillosAgregadosSelect = document.getElementById('platillos-agregados');
    var selectedIndex = platillosAgregadosSelect.selectedIndex;
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
