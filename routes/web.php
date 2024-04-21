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

Route::get('/cliente/crear',[ClienteController::class,'crearCliente'])->name('cliente.crearCliente');
Route::post('/cliente/guardar',[ClienteController::class,'guardarCliente'])->name('cliente.guardarCliente');
Route::get('/cliente/buscar',[ClienteController::class,'buscarCliente'])->name('cliente.buscarCliente');
Route::post('cliente/obtener',[ClienteController::class,'obtenerCliente'])->name('cliente.obtenerCliente');

Route::get('/cliente/editar',[ClienteController::class,'editarCliente'])->name('cliente.editarCliente');
Route::put('/cliente/actualizar',[ClienteController::class,'actualizarCliente'])->name('cliente.actualizarCliente');
Route::get('cliente/cerrarsesion',[ClienteController::class,'cerrarSesion'])->name('cliente.cerrarSesionCliente');

// Route::get('/crear/pelicula', [AdminController::class, 'crearPelicula'])->name('admin.crearPelicula');
Route::get('/administrador', [AdminController::class, 'adminIndex'])->name('admin.index');
Route::get('/administrador/peliculas', [AdminController::class, 'adminPeliculas'])->name('admin.peliculas');
Route::post('/administrador/peliculas/guardar', [AdminController::class, 'guardarPelicula'])->name('admin.guardarpelicula');
Route::get('/administrador/peliculas/obtener',[AdminController::class, 'obtenerPeliculas'])->name('admin.mostrarpeliculas');
Route::delete('/administrador/peliculas/eliminar/{titulo}',[AdminController::class, 'eliminarPelicula'])->name('admin.eliminarpelicula');
// Route::post('/guardar/pelicula', [AdminController::class, 'guardarPelicula'])->name('admin.guardarpelicula');


Route::get('/administrador/salas', [AdminController::class, 'adminSalas'])->name('admin.salas');
Route::post('/administrador/salas/tiposalas/guardar', [AdminController::class, 'guardarTipoSalas'])->name('admin.tiposalasguardar');
Route::get('/administrador/salas/tiposalas/modificar', [AdminController::class, 'adminSalasModificar'])->name('admin.salasmodificar');
Route::put('/administrador/salas/tiposalas/modificar/{codigoTipoSala}', [AdminController::class, 'editarTipoSalas'])->name('admin.tiposalaseditar');

Route::post('/administrador/salas/crear',[AdminController::class, 'crearSala'])->name('admin.crearsala');
Route::delete('/administrador/salas/eliminar',[AdminController::class, 'eliminarSala'])->name('admin.eliminarsala');



Route::get('/administrador/eventos', [AdminController::class, 'adminEventos'])->name('admin.eventos');
Route::get('/administrador/clientes', [AdminController::class, 'adminClientes'])->name('admin.clientes');

// Route::post('/guardar/pelicula', [AdminController::class, 'guardarPelicula'])->name('admin.guardarpelicula');

