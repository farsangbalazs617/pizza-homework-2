<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaController;

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
    return view('home.home');
})->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
});

Route::group(['middleware' => ['auth', 'adminauth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/pizza', [PizzaController::class, 'index'])->name('dashboardpizza');
    Route::post('/dashboard/pizza', [PizzaController::class, 'update'])->name('pizza.update');
    Route::post('/dashboard/pizza/delete', [PizzaController::class, 'delete'])->name('pizza.delete');
    Route::post('/dashboard/pizza/create', [PizzaController::class, 'store'])->name('pizza.store');
});

Route::group(['middleware' => ['auth', 'userauth']], function () {

});

require __DIR__.'/auth.php';
