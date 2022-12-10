<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * redirect admin after login
     *
     * @return View
     */
    public function dashboard()
    {
        return view('adminDashboard');
    }
}
