<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

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

Route::resource('/admin/books', BookController::class);
Route::resource('/admin/authors', AuthorController::class);


Route::get('/home', [MainController::class, 'index']);

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/books_list', 'books');
    Route::get('/admin/authors_list', 'authors');
});