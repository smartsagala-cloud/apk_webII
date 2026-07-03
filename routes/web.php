<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/profil', [HomeController::class, 'profil']);

Route::get('/pendidikan', [HomeController::class, 'pendidikan']);

Route::get('/keahlian', [HomeController::class, 'keahlian']);