<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CinemaPlus</title>
        <link rel="stylesheet" href="{{ asset('css/showmoviestyle.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/abd3dd1e89.js" crossorigin="anonymous"></script>
    </head>
    <body class="p-3 mb-2 bg-dark text-white">
            <div class="cinemaplusContainer">
                <div class="bodyContainer">
                    <div class="showMovieContainer">
                                <h1>{{$evento[0]['pelicula']['titulo']}}</h1>
                                <div class="lines" id="line1"></div>
                                <div class="functionContainer">
                                <!-- Hacer un for Each, Para cada Pelicula -->
                                     <div class="showMovie">
                                         <div class="imageFunctionContainer"><img class="imageFunction" src="{{$evento[0]['pelicula']['imagen']}}" alt=""></div>
                                         <div class="lines" id="line2"></div>
                                             <div class="descriptionContainer">
                                                <h3>Detalles</h3>
                                                <h4>Sala: {{$evento[0]['sala']['tipoSala']['descripcion']}}</h4> 
                                                <h4>Fomato: {{$evento[0]['formato']}}</h4>                                  
                                                <h4>Idioma: {{$evento[0]['idioma']}}</h4>
                                                <h4>Duracion: {{$evento[0]['pelicula']['duracion']}}</h4>
                                                <h4>Fecha: {{$evento[0]['fechaEvento']}}</h4>
                                                <h4>Hora Inicio: {{$evento[0]['horaInicio']}}</h4>
                                            </div>
                                            <a class="btn btn-danger" href="{{route('cliente.hacercompra' , ['evento'=>$evento])}}" >Comprar Boleto</a>
                                </div>      
                        </div>
                    </div>
                <div>
            <div>
            
    </body>
</html>