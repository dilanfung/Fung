<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\perfilAdminVehiculoController;

Auth::routes();

Route::view('/', 'index')->name('index');
Route::view('/index', 'index')->name('index');
Route::view('/indexAdmin', 'indexAdmin')->name('indexAdmin');
Route::view('/indexCliente', 'indexCliente')->name('indexCliente');
Route::resource('home', 'HomeController'); 
Route::resource('user', 'UserController');

Route::resource('CitasAdmin', 'citas_admin_controller')->middleware('soloadmin'); 
Route::resource('CitasCliente', 'citas_cliente_controller')->middleware('solouser');
Route::resource('perfilAdmin', 'perfilAdminController')->middleware('soloadmin');
Route::resource('perfilAdmin2', 'perfilAdminController2')->middleware('soloadmin');
Route::resource('perfilCliente', 'perfilClienteController')->middleware('solouser');
Route::resource('perfilCliente2', 'perfilCliente2Controller')->middleware('solouser');
Route::resource('perfilAdminVehiculo', 'perfilAdminVehiculoController')->middleware('soloadmin'); 
Route::resource('perfilClienteVehiculo', 'perfilclienteVehiculoController')->middleware('solouser');
Route::resource('clientesAdmin', 'clientesAdminController')->middleware('soloadmin');
Route::resource('crearProveedorAdmin', 'crearProveedorAdminController')->middleware('soloadmin');
Route::resource('serviciosAdmin', 'serv_adminController')->middleware('soloadmin');
Route::resource('promocionesAdmin', 'servAdminController')->middleware('soloadmin');
Route::resource('serviciosCliente', 'ServiciosClienteController')->middleware('solouser');
Route::resource('categoriasProveedor', 'categoriasProveedorController')->middleware('soloadmin');
Route::resource('categoriasArticulos', 'categoriasArticulosController')->middleware('soloadmin');
Route::resource('feedbackAdmin', 'feedbackAdminController')->middleware('soloadmin');
Route::resource('encuesta', 'encuestaController')->middleware('solouser');
Route::resource('feedbackCliente', 'feedbackClienteController')->middleware('solouser');
Route::resource('articulos', 'ArticuloController') ->middleware('soloadmin');
Route::resource('retroalimentacion', 'retroalimentacionController') ->middleware('soloadmin');
Route::get('/encuestaSatisfaccionCliente', [App\Http\Controllers\encuestaController::class, 'index'])->name('encuestaSatisfaccionCliente');





