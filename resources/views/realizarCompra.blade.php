<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/ba541049fa.js" crossorigin="anonymous"></script>
        <title>Compra</title>
        <link rel="stylesheet" href="{{ asset('css/facturastyle.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<STYLE>A {text-decoration: none;} </STYLE>
<body class="p-3 mb-2 bg-dark text-white">
    <div class="showMovieContainer">
        <h1>Selecciona Un Asiento</h1>
        <div class="grid-container" id="contenedor-asientos">
            {{-- <div class="grid-item-red" id="${codigoAsiento}">
                <i class="fa-solid fa-couch"></i>
            </div>
            <div class="grid-item" id="${codigoAsiento}">
                <i class="fa-solid fa-couch"></i>
            </div> --}}
        </div>
        <div class="showMovieContainer"><a href="{{route('admin.eventos')}}" class="confirmar">Confirmar</a></div>
        
        




        <script>
            // Convertir las colecciones PHP a arrays de JavaScript
            var asientos = <?php echo json_encode($asientos); ?>;
            var boletos = <?php echo json_encode($boletos); ?>;
        
            // Iterar sobre los asientos
            for (var i = 0; i < asientos.length; i++) {
                var codigoAsiento = asientos[i].codigoAsiento;
                var asientoCoincide = false; // Bandera para controlar si el asiento coincide con un boleto
        
                for (var j = 0; j < boletos.length; j++) {
                    var codigoAsientoBoleto = boletos[j].asiento.codigoAsiento;
        
                    if (codigoAsiento == codigoAsientoBoleto) {
                        console.log('El asiento ' + codigoAsiento + ' coincide con un boleto.');
                        asientoCoincide = true; // El asiento coincide con un boleto
                        document.getElementById('contenedor-asientos').innerHTML += `
                            <div class="grid-item-red" id="${codigoAsiento}">
                                <i class="fa-solid fa-couch"></i>
                            </div>
                        `;
                        break; // Detener la iteración sobre los boletos para este asiento
                    }
                }
        
                if (!asientoCoincide) {
                    console.log('El asiento ' + codigoAsiento + ' es verde.');
                    document.getElementById('contenedor-asientos').innerHTML += `
                        <div class="grid-item" id="${codigoAsiento}">
                            <i class="fa-solid fa-couch"></i>
                        </div>
                    `;
                }
            }

        </script>
    </body>
</html>


