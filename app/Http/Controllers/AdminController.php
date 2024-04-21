<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class AdminController extends Controller
{   

    public function adminIndex(){
        return view('administradorindex');
    }

    public function adminPeliculas(){
        return view('administradorindex');
    }

    public function adminSalas(){
        return view('administradorsalas');
    }

    public function adminEventos(){
        return view('administradoreventos');
    }

    public function adminClientes(){
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:8080/api/cliente/obtener');
    
            if($response->getStatusCode() == 200){
                // Si da un 200 ok se almacena la respuesta en n¿una varuable
                $contenido = $response->getBody()->getContents();
                // convierte el JSON a un array asociativo
                $listaClientes = json_decode($contenido, true);
                return view('administradorclientes' , compact('listaClientes'));
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
    }

    public function adminClientesDetalles(){
        // $client = new Client();
        // try {
        //     $response = $client->request('GET', 'http://localhost:8080/api/cliente/obtener');
    
        //     if($response->getStatusCode() == 200){
        //         // Si da un 200 ok se almacena la respuesta en n¿una varuable
        //         $contenido = $response->getBody()->getContents();
        //         // convierte el JSON a un array asociativo
        //         $listaClientes = json_decode($contenido, true);
        //         return view('administradorclientes' , compact('listaClientes'));
        //     }
    
        // } catch (\Exception $e) {
        //     // Manejo de errores
        //     return response('Error: ' . $e->getMessage(), 500);
        // }
        return view('mostrarFacturas');
    }

    public function adminSalasModificar(){

        return view('tipoSalasModificar');
    }

    // public function crearPelicula(){
    //     return view('administradorindex');
    // }
    public function obtenerPeliculas() {
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:8080/api/pelicula/obtener');
    
            if($response->getStatusCode() == 200){
                // Si da un 200 ok se almacena la respuesta en n¿una varuable
                $contenido = $response->getBody()->getContents();
                // convierte el JSON a un array asociativo
                $peliculas = json_decode($contenido, true);
                return view('mostrarpeliculas' , compact('peliculas'));
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
    }

    public function guardarPelicula(Request $request){
        $titulo = $request->input('titulo');
        $duracion = $request->input('duracion');
        $client = new Client();
        try {
            $response = $client->request('POST', 'http://localhost:8080/api/pelicula/crear',
                [
                    'Content-Type' => 'application/json',
                    'json'=>[
                        'titulo' => $titulo,
                        'duracion' => $duracion
                    ],
                ]);

                if($response->getStatusCode()==200){
                    return view('administradorindex');
                    // return redirect()->route('landingpage');
                }

        } catch (\Exception $e) {
            return response('Error' .$e->getMessage(), 500);
        }
    }

    public function eliminarPelicula($titulo) {

        $client = new Client();
        try {
            $response = $client->delete('http://localhost:8080/api/pelicula/eliminar?titulo=' . $titulo);

            // $response = $client->request('DELETE', 'http://localhost:8080/api/pelicula/eliminar', [
            //     'json' => [
            //         'titulo' => $titulo
            //     ]
            // ]);
    
            if($response->getStatusCode() == 200){
                // Si la solicitud es exitosa, devuelve una respuesta o realiza otras acciones necesarias
                return view('administradorindex');
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
    }

    public function guardarTipoSalas(Request $request){
        $descripcion = $request->input('descripcion');
        $precio= $request->input('precio');
        $client = new Client();
        try {
            $response = $client->request('POST', 'http://localhost:8080/api/tipoSala/crear',
                [
                    'Content-Type' => 'application/json',
                    'json'=>[
                        'descripcion' => $descripcion,
                        'precio' => $precio
                    ],
                ]);

                if($response->getStatusCode()==200){
                    return view('administradorsalas');
                    // return redirect()->route('landingpage');
                }

        } catch (\Exception $e) {
            return response('Error' .$e->getMessage(), 500);
        }
    }

    public function editarTipoSalas($codigoTipoSala, Request $request){
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');
        $client = new Client();

        try {
            $response = $client->put('http://localhost:8080/api/tipoSala/editar/'. $codigoTipoSala,
                [
                    'Content-Type' => 'application/json',
                    'json'=>[
                        'codigoTipoSala' => $codigoTipoSala,
                        'descripcion' => $descripcion,
                        'precio' => $precio
                    ],
                ]);

                if($response->getStatusCode()==200){
                    return view('administradorsalas');
                    // return redirect()->route('landingpage');
                }

        } catch (\Exception $e) {
            return response('Error' .$e->getMessage(), 500);
        }
    }

    public function crearSala(Request $request){
        $nombreTipoSala = $request->input('nombretiposala');
        $client = new Client();
        try {
            $response = $client->request('POST', 'http://localhost:8080/api/sala/crear?nombreTipoSala='.$nombreTipoSala,
                [
                    'Content-Type' => 'application/json',
                    'json'=>[
                        'nombreTipoSala' => $nombreTipoSala
                    ],
                ]);

                if($response->getStatusCode()==200){
                    return view('administradorsalas');
                    // return redirect()->route('landingpage');
                }

        } catch (\Exception $e) {
            return response('Error' .$e->getMessage(), 500);
        }
    }

    public function eliminarSala(Request $request) {
        $codigosala = $request->input('codigosala');
        $client = new Client();
        try {
            $response = $client->delete('http://localhost:8080/api/sala/eliminar?codigoSala='.$codigosala);

            // $response = $client->request('DELETE', 'http://localhost:8080/api/pelicula/eliminar', [
            //     'json' => [
            //         'titulo' => $titulo
            //     ]
            // ]);
    
            if($response->getStatusCode() == 200){
                // Si la solicitud es exitosa, devuelve una respuesta o realiza otras acciones necesarias
                return view('administradorsalas');
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
    }
    
    public function adminEventosCrear(Request $request){
        $codigopelicula = $request->input('codigopelicula');
        $codigosala= $request->input('codigosala');
        $horaInicio= $request->input('horainicio');
        $fechaEvento= $request->input('fechaevento');
        $idioma= $request->input('idioma');
        $formato= $request->input('formato');
        
        $client = new Client();
        try {
            // Realiza una solicitud POST a una URL específic
            // http://localhost:8080/api/evento/crear?codigopelicula=2&codigosala=3
            $response = $client->request('POST', 'http://localhost:8080/api/evento/crear',
                [   
                    'query'=>[
                        'codigopelicula'=>$codigopelicula,
                        'codigosala'=>$codigosala
                    ],
                    'Content-Type' => 'application/json',
                    'json'=>[
                        'codigoPelicula' => $codigopelicula,
                        'codigoSala' => $codigosala,
                        'horaInicio' => $horaInicio,
                        'fechaEvento' => $fechaEvento,
                        'idioma' => $idioma,
                        'formato' => $formato
                    ],
                ]);

                if($response->getStatusCode()==200){
                    return view('administradorsalas');
                    // return redirect()->route('landingpage');
                }

        } catch (\Exception $e) {
            return response('Error' .$e->getMessage(), 500);
        }
    }

    public function adminEventosMostrar(){
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:8080/api/evento/obtener');
    
            if($response->getStatusCode() == 200){
                // Si da un 200 ok se almacena la respuesta en n¿una varuable
                $contenido = $response->getBody()->getContents();
                // convierte el JSON a un array asociativo
                $eventos = json_decode($contenido, true);
                return view('mostrarEventos' , compact('eventos'));
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
    }
}
