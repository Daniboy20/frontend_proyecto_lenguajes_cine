<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CinemaPlus</title>
        <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/abd3dd1e89.js" crossorigin="anonymous"></script>
        <title>Registro</title>
</head>
        <body class="p-3 mb-2 bg-dark text-white">
        
        <div class="registroContainer">

            <h1>Registro De Usuario</h1>
            
            <form action='{{route('cliente.guardarCliente')}}' method="POST">
                @csrf
                
                <div class="sectionContainer">
                <label for="nombreCompleto"><i class="fa-solid fa-user"></i></label>
                <input type="text" pattern="([A-Za-záéíóúäëïöü]+\s?)+" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre Completo" required><br><br>
                </div>
                
                <div class="sectionContainer">
                <label for="fechaNacimiento"><i class="fa-solid fa-calendar"></i></label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="YYYY-MM-DD" required><br><br>
                </div>

                <div class="sectionContainer">
                <label for="telefono"><i class="fa-solid fa-phone"></i></label>
                <input type="text" pattern="(\(?\+504\)?)? *[983]\d{3}-?\d{4}" id="telefono" name="telefono" placeholder="00000000" required><br><br>
                </div>

                <div class="sectionContainer">
                <label for="correo"><i class="fa-solid fa-envelope"></i></label>
                <input type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}" id="correo" name="correo" placeholder="ejemplo@dominio.com" required><br><br>
                </div>

                <div class="sectionContainer">
                <label for="contrasenia"><i class="fa-solid fa-lock"></i></label>
                <input type="text" id="contrasenia" name="contrasenia" placeholder="Password" required><br><br>
                </div>

                <div class="buttonContainer">
                    <div class="form-group">
                        <a  href="{{ route('landingpage.home') }}" class="btn btn-warning">Cancelar</a>
                    </div>

                    <div class="form-group">
                        <a><button type="submit" class="btn btn-danger">Guardar</button></a>
                    </div>
                </div>

               
            </form>

            

        </div>




    </body>
</html>