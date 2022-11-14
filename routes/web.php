<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Petcontroller;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('login');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('user.home');



// admin
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home');
    Route::get('/pet', [App\Http\Controllers\Petcontroller::class, 'index'])->name('admin.pet');
    

});