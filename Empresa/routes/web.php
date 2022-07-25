<?php
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustumerController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;

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

Route::get('/',function () {
    return view('Template.template');
});

// Route::resource('clientes', 'App\Http\Controller\CustumerController');

// Route::resource('pedidos', 'App\Http\Controller\OrderController');

Route::resource('clientes', CustumerController::class);
Route::resource('pedidos', OrderController::class);


Route::resource('producto', ProductoController::class);
