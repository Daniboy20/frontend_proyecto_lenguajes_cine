<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CinemaPlus</title>
        <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/abd3dd1e89.js" crossorigin="anonymous"></script>
    </head>
    <body class="p-3 mb-2 bg-dark text-white">
            <div class="cinemaplusContainer">
                <div class="bodyContainer">
                    <div class="movieContainer">
                        <div class="carteleraContainer">
                                <h1>En Cartelera</h1>
                                <div class="lines" id="line1"></div>

                                <div class="functionContainer">

                                    
                                <!-- Hacer un for Each, Para cada Pelicula -->
                                     <div class="showMovie">
                                         <div class="imageFunctionContainer"><img class="imageFunction" src="{{asset('img/functionimage.jpg') }}" alt=""></div>
                                             <div class="descriptionContainer">
                                                <h5>{{$evento['pelicula']['titulo']}}</h5>
                                                <h5>{{$evento['fechaEvento']}} | {{$evento['horaInicio']}}</h5>
                                            </div>
                                
                                </div>  
                            </div>       
                        </div>
                    </div>
                <div>
            <div>
            
    </body>
</html>