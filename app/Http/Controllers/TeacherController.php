<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\TrainingCenter;

class TeacherController extends Controller
{

     public function create()
    {
        $areas = Area::all();
        $centers = TrainingCenter::all();

        return view('teacher.create', compact('areas', 'centers'));
    }


     public function store(Request $request) {
        $teacher = Teacher::create($request->all());
        return $teacher;
    }
}




