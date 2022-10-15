<?php


use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PorftolioController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio',[PorftolioController::class, 'index'])->name('portfolio');
Route::post('contact', [MessagesController::class, 'store']);

//use App\Http\Controllers\PorftolioController;
//
//Route::apiResource('projects',PorftolioController::class)->only(['index']);

//use App\Http\Controllers\PorftolioController;
//
//Route::resource('proyecto',PorftolioController::class);

