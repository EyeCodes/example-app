<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController as HC;
use App\Http\Controllers\studentController as SC;

Route::get('/',[SC::class, 'index']);
Route::post('/register', [SC::class, 'store'])->name('register.student');
// Route::post('/',[HC::class, 'store'])->name('store');
// Route::post('/student/{id}',[HC::class, 'get'])->name('store');
// Route::get('/', function () {
//     return view('welcome');
// });
