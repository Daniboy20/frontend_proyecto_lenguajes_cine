<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Administrar</title>
</head>
<body>
    <h2>Crear Pelicula</h2>
    <form action='{{route('admin.guardarpelicula')}}' method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>
        
        <label for="duracion">Duración:</label>
        <input type="text" id="duracion" name="duracion" placeholder="HH:MM:SS" required><br><br>
        
        <div class="form-group">
            <a><button type="submit" class="btn btn-success">GuardarPelicula</button></a>
        </div>
    </form>
</body>
</html>