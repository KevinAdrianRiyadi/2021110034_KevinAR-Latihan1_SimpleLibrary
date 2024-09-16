<?php

use App\Http\Controllers\book_controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bookview',[book_controller::class,'viewbook'])->name('bookview');
Route::post('/insertbook',[book_controller::class,'insertbook'])->name('insertbook');
Route::get('/viewinsertbook',[book_controller::class,'viewinsertbook'])->name('viewinsertbook');
