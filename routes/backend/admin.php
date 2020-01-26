<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TypeController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Type Management
Route::group(['namespace' => 'Type'], function () {
    Route::get('type', [TypeController::class, 'index'])->name('type.index');
    Route::get('type/create', [TypeController::class, 'create'])->name('type.create');
    Route::post('type', [TypeController::class, 'store'])->name('type.store');

    Route::group(['prefix' => 'type/{type}'], function () {
        Route::get('edit', [TypeController::class, 'edit'])->name('type.edit');
        Route::patch('/', [TypeController::class, 'update'])->name('type.update');
        Route::delete('/', [TypeController::class, 'destroy'])->name('type.destroy');
    });
});
