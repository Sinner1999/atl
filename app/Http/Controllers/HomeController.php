<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empl;
use App\Dept;
use App\Posit;

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

    public function admindept()
    {
        $dept = Dept::all();

        $data = [
            'content' => 'atl.admin.dept',
            'dept' => $dept
        ];
        return view('atl.home', $data);
    }

    public function adminposit()
    {
        $posit = Posit::all();

        $data = [
            'content' => 'atl.admin.posit',
            'posit' => $posit
        ];
        return view('atl.home', $data);
    }

    public function doc(){

    
	
	$data = [
	    'content' => 'atl.doc.root',
	];
    return view('atl.home', $data);
    
    }

}
