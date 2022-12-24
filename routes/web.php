<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('clientes', App\Http\Controllers\ClienteController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('zonas', App\Http\Controllers\ZonaController::class);
    Route::resource('familias', App\Http\Controllers\FamiliaController::class);
    Route::resource('subfamilias', App\Http\Controllers\SubfamiliaController::class);
    Route::resource('productos', App\Http\Controllers\ProductoController::class);
    Route::resource('cajas', App\Http\Controllers\CajaController::class);
    Route::resource('tpvConfiguraciones', App\Http\Controllers\TpvConfiguracionController::class);
    Route::resource('tpvVentas', App\Http\Controllers\TpvVentaController::class);
    Route::resource('tickets', App\Http\Controllers\TicketController::class);



    Route::get('clientes/search/{query}', [App\Http\Controllers\ClienteController::class, 'search']);
    Route::get('productos/search/{query}', [App\Http\Controllers\ProductoController::class, 'search']);
    Route::get('subfamilias/search/{query}', [App\Http\Controllers\SubfamiliaController::class, 'search']);
    Route::get('familias/search/{query}', [App\Http\Controllers\FamiliaController::class, 'search']);
});

require __DIR__.'/auth.php';
