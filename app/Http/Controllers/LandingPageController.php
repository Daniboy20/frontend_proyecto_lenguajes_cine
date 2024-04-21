<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function home()
    {
        $eventosNoDisponibles= [];
        $eventosDisponibles = [];
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:8080/api/evento/obtener');
    
            if($response->getStatusCode() == 200){
                // Si da un 200 ok se almacena la respuesta en n¿una varuable
                $contenido = $response->getBody()->getContents();
                // convierte el JSON a un array asociativo
                $eventos = json_decode($contenido, true);

                foreach ($eventos as $evento) {
                    // Verificar la disponibilidad de cada evento


                    if($evento['disponible'] == 1)
                    {
                        //carrousel
                    }else if($evento['disponible'] == 2)
                    {
                        $eventosDisponibles[] = $evento;
                    } else if($evento['disponible'] == 3)
                    {
                        $eventosNoDisponibles[] = $evento;
                    }
                }
                return view('landingpage' , compact('eventosDisponibles', 'eventosNoDisponibles'));
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
        return view('landingpage');
    }  

    public function verPeliculaInfo($evento)
    {
        
        $client = new Client();
        try {
            $response = $client->request('GET','http://localhost:8080/api/evento/obtenerPorNombre?titulo='.$evento);
    
            if($response->getStatusCode() == 200){
                // Si la solicitud es exitosa, obtén los datos del evento
                $evento = json_decode($response->getBody()->getContents(), true);
                return view('verPeliculaInfo', compact('evento'));
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }


    }
}
