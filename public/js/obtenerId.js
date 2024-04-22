function obtenerId(asientoId) {
    // Obtén el elemento grid-container
    const gridContainer = document.querySelector('.grid-container');
    
    // Obtén el atributo de datos data-codigos-asientos-boletos
    const codigoAsientosBoletos = gridContainer.getAttribute('data-codigos-asientos-boletos');
    
    // Convierte la cadena separada por comas en un array
    const codigoAsientosBoletosArray = codigoAsientosBoletos.split(',');

    // Obtén el asiento que fue clicado usando su ID
    const asiento = document.getElementById(asientoId);
    
    // Compara el ID del asiento con los códigos de los boletos
    if (codigoAsientosBoletosArray.includes(asientoId)) {
        // Si el ID del asiento coincide con algún código de asiento de los boletos
        // Añade la clase 'rojo' al asiento para cambiar su color
        asiento.classList.add('rojo');
    } else {
        // Si no coincide, elimina la clase 'rojo' del asiento
        asiento.classList.remove('rojo');
    }
}