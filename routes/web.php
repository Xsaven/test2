<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/orders', [OrderController::class, 'index']);
Route::post('/import-data', [OrderController::class, 'importData']);
