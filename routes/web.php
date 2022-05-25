<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userProfile;
use App\Http\Controllers\ServicesController;

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
Route::get('/services/list', [ServicesController::class, 'index']);

Route::middleware(['auth','verified'])->group(function(){
    Route::get('/users/list',[UserController::class,'index'])->middleware('can:isAdmin');
    Route::delete('/users/{id}',[UserController::class,'destroy'])->middleware('can:isAdmin');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   
    Route::get('/edit/{id}',[App\Http\Controllers\ServicesController::class, 'edit'])->middleware('can:isAdmin');
    Route::get('/delete/{id}',[App\Http\Controllers\ServicesController::class, 'delete'])->middleware('can:isAdmin');
    Route::post('/edit',[App\Http\Controllers\ServicesController::class, 'update'])->middleware('can:isAdmin');
    Route::post('/add',[App\Http\Controllers\ServicesController::class, 'add'])->middleware('can:isAdmin');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index']);
    Route::get('/profile', [userProfile::class, 'show'])->middleware('auth')->name('profile');
    Route::post('/profile/update', [userProfile::class, 'update'])->name('updateProfile');
});
   

Auth::routes(['verify' => true]);



