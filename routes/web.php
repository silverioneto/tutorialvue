<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->middleware('verified')->name('home');

require __DIR__ .'/auth.php';
