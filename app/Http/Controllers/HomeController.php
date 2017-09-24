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

    public function standart5(Request $request)
    {

      $arrVal['5_1_1a'] = $request['5_1_1a'];
      $val511a = $request['5_1_1a'] * 0.57;

      $arrVal['5_1_1b'] = $request['5_1_1b'];
      $val511b = $request['5_1_1b'] * 0.57;

      $arrVal['5_1_2a'] = $request['5_1_2a'];
      $val512a = $request['5_1_2a'] * 0.57;

      $skor = $request['5_1_2bbbt'] / $request['5_1_2b']; // $skor == PTGS
      if ($skor >= 0.5){
        $val512b = 4;
      } elseif ($skor < 0.5){
        $val512b = 8 * $skor;
      }
      $arrVal['5_1_2b'] = $val512b;
      $val512b = $val512b * 0.57;

      $skor = $request['5_1_2c'];
      if ($skor >= 0.95){
        $val512c = 4;
      } elseif ($skor > 0.55){
        $val512c = 10 * ($skor - 0.55);
      } elseif ($skor < 0.55){
        $val512c = 0;
      }
      $arrVal['5_1_2c'] = $request['5_1_2c'];
      $val512c = $val512c * 0.57;

      /* 5.1.3 */
      
      $arrVal['5_1_4'] = $request['5_1_4'];
      $val514 = $request['5_1_4'] * 1.14;

      $arrVal['5_2a'] = $request['5_2a'];
      $val52a = $request['5_2a'];

      $arrVal['5_2b'] = $request['5_2b'];
      $val52b = $request['5_2b'] * 0.57;

      /* 5.3.1a dan 5.3.1b */

      $arrVal['5_3_2'] = $request['5_3_2'];
      $val532 = $request['5_3_2'] * 0.57;
      
      /* 5.4.1a */
      if ($skor <= 20){
        $val541a = 4;
      } elseif ($skor > 60 ){
        $val541a = (60 - $skor) / 10;
      } elseif ($skor >= 60 ) { //atau tidak ada perwakilan 
        $val541a = 0; 
      } 
      $arrVal['5_4_1a'] = $request['5_4_1a'];
      $val541a = $val541a * 0.57;

      $arrVal['5_4_1b'] = $request['5_4_1b'];
      $val541b = $request['5_4_1b'] * 0.57;

      $skor = $request['5_4_1c'];
      if ($skor >= 3){
        $val541c = 4;
      } elseif ($skor > 0){
        $val541c = $skor + 1;
      } elseif ($skor == 0){
        $val541c = 0;
      }
      $arrVal['5_4_1c'] = $request['5_4_1c'];
      $val541c = $val541c * 0.57;

      $arrVal['5_4_2'] = $request['5_4_2'];
      $val542 = $request['5_4_2'] * 0.57;

      /* 5.5.1a*/

      $skor = $request['5_5_1b'];
      if ($skor > 0 && $skor < 4){
        $val551b = 4;
      } elseif ($skor > 20){
        $val551b = 5 - ($skor / 4);
      } elseif ($skor == 0 || $skor >= 20){
        $val551b = 0;
      }
      $arrVal['5_5_1b'] = $request['5_5_1b'];
      $val551b = $val551b * 0.57;

      $skor = $request['5_5_1c'];
      if ($skor >= 8){
        $val551c = 4;
      } elseif ($skor < 8){
        $val551c = $skor / 12;
      }
      $arrVal['5_5_1c'] = $request['5_5_1c'];
      $val551c = $val551c * 0.57;

      $arrVal['5_5_1d'] = $request['5_5_1d'];
      $val551d = $request['5_5_1d'] * 1.14;

      $arrVal['5_5_2'] = $request['5_5_2'];
      $val552 = $request['5_5_2'] * 1.14;

      $arrVal['5_6'] = $request['5_6'];
      $val56 = $request['5_6'] * 0.57;

      $arrVal['5_7_1'] = $request['5_7_1'];
      $val571 = $request['5_7_1'] * 0.57;

      $arrVal['5_7_2'] = $request['5_7_2'];
      $val572 = $request['5_7_2'] * 1.14;

      $arrVal['5_7_3'] = $request['5_7_3'];
      $val573 = $request['5_7_3'] * 1.14;

      $arrVal['5_7_4'] = $request['5_7_4'];
      $val574 = $request['5_7_4'] * 0.57;

      $arrVal['5_7_5'] = $request['5_7_5'];
      $val575 = $request['5_7_5'] * 0.57;

      $hasil = $val511a + $val511b + $val512a + $val512b + $val512c + $val514 + $val52a + $val52b +  $val532 + $val541b + $val541c + $val542 + $val551b + $val551c + $val551d + $val552 + $val56 + $val571 + $val572 + $val573 + $val574 + $val575;
      return view('standart5')->with('hasil', $hasil)->with('value', $arrVal);
    }

    public function toStandart6()
    {
      return view('standart6')->with('hasil', '');
    }

    public function standart6(Request $req) {
      dd($req->all());
    }

    public function standart7(Request $request)
    {
      $skor = (($request['7_1_1a'] * 4) + ($request['7_1_1b'] * 2) + $request['7_1_1c']) /  $request['4_3_1']; // $skor = NK (Nilai Kasar)
      if ($skor >= 2){
        $val711 = 4;
      } elseif ($skor > 0)
      {
        $val771 = (1.5 * $skor) + 1;
      } elseif ($skor == 0){
        $val711 = 0;
      }
      $arrVal['7_1_1'] = $val711;
      $val711 = $val711 * 3.75;

      $skor = $request['7_1_2']; // $skor == PD
      if ($skor >= 25){
        $val712 = 4;
      } elseif ($skor > 0){
        $val712 = 1 + (12 * $skor);
      } elseif ($skor == 0){
        $val712 = 0;
      }
      $arrVal['7_1_2'] = $val712;
      $val712 = $val712 * 1.88;

      /* 7.1.3 == 7.1.1 */
      if ($skor >= 6){
        $val713 = 4;
      } elseif ($skor > 0){
        $val713 = 1 + ($skor / 2);
      } elseif ($skor == 0){
        $val713 = 0;
      }
      $arrVal['7_1_3'] = $val713;
      $val713 = $val713 *  3.75;

      $arrVal['7_1_4'] = $request['7_1_4'];
      $val714 = $request['7_1_4'] * 1.88;

      /* 7.2.1 == 7.1.3 == 7.1.1 */
      if ($skor >= 1){
        $val721 = 4;
      } elseif($skor > 0){
        $val721 = (3 * $skor) + 1;
      } elseif($skor == 0){
        $val721 = 0;
      }

      $arrVal['7_2_2'] = $request['7_2_2'];
      $val722 = $request['7_2_2'] * 1.88;

      $arrVal['7_3_1'] = $request['7_3_1'];
      $val722 = $request['7_3_1'] * 1.88;

      $arrVal['7_3_2'] = $request['7_3_2'];
      $val722 = $request['7_3_2'] * 1.88;

      $hasil = $val711 + $val712 + $val713 + $val714 + $val721 + $val722 + $val731 + $val732;
      return view('standart7')->with('hasil', $hasil)->with('value', $arrVal);
    }

    public function toStandart7()
    {
      return view('standart7')->with('hasil', '');
    }
}
