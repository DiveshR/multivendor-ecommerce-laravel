<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        return view('admin.dashboard');
    }
}
