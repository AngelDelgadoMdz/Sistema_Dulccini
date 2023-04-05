<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;



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
    return view('auth.login');
});

// Route::get('/productos', function () {
//     return view('productosView.index');
// });

// Route::get('productos/create', [ProductosController::class, 'create']);

//php artisan route:list

Route::resource('productos', ProductosController::class)->middleware('auth');

Route::resource('clientes', ClientesController::class)->middleware('auth');

Route::resource('pedidos', PedidosController::class)->middleware('auth');

Route::post('/productos/create', 'ProductosController@create');
Route::post('/clientes/create', 'ClientesController@create');
Route::post('/pedidos/create', 'PedidosController@create');

Auth::routes();
//['register'=>false, 'reset'=>false]

Route::get('/home', function () {
    return view('home');
});
// Route::get('/home', [ProductosController::class, 'index'])->name('home');
Route::get('/index', [ProductosController::class, 'index']);

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/', [ProductosController::class, 'index'])->name('home');
// });