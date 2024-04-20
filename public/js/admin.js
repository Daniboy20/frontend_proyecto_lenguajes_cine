function borrarCampos() {
    document.getElementById('titulo').value = ''; // Borra el contenido del campo de título
    document.getElementById('duracion').value = ''; // Borra el contenido del campo de duración
}

function direccionarPelis() {
    window.location.href = "http://localhost:8000/administrador/peliculas/obtener";
}


document.getElementById('eliminarPeliculaForm').addEventListener('submit', function(event) {
    var titulo = document.getElementById('titulo').value;
    this.action = this.action.replace('__titulo__', titulo);
});





// document.getElementById('obtenerCodigoPeliculaForm').addEventListener('submit', function(event) {
//     // Obtener el valor del input
//     var codigoTipoSala = document.getElementById('codigotiposala').value;
//     // Actualizar la acción del formulario con el valor del input
//     this.action = this.action.replace('__codigoTipoSala__', codigoTipoSala);
// });



function direccionarEditarTipoSalas() {
    window.location.href = "http://localhost:8000/administrador/salas/tiposalas/modificar";
}




// Obtenemos todos los elementos section
// const sections = document.querySelectorAll('.hover-effect');

// // Agregamos un evento clic a cada sección
// sections.forEach(section => {
//     section.addEventListener('click', () => {
//         // Quitamos la clase 'selected' de todas las secciones
//         sections.forEach(s => s.classList.remove('selected'));
//         // Agregamos la clase 'selected' a la sección clicada
//         section.classList.add('selected');
//         // const idSeleccionado = section.id;
//     });
// });

