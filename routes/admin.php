<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AdminController,
};

Route::group(
    [
        'prefix' => 'admin',
        // 'middleware' => ['auth','role:admin'],
        'as' => 'admin.'
    ],
    function () {

        Route::view('login','admin.login');
        Route::middleware(
            [
                'auth', 'role:admin',
            ]
        )
            ->group(
                function () {
                    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
                    Route::get('admin/logout', [AdminController::class, 'destroy'])->name('logout');
                }
            );
    }
);
