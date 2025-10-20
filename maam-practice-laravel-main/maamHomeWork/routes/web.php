<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasOneThroughController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/car', [HasOneThroughController::class, 'index']);