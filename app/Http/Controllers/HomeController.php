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
        return view('standart1')->with('hasil', '')->with('value', '');
    }

    public function standart1(Request $request)
    {
        $arrVal = $request->except(['_token']);
        $val11a = $request['1_1_a'] * 1.04;
        $val11b = $request['1_1_b'] * 1.04;
        $val12 = $request['1_2'] * 1.04;

        $total = $val11a + $val11b + $val12;
        return view('standart1')->with('hasil', $total)->with('value', $arrVal);
        // return redirect('/standart2')->with('hasil', $total);
    }

    public function toStandart2()
    {
        return view('standart2')->with('hasil', "")->with('value', '');
    }

    public function standart2(Request $request)
    {
        $arrVal = $request->except(['_token']);
        $val21 = $request['2_1'] * 1.39;
        $val22 = $request['2_2'] * 0.69;
        $val23 = $request['2_3'] * 1.39;
        $val24 = $request['2_4'] * 1.39;
        $val25 = $request['2_5'] * 0.69;
        $val26 = $request['2_6'] * 0.69;

        $total = $val21 + $val22 + $val23 + $val24 + $val25 + $val26;
        return view('standart2')->with('hasil', $total)->with('value', $arrVal);
    }

    public function toStandart3()
    {
      return view('standart3')->with('hasil', '')->with('value', '');
    }

    public function standart3(Request $request)
    {
      $arrVal = [];
      $rasio = $request['3_1_1a3'] / $request['3_1_1a2'];
      if ($rasio >= 5) {
        $val311a = 4;
      } elseif ($rasio > 1) {
        $val311a = (3 + $rasio) / 2;
      } elseif ($rasio <= 1) {
        $val311a = 2 * $rasio;
      }
      $arrVal['3_1_1_a'] = $val311a;
      $val311a = $val311a * 1.95;

      $rasio = $request['3_1_1b5'] / $request['3_1_1b4'];
      if ($rasio > 0.95) {
        $val311b = 4;
      } elseif ($rasio > 0.25) {
        $val311b = ((40 * $rasio)-10) / 7;
      } elseif ($rasio <= 0.25) {
        $val311b = 0;
      }
      $arrVal['3_1_1_b'] = $val311b;
      $val311b = $val311b * 0.65;

      $rasio = $request['3_1_1c6'] / $request['3_1_1c5'];
      if ($rasio <= 0.25) {
        $val311c = 4;
      } elseif ($rasio < 1.25) {
        $val311c = 5 - (4 * $rasio);
      } elseif ($rasio >= 1.25) {
        $val311c = 0;
      }
      $arrVal['3_1_1_c'] = $val311c;
      $val311c = $val311c * 0.65;

      $req311d = $request['3_1_1d'];
      $ipk = 0;
      foreach ($req311d as $item) {
        $ipk += $item;
      }
      if ($ipk >= 3) {
        $val311d = 4;
      } elseif ($ipk > 2.75) {
        $val311d = 4 * $ipk - 8;
      } elseif ($ipk <= 2.75 && $ipk >= 2) {
        $val311d = (4 * $ipk - 2) / 3;
      }
      $arrVal['3_1_1_d'] = $val311d;
      $val311d = $val311d * 1.30;

      $arrVal['3_1_2'] = $request['3_1_2'];
      $arrVal['3_1_3'] = $request['3_1_3'];
      $val312 = $request['3_1_2'] * 0.65;
      $val313 = $request['3_1_3'] * 1.30;

      $rasio = $request['3_1_4af'] / $request['3_1_4ad']; // $rasio == Ktw
      if ($rasio >= 0.5) {
        $val314a = 4;
      } elseif ($rasio < 0.5 && $rasio > 0) {
        $val314a = 1 + (6 * $rasio);
      } elseif ($rasio == 0) {
        $val314a = 0;
      }
      $arrVal['3_1_4_a'] = $val314a;
      $val314a = $val314a * 1.30;

      $rasio = ($request['3_1_4ba'] - $request['3_1_4bb'] - $request['3_1_4bc']) / $request['3_1_4ba']; // $rasio = Mdo
      if ($rasio <= 0.06) {
        $val314b = 4;
      } elseif ($rasio < 0.45) {
        $val314b = (180 - (400 * $rasio)) / 39;
      } elseif  ($rasio >= 0.45) {
        $val314b = 0;
      }
      $arrVal['3_1_4_b'] = $val314b;
      $val314b = $val314b * 0.65;

      $arrVal['3_2_1'] = $request['3_2_1'];
      $val321 = $request['3_2_1'] * 0.65;

      $totalLayanan = 0;
      $layanan = $request['3_2_2'];
      foreach ($layanan as $item) {
        $totalLayanan += $item;
      }
      $val322 = $totalLayanan / 5;
      $arrVal['3_2_2'] = $val322;
      $val322 = $val322 * 0.65;

      $arrVal['3_3_1_a'] = $request['3_3_1a'];
      $arrVal['3_3_1_b'] = $request['3_3_1b'];
      $val331a = $request['3_3_1a'] * 0.65;
      $val331b = $request['3_3_1b'] * 0.65;

      $val331c = 0;
      $val331c += ($request['3_3_1ca'] / 100) * 4;
      $val331c += ($request['3_3_1cb'] / 100) * 3;
      $val331c += ($request['3_3_1cc'] / 100) * 2;
      $val331c += ($request['3_3_1cd'] / 100);
      $arrVal['3_3_1_c'] = $val331c / 7;
      $val331c = ($val331c / 7) * 1.30;

      $rasio = $request['3_3_2']; // $rasio == Rmt
      if ($rasio <= 3) {
        $val332 = 4;
      } elseif ($rasio < 18) {
        $val332 = (72 - 4 * $rasio) / 15;
      } elseif ($rasio >= 18) {
        $val332 = 0;
      }
      $arrVal['3_3_2'] = $val332;
      $val332 = $val332 * 1.30;

      $rasio = $request['3_3_3']; // $rasio == Pes
      if ($rasio >= 80) {
        $val333 = 4;
      } elseif ($rasio < 80) {
        $val333 = 5 * ($rasio / 100);
      }
      $arrVal['3_3_3'] = $val333;
      $val333 = $val333 * 0.65;

      $arrVal['3_4_1'] = $request['3_4_1'];
      $arrVal['3_4_2'] = $request['3_4_2'];
      $val341 = $request['3_4_1'] * 0.65;
      $val342 = $request['3_4_2'] * 0.65;

      $hasil = $val311a + $val311b + $val311c + $val311d + $val312 + $val313 + $val314a + $val314b + $val321 + $val322 + $val331a + $val331b + $val331c + $val332 + $val333 + $val341 + $val342;
      return view('standart3')->with('hasil', $hasil)->with('value', $arrVal);
    }

    public function toStandart4()
    {
      return view('standart4')->with('hasil', '');
    }

    public function standart4()
    {
      // liat soal point 4.5.2 ada yang di reuse , data 4.3.1 reuse ke 4.5.2
    }

    public function toStandart5()
    {
      return view('standart5')->with('hasil', '');
    }

    public function toStandart6()
    {
      return view('standart6')->with('hasil', '');
    }
}
