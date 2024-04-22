<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BoletosController extends Controller
{

    public function crearBoleto($evento)
    {
        /*
        $idEvento = ;
        $idAsiento = ;
        $codigoDetalleFactura = ;
        $client = new Client();
        
        try {
            $response = $client->request('POST', 'http://localhost:8080/api/cliente/crear',
                [
                    'query' => [
                        'idEvento' => $idEvento,
                        'idAsiento' => $idAsiento,
                        'codigoDetalleFactura' => $codigoDetalleFactura,
                    ],
                ]);

                if($response->getStatusCode()==200){
                    return redirect()->route('landingpage.home');
                    //return view('landingpage');
                    // return redirect()->route('landingpage');
                }

        } catch (\Exception $e) {
            return response('Error' .$e->getMessage(), 500);
        }
        */
    }

}
