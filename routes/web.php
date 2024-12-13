<?php

use App\Http\Controllers\FunController;
use App\Http\Middleware\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserType;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', Redirect::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/buttons', [HomeController::class, 'buttons'])->name('buttons');
    Route::get('/fun',[FunController::class, 'fun'])->name('fun')
});

Route::get('personal', [FunController::class, 'personal'])->name('personal');



Route::get('/restricted-page', function () {
    return view('restricted-page');
})->middleware(CheckUserType::class . ':2');