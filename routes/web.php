<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoruController;
use App\Http\Controllers\CommentController;
use Illuminate\Routing\RouteGroup;

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

Route::get('/',[Postcontroller::class,'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/onepost', function () {
    return view('onepost');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::middleware(['auth'])->group(function () {

    Route::resource('posts', Postcontroller::class);

    Route::resource('category', CategoruController::class);

    Route::resource('comments', CommentController::class);
});

// Route::prefix('admin')->group(function(){
//     Route::resource('posts', Postcontroller::class)->middleware('auth');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
