<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ClienteController extends Controller
{
    public function crearCliente()
    {
        return view('registro');
    }

    public function guardarCliente(Request $request)
    {
        $nombreCompleto = $request->input('nombreCompleto');
        $fechaNacimiento = $request->input('fechaNaciemiento');
        $telefono = $request->input('telefono');
        $correo = $request->input('correo');
        $contrasenia = $request->input('contrasenia');
        $client = new Client();
        try {
            $response = $client->request('POST', 'http://localhost:8080/api/cliente/crear',
                [
                    'Content-Type' => 'application/json',
                    'json'=>[
                        'nombreCompleto' => $nombreCompleto,
                        'fechaNacimiento' => $fechaNacimiento,
                        'telefono' => $telefono,
                        'correo' => $correo,
                        'contrasenia' => $contrasenia,
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
