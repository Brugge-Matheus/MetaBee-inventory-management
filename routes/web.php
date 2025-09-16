<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login.do', [AuthController::class, 'attempt'])->name('admin.login.do');

    Route::middleware('auth')->group(function () {
        Route::get('/', ['', ''])->name('admin.dashboard');
    });
});
