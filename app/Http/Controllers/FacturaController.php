<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;


class FacturaController extends Controller
{

public function irCompras($codigoEvento, $codigoSala){
    $client = new Client();

    // Definir las promesas para las dos solicitudes
    $promise1 = $client->getAsync('http://localhost:8080/api/asientos/obtener?codigoSala='.$codigoSala);
    $promise2 = $client->getAsync('http://localhost:8080/api/boleto/obtenerPorEvento?codigoEvento='.$codigoEvento);

    try {
        // Ejecutar las promesas de manera asíncrona
        $results = Promise\Utils::settle([$promise1, $promise2])->wait();

        // Procesar los resultados de las promesas
        $asientos = json_decode($results[0]['value']->getBody()->getContents(), true);
        $boletos = json_decode($results[1]['value']->getBody()->getContents(), true);

        // Devolver la vista con los datos obtenidos
        return view('realizarCompra', compact('codigoEvento', 'asientos', 'boletos'));
    } catch (\Exception $e) {
        // Manejo de errores
        return response('Error: ' . $e->getMessage(), 500);
    } 
}

}
