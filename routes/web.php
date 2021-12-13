<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\perfilAdminVehiculoController;

Auth::routes();

<<<<<<< HEAD
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/', 'index')->name('index');
Route::view('/indexAdmin', 'indexAdmin')->name('indexAdmin');
Route::view('/indexCliente', 'indexCliente')->name('indexCliente');

Route::resource('/user', UserController::class);
=======
Route::view('/', 'index')->name('index');
Route::view('/indexAdmin', 'indexAdmin')->name('indexAdmin');
Route::view('/indexCliente', 'indexCliente')->name('indexCliente');
>>>>>>> parent of 35697c7 (Arreglos)

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/user', UserController::class);
Route::resource('CitasAdmin', 'citas_admin_controller')->middleware('soloadmin'); 
Route::resource('CitasCliente', 'citas_cliente_controller')->middleware('solouser');
Route::resource('perfilAdmin', 'perfilAdminController')->middleware('soloadmin');
Route::resource('perfilCliente', 'perfilClienteController')->middleware('solouser');
Route::resource('perfilAdminVehiculo', 'perfilAdminVehiculoController')->middleware('soloadmin'); 
Route::resource('perfilClienteVehiculo', 'perfilClienteVehiculoController')->middleware('solouser');
Route::resource('clientesAdmin', 'clientesAdminController')->middleware('soloadmin');
Route::resource('crearProveedorAdmin', 'crearProveedorAdminController')->middleware('soloadmin');
Route::resource('serviciosAdmin', 'serv_adminController')->middleware('soloadmin');
Route::resource('promocionesAdmin', 'servAdminController')->middleware('soloadmin');
Route::resource('serviciosCliente', 'serviciosClienteController')->middleware('solouser');
Route::resource('categoriasProveedor', 'categoriasProveedorController')->middleware('soloadmin');
Route::resource('categoriasArticulos', 'categoriasArticulosController')->middleware('soloadmin');
Route::resource('feedbackAdmin', 'feedbackAdminController')->middleware('soloadmin');
Route::resource('encuesta', 'encuestaController')->middleware('solouser');
Route::resource('feedbackCliente', 'feedbackClienteController')->middleware('solouser');
Route::resource('articulos', 'ArticuloController') ->middleware('soloadmin');
Route::resource('retroalimentacion', 'retroalimentacionController') ->middleware('soloadmin');;
Route::get('/encuestaSatisfaccionCliente', [App\Http\Controllers\EncuestaController::class, 'index'])->name('encuestaSatisfaccionCliente');




/*use App\Http\Controllers\clientesAdminController;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
$clientesAdminV = DB::table('usuario')->get();


Route ::get('/clientesAdmin', clientesAdminController::class, 'index');

Route::get('/', function () {
    return view('clientesAdmin');
});

Route::view('/clientesAdmin','clientesAdmin',compact('clientesAdminV'));
Route ::get('/clientesAdmin', clientesAdminController::class, 'index');
*/





