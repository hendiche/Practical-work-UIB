<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramStudy;
use App\Models\Accreditation;
use Auth;
use App\Models\StandartFirst;
use App\Models\StandartSecond;

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

    public function menu() {
      return view('menu')->with('prodi', ProgramStudy::get());
    }

    public function start(Request $request)
    {
      $akreditasi = new Accreditation();
      $akreditasi->accreditation_date = $request->date;
      $akreditasi->prodi_id = $request->prodi;
      $akreditasi->user_id = Auth::id();
      $akreditasi->save();
      return view('standart1')->with('hasil', '')->with('value', '')
                              ->with('acc_id', $akreditasi->id);
    }

    public function toStandart1()
    {
      return view('standart1')->with('hasil', '')->with('value', '')
                              ->with('acc_id', '');
    }

    public function standart1(Request $request)
    {
        $arrVal = $request->except(['_token', 'accreditation_id']);
        $val11a = $request['1_1_a'] * 1.04;
        $val11b = $request['1_1_b'] * 1.04;
        $val12 = $request['1_2'] * 1.04;

        $total = $val11a + $val11b + $val12;

        $insert = new StandartFirst();
        $insert->val11a = $request['1_1_a'];
        $insert->val11b = $request['1_1_b'];
        $insert->val12 = $request['1_2'];
        $insert->accreditation_id = $request->accreditation_id;
        $insert->score = $total;
        $insert->save();

        return view('standart1')->with('hasil', $total)->with('value', $arrVal)
                                ->with('acc_id', '');
        // return redirect('/standart2')->with('hasil', $total);
    }

    public function toStandart2()
    {
        return view('standart2')->with('hasil', "")->with('value', '');
    }

    public function standart2(Request $request)
    {
        $arrVal = $request->except(['_token', 'accreditation_id']);
        $val21 = $request['2_1'] * 1.39;
        $val22 = $request['2_2'] * 0.69;
        $val23 = $request['2_3'] * 1.39;
        $val24 = $request['2_4'] * 1.39;
        $val25 = $request['2_5'] * 0.69;
        $val26 = $request['2_6'] * 0.69;

        $total = $val21 + $val22 + $val23 + $val24 + $val25 + $val26;

        $insert = new StandartSecond();
        $insert->val21 = $request['2_1'];
        $insert->val22 = $request['2_2'];
        $insert->val23 = $request['2_3'];
        $insert->val24 = $request['2_4'];
        $insert->val25 = $request['2_5'];
        $insert->val26 = $request['2_6'];
        $insert->accreditation_id = $request->accreditation_id;
        $insert->score = $total;
        $insert->save();

        return view('standart2')->with('hasil', $total)->with('value', $arrVal);
    }

    public function toStandart3()
    {
      return view('standart3')->with('hasil', '')->with('value', '');
    }

    public function standart3(Request $request)
    {
      $arrVal = [];
      $rasio = $request['3_1_1a2'] ? $request['3_1_1a3'] / $request['3_1_1a2'] : 0;
      if ($rasio >= 5) {
        $val311a = 4;
      } elseif ($rasio > 1) {
        $val311a = (3 + $rasio) / 2;
      } elseif ($rasio <= 1) {
        $val311a = 2 * $rasio;
      }
      $arrVal['3_1_1_a'] = $val311a;
      $val311a = $val311a * 1.95;

      $rasio = $request['3_1_1b4'] ? $request['3_1_1b5'] / $request['3_1_1b4'] : 0;
      if ($rasio > 0.95) {
        $val311b = 4;
      } elseif ($rasio > 0.25) {
        $val311b = ((40 * $rasio)-10) / 7;
      } elseif ($rasio <= 0.25) {
        $val311b = 0;
      }
      $arrVal['3_1_1_b'] = $val311b;
      $val311b = $val311b * 0.65;

      $rasio = $request['3_1_1c5'] ? $request['3_1_1c6'] / $request['3_1_1c5'] : 0;
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
      } else {
        $val311d = 0;
      }
      $arrVal['3_1_1_d'] = $val311d;
      $val311d = $val311d * 1.30;

      $arrVal['3_1_2'] = $request['3_1_2'];
      $arrVal['3_1_3'] = $request['3_1_3'];
      $val312 = $request['3_1_2'] * 0.65;
      $val313 = $request['3_1_3'] * 1.30;

      $rasio = $request['3_1_4ad'] ? $request['3_1_4af'] / $request['3_1_4ad'] : 0; // $rasio == Ktw
      if ($rasio >= 0.5) {
        $val314a = 4;
      } elseif ($rasio < 0.5 && $rasio > 0) {
        $val314a = 1 + (6 * $rasio);
      } elseif ($rasio == 0) {
        $val314a = 0;
      }
      $arrVal['3_1_4_a'] = $val314a;
      $val314a = $val314a * 1.30;

      $rasio = $request['3_1_4ba'] ? ($request['3_1_4ba'] - $request['3_1_4bb'] - $request['3_1_4bc']) / $request['3_1_4ba'] : 0; // $rasio = Mdo
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
      return view('standart4')->with('hasil', '')->with('value', '');
    }

    public function standart4(Request $request)
    {
      $arrVal = [];
      $arrVal['4_1'] = $request['4_1'];
      $val41 = $request['4_1'] * 0.72;

      $arrVal['4_2_1'] = $request['4_2_1'];
      $val421 = $request['4_2_1'] * 0.72;

      $arrVal['4_2_2'] = $request['4_2_2'];
      $val422 = $request['4_2_2'] * 1.43;

      $totalDosen = $request['4_3_1'];
      $kd = $request['4_3_1a'] / $totalDosen;
      $kd1 = $kd; // used for point 4.5.2
      if ($kd >= 0.9) {
        $val431a = 4;
      } elseif ($kd > 0.3) {
        $val431a = (20 * $kd / 3) - 2;
      } else if ($kd <= 0.3) {
        $val431a = 0;
      }
      $arrVal['4_3_1a'] = $val431a;
      $val431a = $val431a * 1.43;

      $kd = $request['4_3_1b'] / $totalDosen;
      $kd2 = $kd; // used for point 4.5.2
      if ($kd >= 0.4) {
        $val431b = 4;
      } elseif ($kd < 0.4) {
        $val431b = 2 + 5 * $kd;
      }
      $arrVal['4_3_1b'] = $val431b;
      $val431b = $val431b * 2.15;

      $kd = $request['4_3_1c'] / $totalDosen;
      if ($kd >= 0.4) {
        $val431c = 4;
      } elseif ($kd < 0.4) {
        $val431c = 1 + 7.5 * $kd;
      }
      $arrVal['4_3_1c'] = $val431c;
      $val431c = $val431c * 1.43;

      $kd = $request['4_3_1d'] / $totalDosen;
      if ($kd >= 0.4) {
        $val431d = 4;
      } elseif ($kd < 0.4) {
        $val431d = 1 + 1.5 * $kd;
      }
      $arrVal['4_3_1d'] = $val431d;
      $val431d = $val431d * 0.72;

      $opsi = $request['4_3_2'];
      $req432 = $request['4_3_2mhs'];
      $kd = 0;
      foreach ($req432 as $item) {
        $kd += $item;
      }
      $kd = $kd / $totalDosen; // $kd == Rmd
      if ($opsi == 'social') {
        if ($kd >= 27 && $kd <= 33) {
          $val432 = 4;
        } else if ($kd < 70 && $kd > 33) {
          $val432 = 4 * (70 - $kd) / 37;
        } else if ($kd > 5 && $kd < 27) {
          $val432 = 2 * ($kd - 5) / 11;
        } else if ($kd >= 70 || $kd <= 5) {
          $val432 = 0;
        }
      } elseif ($opsi == 'eksakta') {
        if ($kd >= 17 && $kd <= 23) {
          $val432 = 4;
        } elseif ($kd < 60 && $kd > 23) {
          $val432 = 4 * (60 - $kd) / 37;
        } elseif ($kd < 17 && $kd >= 0) {
          $val432 = 4 * $kd / 17;
        } elseif ($kd >= 60 || $kd <= 0) {
          $val432 = 0;
        }
      }
      $arrVal['4_3_2'] = $val432;
      $arrVal['opsi'] = $opsi;
      $val432 = $val432 * 0.72;

      $kd = $request['4_3_3']; // $kd == Rfte
      if ($kd >= 11 && $kd <= 13) {
        $val433 = 4;
      } elseif ($kd > 5 && $kd < 11) {
        $val433 = ($kd - 3) / 2;
      } elseif ($kd > 13 && $kd < 21) {
        $val433 = (71 - (3 * $kd)) / 8;
      } elseif ($kd <= 5 || $kd >= 21) {
        $val433 = 1;
      }
      $arrVal['4_3_3'] = $val433;
      $val433 = $val433 * 0.72;

      $arrVal['4_3_4'] = $request['4_3_4'];
      $val434 = $request['4_3_4'] * 0.72;

      $kd = $request['4_3_5lak'] / $request['4_3_5ren']; // $kd == PKot
      if ($kd >= 0.95) {
        $val435 = 4;
      } elseif ($kd > 0.6) {
        $val435 = ((80 * $kd) - 48) / 7;
      } elseif ($kd <= 0.6) {
        $val435 = 0;
      }
      $arrVal['4_3_5'] = $val435;
      $val435 = $val435 * 0.72;

      $kd = $request['4_4_1tdk'] / $request['4_4_1tot']; // $kd == Pdtt
      if ($kd <= 0.1) {
        $val441 = 4;
      } elseif ($kd < 0.5) {
        $val441 = 10 * (0.5 - $kd);
      } elseif ($kd >= 0.5) {
        $val441 = 0;
      }
      $arrVal['4_4_1'] = $val441;
      $val441 = $val441 * 0.72;

      $arrVal['4_4_2a'] = $request['4_4_2a'];
      $val442a = $request['4_4_2a']* 0.72;

      $kd = $request['4_4_2blak'] / $request['4_4_2bren']; // $kd == PKdtt
      if ($kd >= 0.95) {
        $val442b = 4;
      } elseif ($kd > 0.6) {
        $val442b = (80 * ($kd - 48)) / 7;
      } elseif ($kd <= 0.6) {
        $val442b = 0;
      }
      $arrVal['4_4_2b'] = $val442b;
      $val442b = $val442b * 0.72;

      $kd = $request['4_5_1']; // $kd == Jtap
      if ($kd >= 12) {
        $val451 = 4;
      } elseif ($kd < 12) {
        $val451 = 1 + ($kd / 4);
      }
      $arrVal['4_5_1'] = $val451;
      $val451 = $val451 * 0.72;
      
      if ($kd1 > 0.9 || $kd2 > 0.4) {
        $val452 = 4;
      } else {
        $kd = ($request['4_5_2s2'] * 0.75) + ($request['4_5_2s3'] * 1.25); // $kd == SD
        if ($kd >= 4) {
          $val452 = 4;
        } elseif ($kd >= 0) {
          $val452 = $kd;
        }
      }
      $arrVal['4_5_2'] = $val452;
      $val452 = $val452 * 0.72;

      $kd = ($request['4_5_3a'] + ($request['4_5_3b'] / 4)) / $totalDosen; // $kd == SP
      if ($kd >= 3) {
        $val453 = 4;
      } elseif ($kd > 0) {
        $val453 = 1 + $kd;
      } elseif ($kd == 0) {
        $val453 = 0;
      }
      $arrVal['4_5_3'] = $val453;
      $val453 = $val453 * 1.43;

      $arrVal['4_5_4'] = $request['4_5_4'];
      $val454 = $request['4_5_4'] * 1.43;

      $arrVal['4_5_5'] = $request['4_5_5'];
      $val455 = $request['4_5_5'] * 1.08;

      $kd = ((4 * $request['4_6_1ax1']) + (3 * $request['4_6_ax2']) + (2 * $request['4_6_ax3'])) / 4; //$kd == A
      if ($kd >= 4) {
        $val461a = 4;
      } elseif ($kd < 4) {
        $val461a = $kd;
      }
      $arrVal['4_6_1a'] = $val461a;
      $val461a = $val461a * 0.72;

      $arrVal['4_6_1b'] = $request['4_6_1b'];
      $val461b = $request['4_6_1b'] * 0.72;

      $kd = ((4 * $request['4_6_1cx1']) + (3 * $request['4_6_1cx2']) + (2 * $request['4_6_1cx3']) + $request['4_6_1cx4']) / 4; //$kd == D
      if ($kd >= 4) {
        $val461c = 4;
      } elseif ($kd < 4) {
        $val461c = $kd;
      }
      $arrVal['4_6_1c'] = $val461c;
      $val461c = $val461c * 0.72;

      $arrVal['4_6_2'] = $request['4_6_2'];
      $val462 = $request['4_6_2'] * 0.72;

      $arrVal['dosen'] = $totalDosen;
      $hasil = $val41 + $val421 + $val422 + $val431a + $val431b + $val431c + $val431d + $val432 + $val433 + $val434 + $val435 + $val441 + $val442a + $val442b + $val451 + $val452 + $val453 + $val454 + $val455 + $val461a + $val461b + $val461c + $val462;
      return view('standart4')->with('hasil', $hasil)->with('value', $arrVal);
    }

    public function toStandart5()
    {
      return view('standart5')->with('hasil', '')->with('value', '');
    }

    public function standart5(Request $request)
    {
      $arrVal = [];
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

      $skor = $request['5_1_2c'] / $request['5_1_2b']; // $skor == Pdmk
      if ($skor >= 0.95){
        $val512c = 4;
      } elseif ($skor > 0.55){
        $val512c = 10 * ($skor - 0.55);
      } elseif ($skor <= 0.55){
        $val512c = 0;
      }
      $arrVal['5_1_2c'] = $val512c;
      $val512c = $val512c * 0.57;

      /* 5.1.3 */
      $Bmkp = $request['5_1_3'];
      $Rmkp = $request['5_1_3'] / $request['5_1_3get'];

      if ($Bmkp >= 9 && $Rmkp >=2) {
        $val513 = 4;
      } elseif ($Bmkp >= 9 && $Rmkp >=1) {
        $val513 = 2 * $Rmkp;
      } elseif ($Bmkp < 9 && $Rmkp <= 1) {
        $val513 = 2;
      } else {
        $val513 = 2;
      }
      $arrVal['5_1_3'] = $val513;
      $val513 = $val513 * 0.57;
      
      $arrVal['5_1_4'] = $request['5_1_4'];
      $val514 = $request['5_1_4'] * 1.14;

      $arrVal['5_2a'] = $request['5_2a'];
      $val52a = $request['5_2a'] * 0.57;

      $arrVal['5_2b'] = $request['5_2b'];
      $val52b = $request['5_2b'] * 0.57;

      $req531a = $request['5_3_1a'];
      $val531a = 0;
      foreach ($req531a as $item) {
        $val531a += $item;
      }
      $val531a = $val531a / 3;
      $arrVal['5_3_1a'] = $val531a;
      $val531a = $val531a * 1.14;

      $arrVal['5_3_1b'] = $request['5_3_1b'];
      $val531b = $request['5_3_1b'] * 0.57;

      $arrVal['5_3_2'] = $request['5_3_2'];
      $val532 = $request['5_3_2'] * 0.57;
      
      $skor = $request['5_4_1a']; //$skor == Rmpa
      if ($skor <= 20){
        $val541a = 4;
      } elseif ($skor < 60 ){
        $val541a = (60 - $skor) / 10;
      } elseif ($skor >= 60 ) { //atau tidak ada perwakilan 
        $val541a = 0; 
      } 
      $arrVal['5_4_1a'] = $val541a;
      $val541a = $val541a * 0.57;

      $arrVal['5_4_1b'] = $request['5_4_1b'];
      $val541b = $request['5_4_1b'] * 0.57;

      $skor = $request['5_4_1c']; //$skor == PP
      if ($skor >= 3) {
        $val541c = 4;
      } elseif ($skor > 0) {
        $val541c = $skor + 1;
      } elseif ($skor == 0) {
        $val541c = 0;
      }
      $arrVal['5_4_1c'] = $request['5_4_1c'];
      $val541c = $val541c * 0.57;

      $arrVal['5_4_2'] = $request['5_4_2'];
      $val542 = $request['5_4_2'] * 0.57;

      $arrVal['5_5_1a'] = $request['5_5_1a'];
      $val551a = $request['5_5_1a'] * 0.57;

      $skor = $request['5_5_1b'];
      if ($skor > 0 && $skor <= 4) {
        $val551b = 4;
      } elseif ($skor < 20) {
        $val551b = 5 - ($skor / 4);
      } elseif ($skor == 0 || $skor >= 20) {
        $val551b = 0;
      }
      $arrVal['5_5_1b'] = $val551b;
      $val551b = $val551b * 0.57;

      $skor = $request['5_5_1c'];
      if ($skor >= 8) {
        $val551c = 4;
      } elseif ($skor < 8) {
        $val551c = $skor / 12;
      }
      $arrVal['5_5_1c'] = $val551c;
      $val551c = $val551c * 0.57;

      $arrVal['5_5_1d'] = $request['5_5_1d'];
      $val551d = $request['5_5_1d'] * 1.14;

      $skor = $request['5_5_2']; //$skor == Rpta
      $semester = $request['5_5_2sem'];
      if ($semester == 1) {
        if ($skor <= 6) {
          $val552 = 4;
        } elseif ($skor < 14) {
          $val552 = (14 - $skor) / 2;
        } elseif ($skor >= 14) {
          $val552 = 0;
        }
      } elseif ($semester == 2) {
        if ($skor <= 12) {
          $val552 = 4;
        } elseif ($skor < 28) {
          $val552 = (28 - $skor) / 4;
        } elseif ($skor >= 28) {
          $val552 = 0;
        }
      }
      $arrVal['5_5_2'] = $val552;
      $arrVal['opsi'] = $semester;
      $val552 = $val552 * 1.14;

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

      $hasil = $val511a + $val511b + $val512a + $val512b + $val512c + $val513 + $val514 + $val52a + $val52b + $val531a + $val531b + $val532 + $val541a + $val541b + $val541c + $val542 + $val551a + $val551b + $val551c + $val551d + $val552 + $val56 + $val571 + $val572 + $val573 + $val574 + $val575;
      return view('standart5')->with('hasil', $hasil)->with('value', $arrVal);
    }

    public function toStandart6()
    {
      return view('standart6')->with('hasil', '')->with('value', '');
    }

    public function standart6(Request $request)
    {
      $arrVal = [];
      $arrVal['6_1'] = $request['6_1'];
      $val61 = $request['6_1'] * 0.67;

      $skor = $request['6_2_1']; //$skor == Dom
      if ($skor >= 18) {
        $val621 = 4;
      } elseif ($skor < 18) {
        $val621 = $skor / 4.5;
      }
      $arrVal['6_2_1'] = $val621;
      $val621 = $val621 * 1.34;

      $skor = $request['6_2_2']; // $skor == Rpd
      if ($skor >= 3) {
        $val622 = 4;
      } elseif ($skor < 3) {
        $val622 = (4 * $skor) / 3;
      }
      $arrVal['6_2_2'] = $val622;
      $val622 = $val622 * 2.02;

      $skor = $request['6_2_3']; // $skor == Rpkm
      if ($skor >= 1.5) {
        $val623 = 4;
      } elseif ($skor < 1.5) {
        $val623 = (8 * $skor) / 3;
      }
      $arrVal['6_2_3'] = $val623;
      $val623 = $val623 * 0.67;

      $luasA = ($request['6_3_1a']) + (2 * $request['6_3_1b']) + (3 * $request['6_3_1c']) + (4 * $request['6_3_1d']);
      $luasB = $request['6_3_1a'] + $request['6_3_1b'] + $request['6_3_1c'] + $request['6_3_1d'];
      $val631 = $luasA / $luasB;
      $arrVal['6_3_1'] = $val631;
      $val631 = $val631 * 2.02;

      $arrVal['6_3_2'] = $request['6_3_2'];
      $val632 = $request['6_3_2'] * 2.02;

      $arrVal['6_3_3'] = $request['6_3_3'];
      $val633 = $request['6_3_3'] * 0.67;

      $skor = $request['6_4_1a'] / 100;
      $val641a = $skor;
      if ($skor >= 4) {
        $val641a = 4;
      }
      $arrVal['6_4_1a'] = $val641a;
      $val641a = $val641a * 0.17;

      $skor = $request['6_4_1b'] / 50;
      $val641b = $skor;
      if ($skor >= 4) {
        $val641b = 4;
      }
      $arrVal['6_4_1b'] = $val641b;
      $val641b = $val641b * 0.17;

      $arrVal['6_4_1c'] = $request['6_4_1c'];
      $val641c = $request['6_4_1c'] * 0.67;

      $arrVal['6_4_1d'] = $request['6_4_1d'];
      $val641d = $request['6_4_1d'] * 1.01;

      $skor = $request['6_4_1e'];
      if ($skor >= 9) {
        $val641e = 4;
      } else {
        $val641e = (4 * $skor) / 9;
      }
      $arrVal['6_4_1e'] = $val641e;
      $val641e = $val641e * 0.17;

      $arrVal['6_4_2'] = $request['6_4_2'];
      $val642 = $request['6_4_2'] * 0.67;

      $arrVal['6_4_3'] = $request['6_4_3'];
      $val643 = $request['6_4_3'] * 1.34;

      $arrVal['6_5_1'] = $request['6_5_1'];
      $val651 = $request['6_5_1'] * 1.34;

      $val652 = 0;
      $req652 = $request['6_5_2'];
      foreach ($req652 as $parentItem) {
        foreach ($parentItem as $item) {
          $val652 += $item;
        }
      }
      $val652 = $val652 / 11;
      $arrVal['6_5_2'] = $val652;
      $val652 = $val652 * 0.67;

      $hasil = $val61 + $val621 + $val622 + $val623 + $val631 + $val632 + $val633 + $val641a + $val641b + $val641c + $val641d + $val641e + $val642 + $val643 + $val651 + $val652;
      return view('standart6')->with('hasil', $hasil)->with('value', $arrVal);
    }

    public function toStandart7()
    {
      return view('standart7')->with('hasil', '')->with('value', '');
    }

    public function standart7(Request $request)
    {
      $arrVal = [];
      $skor = (($request['7_1_1a'] * 4) + ($request['7_1_1b'] * 2) + $request['7_1_1c']) /  $request['dosen']; // $skor = NK (Nilai Kasar)
      if ($skor >= 2){
        $val711 = 4;
      } elseif ($skor > 0) {
        $val711 = (1.5 * $skor) + 1;
      } elseif ($skor == 0) {
        $val711 = 0;
      }
      $arrVal['7_1_1'] = $val711;
      $val711 = $val711 * 3.75;

      if ($request['7_1_2ikt'] && $request['7_1_2tot']) {
        $skor = $request['7_1_2ikt'] / $request['7_1_2tot']; // $skor == PD
        if ($skor >= 0.25) {
          $val712 = 4;
        } elseif ($skor > 0) {
          $val712 = 1 + (12 * $skor);
        } elseif ($skor == 0) {
          $val712 = 0;
        }
      } else {
        $val712 = 0;
      }
      $arrVal['7_1_2'] = $val712;
      $val712 = $val712 * 1.88;

      $skor = (($request['7_1_3a'] * 4) + ($request['7_1_3b'] * 2) + $request['7_1_3c']) / $request['dosen']; // $skor == NK
      if ($skor >= 6) {
        $val713 = 4;
      } elseif ($skor > 0) {
        $val713 = 1 + ($skor / 2);
      } elseif ($skor == 0) {
        $val713 = 0;
      }
      $arrVal['7_1_3'] = $val713;
      $val713 = $val713 *  3.75;

      $arrVal['7_1_4'] = $request['7_1_4'];
      $val714 = $request['7_1_4'] * 1.88;

      $skor = (($request['7_2_1a'] * 4) + ($request['7_2_1b'] * 2) + $request['7_2_1c']) / $request['dosen']; // $skor == NK
      if ($skor >= 1) {
        $val721 = 4;
      } elseif($skor > 0) {
        $val721 = (3 * $skor) + 1;
      } elseif($skor == 0) {
        $val721 = 0;
      }
      $arrVal['7_2_1'] = $val721;
      $val721 = $val721 * 1.88;

      $arrVal['7_2_2'] = $request['7_2_2'];
      $val722 = $request['7_2_2'] * 1.88;

      $arrVal['7_3_1'] = $request['7_3_1'];
      $val731 = $request['7_3_1'] * 1.88;

      $arrVal['7_3_2'] = $request['7_3_2'];
      $val732 = $request['7_3_2'] * 1.88;

      $hasil = $val711 + $val712 + $val713 + $val714 + $val721 + $val722 + $val731 + $val732;
      return view('standart7')->with('hasil', $hasil)->with('value', $arrVal);
    }
}
