<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoController;

// RUTA 1 — Inicio

Route::get('/', [PaginaController::class, 'inicio'])
    ->name('inicio');


// RUTA 2 — Sobre mí

Route::get('/sobre-mi', [PaginaController::class, 'sobreMi'])
    ->name('sobre-mi');


// RUTA 3 — Materias

Route::get('/materias', [PaginaController::class, 'materias'])
    ->name('materias');


// RUTA 4 — Contacto 

Route::get('/contacto', [PaginaController::class, 'contacto'])
    ->name('contacto');


// RUTA 5 — Contacto 

Route::post('/contacto', [PaginaController::class, 'procesarContacto'])
    ->name('contacto.procesar');

//RUTA 6 - Producto    

Route::get('/productos', [ProductoController::class, 'index'])
    ->name('productos.index');