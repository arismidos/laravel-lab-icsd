<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Κλήση της μεθόδου index του UserController
Route::get('/users', [UserController::class, 'index']);

// Κλήση της μεθόδου store του UserController
Route::post('/users', [UserController::class, 'store']);
