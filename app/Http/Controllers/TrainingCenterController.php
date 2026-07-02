<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
 public function create (){
    return view('traininCenter.create');
    }

    public function store(Request $request){
        $training = Trainingcenter::create($request->all());
    return $training;
    }
}