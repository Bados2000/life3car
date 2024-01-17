<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userProfile;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\updateCar;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
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
    return view('welcome');
});


Route::get('/realizacja1', [App\Http\Controllers\Realizacja1Controller::class, 'index'])->name('realizacja1');
Route::get('/realizacja2', [App\Http\Controllers\Realizacja2Controller::class, 'index'])->name('realizacja2');


Route::get('cart', [App\Http\Controllers\ServicesController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ServicesController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\ServicesController::class, 'update2'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\ServicesController::class, 'remove2'])->name('remove.from.cart');

Route::middleware(['auth','verified'])->group(function(){
    Route::get('/users/list',[App\Http\Controllers\UserController::class,'index'])->middleware('can:isAdmin');
    Route::get('/deletek/{id}',[App\Http\Controllers\UserController::class, 'deletek'])->middleware('can:isAdmin');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/delete/{id}',[App\Http\Controllers\ServicesController::class, 'delete'])->middleware('can:isAdmin');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('getPDF');
    Route::get('/profile', [userProfile::class, 'show'])->middleware('auth')->name('profile');
    Route::post('/profile/update', [userProfile::class, 'update'])->name('updateProfile');

    Route::get('/edit/{id}',[App\Http\Controllers\ServicesController::class, 'edit'])->middleware('can:isAdmin');
    Route::post('/update{id}',[App\Http\Controllers\ServicesController::class, 'update'])->name('services.update')->middleware('can:isAdmin');


    Route::get('/editerek/{id}',[App\Http\Controllers\OrderController::class, 'edit'])->middleware('can:isAdmin');
    Route::post('/updaterek/{id}',[App\Http\Controllers\OrderController::class, 'update'])->name('order.update')->middleware('can:isAdmin');

    Route::get('/find',[ServicesController::class, 'find'])->name('web.find');

    Route::get('/updateCar', [updateCar::class, 'showw'])->middleware('auth')->name('updateCar');
    Route::post('/updateCar', [updateCar::class, 'updatee'])->middleware('auth')->name('updateCars');

    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('index');
    Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');

    Route::get('/services/list',[ServicesController::class, 'index'])->name('servicesList');
    Route::post('/services/store', [App\Http\Controllers\ServicesController::class, 'store'])->name('services.store');



});


Auth::routes(['verify' => true]);



