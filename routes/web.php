<?php

use App\Http\Controllers\AdminController;
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
Route::get('/administrador', [AdminController::class, 'adminIndex'])->name('admin.index');
Route::get('/registrarse', [LandingPageController::class, '...'])->name('...');
// Route::get('/crear/pelicula', [AdminController::class, 'crearPelicula'])->name('admin.crearpelicula');
// Route::post('/guardar/pelicula', [AdminController::class, 'guardarPelicula'])->name('admin.guardarpelicula');
