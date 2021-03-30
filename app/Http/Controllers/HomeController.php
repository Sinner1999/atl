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

    public function ozch()
    {

        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://parts.toyota-motor.ru/rest/jofl.Helo.aws");

        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //enable headers
        // curl_setopt($ch, CURLOPT_HEADER, 1);

        curl_setopt($ch, CURLOPT_COOKIESESSION, 1);

        curl_setopt($ch, CURLOPT_POST, 0);

        // curl_setopt($ch, CURLOPT_PROXY, "172.16.15.80:3128");

        curl_setopt($ch, CURLOPT_COOKIEFILE, __DIR__ . 'cookie.txt');
        curl_setopt($ch, CURLOPT_COOKIEJAR, __DIR__ . 'cookie.txt');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_HEADER, false);

        // curl_setopt($ch, CURLOPT_PROXYPORT, 3128);

        

        //get only headers
        // curl_setopt($ch, CURLOPT_NOBODY, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        $err = curl_error($ch);

        // close curl resource to free up system resources
        curl_close($ch);

        // $headers = [];
        // $dat = explode("\n",$output);
        // $headers['status'] = $dat[0];
        // array_shift($dat);

        // foreach($dat as $part){
            // $middle=explode(":",$part);
            // $headers[trim($middle[0])] = trim($middle[1]);
        // }

        // echo "<pre>";
        // print_r($headers);
        // echo "</pre>";

        $data = [
            'content' => 'atl.ozch.home',
            'au' => $err,
            'st' => $output,
            // 'users' => $users
        ];
        return view('atl.home', $data);
    }

    public function ozchauth()
    {

        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://parts.toyota-motor.ru/rest/jofl.Helo.aws");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //enable headers
        curl_setopt($ch, CURLOPT_HEADER, 1);

        //get only headers
        curl_setopt($ch, CURLOPT_NOBODY, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);

        $headers = [];
        $dat = explode("\n",$output);
        $headers['status'] = $dat[0];
        // array_shift($dat);

        foreach($dat as $part){
            $middle=explode(":",$part);
            // $headers[trim($middle[0])] = trim($middle[1]);
        }

        // echo "<pre>";
        // print_r($headers);
        // echo "</pre>";

        $data = [
            'content' => 'atl.ozch.home',
            // 'au' => $dt,
            // 'st' => $dat,
            // 'users' => $users
        ];
        return view('atl.home', $data);
    }

}
