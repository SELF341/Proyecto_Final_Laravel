<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Rutas principales del sitio
|--------------------------------------------------------------------------
*/

// Página de inicio
Route::get('/', [PaginaController::class, 'inicio'])
    ->name('inicio');

// Información personal
Route::get('/sobre-mi', [PaginaController::class, 'sobreMi'])
    ->name('sobre-mi');

// Listado de materias
Route::get('/materias', [PaginaController::class, 'materias'])
    ->name('materias');

// Formulario de contacto
Route::get('/contacto', [PaginaController::class, 'contacto'])
    ->name('contacto');

// Procesamiento del formulario de contacto
Route::post('/contacto', [PaginaController::class, 'procesarContacto'])
    ->name('contacto.procesar');

// Módulo de productos
Route::get('/productos', [ProductoController::class, 'index'])
    ->name('productos.index');

// Ruta de respaldo para páginas inexistentes
Route::fallback(function () {
    return redirect()->route('inicio');
});