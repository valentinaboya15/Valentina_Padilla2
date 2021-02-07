<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;

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
 Route::get('/', [InicioController::class, 'getindex']);

Route::get('/libros', [LibroController::class, 'getLibro']);

Route::get('/libros/registro', [LibroController::class, 'form_registro'])->name('formulario_registro');

Route::post('/libros/registrar', [LibroController::class, 'registrar'])->name('registro_libros');

Route::get('libros/actualizar/{id}', [LibroController::class, 'form_actualiza'])->name('form_actualizaLibros');

Route::post('libros/actualizado/{id}', [LibroController::class, 'actualizar'])->name('actualizarLibro');

Route::get('/editorial', [EditorialController::class, 'getEditorial']);
