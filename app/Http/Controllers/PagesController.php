<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function atividade4 (Request $req){
        $gabarito = array(
            '1' => 'A',
            '2' => 'B',
            '3' => 'C',
            '4' => 'D',
            '5' => 'E',
            '6' => 'E',
            '7' => 'D',
            '8' => 'C',
            '9' => 'B',
            '10' => 'A'
        );

        $userData = array(
            '1' => array($req->q1),
            '2' => array($req->q2),
            '3' => array($req->q3),
            '4' => array($req->q4),
            '5' => array($req->q5),
            '6' => array($req->q6),
            '7' => array($req->q7),
            '8' => array($req->q7),
            '9' => array($req->q9),
            '10' => array($req->q10)
        );
        
        $count = 0;
        for ($i = 1; $i <=10 ; $i++){
            if($gabarito["$i"] == $userData["$i"][0]){
                $count++;
                array_push($userData["$i"],"Acertou");
            }else{
                array_push($userData["$i"],"Errou");
            }
        }
        return view('exercicio4')->with(compact('gabarito','userData','count'));
    }
}
