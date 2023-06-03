<?php
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
/*Ruta Inicio*/
Route::get('/', function () {
    return view('inicio');
});

Route::get('/InicioAdmi', function () {
    return view('/Admi/InicioAdmi');
});

Route::get('/InicioEmpleado', function () {
    return view('/empleados/InicioEmpleado');
});

Route::get('/InicioSupervisor', function () {
    return view('/Supervisor/InicioSupervisor');
});

// ruta para mostrar empleados

Route::get('/empleados/show',[EmpleadosController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/IAdmi', [App\Http\Controllers\InicioController::class, 'vista'])->name('IAdmi');

