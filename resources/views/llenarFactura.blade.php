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

            <h1>Comprar Boletos</h1>
            
            <form action='{{route('cliente.crearfactura')}}' method="POST">
                @csrf            

                <div class="sectionContainer">
                <input type="hidden" name="codigoEvento" id="codigoEvento" name="codigoEvento" value="{{ $codigoEvento }}">
                </div>

                <div class="sectionContainer">
                <label for="contrasenia"><i class="fa-solid fa-ticket"></i></label>
                <input type="text" name="cantidadBoletos" id="cantidadBoletos" placeholder="CantidadBoletos"  value="{{$cantidadBoletos}}" readonly><br><br>
                </div>

                <div class="sectionContainer">
                <label for="contrasenia"><i class="fa-solid fa-ticket"></i></label>
                <input type="number" id="numeroTarjeta" name="numeroTarjeta" placeholder="Tarjeta" required><br><br>
                </div>

                <div class="buttonContainer">
                    <div class="form-group">
                        <a  href="{{ route('landingpage.home') }}" class="btn btn-warning">Cancelar</a>
                    </div>

                    <div class="form-group">
                         <button type="submit" class="btn btn-success">Comprar</button>
                    </div>
                </div>

               
            </form>

            

        </div>
</html>