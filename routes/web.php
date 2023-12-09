<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Signup;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/signup', [Signup::class, 'index']);
Route::post('/signup', [Signup::class, 'register']);

Route::get('/viewdata', [Signup::class, 'view'])->name('view.data');
Route::get('/delete/{id}', [Signup::class, 'delete']);

Route::get('/edit/{id}', [Signup::class, 'edit']);

// Route::get('/delete/{id}', [Signup::class, 'delete']);
