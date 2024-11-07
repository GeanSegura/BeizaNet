<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenLoginController;
use App\Http\Controllers\CobroVentasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/login', [AutenLoginController::class, 'login'])->name('login');

// // Ruta para cerrar sesión
Route::get('/salir', [CobroVentasController::class, 'salir'])->name('salir');

Route::get('/login', [AutenLoginController::class, 'showLoginForm'])->name('login-2');;

Route::get('/cobro-ventas', [CobroVentasController::class, 'mostrarCobroVentas'])->name('cobroVentas');
// Route::get('/cobro-ventas/regresarLogin', [CobroVentasController::class, 'salir'])->name('salir');

Route::get('/', function () {
    return view('autenLogin.login'); // Cambia esto por tu vista de inicio.
}); 

Route::get('/cobro-ventas/{zona}', [CobroVentasController::class, 'obtenerDatosZona'])->name('cuenta.zona');
Route::get('/cobro-ventas/documento/{cuenta}', [CobroVentasController::class, 'obtenerDatosDocumento'])->name('documento.zona');
Route::get('/cobro-ventas/detalle/{}', [CobroVentasController::class, 'obtenerDocumentoDetalle'])->name('documento.detalle');




