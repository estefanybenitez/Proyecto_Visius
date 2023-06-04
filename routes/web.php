<?php
use App\Http\Controllers\DetalleTareaController;
use App\Http\Controllers\EstadoTareaController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TareasController;
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


// ruta para mostrar  vista empleado
Route::get('/CrudEmpleado/show',[EmpleadosController::class, 'index']);
// ruta para mostrar  vista roles
Route::get('/CrudRoles/show',[RolesController::class, 'index']);
// ruta para mostrar  vista area
Route::get('/CrudArea/show',[AreaController::class, 'index']);
// ruta para mostrar  vista tarea
Route::get('/CrudTareas/show',[TareasController::class, 'index']);
// ruta para mostrar  estado tarea
Route::get('/CrudEstadoT/show',[EstadoTareaController::class, 'index']);
// ruta para mostrar  estado tarea
Route::get('/CrudDetalleT/show',[DetalleTareaController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/IAdmi', [App\Http\Controllers\InicioController::class, 'vista'])->name('IAdmi');

