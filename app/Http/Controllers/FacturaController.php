<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class FacturaController extends Controller
{
    public function irCompras($evento){
        // http://localhost:8080/api/asientos/obtener?codigoSala=1
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:8080/api/asientos/obtener?codigoSala='.);
    
            if($response->getStatusCode() == 200){
                // Si da un 200 ok se almacena la respuesta en n¿una varuable
                $contenido = $response->getBody()->getContents();
                // convierte el JSON a un array asociativo
                $asientos = json_decode($contenido, true);
                return view('mostrarEventos' , compact('eventos', 'asientos'));
            }
    
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        }
        return view('realizarCompra' , compact('evento'));
    }
}
