<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
