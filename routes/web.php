<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/logout', \App\Livewire\Auth\Logout::class)->name('logout');
    Route::get('/', \App\Livewire\Home\index::class)->name('home');
    Route::get('/post', \App\Livewire\Post\Index::class)->name('post');
});
