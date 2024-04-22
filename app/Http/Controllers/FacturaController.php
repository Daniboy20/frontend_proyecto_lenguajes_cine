<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;


class FacturaController extends Controller
{
    public function irCompras($codigoEvento, $codigoSala){
        // http://localhost:8080/api/asientos/obtener?codigoSala=1
        $client = new Client();
        try {
            $response1 = $client->request('GET', 'http://localhost:8080/api/asientos/obtener?codigoSala='.$codigoSala);
    
            if($response1->getStatusCode() == 200){
                // Si da un 200 ok se almacena la respuesta en n¿una varuable
                $contenido1 = $response1->getBody()->getContents();
                // convierte el JSON a un array asociativo
                $asientos = json_decode($contenido1, true);
                return view('realizarCompra' , compact('codigoEvento', 'asientos'));
            }
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        } 
    
        try {
            $response2 = $client->request('GET', 'http://localhost:8080/api/boleto/obtenerPorEvento?codigoEvento='.$codigoEvento);
    
            if($response2->getStatusCode() == 200){
                // Si da un 200 ok se almacena la respuesta en n¿una varuable
                $contenido2 = $response2->getBody()->getContents();
                // convierte el JSON a un array asociativo
                $asientos = json_decode($contenido2, true);
                return view('realizarCompra' , compact('codigoEvento', 'asientos'));
            }
        } catch (\Exception $e) {
            // Manejo de errores
            return response('Error: ' . $e->getMessage(), 500);
        } 

        $results = Promise\all([$response1, $response2])->wait();
        $respuesta1 = $results[0];
        $respuesta2 = $results[1]; 


        
        
    }
}
