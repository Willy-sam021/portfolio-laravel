<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[HomeController::class,'index']);

Route::post('/form',[FormController::class, 'store'])->name('myform');
