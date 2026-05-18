<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DateTime; 

class OilChangeController extends Controller
{
    public function check(Request $req):View{

        $currentOdo = $req->input('currentOdometer');
        $lastOilChange = new DateTime($req->input('lastOilChangeDate'));
        $lastOdo = $req->input('lastOdometer');
        $now = new DateTime();
        $valid = true;
        $error = "";
        if(!ctype_digit($currentOdo)){
            $error = "Please only use digits in the Current Odometer Field";
            $valid = false;
        }

        if(!ctype_digit($lastOdo)){
            $error = "Please only use digits in the Last Odometer Field";
            $valid = false;
        }
        
        if($lastOilChange > $now){
            $error = "date selected is in the future";
            $valid = false;
        }

        error_log($currentOdo);
        error_log($lastOilChange->format('Y-m-d'));
        error_log($lastOdo);


        return view('check', ['valid' => $valid, 'error' => $error]);
    }

}
