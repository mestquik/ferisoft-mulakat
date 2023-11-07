<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/', [BlogPostController::class, 'index'])->name('homepage');


Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');


Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/created', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/created', [PostController::class, 'store'])->name('post.store');
Route::get('/post/show/{id}', [PostController::class, 'show'])->name('post.show');
Route::post('/post/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');


