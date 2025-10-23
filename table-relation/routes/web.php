<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasManyThroughController;

Route::get('/', function () {
    return view('welcome');
});

// HasManyThrough 
Route::get('/has-many-through', [HasManyThroughController::class, 'index']);
