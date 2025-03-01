<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::get('/admin/forgot-password', [AdminAuthController::class, 'passwordRequest'])->name('admin.password.request');


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index')
            ->middleware('user.type:admin');

