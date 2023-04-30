<?php

use App\Http\Controllers\AutorizationController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EmailController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\ToLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return to_route('login');
});

Route::get('/login', [AutorizationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AutorizationController::class, 'authUser'])->name('login');

Route::get('/register', [AutorizationController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AutorizationController::class, 'registerUser'])->name('register');

Route::get('/verifity-email', [EmailController::class, 'verifityEmail'])->name('verifity');

Route::get('/password-recovery', [AutorizationController::class, 'passwordRecoveryForm'])->name('password_recovery');
Route::post('/password-recovery', [AutorizationController::class, 'passwordRecovery'])->name('password_recovery');

Route::get('/logout', [AutorizationController::class, 'logOut'])->name('logout');


Route::middleware(AuthCheck::class)->get('/messager', [ChatController::class, 'getChat'])->name('messager');

Route::middleware(AuthCheck::class)->post('/add-private-chat', [ChatController::class, 'addChat'])->name('add_private_chat');
Route::middleware(AuthCheck::class)->post('/delete-private-chat', [ChatController::class, 'addChat'])->name('delete_private_chat');
