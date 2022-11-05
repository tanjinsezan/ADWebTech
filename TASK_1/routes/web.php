<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PagesController;

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

Route::get('/Home', [PagesController::class, 'home'])->name('home'); 
Route::get('/Product', [PagesController::class, 'product'])->name('product'); 
Route::get('/Team', [PagesController::class, 'team'])->name('team'); 
Route::get('/Contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/About', [PagesController::class, 'about'])->name('about');