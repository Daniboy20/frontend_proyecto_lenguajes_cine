<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ba541049fa.js" crossorigin="anonymous"></script>
    <title>Administrar</title>
</head>
<body>

    <div id="settings-options" >
        <div id="header-options">
            <span>Ajustes Generales</span>
        </div>
        <div id="body-options">
            <section id="peliculas-option">
                <i class="fa-solid fa-film"></i>
                <span>Peliculas</span>
            </section>
            <section id="salas-option">
                <i class="fa-solid fa-people-roof"></i>
                <span>Salas</span>
            </section>
            <section id="eventos-option">
                <i class="fa-solid fa-calendar-day"></i>
                <span>Eventos</span>
            </section>
            <section id="clientes-option">
                <i class="fa-solid fa-users"></i>
                <span>Clientes</span>
            </section>
        </div>
        <div id="footer-options">
            <section>
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Salir</span>
            </section>
        </div>
    </div>
    <div id="container-settings-movies" >

    </div>

    {{-- <h2>Crear Pelicula</h2>
    <form action='{{route('admin.guardarpelicula')}}' method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>
        
        <label for="duracion">Duración:</label>
        <input type="text" id="duracion" name="duracion" placeholder="HH:MM:SS" required><br><br>
        
        <div class="form-group">
            <a><button type="submit" class="btn btn-success">GuardarPelicula</button></a>
        </div>
    </form> --}}
</body>


</html>