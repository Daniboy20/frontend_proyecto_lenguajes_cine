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
                <h2>Modificar Evento {{$evento[0]['codigoEvento']}}</h2>
                {{-- {{ $evento['codigoEvento']}} --}}
                {{-- @foreach ($evento as $event)
                    {{$event['codigoEvento']}}
                @endforeach --}}
                {{-- @dd($evento) --}}
                {{-- {{$evento[0]['codigoEvento']}} --}}
                <div class="inputs-container">
                    <form action='{{route('admin.actualizarevento', ['codigoEvento'=>$evento[0]['codigoEvento']] )}}' method="POST" class="inputs-position">
                        @csrf
                        @Method('PUT')
                        <input type="text" id="codigopelicula" name="codigopelicula" class="custom-input" placeholder="Codigo Pelicula" value="{{ $evento[0]['pelicula']['codigoPelicula'] ?? '' }}" readonly>
                        <input type="text" id="codigosala" name="codigosala" class="custom-input" placeholder="Codigo Sala" value="{{ $evento[0]['sala']['codigoSala'] ?? '' }}">
                        <input type="text" id="horainicio" name="horainicio" class="custom-input" placeholder="HH:MM:SS" value="{{ $evento[0]['horaInicio'] ?? '' }}">
                        <input type="date" id="fechaevento" name="fechaevento" placeholder="YY-MM-DD" value="{{ $evento[0]['fechaEvento'] ?? '' }}">
                        <input type="text" id="idioma" name="idioma" class="custom-input" placeholder="Idioma" value="{{ $evento[0]['idioma'] ?? '' }}">
                        <input type="text" id="formato" name="formato" class="custom-input" placeholder="Formato" value="{{ $evento[0]['formato'] ?? '' }}">

                        <div id="button-container"class="form-group">
                            <a><button type="submit" class="btn btn-secondary">Actualizar</button></a>
                            <a><button type="button"  class="btn btn-danger" onclick="borrarCampos()">Cancelar</button></a>
                            <a href="{{ route('admin.mostrareventos') }}" class="btn btn-dark">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="{{ asset('js/admin.js') }}"></script>

</body>


</html>