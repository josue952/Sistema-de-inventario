<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/', function () {
    //Regresa o redirige a la vista Login
    return view('auth.login');
});

Route::resource('dashboard',DashboardController::class);

//Rutas de autenticación
Auth::routes();
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

//Ruta que envia a la vista 'dashboard' un vez que el usuario se ha autenticado
Route::group(['middleware'=>'auth'],function(){
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
});

//Ruta que sirve para realizar el CRUD de Usuarios
Route::resource('usuarios',UsuariosController::class);

//Ruta que envia a la vista 'usuarios' una vez que el usuario se ha autenticado
Route::get('/usuarios', [UsuariosController::class,'index'])->name('usuarios');

Route::get('usuarios/create', [UsuariosController::class,'create']);
