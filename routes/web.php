<?php

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
/*Mostrar log in*/

Route::get('/', function () {
    return view('inicio');
});


/*Mostrar menu empleado*/
Route::get('/visius_empleados', function () {
    return view('Empleado/menu');
});

/*Monstrar mis tareas*/
Route::get('/visius_mis_tareas', function () {
    return view('Empleado/tareas');
});

/*Monstrar mi info empleado*/
Route::get('/visius_mi_info_empleado', function () {
    return view('Empleado/minfo');
});

/*Mostrar menu supervisor*/
Route::get('/visius_supervisores', function () {
    return view('Supervisor/menu');
});

/*Monstrar mi info supervisor*/
Route::get('/visius_mi_info_supervisor', function () {
    return view('Supervisor/minfo');
});

/*Monstrar mi tab Empleados*/
Route::get('/visius_ver_empleados', function () {
    return view('Supervisor/empleadosup');
});

/*Monstrar mi tab Empleados*/
Route::get('/visius_asignar_tareas', function () {
    return view('Supervisor/asignar');
});


/*Monstrar menu admin*/
Route::get('/visius_admin', function () {
    return view('Admin/menu');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
