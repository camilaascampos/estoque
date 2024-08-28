<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

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
     redirect() -> route("produtos.index");
});

Route::resource('produtos', ProdutosController::class);
Route::resource('fornecedors', FornecedorController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', pedidoController::class);