<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;

Route::get('/', [GreetingsController::class, 'welcome']);

Route::get('/halo/{name}/{npm}', [GreetingsController::class, 'greet']);