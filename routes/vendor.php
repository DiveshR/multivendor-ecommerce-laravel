<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\{
    VendorController,

};

Route::group(
    [
        'prefix' => 'vendor',
        'middleware' => ['auth','role:vendor'],
        'as' => 'vendor.'
    ],
    function () {
        Route::get('dashboard', [VendorController::class,'dashboard'])->name('dashboard');
    }
);
