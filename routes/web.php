<?php

use Illuminate\Support\Facades\Route;
use App\livewire\Posts;

Route::get('posts', Posts::class) ->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
