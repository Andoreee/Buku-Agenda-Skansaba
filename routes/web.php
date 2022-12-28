<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomingMailController;
use App\Http\Controllers\OutgoingMailController;
use App\Http\Controllers\UserController;
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
    return redirect('/admin/home');
});
Route::get('/login', function () {
    return view('login');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('/surat-masuk', IncomingMailController::class);
    Route::resource('/surat-keluar', OutgoingMailController::class);
    Route::resource('/kategori', CategoryController::class);
    Route::resource('/user', UserController::class);
});