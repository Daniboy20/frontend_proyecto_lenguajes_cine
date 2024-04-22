<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/ba541049fa.js" crossorigin="anonymous"></script>
        <title>Editar Usuario</title>
        <link rel="stylesheet" href="{{ asset('css/clientestyle.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<div id="principal-container" >
            <div id="">
                <h2>Editar Informacion</h2>
                <div class="inputs-container">
                    <form action='{{route('cliente.actualizarCliente')}}' method="POST" class="inputs-position">
                        @csrf
                        @Method('PUT')
                        <input type="text" id="nombreCompleto" name="nombreCompleto" class="custom-input" placeholder="Nombre Completo" value="{{ session('data')['nombreCompleto'] ?? '' }}"">
                        <input type="text" id="clienteFrecuente" name="clienteFrecuente" class="custom-input" placeholder="" readonly value="{{ session('data')['clienteFrecuente'] ?? '' }}">
                        <input type="text" id="fechaNacimiento" name="fechaNacimiento" class="custom-input" placeholder="YYYY/MM/DD" value="{{ session('data')['fechaNacimientp'] ?? '' }}" >
                        <input type="text" id="telefono" name="telefono" class="custom-input" placeholder="00000" value="{{ session('data')['telefono'] ?? '' }}">
                        <input type="text" id="correo" name="correo" class="custom-input" placeholder="Correo Electronico" value="{{ session('data')['correo'] ?? '' }}">
                        <input type="text" id="contrasenia" name="contrasenia" class="custom-input" placeholder="Contraseña" value="{{ session('data')['contrasenia'] ?? '' }}">

                        <div id="button-container"class="form-group">
                            <a  href="{{ route('landingpage.home') }}" class="btn btn-warning">Cancelar</a>
                            <a><button type="submit" class="btn btn-secondary">Guardar</button></a>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>