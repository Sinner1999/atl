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

        $headers = array(
            'cache-control: max-age=0',
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36',
            'sec-fetch-user: ?1',
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
            'x-compress: null',
            'sec-fetch-site: none',
            'sec-fetch-mode: navigate',
            'accept-encoding: deflate, br',
            'accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
        );


        $ch = curl_init(); //'https://parts.toyota-motor.ru/rest/jofl.doHelo.aws');
        curl_setopt($ch, CURLOPT_URL, 'https://parts.toyota-motor.ru/rest/jofl.doHelo.aws');
        // curl_setopt($ch, CURLOPT_COOKIEFILE, __DIR__ . '/cookie.txt');
        // curl_setopt($ch, CURLOPT_COOKIEJAR, __DIR__ . '/cookie.txt');
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
        // curl_setopt($ch, CURLOPT_PROXY, "172.16.15.80:3128");
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $dt = curl_exec($ch);
        dd($dt);
        // $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // var_dump($dt);

        curl_close($ch);

        $data = [
            'content' => 'atl.ozch.home',
            'au' => $dt,
            // 'users' => $users
        ];
        return view('atl.home', $data);
    }
}
