<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encabezado y otros elementos del encabezado -->
</head>
<body class="p-3 mb-2 bg-dark text-white">
    <div class="showMovieContainer">
        <h1>Selecciona Un Asiento</h1>
        <div class="grid-container">

        </div>
        <div class="showMovieContainer"><a href="{{route('admin.eventos')}}" class="confirmar">Confirmar</a></div>
    </div>

    <script>
        // Convertir las colecciones PHP a arrays de JavaScript
        var asientos = <?php echo json_encode($asientos); ?>;
        var boletos = <?php echo json_encode($boletos); ?>;

        // Obtener el elemento del asiento en el DOM
        var gridAsiento = document.getElementById('grid-container');

        // Iterar sobre los asientos
        for (var i = 0; i < asientos.length; i++) {
            var codigoAsiento = asientos[i].codigoAsiento;
            var asientoCoincide = false; // Bandera para controlar si el asiento coincide con un boleto

            // Iterar sobre los boletos para comparar con el asiento actual
            for (var j = 0; j < boletos.length; j++) {
                var codigoAsientoBoleto = boletos[j].asiento.codigoAsiento;

                // Comparar los códigos de asiento
                if (codigoAsiento == codigoAsientoBoleto) {
                    console.log('El asiento ' + codigoAsiento + ' coincide con un boleto.');
                    asientoCoincide = true; // El asiento coincide con un boleto
                    break; // Detener la iteración sobre los boletos para este asiento
                }
            }

            // Crear el div para el asiento y agregar clases basadas en si coincide o no con un boleto
            var divAsiento = document.createElement('div');
            divAsiento.className = 'grid-item' + (asientoCoincide ? ' grid-item-red' : ''); // Agregar clase 'grid-item-red' si coincide con un boleto
            divAsiento.id = codigoAsiento;

            // Crear el icono dentro del div del asiento
            var iconoAsiento = document.createElement('i');
            iconoAsiento.className = 'fa-solid fa-couch';
            
            // Agregar el icono al div del asiento
            divAsiento.appendChild(iconoAsiento);

            // Agregar el div del asiento al contenedor de la grilla
            gridAsiento.appendChild(divAsiento);
        }
    </script>
</body>
</html>