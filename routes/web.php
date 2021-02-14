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
//Apartado Cliente
Route::get('parqueadero/consultar-cliente', [parqueaderoController::class,'form_consulta'])->name('form_consulta'); //Ruta parqueadero/consultar
Route::post('parqueadero/consultar-cliente', [parqueaderoController::class,'consultar'])->name('consultar'); //Ruta parqueadero/consultar

Route::get('parqueadero/listar-cliente', [parqueaderoController::class,'listarCliente'])->name('listaCliente'); //Ruta parqueadero/listar

Route::get('parqueadero/registro-cliente', [parqueaderoController::class,'registrar'])->name('formulario');//Ruta registrar
Route::post('parqueadero/registro-cliente', [parqueaderoController::class, 'mensaje'])->name('registroCli');//Ruta mensaje

Route::get('parqueadero/actualizar/{id}', [parqueaderoController::class, 'form_actualiza_cliente'])->name('form_actualiza_cliente');
Route::post('parqueadero/actualizar/{id}', [parqueaderoController::class, 'actualizar_cliente'])->name('actualizar_cliente');


//Apartado Vehiculo
Route::get('parqueadero/registro-vehiculo', [parqueaderoController::class,'registrarvehi'])->name('formulariovehi');//Ruta registrar
Route::post('parqueadero/registro-vehiculo', [parqueaderoController::class, 'mensajevehi'])->name('registrovehi');//Ruta mensaje

Route::get('parqueadero/listar-vehiculo', [parqueaderoController::class,'listarVehiculo'])->name('listaVehiculo'); //Ruta parqueadero/listar

Route::get('parqueadero/consultar-vehiculo', [parqueaderoController::class,'form_consulta_vehiculo'])->name('form_consulta_vehiculo'); //Ruta parqueadero/consultar
Route::post('parqueadero/consultar-vehiculo', [parqueaderoController::class,'consultar_vehiculo'])->name('consultar_vehiculo'); //Ruta parqueadero/consultar

Route::get('parqueadero/actualizar-vehiculo/{id}', [parqueaderoController::class, 'form_actualiza_vehiculo'])->name('form_actualiza_vehiculo');
Route::post('parqueadero/actualizar-vehiculo/{id}', [parqueaderoController::class, 'actualizar_vehiculo'])->name('actualizar_vehiculo');

//Apartado Ingreso
Route::get('parqueadero/registro-ingreso', [parqueaderoController::class,'registraringreso'])->name('formulari_ingreso');//Ruta registrar
Route::post('parqueadero/registro-ingreso', [parqueaderoController::class, 'mensajeingreso'])->name('registro_ingreso');//Ruta mensaje

Route::get('parqueadero/listar-ingreso', [parqueaderoController::class,'listarIngreso'])->name('listarIngreso'); //Ruta parqueadero/listar

Route::get('parqueadero/actualizar-ingreso/{id}', [parqueaderoController::class, 'form_actualiza_ingreso'])->name('form_actualiza_ingreso');
Route::post('parqueadero/actualizar-ingreso/{id}', [parqueaderoController::class, 'actualizar_ingreso'])->name('actualizar_ingreso');

//Apartado Empleado
Route::get('parqueadero/listar-empleado', [parqueaderoController::class,'listarEmplado'])->name('lista_empleado'); //Ruta parqueadero/listar

Route::get('parqueadero/registro-empleado', [parqueaderoController::class,'registro_empleado'])->name('formulario_empleado');//Ruta registrar
Route::post('parqueadero/registro-empleado', [parqueaderoController::class, 'mensaje_empleado'])->name('registro_empleado');//Ruta mensaje

Route::get('parqueadero/consultar-empleado', [parqueaderoController::class,'form_consulta_empleado'])->name('form_consulta_empleado'); //Ruta parqueadero/consultar
Route::post('parqueadero/consultar-empleado', [parqueaderoController::class,'consultar_empleado'])->name('consultar_empleado'); //Ruta parqueadero/consultar

Route::get('parqueadero/listar-empleado', [parqueaderoController::class,'listarEmpleado'])->name('listaEmpleado'); //Ruta parqueadero/listar

Route::get('parqueadero/actualizar-empleado/{id}', [parqueaderoController::class, 'form_actualiza_empleado'])->name('form_actualiza_empleado');
Route::post('parqueadero/actualizar-empleado/{id}', [parqueaderoController::class, 'actualizar_empleado'])->name('actualizar_empleado');