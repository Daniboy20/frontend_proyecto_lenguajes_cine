<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
        return view('administradorclientes');
    }

    // public function crearPelicula(){
    //     return view('administradorindex');
    // }


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
                    return view('landingpage');
                    // return redirect()->route('landingpage');
                }

        } catch (\Exception $e) {
            return response('Error' .$e->getMessage(), 500);
        }
    }

    public function obtenerPeliculas() {
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:8080/api/pelicula/obtener');
    
            if($response->getStatusCode() == 200){
                // Si da un 200 ok se almacena la respuesta en n¿una varuable
                $contenido = $response->getBody()->getContents();
                // convierte el JSON a un array asociativo
                $peliculas = json_decode($contenido, true);
                return view('administradorindex' , ['peliculas' => $peliculas]);
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
    }

    public function eliminarPelicula($titulo) {
        $client = new Client();
        try {
            $response = $client->request('DELETE', 'http://localhost:8080/api/pelicula/eliminar', [
                'query' => [
                    'titulo' => $titulo
                ]
            ]);
    
            if($response->getStatusCode() == 200){
                // Si la solicitud es exitosa, devuelve una respuesta o realiza otras acciones necesarias
                return 'Película eliminada correctamente';
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
    }
}
