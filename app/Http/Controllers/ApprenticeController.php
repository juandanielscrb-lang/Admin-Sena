<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;
class ApprenticeController extends Controller
{
     public function create() {
        $courses = Course::all();

        $computers = Computer::whereDoesntHave('apprentice')->get();

        return view('apprentice.create', compact('courses', 'computers'));
    }

    public function store(Request $request) {
        $aprendiz = Apprentice::create($request->all());
        return $aprendiz;
    }
}
