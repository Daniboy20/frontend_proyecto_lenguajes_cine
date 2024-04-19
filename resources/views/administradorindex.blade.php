<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrar</title>
</head>
<body>
    <h2>Crear Pelicula</h2>
    <form action="procesar.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>
        
        <label for="duracion">Duración:</label>
        <input type="text" id="duracion" name="duracion" placeholder="HH:MM:SS" required><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>