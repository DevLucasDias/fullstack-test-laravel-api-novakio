<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerApi extends Controller
{
    public function getDate() {
    
        $date = ['date'=> date("Y-m-d"), 'time' => date("H:i:s")];

        return  response()->json($date);
      }

      public function returnFrase(Request $request) {
        if(empty($request->message)){
        return  response()->json('Digite uma mensagem!');
        }
        return  response()->json($request->message);
      }
   
    
}
