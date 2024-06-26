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
        
            <div id="container-eventos" class="container-fondo">
                <div id="list-clients">
                    <span id="title-head">Mostrar Clientes</span>
                    <table id="table-container">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Tipo Sala</th>
                                <th>Precio</th>
                                <th>Disponibilidad</th>
                                <th>Hora Inicio</th>
                                <th>Fecha Evento</th>
                                <th>Idioma</th>
                                <th>Formato</th>
                                <th>Editar Registro</th>
                                <th>Eliminar Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventos as $evento)
                            <tr>
                                <td>
                                    {{$evento['codigoEvento']}}
                                </td>
                                <td>
                                    {{$evento['pelicula']['titulo']}}
                                </td>
                                <td>
                                    {{$evento['sala']['tipoSala']['descripcion']}}
                                </td>
                                <td>
                                    {{$evento['sala']['tipoSala']['precio']}}
                                </td>
                                <td>
                                    {{$evento['disponible']}}
                                </td>
                                <td>
                                    {{$evento['horaInicio']}}
                                </td>
                                <td>
                                    {{$evento['fechaEvento']}}
                                </td>
                                <td>
                                    {{$evento['idioma']}}
                                </td>
                                <td>
                                    {{$evento['formato']}}
                                </td>
                                <td>
                                    {{-- http://localhost:8080/api/evento/obtenerPorNombre?titulo=Depredador --}}
                                    <a href="{{ route('admin.editarevento', ['titulo'=>$evento['pelicula']['titulo']] ) }}" class="btn btn-warning">Editar <i class="fa-regular fa-pen-to-square" style="color: #000000;"></i></a>
                                    {{-- {{ route('admin.clientesdetalles', $cliente['codigoCliente']) }} --}}
                                </td>
                                <td>
                                    <a href="{{ route('admin.eliminarevento', ['codigoEvento'=>$evento['codigoEvento']] ) }}" class="btn btn-danger">Eliminar <i class="fa-regular fa-trash-can" style="color: #ffffff;"></i></a>
                                    {{-- {{ route('admin.clientesdetalles', $cliente['codigoCliente']) }} --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="boton-regresar-evento">
                    <a href="{{route('admin.eventos')}}" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
    
        </div>
    
    
        <script src="{{ asset('js/admin.js') }}"></script>
    
    </body>
</html>