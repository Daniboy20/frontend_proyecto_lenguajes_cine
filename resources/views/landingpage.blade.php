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
    </head>
    <body class="p-3 mb-2 bg-dark text-white">
            <div class="cinemaplusContainer">

            <div class="headerContainer">

                <div class="leftHeaderContainer">
                    <div class="logoContainer">
                            <img class="logo" src="{{asset('img/logo-cinemaplus.png') }}" alt="Logo">
                        </div>
                        <div class="titleContainer">
                            <h1 class="title">CINEMAPLUS</h1>
                        </div>
                </div>
                
                <div class="middleHeaderContainer">
                    <div class="searchContainer">
                        <form class="form"> 
                        <input type="search" class="search" placeholder="¿Buscas Una Pelicula?">
                        <button type="button" class="btn btn-danger"><img class="lupa" src="{{asset('img/lupa.png') }}" alt="Buscar"></button>
                        </form>
                    </div>
                </div>
               
                <div class="rightHeaderContainer">
                    <div class="loginContainer">
                        <h1 class="login">LOGIN</h1>
                    </div>
                </div>
            </div>



            <div class="bodyContainer">
                    <div class="previewContainer">
                        <!-- Imagenes de 1200 x 501 aprox. -->
                        <img class="banner" src="{{asset('img/banner.jpg') }}" alt="">

                    </div>

                <div class="movieContainer">
                    <div class="carteleraContainer">
                            <h1>En Cartelera</h1>
                            <div class="lines" id="line1"></div>

                            <div class="functionContainer">
                                <div class="showMovie">
                                    <div class="imageFunctionContainer"><img class="imageFunction" src="{{asset('img/functionimage.jpg') }}" alt=""></div>
                                        <div class="descriptionContainer">
                                        <h5>Avatar</h5>
                                        
                                    </div>
                                    
                                   
                                </div>
                            </div>

                        </div>

                        <div class="proximamenteContainer">
                            <h1>Proximamente</h1>
                            <div class="lines"></div>
                            
                            <div class="nextFunctionContainer">

                            </div>
                            
                        </div>
                </div>
                    

            </div>

        </div>
        




    </body>
</html>