<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\menuController;

use App\Http\Controllers\WinkelmandjeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MedewerkerController;
use App\Models\User;
use App\Models\Customer;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Session;

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
    return view('welcome');
  });

  Route::get('/dashboard', function () {
    return view('home');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (){
Route::get('manager', [MedewerkerController::class, 'index'])->name('manager');

    Route::get('/manager/create',[MedewerkerController::class, 'create'])->name('Manager.create');
     Route::post('/manager',[MedewerkerController::class, 'store'])->name('Manager.Store');
     Route::get('/manager/{medewerker}/edit',[MedewerkerController::class, 'edit'])->name('Manager.Edit');
     Route::put('/manager/update',[MedewerkerController::class, 'update'])->name('Manager.Update');
});
Route::get('bestel', [BestellingController::class, 'index'])->name('bestellingen.index2');
Route::get('/bestel/{bestelling}/edit', [BestellingController::class, 'edit'])->name('bestellingen.Edit');
Route::put('/bestel/update', [BestellingController::class, 'update'])->name('bestellingen.Update'); // Change from post to put
Route::post('/bestel/cancel/{id}', [BestellingController::class, 'cancelOrder'])->name('bestelling.cancel'); // Change to post
Route::get('/bestellingen/edit/{id}', [BestellingController::class, 'edit'])->name('bestellingen.edit');
Route::get('/bestellingen/{id}', [BestellingController::class, 'show'])->name('bestellingen.show'); // Change from post to get
Route::post('/bestellingen', [BestellingController::class, 'storeOrder'])->name('order.store');
Route::get('/bestellingen', [BestellingController::class, 'index'])->name('bestellingen.index');
Route::get('/order/{orderId}', [BestellingController::class, 'showOrderDetails']);
Route::delete('/bestellingen/{id}', [BestellingController::class, 'destroy'])->name('bestellingen.destroy');
// routes/web.php

Route::get('/order/get-status/{id}', [OrderController::class, 'getStatus'])->name('order.getStatus');

Route::get('/', function () {
   return view('welcome');
 });
 Route::get('/dashboard', function () {
   return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');
 Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
 Route::get('/admin/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('admin.resetpassword');
 Route::put('/admin/updatepassword/{id}', [AdminController::class, 'updatepassword'])->name('admin.updatepassword');
 Route::get('home', [HomeController::class, 'index'])->name('home');
// routes/web.php

Route::get('/update-order-status/{id}', 'OrderController@updateStatus')->name('update-order-status');
Route::get('/drinks', [DrinkController::class, 'index'])->name('drinks');

 Route::get('/cart', [CartController::class, 'show'])->name('cart.show');


  Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
  Route::get('/admin/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('admin.resetpassword');
  Route::put('/admin/updatepassword/{id}', [AdminController::class, 'updatepassword'])->name('admin.updatepassword');
  Route::get('home', [HomeController::class, 'index'])->name('home');


  Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index');
  Route::resource('Winkelmandje', WinkelmandjeController::class);
  Route::get('/winkelmandje/create', [WinkelmandjeController::class, 'create'])->name('winkelmandtje.create');

// Add an item to the cart
Route::post('/winkelmandje', [WinkelmandjeController::class, 'store'])->name('winkelmandtje.store');

// Remove an item from the cart
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('Cart.destroy');






  Route::get('/order', 'OrderController@index')->name('order');
  Route::get('/menu', [MenuController::class, 'index'])->name('menu');
// View Cart
Route::get('locale/{locale}', [LocalizationController::class, 'setLocale']);


// Add to Cart
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');

// Remove from Cart
Route::post('/cart', [CartController::class, 'viewCart'])->name('cart.index');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
  Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.index');
  Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

  Route::get('/cart', 'CartController@viewCart')->name('cart.index');
  Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');
  Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');

  Route::post('/Cart/store', [CartController::class, 'store'])->name('Cart.store');
  Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
  Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza');
Route::get('/shopping-cart', [ShoppingCartController::class, 'index'])->name('shopping.cart');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
