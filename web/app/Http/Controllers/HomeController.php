<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->account_type == 'student') {
            return view('student', ['student' => Auth::user(), 'projects' => Auth::user()->projects()]);
        } else {
            return view('company');
        }
    }

    public function update()
    {
        $user = Auth::user();
        $user->information = request('information');
        $user->verification_status = 'pending';
        $user->save();
        return redirect()->route('home');
    }

    public function public_students()
    {
        return view('public_students', ['students' => User::where('account_type', 'student')->where('verification_status', 'ok')->get()]);
    }
}
