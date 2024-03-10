<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function GetCalculatorForm(){

        $result=0;
        $alert=0;
        $firstNumber=0;
        $secondNumber=0;
        $operateur=0;    
        return view('CalculatorForm',[
            'result' => $result,
            'alert'=>$alert,
            'firstNumber'=>$firstNumber,
            'secondNumber'=>$secondNumber,
            'operateur'=>$operateur
        ]);
    }


    public function DoCalculOperation(Request $request){

        $result = 0;
        $alert=0;
        $op=0;
        $request->validate([
            'firstNumber' => ['required'],
            'secondNumber' => ['required'],
            'operateur' => ['required']     
        ]);

        $firstNumber=$request->firstNumber;
        $secondNumber=$request->secondNumber;
        $operateur=$request->operateur;

        if($operateur==="+"){
            $result = floatval($firstNumber)+floatval($secondNumber);
            $op=0;
        }
        else if($operateur==="-"){
            $result = floatval($firstNumber)-floatval($secondNumber);
            $op=1;
        }
        else if($operateur==="*"){
            $result = floatval($firstNumber)*floatval($secondNumber);
            $op=2;
        }
        else if($operateur==="/" && $secondNumber!="0"){
            $result = floatval($firstNumber)/floatval($secondNumber);
            $op=3;
        }
        else{
            $alert = 1;
            $result = "Il y a un probleme dans les nombres saisis !!!";
        }

        return view('CalculatorForm',[
            'result' => $result,
            'alert'=>$alert,
            'firstNumber'=>$firstNumber,
            'secondNumber'=>$secondNumber,
            'operateur'=>$op
        ]);
    }
}
