<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function studentProjects()
    {
        return view('student_projects', ['student' => Auth::user(), 'projects' => Auth::user()->projects()]);
    }
}
