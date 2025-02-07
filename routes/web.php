<?php

use App\Http\Controllers\FrontEnd\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/hackthone',[UserController::class,'hackthone'])->name('hackthone');
Route::get('/css',[UserController::class,'css'])->name('css');
Route::get('/tailwind',[UserController::class,'tailwind'])->name('tailwind');
Route::get('/php',[UserController::class,'php'])->name('php');
Route::get('/html',[UserController::class,'html'])->name('html');
Route::get('/laravel',[UserController::class,'laravel'])->name('laravel');
