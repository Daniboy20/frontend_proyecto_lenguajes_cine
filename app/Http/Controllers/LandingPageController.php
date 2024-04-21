<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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

                    switch ($evento['disponible'])
                    {
                        case 2:
                            $eventosNoDisponibles[] = $evento;
                        
                        case 1:
                            $eventosDisponibles[] = $evento;
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
}
