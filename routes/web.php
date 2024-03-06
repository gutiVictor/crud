<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('personas', App\Http\Controllers\PersonaController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('usuarios',App\Http\Controllers\UsuarioController::class); 
Route::resource('bitacoras', App\Http\Controllers\BitacoraController::class);
Route::resource('paginas', App\Http\Controllers\PaginaController::class);
Route::resource('enlaces', App\Http\Controllers\EnlaceController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
