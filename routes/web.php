<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdenesController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('ordenes', OrdenesController::class);
    Route::POST('/generar', [OrdenesController::class, 'generarOrdenes'])->name('generar');
    Route::get('/mostrar/{secuencial}', [OrdenesController::class, 'mostrar'])->name('mostrar');
    Route::POST('/buscar_ordenes', [OrdenesController::class, 'buscar'])->name('buscar_ordenes');
    Route::get('/exportarOrdenes/{secuencial}', [OrdenesController::class, 'exportarOrdenes'])->name('exportarOrdenes');

    Route::resource('usuarios', UsuariosController::class);
    Route::POST('/buscar_usuarios', [UsuariosController::class, 'buscar'])->name('buscar_usuarios');

});
require __DIR__.'/auth.php';