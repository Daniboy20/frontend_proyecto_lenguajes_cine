<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[LandingPageController::class,'home'])->name('landingpage.home');

Route::get('/crear/cliente',[ClienteController::class,'crearCliente'])->name('cliente.crearCliente');
Route::post('/guardar/cliente',[ClienteController::class,'guardarCliente'])->name('cliente.guardarCliente');



Route::get('/crear/pelicula', [AdminController::class, 'crearPelicula'])->name('admin.crearPelicula');
Route::post('/guardar/pelicula', [AdminController::class, 'guardarPelicula'])->name('admin.guardarPelicula');
Route::get('/administrador', [AdminController::class, 'adminIndex'])->name('admin.index');

Route::get('/administrador/peliculas', [AdminController::class, 'adminPeliculas'])->name('admin.peliculas');
Route::get('/administrador/peliculas/obtener',[AdminController::class, 'obtenerPeliculas'])->name('admin.mostrarpeliculas');
Route::post('/guardar/pelicula', [AdminController::class, 'guardarPelicula'])->name('admin.guardarpelicula');


Route::get('/administrador/salas', [AdminController::class, 'adminSalas'])->name('admin.salas');
Route::get('/administrador/eventos', [AdminController::class, 'adminEventos'])->name('admin.eventos');
Route::get('/administrador/clientes', [AdminController::class, 'adminClientes'])->name('admin.clientes');

Route::post('/guardar/pelicula', [AdminController::class, 'guardarPelicula'])->name('admin.guardarpelicula');

