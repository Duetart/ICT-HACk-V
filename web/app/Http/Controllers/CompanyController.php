<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * redirect admin after login
     *
     * @return View
     */
    public function dashboard()
    {
        return view('companyDashboard');
    }
}
