<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('about', 'about')->name('about');

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::view('contact', 'admin.contact.index')->name('contact.index');
});

require __DIR__.'/auth.php';
