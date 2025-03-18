<?php

use App\Http\Controllers\BotmanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/index', "index");
Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle'] );
