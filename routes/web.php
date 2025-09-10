<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
return view('test');
});

Route::post('/register', [UserController::class, 'register']);

