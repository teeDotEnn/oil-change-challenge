<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DateTime; 
use App\Models\Car;

class OilChangeController extends Controller
{
    public function check(Request $req){

        $currentOdo = $req->input('currentOdometer');
        $lastOilChange = $req->input('lastOilChangeDate');
        $lastOdo = $req->input('lastOdometer');
        
        $error = $this->validateInput($currentOdo, $lastOdo, $lastOilChange);

        if(!empty($error)){
            return view('home', ['error' =>$error]);
        }
        $car = new Car;
        $car->currentOdometer = $currentOdo;
        $car->lastOdometer = $lastOdo;
        $car->lastOilChange = $lastOilChange;
        $car->save();
        // store data in db, wrangle
        return redirect()->action([OilChangeController::class,'result'], ['id' => $car->id]);
    }

    public function result(int $id):View{
        $car = Car::find($id);
        $message = $this->checkIfOilChangeIsNeeded($car->currentOdometer,$car->lastOdometer,$car->lastOilChange);
        
        return view('result', ['currentOdometer'=>$car->currentOdometer, 
                               'lastOdometer'=>$car->lastOdometer, 
                               'lastOilChange'=>$car->lastOilChange, 
                               'message'=>$message]);
    }

    private function checkIfOilChangeIsNeeded($currentOdo, $lastOdo, $date){
        $distanceTraveled = $currentOdo - $lastOdo;
        $targetDate = new DateTime($date);
        $sixMonthsAgo = new DateTime('-6 months');

        $result = "No oil change required";

        if($distanceTraveled > 5000){
            $result = "You have come a great distance traveller. An oil change is required";
        }

        if($targetDate < $sixMonthsAgo){
            $result = "An age has past since our paths have crossed. An oil change is required";
        }

        return $result;
    }

    private function validateInput($currentOdo, $lastOdo, $date){
        $error = "";
        if(empty($currentOdo)){
            $error .= "Current odometer reading is required \n";
        }

        if(empty($currentOdo)){
            $error .= "Last odometer reading is required \n";
        }

        if(empty($date)){
            $error .= "Last oil change date is required \n";
        }

        // no point doing anything more if we don't even have all the data
        if(!empty($error)){
            return $error;
        }

        if(!is_numeric($currentOdo)){
            $error .= "Please only use digits in the Current Odometer Field \n";
        }

        if(!is_numeric($lastOdo)){
            $error .= "Please only use digits in the Last Odometer Field \n";
        }
        
        // stopping validation here, do not want to process any dirty data further
        // intval does some funky lifting, avoiding footgung
        if(!empty($error)){
            return $error;
        }

        $currentOdo = intval($currentOdo);
        $lastOdo = intval($lastOdo);

        if($date > new DateTime()){
            $error .= "Date selected is in the future \n" ;
        }

        if($lastOdo > $currentOdo){
            $error .= "Last odometer reading is greater than current odometer reading";
        }

        return $error;
    }
}
