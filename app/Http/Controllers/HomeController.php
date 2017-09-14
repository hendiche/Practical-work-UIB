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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function toStandart1()
    {
        return view('standart1')->with('hasil', "");
    }

    public function standart1(Request $request)
    {
        $val11a = $request['1_1_a'] * 1.04;
        $val11b = $request['1_1_b'] * 1.04;
        $val12 = $request['1_2'] * 1.04;
        
        $total = $val11a + $val11b + $val12;
        return view('standart1')->with('hasil', $total);
        // return redirect('/standart2')->with('hasil', $total);
    }

    public function toStandart2()
    {
        return view('standart2')->with('hasil', "");
    }

    public function standart2(Request $request)
    {
        dd('asd');
    }
}
