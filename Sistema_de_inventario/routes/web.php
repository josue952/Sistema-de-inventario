<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Auth::routes();
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
});
