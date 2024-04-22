<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">
        
        <div class="registroContainer">

            <h1>Comprar Boletos</h1>
            
            <form action='{{route('cliente.crearfactura')}}' method="POST">
                @csrf            

                <div class="sectionContainer">
                <label for="contrasenia"><i class="fa-solid fa-lock"></i></label>
                <input type="number" id="numeroTarjeta" name="numeroTarjeta" placeholder="Tarjeta" required><br><br>
                </div>

                <div class="buttonContainer">
                    <div class="form-group">
                        <a  href="{{ route('landingpage.home') }}" class="btn btn-warning">Cancelar</a>
                    </div>

                    <div class="form-group">
                        <a><button type="submit" class="btn btn-success">Comprar</button></a>
                    </div>
                </div>

               
            </form>

            

        </div>
</html>