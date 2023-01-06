<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calon;
use App\Models\penerima;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $calon = calon::all();
        $penerima = penerima::all();

        $pLayak = penerima::where('status', '=', 'Layak')->count();
        $pTL = penerima::where('status', '=', 'Tidak Layak')->count();
        return view('dashboard', compact(
            'penerima',
            'calon',
            'pLayak',
            'pTL'
        ));
    }
}
