<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ba541049fa.js" crossorigin="anonymous"></script>
    <title>Compra</title>
    <link rel="stylesheet" href="{{ asset('css/facturastyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="p-3 mb-2 bg-dark text-white">
    <div class="showMovieContainer">
        <h1>Selecciona un Asiento</h1>
        <div class="grid-container" id="contenedor-asientos">
            <!-- Los asientos se generan dinámicamente aquí -->
        </div>
        <div class="showMovieContainer">
            <button class="confirmar btn btn-primary">Confirmar</button>
        </div>
    </div>

    <script>
        // Convertir las colecciones PHP a arrays de JavaScript
        var asientos = <?php echo json_encode($asientos); ?>;
        var boletos = <?php echo json_encode($boletos); ?>;
        var miniList = [];

        // Generar los asientos
        function generarAsientos() {
            var contenedorAsientos = document.getElementById('contenedor-asientos');

            asientos.forEach(function (asiento) {
                var codigoAsiento = asiento.codigoAsiento;
                var asientoCoincide = boletos.some(function (boleto) {
                    return boleto.asiento.codigoAsiento === codigoAsiento;
                });

                var divAsiento = document.createElement('div');
                divAsiento.className = asientoCoincide ? 'grid-item-red' : 'grid-item';
                divAsiento.id = codigoAsiento;

                var iconoCouch = document.createElement('i');
                iconoCouch.className = 'fa-solid fa-couch';

                divAsiento.appendChild(iconoCouch);
                contenedorAsientos.appendChild(divAsiento);

                // Si el asiento no está ocupado, agregar evento de clic
                if (!asientoCoincide) {
                    divAsiento.addEventListener('click', function () {
                        obtenerId(codigoAsiento);
                    });
                }
            });
        }

        // Function to handle seat selection
        function obtenerId(codigoAsiento) {
            var elementoAsiento = document.getElementById(codigoAsiento);
            let asiento = elementoAsiento.querySelector('.fa-couch');

            if (miniList.includes(codigoAsiento)) {
                // Si el asiento ya está seleccionado, deseleccionarlo
                miniList = miniList.filter(id => id !== codigoAsiento);
                asiento.style.color = ''; // Restaurar el color original
            } else {
                // Seleccionar el asiento
                miniList.push(codigoAsiento);
                asiento.style.color = 'rgb(22, 121, 171)';
            }

            console.log(miniList);
        }

        // Manejar el clic del botón "Confirmar"
        document.querySelector('.confirmar').addEventListener('click', function () {
            // Crear un formulario oculto para enviar miniList a la ruta PHP
            var form = document.createElement('form');
            form.action = "{{ route('cliente.mandarAFactura') }}";
            form.method = 'POST';

            // Añadir CSRF token
            var csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = "{{ csrf_token() }}";
            form.appendChild(csrfInput);

            // Añadir miniList como un input oculto
            var miniListInput = document.createElement('input');
            miniListInput.type = 'hidden';
            miniListInput.name = 'miniList';
            miniListInput.value = miniList.join(',');
            form.appendChild(miniListInput);

            var codigoEventoInput = document.createElement('input');
            codigoEventoInput.type = 'hidden';
            codigoEventoInput.name = 'codigoEvento';
            codigoEventoInput.value = "{{ $codigoEvento }}"; // Asegúrate de pasar el valor correcto de $codigoEvento
            form.appendChild(codigoEventoInput);

            // Añadir el formulario al cuerpo del documento y enviarlo
            document.body.appendChild(form);
            form.submit();
        });

        // Llamar a la función para generar los asientos
        generarAsientos();
    </script>
</body>

</html>

