<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('register' , [AuthController::class , 'register']);
Route::post("login", [AuthController::class,'login']);