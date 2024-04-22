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


public function mandarAFactura(Request $request){

    $miniList= $request->input('miniList');
    $codigoEvento = $request->input('codigoEvento');
    $array = explode(",", $miniList);
    $cantidadBoletos  = count($array);

    return view('llenarFactura' , compact('cantidadBoletos', 'codigoEvento'));
}

public function crearFactura(Request $request){
        $codigoEvento = $request->input('codigoEvento');
        $cantidadBoletos = $request->input('cantidadBoletos');
        $numeroTarjeta = $request->input('numeroTarjeta');

         $client = new Client();
         try {

             $response = $client->request('POST', 'http://localhost:8080/api/detallefactura/crear',
                 [   
                    'query'=>[
                    'codigoCliente'=> session('data')['codigoCliente'],
                    'codigoEvento' => $codigoEvento,
                    'cantidadBoletos' => $cantidadBoletos,
                    'numeroTarjeta'=>$numeroTarjeta,

                     ],
                     'Content-Type' => 'application/json',
                     'json'=>[
                        'codigoCliente'=> session('data')['codigoCliente'],
                        'codigoEvento' => $codigoEvento,
                        'cantidadBoletos' => $cantidadBoletos,
                        'numeroTarjeta'=>$numeroTarjeta,
                  ],
              ]);
                 if($response->getStatusCode()==200){
                    return redirect()->route('landingpage.home');
                     // return redirect()->route('landingpage');
                 }

         } catch (\Exception $e) {
             return response('Error' .$e->getMessage(), 500);
         }
}

    public function guardarFactura(Request $request)
    {
        return view('landingpage');
    }

    

}
