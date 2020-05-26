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
            'menu' => 'atl.layouts.menu',
        ];
        return view('atl.home', $data);
    }

    public function adminphone()
    {
        $data = [
            'content' => 'atl.admin.phone',
            'menu' => 'atl.admin.menu',
        ];
        return view('atl.home', $data);
    }
}
