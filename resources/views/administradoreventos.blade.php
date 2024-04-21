<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ba541049fa.js" crossorigin="anonymous"></script>
    <title>Administrar</title>
    <link rel="stylesheet" href="{{ asset('css/eventostyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>

    <div id=principal-container>
        <div id="container-settings-options" >
            <div id="header-options">
                <span>Ajustes Generales</span>
            </div>
            <div id="body-options" class="elementsOption">
                <a href="{{route('admin.peliculas')}}">
                    <section id="peliculas-option" class="hover-effect">
                        <i class="fa-solid fa-film"></i>
                        <span>Peliculas</span>
                    </section>
                </a>
                <a href="{{route('admin.salas')}}">
                    <section id="salas-option">
                        <i class="fa-solid fa-people-roof"></i>
                        <span>Salas</span>
                    </section>
                </a>
                <a href="{{route('admin.eventos')}}">
                    <section id="eventos-option">
                        <i class="fa-solid fa-calendar-day"></i>
                        <span>Eventos</span>
                    </section>
                </a>
                <a href="{{route('admin.clientes')}}">
                    <section id="clientes-option">
                        <i class="fa-solid fa-users"></i>
                        <span>Clientes</span>
                    </section>
                </a>
            </div>
            <div id="footer-options">
                <a href="{{route('landingpage.home')}}">
                    <section>
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Salir</span>
                    </section>
                </a>
            </div>
        </div>
        {{-- <-----------------------Divs para las opciones----------------------> --}}
    
        <div id="container-eventos" >
            <div id="agregar-evento">
                <h2>Agregar Evento</h2>
                <div class="inputs-container">
                    {{-- onsubmit="obtenerPeliculas()" --}}
                    <form action='{{route('admin.eventoscrear')}}' method="POST" class="inputs-position">
                        @csrf
                        <input type="text" id="codigopelicula" name="codigopelicula" class="custom-input" placeholder="Codigo Pelicula">
                        <input type="text" id="codigosala" name="codigosala" class="custom-input" placeholder="Codigo Sala">
                        <input type="text" id="horainicio" name="horainicio" class="custom-input" placeholder="HH:MM:SS">
                        <input type="date" id="fechaevento" name="fechaevento" placeholder="YY-MM-DD">
                        <input type="text" id="idioma" name="idioma" class="custom-input" placeholder="Idioma">
                        <input type="text" id="formato" name="formato" class="custom-input" placeholder="Formato">
                        <div id="button-container"class="form-group">
                            <a><button type="submit" class="btn btn-secondary">Guardar Evento</button></a>
                            <a><button type="button"  class="btn btn-danger" onclick="borrarCampos()">Cancelar</button></a>
                            <a  href="{{ route('admin.mostrareventos') }}" class="btn btn-dark">Mostrar Eventos</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="{{ asset('js/admin.js') }}"></script>

</body>


</html>