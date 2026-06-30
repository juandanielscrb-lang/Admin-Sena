<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter; // Tu modelo usa guion bajo

class TrainingCenterController extends Controller
{

    public function store(Request $request){
        $training = new Trainingcenter(); 
        $training->name = $request->name;
        $training->save();
        
        return $training;
    }
}