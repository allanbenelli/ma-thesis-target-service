<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('image', function () {
    return view('image');
})->name('image');
Route::get('video', function () {
    return view('video');
})->name('video');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('login_with_visitor', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('my_login');
//Route::get('image',[App\Http\Controllers\HomeController::class, 'image'])->name('image');
//Route::get('video',[App\Http\Controllers\HomeController::class, 'video'])->name('video');


Route::middleware(['auth'])->group(function () {
    Route::get('login/image',[App\Http\Controllers\HomeController::class, 'login_image'])->name('login_image');
    Route::get('login/video',[App\Http\Controllers\HomeController::class, 'login_video'])->name('login_video');
});
