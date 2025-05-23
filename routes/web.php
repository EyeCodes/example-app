<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController as HC;
use App\Http\Controllers\studentController as SC;
use App\Http\Controllers\loginController as AUTH;
use App\Http\Controllers\loginController;
use App\Http\Middleware\authUser;
use App\Http\Middleware\loginMiddleWare;
use App\Http\Middleware\logoutMiddleWare;

Route::get('/',[AUTH::class, 'index'])->name('register.form')->middleware(authUser::class);
Route::get('/register/user', [AUTH::class, 'register'])->name('user.register')->middleware(authUser::class);
Route::get('/login/form', [loginController::class, 'loginform'])->name('login.form')->middleware(authUser::class);
Route::post('/login',[loginController::class, 'login'])->name('user.login');
Route::get('/logout',[loginController::class, 'logout'])->name('user.logout')->middleware(logoutMiddleWare::class);


Route::get('/home',[SC::class, 'home'])->name('home')->middleware(authUser::class);

Route::post('/register', [SC::class, 'store'])->name('register.student');
ROute::get('/delete/{id}', [SC::class, 'delete'])->name('delete.students');
ROute::get('/update/{id}', [SC::class, 'updateView'])->name('update.students');
ROute::post('/update/{id}', [SC::class, 'update'])->name('update.stud');
// Route::post('/',[HC::class, 'store'])->name('store');
// Route::post('/student/{id}',[HC::class, 'get'])->name('store');
// Route::get('/', function () {
//     return view('welcome');
// });
