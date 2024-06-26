<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
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
Route::get('/verpelicula/{evento}',[LandingPageController::class,'verPeliculaInfo'])->name('landingpage.ver');

Route::get('/cliente/crear',[ClienteController::class,'crearCliente'])->name('cliente.crearCliente');
Route::post('/cliente/guardar',[ClienteController::class,'guardarCliente'])->name('cliente.guardarCliente');
Route::get('/cliente/buscar',[ClienteController::class,'buscarCliente'])->name('cliente.buscarCliente');
Route::post('cliente/obtener',[ClienteController::class,'obtenerCliente'])->name('cliente.obtenerCliente');
Route::get('cliente/compra/asientos/{codigoEvento}/{codigoSala}',[FacturaController::class,'irCompras'])->name('cliente.hacercompra');
Route::post('cliente/compra/asientos/factura',[FacturaController::class,'crearFactura'])->name('cliente.crearfactura');
//Route::post('cliente/guardar/asientos/factura',[FacturaController::class,'guardarFactura'])->name('cliente.guardarfactura');
Route::post('cliente/compra/asientos/factura/ir',[FacturaController::class,'mandarAFactura'])->name('cliente.mandarAFactura');

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
Route::post('/administrador/eventos/crear', [AdminController::class, 'adminEventosCrear'])->name('admin.eventoscrear');
Route::get('/administrador/eventos/mostrar', [AdminController::class, 'adminEventosMostrar'])->name('admin.mostrareventos');
Route::get('/administrador/eventos/editar/{titulo}', [AdminController::class, 'adminEditarUnEvento'])->name('admin.editarevento');
Route::put('/administrador/eventos/actualizar/{codigoEvento}', [AdminController::class, 'adminActualizarUnEvento'])->name('admin.actualizarevento');
Route::get('/administrador/eventos/eliminar/{codigoEvento}', [AdminController::class, 'adminEliminarUnEvento'])->name('admin.eliminarevento');





Route::get('/administrador/clientes', [AdminController::class, 'adminClientes'])->name('admin.clientes');
Route::get('/administrador/clientes/detalles', [AdminController::class, 'adminClientesDetalles'])->name('admin.clientesdetalles');

// Route::post('/guardar/pelicula', [AdminController::class, 'guardarPelicula'])->name('admin.guardarpelicula');

