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
        <div class="grid-container">
            @foreach ($asientos as $asiento)
            <div class="grid-item" id="{{$asiento['codigoAsiento']}}">
                <i class="fa-solid fa-couch"></i>
            </div>
            {{-- {{$asiento['codigoAsiento']}} --}}
            @endforeach
        </div>
        <div class="showMovieContainer"><a href="#" class="confirmar">Confirmar</a></div>
        
    </body>
</html>


