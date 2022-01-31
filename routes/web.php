<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Models\post;

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
Route::get('/posts',[Postcontroller::class,'index'])->name('posts.index')->middleware('auth');
Route::get('/posts/create',[Postcontroller::class,'create'])->name('posts.create')->middleware('auth');
Route::post('/posts',[Postcontroller::class,'store'])->name('posts.store')->middleware('auth');
Route::get('/posts/{post}/edit',[Postcontroller::class,'edit'])->name('posts.edit')->middleware('auth');
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update')->middleware('auth');
Route::get('/posts/{post}',[Postcontroller::class,'show'])->name('posts.show')->middleware('auth');
Route::delete('/posts/{post}',[Postcontroller::class,'destroy'])->name('posts.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
