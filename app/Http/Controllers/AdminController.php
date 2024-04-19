<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AdminController extends Controller
{
    public function crearpelicula(Request $request){
        //se hace una instancia

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
                    ]
                ]);

                if($response->getStatusCode()==200){
                    return redirect()->route('administradorindex');
                }

        } catch (\Throwable $th) {
            return response('Error' .$th->getMessage(), 500);
        }


    }
}
