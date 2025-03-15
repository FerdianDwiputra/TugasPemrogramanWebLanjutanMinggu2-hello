<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    // Bagian 1
    // Route::get('/hello', function(){
    //     return "hello world";
    // });

    Route::get('/hello', [HelloController::class, 'index']);

