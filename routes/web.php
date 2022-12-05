<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\MedicamentoController;

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/bodega', function () {
    return view('bodega.create');
});

Route::get('/paciente/create',[PacienteController::class,'create']);*/

Route::resource('paciente','PacienteController');

Route::resource('bodega','BodegaController');//ruta general para todas las funciones de la clase controller

Route::resource('medicamento','MedicamentoController');