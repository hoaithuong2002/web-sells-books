<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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
Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('admin.login');
Route::get('/register',[AuthController::class,'pageRegister'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('admin.register');
Route::prefix('author')->group(function () {
    Route::get('/', [AuthorController::class, 'index'])->name('author.index');
    Route::get('/create', [AuthorController::class, 'create'])->name('author.create');
    Route::post('/store', [AuthorController::class, 'store'])->name('author.store');
    Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('author.edit');
    Route::post('/update/{id}', [AuthorController::class, 'update'])->name('author.update');
    Route::get('/delete/{id}', [AuthorController::class, 'delete'])->name('author.delete');
    Route::post('/search', [AuthorController::class, 'search'])->name('author.search');
    Route::get('/show/{id}',[AuthorController::class, 'show'])->name('author.show');
});
Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::post('/search', [CategoryController::class, 'search'])->name('category.search');
    Route::get('/show/{id}  ', [CategoryController::class, 'show'])->name('category.show');
});
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

