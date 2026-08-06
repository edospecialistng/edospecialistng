<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Controllers\HomeController;

Route::get('/', Home::class)->name('home');


// Route::get('/', [HomeController::class, 'index'])->name('home');