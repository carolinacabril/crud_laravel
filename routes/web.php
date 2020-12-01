<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

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
    return view('index');
});

/* Produtos Routes */
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/produtos/novo', [ProdutoController::class, 'create']);

/* Categorias Routes */
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::get('/categorias/novo', [CategoriaController::class, 'create']);
Route::get('/categorias/excluir/{id}', [CategoriaController::class, 'destroy']);
Route::get('/categorias/editar/{id}', [CategoriaController::class, 'edit']);
Route::post('/categorias/{id}', [CategoriaController::class, 'update']);


