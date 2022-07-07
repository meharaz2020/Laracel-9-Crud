<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\postcontroller::class, 'index'])->name('home');
Auth::routes();

Route::get('/addpost', [App\Http\Controllers\postcontroller::class, 'addpost'])->name('addpost');
Auth::routes();

Route::post('/storepost', [App\Http\Controllers\postcontroller::class, 'storepost'])->name('storepost');


Auth::routes();

Route::get('/editpost/{id}', [App\Http\Controllers\postcontroller::class, 'editpost'])->name('editpost');

Auth::routes();

Route::post('/updatepost', [App\Http\Controllers\postcontroller::class, 'updatepost'])->name('updatepost');
Auth::routes();

Route::get('/deletepost/{id}', [App\Http\Controllers\postcontroller::class, 'deletepost'])->name('deletepost');