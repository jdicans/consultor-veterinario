<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

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

Route::get('home', [HomeController::class,'home']
)->name('rhome');
Route::get('about', [AboutController::class,'about']
)->name('rabout');
Route::get('contact', [ContactController::class,'contact']
)->name('rcontact');
Route::get('services', [ServicesController::class,'services']
)->name('rservices');
// Route::get('/index', [HomeController::class])->name('home');
