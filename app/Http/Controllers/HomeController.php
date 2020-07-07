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

    public function ozch()
    {
        // $users = Empl::all();
        // $au = file_get_contents('https://parts.toyota-motor.ru/rest/jofl.doHelo.aws');
        // $au = json_decode($au, true);

        if( $curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, 'https://parts.toyota-motor.ru/rest/jofl.doHelo.aws');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            $au = curl_exec($curl);
            // echo $out;
            curl_close($curl);
          }

        vardump($au);
        // $pdata = http_build_query([

        // ])


        $data = [
            'content' => 'atl.ozch.home',
            'au' => $au,
            // 'users' => $users
        ];
        return view('atl.home', $data);
    }
}
