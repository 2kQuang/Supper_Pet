<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Petcontroller;
use App\Http\Controllers\Speciescontroller;
use App\Http\Controllers\PetdetailController;
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
Route::get('/', [HomeController::class, 'index'])->name('login');


Route::get('/home', [HomeController::class, 'home'])->name('user.home');


// admin
Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'admin'])->name('admin.home');
    Route::prefix('pet')->group(function () {
        Route::get('', [Petcontroller::class, 'index'])->name('admin.pet');
        Route::get('create', [Petcontroller::class, 'create'])->name('admin.pet.create');
        Route::post('store', [Petcontroller::class, 'store'])->name('admin.pet.store');
        Route::get('edit/{id}/{id_species}', [Petcontroller::class, 'edit'])->name('admin.pet.edit');
        Route::post('update/{id}',[Petcontroller::class,'update'])->name('admin.pet.update');
        Route::get('delete/{id}',[Petcontroller::class,'destroy'])->name('admin.pet.delete');
    });
    Route::prefix('pet_detail')->group(function () {
        Route::get('{id}', [PetdetailController::class, 'index'])->name('admin.detail');
        Route::post('update/{id}', [PetdetailController::class, 'update'])->name('admin.detail.update');
    });
    Route::prefix('species')->group(function () {
        Route::get('', [Speciescontroller::class, 'index'])->name('admin.species');
        Route::get('create', [Speciescontroller::class, 'create'])->name('admin.species.create');
        Route::post('store', [Speciescontroller::class, 'store'])->name('admin.species.store');
        Route::get('edit/{id}', [Speciescontroller::class, 'edit'])->name('admin.species.edit');
        Route::post('update/{id}',[Speciescontroller::class,'update'])->name('admin.species.update');
        Route::get('delete/{id}',[Speciescontroller::class,'destroy'])->name('admin.species.delete');
    });


});