<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/Contact',[ContactController::class,'create']);
Route::post('/Contact',[ContactController::class,'store']);
