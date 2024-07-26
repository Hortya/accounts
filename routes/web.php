<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransactionController::class, 'index'])->name('home');
Route::get('/create', [TransactionController::class, 'create'])->name('create');
Route::get('/destroy-{id}', [TransactionController::class, 'destroy'])
->where('id', '[0-9]+')
->name('destroy');
Route::get('/edit-{id}', [TransactionController::class, 'edit'])
->where('id', '[0-9]+')
->name('edit');
Route::post('/store', [TransactionController::class, 'store'])->name('store');
