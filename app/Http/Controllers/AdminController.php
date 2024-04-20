<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AdminController extends Controller
{
    public function crearPelicula(){
        return view('administradorindex');
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
                    return view('landingpage');
                    // return redirect()->route('landingpage');
                }

        } catch (\Exception $e) {
            return response('Error' .$e->getMessage(), 500);
        }
    }
}
