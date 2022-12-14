<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ReciboController;
use App\Http\Controllers\CompraController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [FrontController::class, 'index']);

Route::resource('categorias', CategoriaController::class)->middleware('auth');
Route::resource('productos', ProductoController::class)->middleware('auth');
Route::resource('usuarios', UsuarioController::class)->middleware('auth');
Route::resource('carritos', ReciboController::class)->middleware('auth');
Route::resource('welcome', FrontController::class)->middleware('auth');
Route::resource('compras', CompraController::class)->middleware('auth');



//Route('categoriaUser.show', ['categoriaUser' => $categorias->id]);
