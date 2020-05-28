<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empl;

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
        $users = Empl::all();

        $data = [
            'content' => 'atl.phone',
            'users' => $users
        ];

        return view('atl.home', $data);
    }

    public function admin()
    {
        $users = Empl::all();

        $data = [
            'content' => 'atl.admin',
            'users' => $users
        ];
        return view('atl.home', $data);
    }

    public function adminphone()
    {
        $users = Empl::all();

        $data = [
            'content' => 'atl.admin.phone',
            'users' => $users
        ];
        return view('atl.home', $data);
    }
}
