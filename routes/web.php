<?php

use App\Http\Controllers\UIController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UIController::class, 'welcome'])->name('welcome');
Route::get('/sidebar', [UIController::class, 'sidebarComp'])->name('sidebar');
Route::get('/cc', [UIController::class, 'commonComponents'])->name('common-components');

Route::get('/dashboard', [UIController::class, 'dashboardController'])->name('dashboard');
Route::get('/user-mgmt', [UIController::class, 'userMgmtController'])->name('user-mgmt');
Route::get('/gateway-mgmt', [UIController::class, 'gatewayMgmtController'])->name('gateway-mgmt');
Route::get('/transaction', [UIController::class, 'transactionController'])->name('transaction');
Route::get('/subscription', [UIController::class, 'subscriptionController'])->name('subscription');
Route::get('/settlements', [UIController::class, 'settlementsController'])->name('settlements');
Route::get('/profile', [UIController::class, 'profileController'])->name('profile');