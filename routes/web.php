<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Usuario\RolPermisoController;
use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view('no-auth.login');
    })->name('login.index');
});

Route::get('/', [DashboardController::class, 'welcome'])->name('welcome.index');

Route::prefix('tablero')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('tablero.index');
});

Route::prefix('usuario')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index');
    Route::get('data-table', [UsuarioController::class, 'dataTable'])->name('usuario.data-table');
    Route::post('store/{id}', [UsuarioController::class, 'store'])->name('usuario.store');
    Route::get('edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::put('update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
    Route::delete('delete/{id}', [UsuarioController::class, 'delete'])->name('usuario.delete');
});

Route::prefix('rol-permiso')->group(function () {
    Route::get('/', [RolPermisoController::class, 'index'])->name('rol-permiso.index');
    Route::post('store/{id}', [RolPermisoController::class, 'store'])->name('rol-permiso.store');
    Route::get('edit/{id}', [RolPermisoController::class, 'edit'])->name('rol-permiso.edit');
    Route::put('update/{id}', [RolPermisoController::class, 'update'])->name('rol-permiso.update');
    Route::delete('delete/{id}', [RolPermisoController::class, 'delete'])->name('rol-permiso.delete');
});

Route::prefix('persona')->group(function () {
    Route::get('/', [RolPermisoController::class, 'index'])->name('persona.index');
    Route::post('store/{id}', [RolPermisoController::class, 'store'])->name('persona.store');
    Route::get('edit/{id}', [RolPermisoController::class, 'edit'])->name('persona.edit');
    Route::put('update/{id}', [RolPermisoController::class, 'update'])->name('persona.update');
    Route::delete('delete/{id}', [RolPermisoController::class, 'delete'])->name('persona.delete');
});

Route::prefix('cliente')->group(function () {
    Route::get('/', [RolPermisoController::class, 'index'])->name('cliente.index');
    Route::post('store/{id}', [RolPermisoController::class, 'store'])->name('cliente.store');
    Route::get('edit/{id}', [RolPermisoController::class, 'edit'])->name('cliente.edit');
    Route::put('update/{id}', [RolPermisoController::class, 'update'])->name('cliente.update');
    Route::delete('delete/{id}', [RolPermisoController::class, 'delete'])->name('cliente.delete');
});

Route::get('*', function () {
    return redirect('/');
});
