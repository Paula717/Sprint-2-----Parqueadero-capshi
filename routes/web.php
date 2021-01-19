<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\parqueaderoController;
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
//controlador principal
Route::get('/', [PrincipalController::class,'prin']); //Ruta /
Route::get('servicios', [PrincipalController::class,'servicios']); //Ruta servicios
Route::get('contactos', [PrincipalController::class,'contacto']); //Ruta contactos

//controlador parqueadero
Route::get('parqueadero/consultar', [parqueaderoController::class,'consultar']); //Ruta parqueadero/consultar
Route::get('parqueadero/listar', [parqueaderoController::class,'listar']); //Ruta parqueadero/listar
Route::get('parqueadero/registro', [parqueaderoController::class,'registrar'])->name('formulario');//Ruta registrar
Route::post('registro', [parqueaderoController::class, 'mensaje'])->name('registroCli');//Ruta mensaje
