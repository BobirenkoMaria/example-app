<?php

use App\Http\Controllers\AutorizationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AutorizationController::class, 'authUser'])->name('login');
