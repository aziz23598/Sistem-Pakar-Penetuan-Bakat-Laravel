<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Soal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function info(){
        $user = Auth::user();
        return view('tests.info', [
            'title' => 'info'
        ]);
    }

    public function test(){   
        $user = Auth::user();
        $soal = Soal::all();
        return view('tests.test', [
            'title' => 'Test'
        ], compact('soal'));
    }

    public function proses(Request $request){

        $j1 = $request->input('j1');
        $j2 = $request->input('j2');
        $j3 = $request->input('j3');
        $j4 = $request->input('j4');
        $j5 = $request->input('j5');
        $j6 = $request->input('j6');
        $j7 = $request->input('j7');
        $j8 = $request->input('j8');
        $j9 = $request->input('j9');
        $j10 = $request->input('j10');
        $j11 = $request->input('j11');
        $j12 = $request->input('j12');
        $j13 = $request->input('j13');
        $j14 = $request->input('j14');
        $j15 = $request->input('j15');
        $j16 = $request->input('j16');
        $j17 = $request->input('j17');
        $j18 = $request->input('j18');
        $j19 = $request->input('j19');
        $j20 = $request->input('j20');
        $j21 = $request->input('j21');
        $j22 = $request->input('j22');
        $j23 = $request->input('j23');
        $j24 = $request->input('j24');
        $j25 = $request->input('j25');
        $j26 = $request->input('j26');
        $j27 = $request->input('j27');
        $j28 = $request->input('j28');
        $j29 = $request->input('j29');
        $j30 = $request->input('j30');
        $j31 = $request->input('j31');
        $j32 = $request->input('j32');
        $j33 = $request->input('j33');
        $j34 = $request->input('j34');
        $j35 = $request->input('j35');
        $j36 = $request->input('j36');
        $j37 = $request->input('j37');
        $j38 = $request->input('j38');
        $j39 = $request->input('j39');
        $j40 = $request->input('j40');
        $j41 = $request->input('j41');
        $j42 = $request->input('j42');
        $j43 = $request->input('j43');
        $j44 = $request->input('j44');
        $j45 = $request->input('j45');
        
        $R1 = 0; $R2 = 0; $R3 = 0; $R4 = 0; $R5 = 0; 
        $R6 = 0; $R7 = 0; $R8 = 0; $R9 = 0; $R10 = 0; 
        $R11 = 0; $R12 = 0; $R13 = 0; $R14 = 0; $R15 = 0; 
        $R16 = 0; $R17 = 0; $R18 = 0; $R19 = 0; $R20 = 0; 
        $R21 = 0; $R22 = 0; $R23 = 0; $R24 = 0; $R25 = 0; 
        $R26 = 0; $R27 = 0; $R28 = 0; $R29 = 0; $R30 = 0; 
        $R31 = 0; $R32 = 0; $R33 = 0; $R34 = 0; $R35 = 0; 
        $R36 = 0; $R37 = 0; $R38 = 0; $R39 = 0; $R40 = 0; 
        $R41 = 0; $R42 = 0; $R43 = 0; $R44 = 0; $R45 = 0;

        $B1 = 0; $B2 = 0; $B3 = 0; $B4 = 0; $B5 = 0; 
        $B6 = 0; $B7 = 0; $B8 = 0; $B9 = 0;
        $hasil = 0; $bakat = "null";

        $R1 = $j1 * 0.6;
        $R2 = $j2 * 0.8;
        $R3 = $j3 * 0.8;
        $R4 = $j4 * 0.6;
        $R5 = $j5 * 0.4;
        $R6 = $j6 * 0.8;
        $R7 = $j7 * 0.8;
        $R8 = $j8 * 0.6;
        $R9 = $j9 * 0.8;
        $R10 = $j10 * 0.4;
        $R11 = $j11 * 0.8;
        $R12 = $j12 * 0.8;
        $R13 = $j13 * 0.6;
        $R14 = $j14 * 0.8;
        $R15 = $j15 * 0.8;
        $R16 = $j16 * 0.8;
        $R17 = $j17 * 0.8;
        $R18 = $j18 * 0.8;
        $R19 = $j19 * 0.8;
        $R20 = $j20 * 0.8;
        $R21 = $j21 * 0.8;
        $R22 = $j22 * 0.8;
        $R23 = $j23 * 0.8;
        $R24 = $j24 * 0.8;
        $R25 = $j25 * 0.6;
        $R26 = $j26 * 0.8;
        $R27 = $j27 * 0.8;
        $R28 = $j28 * 0.6;
        $R29 = $j29 * 0.4;
        $R30 = $j30 * 0.4;
        $R31 = $j31 * 0.8;
        $R32 = $j32 * 0.4;
        $R33 = $j33 * 0.4;
        $R34 = $j34 * 0.4;
        $R35 = $j35 * 0.4;
        $R36 = $j36 * 0.6;
        $R37 = $j37 * 0.6;
        $R38 = $j38 * 0.6;
        $R39 = $j39 * 0.6;
        $R40 = $j40 * 0.6;
        $R41 = $j41 * 0.8;
        $R42 = $j42 * 0.4;
        $R43 = $j43 * 0.4;
        $R44 = $j44 * 0.4;
        $R45 = $j45 * 0.4;

        $B1 = $R1 + $R2 * (1 - $R1);
        $B1 = $B1 + $R3 * (1 - $B1);
        $B1 = $B1 + $R4 * (1 - $B1);
        $B1 = $B1 + $R5 * (1 - $B1);
        $B1 = $B1 * 100;

        $B2 = $R6 + $R7 * (1 - $R6);
        $B2 = $B2 + $R8 * (1 - $B2);
        $B2 = $B2 + $R9 * (1 - $B2);
        $B2 = $B2 + $R10 * (1 - $B2);
        $B2 = $B2 * 100;

        $B3 = $R11 + $R12 * (1 - $R11);
        $B3 = $B3 + $R13 * (1 - $B3);
        $B3 = $B3 + $R14 * (1 - $B3);
        $B3 = $B3 + $R15 * (1 - $B3);
        $B3 = $B3 * 100;

        $B4 = $R16 + $R17 * (1 - $R16);
        $B4 = $B4 + $R18 * (1 - $B4);
        $B4 = $B4 + $R19 * (1 - $B4);
        $B4 = $B4 + $R20 * (1 - $B4);
        $B4 = $B4 * 100;

        $B5 = $R21 + $R22 * (1 - $R21);
        $B5 = $B5 + $R23 * (1 - $B5);
        $B5 = $B5 + $R24 * (1 - $B5);
        $B5 = $B5 + $R25 * (1 - $B5);
        $B5 = $B5 * 100;

        $B6 = $R26 + $R27 * (1 - $R26);
        $B6 = $B6 + $R28 * (1 - $B6);
        $B6 = $B6 + $R29 * (1 - $B6);
        $B6 = $B6 + $R30 * (1 - $B6);
        $B6 = $B6 * 100;

        $B7 = $R31 + $R32 * (1 - $R31);
        $B7 = $B7 + $R33 * (1 - $B7);
        $B7 = $B7 + $R34 * (1 - $B7);
        $B7 = $B7 + $R35 * (1 - $B7);
        $B7 = $B7 * 100;

        $B8 = $R36 + $R37 * (1 - $R36);
        $B8 = $B8 + $R38 * (1 - $B8);
        $B8 = $B8 + $R39 * (1 - $B8);
        $B8 = $B8 + $R40 * (1 - $B8);
        $B8 = $B8 * 100;

        $B9 = $R41 + $R42 * (1 - $R41);
        $B9 = $B9 + $R43 * (1 - $B9);
        $B9 = $B9 + $R44 * (1 - $B9);
        $B9 = $B9 + $R45 * (1 - $B9);
        $B9 = $B9 * 100;

        if($B1 >= $B2 && $B1 >= $B3 && $B1 >= $B4 && $B1 >= $B5 && $B1 >= $B6 && $B1 >= $B7 && $B1 >= $B8 && $B1 >= $B9){
            $hasil=$B1;
            $bakat="Linguistik";
        }else if($B2 >= $B1 && $B2 >= $B3 && $B2 >= $B4 && $B2 >= $B5 && $B2 >= $B6 && $B2 >= $B7 && $B2 >= $B8 && $B2 >= $B9){
            $hasil=$B2;
            $bakat="Logika-Matematika";
        }else if($B3 >= $B1 && $B3 >= $B2 && $B3 >= $B4 && $B3 >= $B5 && $B3 >= $B6 && $B3 >= $B7 && $B3 >= $B8 && $B3 >= $B9){
            $hasil=$B3;
            $bakat="Visual-Spasial";
        }else if($B4 >= $B1 && $B4 >= $B2 && $B4 >= $B3 && $B4 >= $B5 && $B4 >= $B6 && $B4 >= $B7 && $B4 >= $B8 && $B4 >= $B9){
            $hasil=$B4;
            $bakat="Kinestetik";
        }else if($B5 >= $B1 && $B5 >= $B2 && $B5 >= $B3 && $B5 >= $B4 && $B5 >= $B6 && $B5 >= $B7 && $B5 >= $B8 && $B5 >= $B9){
            $hasil=$B5;
            $bakat="Musikal";
        }else if($B6 >= $B1 && $B6 >= $B2 && $B6 >= $B3 && $B6 >= $B4 && $B6 >= $B5 && $B6 >= $B7 && $B6 >= $B8 && $B6 >= $B9){
            $hasil=$B6;
            $bakat="Interpersonal";
        }else if($B7 >= $B1 && $B7 >= $B2 && $B7 >= $B3 && $B7 >= $B4 && $B7 >= $B5 && $B7 >= $B6 && $B7 >= $B8 && $B7 >= $B9){
            $hasil=$B7;
            $bakat="Intrapersonal";
        }else if($B8 >= $B1 && $B8 >= $B2 && $B8 >= $B3 && $B8 >= $B4 && $B8 >= $B5 && $B8 >= $B6 && $B8 >= $B7 && $B8 >= $B9){
            $hasil=$B8;
            $bakat="Naturalis";
        }else if($B9 >= $B1 && $B9 >= $B2 && $B9 >= $B3 && $B9 >= $B4 && $B9 >= $B5 && $B9 >= $B6 && $B9 >= $B7 && $B9 >= $B8){
            $hasil=$B9;
            $bakat="Eksistensial";
        }else{
            $hasil=0;
            $bakat="Error";
        }

    $data = $request->all();

        Validator::make($data, [
            'hasil' => 'required' . $hasil,
            'bakat' => 'required' . $bakat
        ]);

        $test = Auth::user();
        $test->hasil = $hasil;
        $test->bakat = $bakat;
        $test->save();

        $bakat = DB::table('users')->get();

        return view('tests.hasil', [
            'title' => 'hasil',
            'test' => $test,
            'bakat' => $bakat
        ]);
    }
    
}