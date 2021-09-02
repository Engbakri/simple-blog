<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoruController;

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
Route::get('/about', function () {
    return view('about');
});

Route::get('/onepost', function () {
    return view('onepost');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::resource('posts',Postcontroller::class);

Route::resource('category', CategoruController::class);
