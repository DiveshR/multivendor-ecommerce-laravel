<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AdminController,
};

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth','role:admin'],
        'as' => 'admin.'
    ],
    function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    }
);
