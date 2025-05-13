<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageControler::class, 'home'])->name(('home'));
Route::get('/about', [App\Http\Controllers\PageControler::class, 'about'])->name(('about'));
Route::get('/post', [App\Http\Controllers\PageControler::class, 'post'])->name(('post'));
Route::get('/contact', [App\Http\Controllers\PageControler::class, 'contact'])->name(('contact'));