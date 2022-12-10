<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class StudentAuthController extends Controller
{
    /**
     * Display admin login view
     *
     * @return RedirectResponse
     */
    public function showLoginForm()
    {
        if (Auth::guard('student')->check()) {
            return redirect()->route('student.dashboard');
        } else {
            return view('auth.studentLogin');
        }
    }

    /**
     * Handle an incoming admin authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->guard('student')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = auth()->user();

            return redirect()->intended(url('/student/dashboard'));
        } else {
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('student')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
