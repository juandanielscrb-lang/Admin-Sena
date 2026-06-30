<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Trainingcenter;
use App\Models\Teacher;
use App\Models\Area;

class ConsultasController extends Controller
{
    public function consultaProfesores(){
        $centro = Trainingcenter::find(4);
        return $centro->teachers;
    }
    
    public function consultaCursos(){
        $centro = Trainingcenter::find(1);
        return $centro->courses;
    }

    public function create (){
        return view('training_center.create');
    }

    public function consultaCurso(){
        $aprendiz = Apprentice::find(1);
        return $aprendiz->course;
    }

    public function consultaComputador(){
        $aprendice = Apprentice::find(3);
        return $aprendice->computer;
    }

     public function consultaProfe(){
        $area = Area::find(2);
        return $area->teachers;
    }

    public function consultasCurso(){
        $area = Area::find(1);
        return $area->courses;
    }

    public function consultaAprendiz(){
       
        $compu = Computer::query()->find(3);
        return $compu->aprendices;
    }
}
