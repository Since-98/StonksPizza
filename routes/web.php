<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;

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
Route::get('/shop', ['uses'=> 'ProductController@getIndex', 'as'=> 'product.index']);


Route::get('/seller/{id}', ['uses'=> 'ProductController@displayProducts', 'as'=> 'product.seller']);







Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/index', [menuController::class, 'index']);
Route::get('/order/create', 'OrderController@create')->name('order.create');
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
