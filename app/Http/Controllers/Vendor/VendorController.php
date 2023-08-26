<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function dashboard(): View
    {
        return view('vendor.dashboard');
    }
}
