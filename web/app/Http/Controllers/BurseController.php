<?php

namespace App\Http\Controllers;

use App\Models\BurseLot;
use Illuminate\Support\Facades\Auth;

class BurseController extends Controller
{
    public function index()
    {
        return view('burse.index', ['lots' => BurseLot::where('status', 'open')->get()]);
    }

    public function my()
    {
        return view('burse.index', ['lots' => BurseLot::where('author', Auth::user()->id)->get()]);
    }

    public function add()
    {
        $lot = new BurseLot();
        $lot->name = request('name');
        $lot->description = request('description');
        $lot->author = Auth::user()->id;
        $lot->save();
        return redirect()->route('burse');
    }
}
