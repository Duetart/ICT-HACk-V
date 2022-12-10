<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function studentProjects()
    {
        return view('student_projects', ['student' => Auth::user(), 'projects' => Auth::user()->projects()]);
    }

    public function public_projects()
    {
        return view('public_projects', ['projects' => Project::all()]);
    }
}
