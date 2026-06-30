<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    // muestra que area da un profesor
    public function consultaArea(){
        $profe = Teacher::find(1);
        return $profe->area;
    }
    // muestra en que centro se encuentra el profesor
    public function consultaCentro(){
        $profe = Teacher::find(1);
        return $profe->training_center;
    }

    
    public function consultaCurso(){
        $profe = Teacher::find(1);
        return $profe->courses;
    }
}




