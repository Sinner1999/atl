<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'content' => 'atl.phone',
        ];

        return view('atl.home', $data);
    }

    public function admin()
    {
        $data = [
            'content' => 'atl.admin',
        ];
        return view('atl.home', $data);
    }
}
